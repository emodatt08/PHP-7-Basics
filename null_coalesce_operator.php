<?php


/**
 * The Null Coalesce Operator 
 */

$first_style = (isset($_GET['name'])) ? $_GET['name']:"nothing";
$second_style = $_GET['name'] ?? "nothing";

 print_r($second_style);