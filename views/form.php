<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 28.12.2016
 * Time: 14:59
 */
?>

<form action="" method="post">
    <textarea name="sms" id="" cols="60" rows="10"><?= (empty($text) ? 'Пароль: 8420
Спишется 100,51р.
Перевод на счет 410012996111080' : $text); ?></textarea>
    <br>
    <input type="submit" value="Отправить">
</form>
