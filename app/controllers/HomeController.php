<?php

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to My MVC App',
            'message' => 'Hello from the HomeController!'
        ];

        $this->view('home/index', $data);
    }
}
