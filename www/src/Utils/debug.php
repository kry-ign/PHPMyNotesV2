<?php


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