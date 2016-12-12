<?php

require 'vendor/autoload.php';
use Symfony\Component\Finder\Finder;

$finder = new Finder();

$files = $finder->files()->in('arquivos');

foreach($files as $file){
	echo "Caminho absoluto" . var_dump($file->getRealPath());
	echo "Nome do arquivo" . var_dump($file->getFileName());
}

?>

