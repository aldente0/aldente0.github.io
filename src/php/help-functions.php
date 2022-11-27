<?php 

function printTagPicture(string $pathOrigin, string $pathWEBP, string $class = '', string $alt= '', ) 
{
    echo <<<_PICTURE_
    <picture>
        <source srcset="$pathWEBP">
        <img class="$class" src="$pathOrigin" alt="$alt">
    </picture>
    _PICTURE_;
}