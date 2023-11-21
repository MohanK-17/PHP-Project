<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/web/__templates/$name.php";
}
