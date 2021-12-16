<?php

//echo $controlador; //controlador obtenido de la URL, es decir, con el método GET
//echo $accion; //accion obtenida de la URL, es decir, con el método GET 

include_once("controladores/controlador_".$controlador.".php");
$OBjControlador = "Controlador".ucfirst($controlador); //ucfirst->hace que la primera letra de la palabra se mayúscula
$controlador = new $OBjControlador();
$controlador->$accion();

