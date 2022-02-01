<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pousada Vale do Sol</title>
    <link rel="stylesheet" href="/res/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css
/">
</head>
<body>
    <header class="desktop">
        <nav class="container">
            <img src="/res/img/logo.png" width="160">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/pousada">POUSADA</a></li>
                <li><a href="/quartos">NOSSOS QUARTOS</a></li>
                <li><a href="/cafe">CAFÉ DA MANHÃ</a></li>
                <li><a href="/capitolio">CAPITÓLIO</a></li>
                <li><a href="/contatos">CONTATOS</a></li>
            </ul>
        </nav>
    </header>
    <nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top mobile">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="/res/img/logo.png" alt="" style="width: 90px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/pousada">POUSADA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/quartos">NOSSOS QUARTOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/cafe">CAFÉ DA MANHÃ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/capitolio">CAPITÓLIO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contatos">CONTATOS</a>
                  </li>
              </ul>
    
            </div>
          </div>
        </div>
      </nav>
