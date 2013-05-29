<?php

class HomeController extends BaseController {

    protected $layout='master';
    public function index()
    {
        print('Welcome to the terra dome');
        $this->layout->content = View::make('home.index');
        //return View::make('home.index');
    }
}