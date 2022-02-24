<?php

class HomeController {

    public function index()
    {
      return include __DIR__ . "/../Views/home.php";
    }

}