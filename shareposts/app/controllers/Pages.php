<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){

      //home page if the user is already logged in

      if (isLoggedIn()) {
        redirect('posts');
      }

      $data = [
        'title' => 'SharePosts',
        'description' => 'Simple social network built on QuadeerMVC PHP framework'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }
  }