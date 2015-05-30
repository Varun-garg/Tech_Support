<?php
/* 
 * Copyright (C) 2015 Varun Garg <varun.10@live.com> - All Rights Reserved
*/
?>

<html>
<head>
<title>GBU Helpdesk</title>
        <link rel="stylesheet" href="<?php  echo  base_url().'application/views/common/'.'css/bootstrap.min.css'?>">
           <script type="text/javascript" src="<?php  echo  base_url().'application/views/common/'.'js/jquery-2.1.3.min.js'?>"></script>
            <script type="text/javascript" src="<?php  echo  base_url().'application/views/common/'.'js/bootstrap.min.js'?>"></script>
            <style>
                    "body {
            padding-top: 120px;
            padding-bottom: 40px;
            background-color: #eee;

          }
          .btn 
          {
           outline:0;
           border:none;
           border-top:none;
           border-bottom:none;
           border-left:none;
           border-right:none;
           box-shadow:inset 2px -3px rgba(0,0,0,0.15);
          }
          .btn:focus
          {
           outline:0;
           -webkit-outline:0;
           -moz-outline:0;
          }
          .fullscreen_bg {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
            background-position: 50% 50%;
            background-image: url('<?php  echo  base_url().'application/views/common/'.'color-splash.jpg'?>');
            background-repeat:repeat;
          }
          .form-signin {
            max-width: 280px;
            padding: 15px;
            margin: 0 auto;
              margin-top:50px;
          }
          .form-signin .form-signin-heading, .form-signin {
            margin-bottom: 10px;
          }
          .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
          }
          .form-signin .form-control:focus {
            z-index: 2;
          }
          .form-signin input[type='text'] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: none;
            border-left-style: solid;
            border-color: #000;
          }
          .form-signin input[type='password'] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-top-style: none;
            border-right-style: solid;
            border-bottom-style: solid;
            border-left-style: solid;
            border-color: rgb(0,0,0);
            border-top:1px solid rgba(0,0,0,0.08);
          }
          .form-signin-heading {
            color: #fff;
            text-align: center;
            text-shadow: 0 2px 2px rgba(0,0,0,0.5);
    </style>
</head>
<body>

<div id="fullscreen_bg" class="fullscreen_bg"/>
<div class="container">
<form class="form-signin" action="<?=base_url().'index.php/login/index/moderator'?>">
<h2 class="form-signin-heading">Select an option</h2>
<div><input type="submit" value="Moderator Login" class="btn btn-lg btn-primary btn-block"/></div>
</form>
<form class="form-signin" action="<?=base_url().'index.php/login/index/admin'?>">
<div><input type="submit" value="Administrator login" class="btn btn-lg btn-primary btn-block"/></div>

</form>
</div>
</div>
</body>
</html>