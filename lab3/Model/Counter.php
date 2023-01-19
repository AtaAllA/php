<?php

defined("_ALLOW_ACCESS") or die("No Direct access allowed");

class Counter
{
    private $file_cont;
    private $myfile;

    public function __construct($filee){
        $this->myfile = $filee;
        $this->read();
        if (!isset($_SESSION['is_counted'])){
            $this->file_cont++;
            $this->write($this->file_cont);
            //  $_SESSION['is_counted'] = true;
            //echo $_SESSION['is_counted'] ;
            //print_r($_SESSION);
        }
    }

    public function read() {
        $this->file_cont = empty(file_get_contents($this->myfile))? 0 : file_get_contents($this->myfile);
        // (int)$this->file_cont;
    }

    public function prints() {
        echo "Visits is ". $this->file_cont;
    }

    public function write($content){
        $f = fopen($this->myfile, "w");
        fwrite($f, $content);
        fclose($f);
    }
}
