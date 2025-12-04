<?php
namespace APP\Template\Directives;

class ForeachDirective implements DirectiveInterface
{
    public function compile(string $tpl): string
    {
        $tpl = preg_replace('/@foreach\s*\((.+?)\)/', '<?php foreach ($1): ?>', $tpl);
        $tpl = preg_replace('/@endforeach/', '<?php endforeach; ?>', $tpl);

        return $tpl;
    }
}
