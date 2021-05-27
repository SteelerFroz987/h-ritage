<?php
include('./class/class_salutation.php');

$salut = new trois();

$reponse = $_POST['reponse'];
$res_phrases = $salut->salutation($reponse);
echo $res_phrases;