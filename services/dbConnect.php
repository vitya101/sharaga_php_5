<?php
function conn($host = 'localhost', $user = 'root', $pass = '', $database = 'fucking_slaves_social_network')
{
    return new PDO(`mysql:host=$host;dbname=$database`, $user, $pass);

}

$conn = conn();

global $conn;