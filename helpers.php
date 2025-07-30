<?php

function basePath($path)
{
    return __DIR__ . DIRECTORY_SEPARATOR . $path;
}


function loadView($view)
{
    require basePath("views/{$view}.view.php");
}

function loadPartial($partial)
{
    require basePath("views/partials/{$partial}.php");
}
