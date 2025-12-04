<?php
namespace APP\Template\Loaders;

class FileLoader
{
    public function load(string $path): string
    {
        if (!file_exists($path)) {
            throw new \Exception("Arquivo não encontrado: $path");
        }
        return file_get_contents($path);
    }

    public function baseDir(string $path): string
    {
        return dirname($path);
    }
}
