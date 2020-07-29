<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller
{
    public function index() {
        $data = [
            'title' => 'Welcome to Note Maker 1.0',
            'heading' => 'Note Maker 1.0'
        ];
        echo view('header', $data);
        echo view('hello', $data);
        echo view('footer', $data);
    }

}