<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<style>

#qotd{
    background-image: url('https://images.unsplash.com/photo-1513002749550-c59d786b8e6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
    width: 100%;
    height: 250px;
}

#actualq{
    width: 100%;
    height: 100px;
    color: black;
    font-size: 2em;
    text-align: center;
    font-family: 'Lobster', cursive;
    text-shadow: 2px 2px #ffffff;
}
    
</style>
<?php

include("array.php");

$rand_keys = array_rand($quote, 2);

echo '<div id="qotd">';
echo '<div id="actualq">';
echo $quote[$rand_keys[0]] . "\n";
echo '</div>';
echo '</div>';
?>
</html>