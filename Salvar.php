<?php
require 'gerenciador.php';

$id = $_POST['id'];
$nome_arquivo = $_POST['nome_arquivo'];
$text = $_POST['text'];

if (!empty($nome_arquivo) && is_numeric($id))
{
    $file_handler = new gerenciador($id);
    $file_handler->replaceFile($nome_arquivo, $text);
}
