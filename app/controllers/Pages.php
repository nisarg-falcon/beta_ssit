<?php
  class Pages extends Controller {
   
    
    public function index(){
      $this->view('php/index');
    }   
    public function department(){
      $this->view('php/department');
    }   
    public function facilities(){
      $this->view('php/facilities');
    } 
    public function activities(){
      $this->view('php/activities');
    } 
    public function contact(){
      $this->view('php/contact');
    } 
    public function about(){
      $this->view('php/about');
    } 
    public function admission(){
      $this->view('php/admission');
    } 
  
  }