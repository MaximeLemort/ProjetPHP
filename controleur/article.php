<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author mobouafas1 & malemort1
 */
class Article {
    var $titre;
    var $resume;
    var $dateParution;

    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct2($titre, $resume)
    {
        $this->titre=$titre;
        $this->resume=$resume;
        $this->dateParution= new DateTime();
    }

    function __construct3($titre, $resume, $dateParution)
    {
        $this->titre=$titre;
        $this->resume=$resume;
        $this->dateParution=$dateParution;
    }
}
