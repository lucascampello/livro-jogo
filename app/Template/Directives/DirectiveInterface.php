<?php
namespace APP\Template\Directives;

interface DirectiveInterface
{
    public function compile(string $tpl): string;
}