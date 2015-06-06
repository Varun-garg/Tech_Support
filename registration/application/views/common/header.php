
<?php

/* 
 * Copyright (C) 2015 Varun Garg <varun.10@live.com> - All Rights Reserved
*/

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Central Computer Center
        </title>
           <link rel="stylesheet" href="<?php echo base_url().'application/views/common/'.'dist/css/bootstrap-select.css'?>">

        <link rel="stylesheet" href="<?php echo base_url().'application/views/common/'.'css/bootstrap.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'application/views/common/'.'css/varun.css'?>">

           <script type="text/javascript" src="<?php echo base_url().'application/views/common/'.'js/jquery-2.1.3.min.js'?>"></script>
                     <script type="text/javascript" src="<?php echo base_url().'application/views/common/'.'dist/js/bootstrap-select.js'?>"></script>
           <script type="text/javascript" src="<?php echo base_url().'application/views/common/'.'js/bootstrap.min.js'?>"></script>
            <style>
                .navbar-nav.navbar-right:last-child {
    margin-right: 0;
}
                .navbar-brand
{
    position: absolute;
    width: 100%;
    left: 0;
    text-align: center;
    margin: auto;
}
              
                    .navbar-custom {
                        <?php
              //  if($this->session->userdata('type')!='admin')
               // echo "background-color:#9C9EA0;";
                 //   else echo "background-color:#9C9EA0;";
                        ?>
                        
                        color:#ffffff;
                        border-radius:0;
                    }

                    .navbar-custom .navbar-nav > li > a {
                        color:#fff;
                    }
                    .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
                        color: #ffffff;
                        background-color:transparent;
                    }
                    .navbar-custom .navbar-brand {
                        color:#eeeeee;
                    }

            </style>
    </head>
    <body>
        <div  id="wrapper"  class="toggled">     
   
            <nav class="navbar navbar-fixed-top navbar-inverse navbar-default navbar-custom" role="navigation">
                    
   
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url()?>"><font size="6"><b>Central Computer Center</b></font></a> 
                         <!--       <a class="navbar-brand" rel="home" href="<?php echo base_url()?>" title="Home">
                                      <img style="max-width:100px; margin-top: -7px;"
                                        src="<?php echo base_url().'application/views/common/gbu.png'?>">
                                  </a> !-->
                            
                          </div> 
                    <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                         
                         <?php if($this->session->userdata('type')=='admin'){?>
                        <li><a href="<?php echo base_url().'index.php/all_guest_devices'?>">Devices</a></li>
                         <?php }
                         else {?>
                        <li><a href="<?php echo base_url().'index.php/all_tickets/all_devices_g'?>">Devices</a></li>
                         <?php }?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-th-large"></i> New
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if($this->session->userdata('type')=='admin'){?>
                                <li><a href="<?php echo base_url().'index.php/new_user'?>">User</a></li>
                                <li><a href="<?php echo base_url().'index.php/new_table'?>">Department</a></li>
                                <li><a href="<?php echo base_url().'index.php/device_register_p'?>">Faculty/Staff Device</a></li>
                                <li><a href="<?php echo base_url().'index.php/device_register_g'?>">Guest Device</a></li>
                                <li><a href="<?php echo base_url().'index.php/email_register'?>">Email Account</a></li>
                                <?php }?>
                            </ul>
                        </li>
                     </ul>            
                                        <!--
                                           Website By Varun Garg(varun.10@live.com)
                                          !-->
     
                    <ul class="nav navbar-nav navbar-right">
                        <li> 
                                <a href="<?php echo base_url().'index.php/edit_user/index/'.$this->session->userdata('user_id')?>">Welcome! <?php echo $this->session->userdata('full_name')?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/logout'?>">Log out</a>
                        </li>
                        </ul>
                    </div>
    
               </nav>


        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                    <a href="#">
                       Brand
                    </a>
                </li>
            <li ><a href="<?php echo base_url().'index.php/all_departments'?>">Departments</a></li>
           <?php if($this->session->userdata('type')=='admin'){?>
           <li ><a href="<?php echo base_url().'index.php/new_table'?>" >New Department</a></li><?php } ?>
            
                <?php if($this->session->userdata('type')=='admin'){?>
            
            <li ><a href="<?php echo base_url().'index.php/all_users'?>">Users</a></li>
            
            <li ><a href="<?php echo base_url().'index.php/new_user'?>">New user</a></li><?php } ?>
            
            <li ><a href="<?php echo base_url().'index.php/All_guest_devices'?>">Guest Devices</a></li>
            <li ><a href="<?php echo base_url().'index.php/device_register_g'?>">New Guest Device</a></li>
            
            <li ><a href="<?php echo base_url().'index.php/All_permanent_devices'?>">Faculty/Staff Devices</a></li>
            <li ><a href="<?php echo base_url().'index.php/device_register_p'?>">New Faculty/staff Device</a></li>
            
            <li ><a href="<?php echo base_url().'index.php/All_emails'?>">Email Accounts</a></li>
            <li ><a href="<?php echo base_url().'index.php/email_register'?>">New Email Account</a></li>

            
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <a>dafsgf</a>
                </ul>
           
         </nav>
        
        <div id="page-content-wrapper" >
            <div class="container-fluid">
        