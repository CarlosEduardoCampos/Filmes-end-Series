<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JN SIMÕES | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/res/Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/res/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/res/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/res/Admin/plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="/res/Admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/Admin/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="/res/Admin/dist/css/admin.css">

  <link rel="stylesheet" href="/res/Admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/res/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/res/Admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/res/Admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item ">
        <a class="nav-link"  href="/admin/logout">
          <i class="fas fa-door-open"></i>
          
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
        
          

          <li class="nav-item">
            <a href="/admin/passeio4x4" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>Passeios 4x4</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/passeioLancha" class="nav-link">
              <i class="nav-icon fa fa-ship"></i>
              <p>Passeios de Lancha</p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="/admin/roteiro" class="nav-link">
              <i class="nav-icon fas fa-map-marked"></i>
              
              <p>Roteiro</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/localRoteiro" class="nav-link">
              <i class="nav-icon fas fa-map-marker"></i>

              <p>Atrativos</p>
            </a>
          </li>

          <li class="nav-header">ADMINISTRATIVO</li>
       
          <li class="nav-item">
            <a href="/admin/cadastrar-usuarios" class="nav-link">
             
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Usuários
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/slider" class="nav-link">
            
              <i class="nav-icon fas fa-images"></i>
              <p>
               Slider
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/logout" class="nav-link">
            
             
              <i class="nav-icon  fas fa-door-open"></i>
              <p>
              Sair
              </p>
            </a>
          </li>
    </div>
    <!-- /.sidebar -->
  </aside>
