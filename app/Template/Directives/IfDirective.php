<?php
namespace APP\Template\Directives;

class IfDirective implements DirectiveInterface
{
    public function compile(string $tpl): string
    {
        $tpl = preg_replace('/@if\s*\((.+?)\)/', '<?php if ($1): ?>', $tpl);
        $tpl = preg_replace('/@elseif\s*\((.+?)\)/', '<?php elseif ($1): ?>', $tpl);
        $tpl = preg_replace('/@else/', '<?php else: ?>', $tpl);
        $tpl = preg_replace('/@endif/', '<?php endif; ?>', $tpl);

        return $tpl;
    }
}
