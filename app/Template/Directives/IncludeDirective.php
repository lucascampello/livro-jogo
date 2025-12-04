<?php
namespace APP\Template\Directives;

use APP\Template\Loaders\FileLoader;

class IncludeDirective implements DirectiveInterface
{
    private FileLoader $loader;
    private string $basePath;
    private $recursiveCompiler;

    public function __construct(FileLoader $loader, string $basePath)
    {
        $this->loader    = $loader;
        $this->basePath  = $basePath;
    }

    public function setCompiler(callable $compiler)
    {
        $this->recursiveCompiler = $compiler;
    }

    public function compile(string $tpl): string
    {
        return preg_replace_callback(
            '/@include\s*\(\s*[\'"](.+?)[\'"]\s*\)/',
            function ($match) {
                $file = $this->basePath . '/' . $match[1];
                $contents = $this->loader->load($file);
                return call_user_func($this->recursiveCompiler, $contents);
            },
            $tpl
        );
    }
}
