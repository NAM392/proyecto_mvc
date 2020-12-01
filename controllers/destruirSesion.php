<?php 

session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: inicio');
	exit();
}

unset($_SESSION['entre']);
unset($_SESSION['usuario']);
session_destroy();

header('Location: inicio');







 ?>