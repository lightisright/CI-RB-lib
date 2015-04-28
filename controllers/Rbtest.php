<?php

class Rbtest extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {

    $this->load->library('rb');
    $news = R::findAll('news');

    var_dump($news);

    $data['news'] = $news;
    $this->load->view('rbtest', $data);
  }
}
