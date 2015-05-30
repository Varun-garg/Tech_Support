<?php
/* 
 * Copyright (C) 2015 Varun Garg <varun.10@live.com> - All Rights Reserved
*/
class Login_type extends CI_Controller
{
    function index()
    {
        
        redirect('Login');
        $this->load->view('Choice_form');
    }
}