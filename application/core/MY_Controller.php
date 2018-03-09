<?php

class MY_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
}

class Service_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();

        //print_r("Service"); Validar o ID enviado
    }
}

class Interface_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        
        //print_r("Interface"); Validar a sessão do usuário
    }
}