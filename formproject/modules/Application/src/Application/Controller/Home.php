<?php

switch ($request['action'])
{
    case 'index':
        $content = null;
    break;
}

include (APPLICATION_PATH."/../views/layouts/jumbotron-narrow.phtml");