<?php
   session_start();
   require_once("vendor/autoload.php");
   
   use \Slim\Slim;

   
   $app = new Slim();
   require_once('vendor/classes/classes.php');
   require_once('vendor/routes/rotas.php');
  

   $app->get('/', function()
   {
       $page = new Page();
       $page->setTpl('home');
       exit;
   });

   $app->run();
?>