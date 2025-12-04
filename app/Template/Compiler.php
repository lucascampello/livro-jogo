<?php
namespace APP\Template;

use APP\Template\Directives\DirectiveInterface;

class Compiler
{
    private array $directives = [];

    public function addDirective(DirectiveInterface $directive): void
    {
        $this->directives[] = $directive;
    }

    public function compile(string $tpl): string
    {
        foreach ($this->directives as $directive) {
            $tpl = $directive->compile($tpl);
        }
        return $tpl;
    }
}
