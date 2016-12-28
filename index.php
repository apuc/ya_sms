<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 28.12.2016
 * Time: 14:57
 */

require_once 'lib/Parser.php';
require_once 'lib/Search.php';

Parser::render('views/form.php', ['text' => $_POST['sms']]);

if(isset($_POST['sms'])){
    $sms = new Search($_POST['sms']);
    Parser::render('views/result.php', ['result'=>$sms->getInfo()]);
}