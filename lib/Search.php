<?php

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 28.12.2016
 * Time: 14:58
 */
class Search
{

    public $text;

    function __construct($text)
    {
        $this->text = $text;
    }

    public function getInfo(){
        $result = [];
        //$this->get_password();
        $result['password'] = $this->get_password();
        $result['wallet'] = $this->get_wallet();
        $result['price'] = $this->get_price();
        return $result;
    }

    public function get_price(){
        preg_match('(\d+\,\d+р.|\d+р.)', $this->text, $res);
        return (is_null($res[0])) ? 'Не верный формат' : $res[0];
    }

    public function get_wallet(){
        preg_match('([0-9]{13,16})', $this->text, $res);

        return (is_null($res[0])) ? 'Не верный формат' : $res[0];
    }

    public function get_password(){
        //preg_match('/(\s[0-9]{4}\s|\s[0-9]{4}$|^[0-9]{4}[^0-9]|^[0-9]{4}$)/', $this->text, $res);
        preg_match('/(\s\d{4}\s|\s\d{4}$|^\d{4}[^0-9]|^\d{4}$|\s\d{4}[^0-9])/', $this->text, $res);
        $res = (strlen(trim($res[0])) > 4) ? substr($res[0],0,-1) : $res[0];

        return (is_null($res)) ? 'Не верный формат' : $res;
    }
}