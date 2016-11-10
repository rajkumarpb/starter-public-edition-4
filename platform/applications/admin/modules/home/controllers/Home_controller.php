<?php defined('BASEPATH') OR exit('No direct script access allowed.');

class Home_controller extends Base_Authenticated_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function index() {

        $title = 'Administrator\'s Home Page';

        $this->template
            ->title($title)
            ->build('home');
    }

}