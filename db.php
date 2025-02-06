<?php

function dbConnect(): PDO
{
    return new PDO('mysql:host=localhost;dbname=artbox', 'root', 'root');
}