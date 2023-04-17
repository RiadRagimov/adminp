<?php

namespace Core;


class App
{



    public function configure()
    {
        require_once __DIR__ . '/../App/config.php';
        require_once __DIR__ . '/../App/Router.php';
    }


    public function handleRequests()
    {
        (new Router())-> handleRoute();
    }

}