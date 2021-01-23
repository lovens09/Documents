<?php
class Autoloader
{
	//du fait que les namespace refletent la disposition des dossier on peut les autoinclur en remplacant les \ par des / et en ajoutant le .php
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}
Autoloader::register();