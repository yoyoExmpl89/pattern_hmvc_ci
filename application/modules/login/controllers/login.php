<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class Login extends MY_Controller {
    
    function __construct()
	{
		parent::__construct();
		//$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
        //$this->template->write_view('navs', 'template/default_topnavs.php', true);
        $this->load->model('login');
    }

    function index()
    {
        

    }
    



}