<?php
require 'vendor/autoload.php';

$bird_a = new Artists\Bird();
$bird_a->fly();

$bird_b = new Animals\Bird();
$bird_b->fly();
?>