<?php



class Gerenciador
{
    private $diretorio;
    private $nome_arquivo;

    public function __construct($diretorio)
    {
        $this->diretorio = $diretorio;
    }
    
      public function listarArquivos()
    {
        if(is_dir($this->diretorio))
        {
            $files = scandir($this->diretorio);
            foreach($files as $file)
            {
                print $file . '<br />' . PHP_EOL;
            }
        }
    }
}
  
  public function realocarArquivo($nome_arquivo, $input)
    {
        if(!is_dir($this->diretorio))
        {
            mkdir($this->diretorio, 0777);
        }

        $nome_arquivo_cliente = "./" . $this->diretorio . "/" . $nome_arquivo . ".txt";
        $arquivo_cliente = fopen($nome_arquivo_cliente, "w");
        if ($arquivo_cliente) {
            fwrite($arquivo_cliente, $input);
        }
        fclose($arquivo_cliente);
    }
