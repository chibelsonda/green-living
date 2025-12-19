<?php
  class Pins extends Controller{

    public function __construct(){
        $this->pinModel = $this->model('Pin');
    }

    public function show($userid)
    {
        $pins = $this->pinModel->getPinById($userid);

        $data = ['pins' => $pins];

        $this->view('pins/index',  $data);
    }
}
