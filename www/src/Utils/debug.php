<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

function dump($data)
{
    echo '<div 
    style="
        padding: 5px;
        border: 1px solid;
        display: inline-block;
        background: lightgrey
        ">
    <pre>';
    print_r($data);
    echo '</pre>
    </div>
    </br>';
}