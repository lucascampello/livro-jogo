<?php
namespace APP\Template\Directives;

class VariableDirective implements DirectiveInterface
{
    public function compile(string $tpl): string
    {
        return preg_replace(
            '/{{\s*(.+?)\s*}}/',
            '<?= htmlspecialchars($1) ?>',
            $tpl
        );
    }
}
