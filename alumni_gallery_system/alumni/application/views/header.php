<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="uft-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">
    <title>ALUMNI'S GALLERY</title>
     <link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/btn.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>"/>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <style type="text/css">
      body{
        background: url(assets/bg.jpg) repeat;

      }
      .greeting{
        font-family:verdana !important;
        color:#000000 !important;
        text-align: left !important;
        font-weight: bold;font-size:16px;
      }
      .response{
        border-style:solid !important ;
        border-width: 1px !important;
        display:block !important;
        font-size: 25px !important;
        font-weight:normal !important;
        margin-bottom: 1.11111rem !important;
        padding: 0.77778rem 1.33333rem 0.77778rem 0.77778rem !important;
        position: relative !important;
        transition: opacity 300ms ease-out !important;
        background-color: rgba(239,66,36,0.85)!important;
        color:#FFFFFF !important; 
      }
      .title {
        font-family: verdana !important;
        color:#008CBA !important;
        text-align: center;
        font-weight: bold;
        font-size: 15px;
      }
      .side-nav{
        list-style-type:none;
      }
      h2{
        font-family: Microsoft Yi Baiti !important;
        font-size: 50px;
        text-align:center;
        color:#343434;
      }
      label{
           font-size: 18px;
      }
      .description{
        color:#000;
        font-family: arial !important;
      }

      .menu-button{
        background-color:transparent;
        color:#fff;
        padding:12px;
        font-size: 15px;
        cursor:pointer;
        border: 1px solid #fff;
      }
      .left-menu{
        position:relative;
        display:inline-block;
        float: left;
      }
      .dropdown-menu{
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 81px;
        z-index: 1;
      }
      .dropdown-menu a:hover{
        background-color:#000;
        color:#fff;
      }
      .left-menu:hover .dropdown-menu{
        display:block;
      }
      .left-menu:hover .menu-button{
        background-color:transparent;
      }

    </style>
  </head>
  <body>
    <div class="container">


      <div class="top-bar" id="example-menu">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text"><?php echo anchor("dashboard",'ALUMNI GALLERY');?></li>
            <li>
              <div class="left-menu">
              <button class="menu-button">Settings</button>
              <div class="dropdown-menu">
                <a><?php echo anchor("welcome/logout",'Logout');?></a>
              </div>
            </div>
              </ul>
            </li>

          </ul>
        </div>
        <div class="top-bar-right">
          
        </div>
      </div>

  </body>
  </html>