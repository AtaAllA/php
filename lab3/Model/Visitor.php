<?php
defined("_ALLOW_ACCESS") or die("No Direct access allowed");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author webre
 */
class Visitor
{

    public $name, $pass;

    public function __construct($n, $p) {
        $this->name = $n;
        $this->pass = $p;
    }
public logout(){
    session_unset();
}

}
