<?php

require_once "src/VideoJuegoDAO.php";

$id = $_GET['id'];

if($id!=null){
    VideoJuegoDAO::eliminarVideoJuego($id);
}

header("Location: index.php");
exit;