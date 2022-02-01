<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resource/menu.css">
    <link rel="stylesheet" href="../resource/slide.css">
    <link rel="stylesheet" href="../resource/conteudo.css">
    <link rel="stylesheet" href="../resource/rodape.css">
</head>
<body>
    <header class="cabeca" >
        <form id="pesq">
            <i style='font-size:17px;color:white;' class='fa fa-search'></i>
            <input type="search" name="barra_p" class="barra_p" placeholder="Pesquisar" list="historico">
            <datalist id="historico">
    
                <option value=""></option>
    
            </datalist>
        </form>

        <input type="checkbox" class="botao" name="menu-ck" id="menu-ck">
        <label for="menu-ck" class="botao">
            <i class="fa fa-bars" style="font-size:30px;color: white;"></i>
        </label>

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.html"> Home </a>
                </li>
                <li>
                    <a href="series.html"> Séries </a>
                </li>
                <li>
                    <a href="filme.html"> Filmes </a>
                </li>
                <li>
                    <a href="anime.html"> Animes </a>
                </li>
                <li>
                    <a href="contatos.html"> Contatos </a>
                </li>
            </ul>
        </nav>  
    </header>
