<?php

use Newartists\Core\Router;

Router::get('/','HomeController','index');
Router::get('/obras','ObraController','index');
Router::get('/login','LoginController','login');
Router::get('/criarconta','LoginController','criarconta');
Router::post('/cadastrarconta','LoginController','cadastrarconta');

Router::get('/NewArtist','ObraController','NewArtist');
#/NewArtist.php
Router::get('/publicar','ObraController','Publicar');
Router::get('/apoiar','ObraController','Apoiar');
Router::get('/compras','ObraController','Compras');
