<?php
namespace APP\Template;

use APP\Template\Loaders\FileLoader;
use APP\Template\Directives\{
    VariableDirective,
    IfDirective,
    ForeachDirective,
    IncludeDirective
};

class View
{
    private string $template;
    private string $basePath;
    private Compiler $compiler;
    private FileLoader $loader;

    public function __construct(string $path)
    {
        $this->loader   = new FileLoader();
        $this->template = $this->loader->load($path);
        $this->basePath = $this->loader->baseDir($path);

        $this->compiler = new Compiler();

        // Diretivas
        $include = new IncludeDirective($this->loader, $this->basePath);
        $include->setCompiler(fn($c) => $this->compiler->compile($c));

        $this->compiler->addDirective($include);
        $this->compiler->addDirective(new VariableDirective());
        $this->compiler->addDirective(new IfDirective());
        $this->compiler->addDirective(new ForeachDirective());
    }

    public function render(array $data = []): string
    {
        $compiled = $this->compiler->compile($this->template);

        extract($data, EXTR_SKIP);

        ob_start();
        include $this->storeTemp($compiled);
        return ob_get_clean();
    }

    private function storeTemp(string $code): string
    {
        $tmp = tempnam(sys_get_temp_dir(), 'tpl_') . '.php';
        file_put_contents($tmp, $code);
        return $tmp;
    }
}
