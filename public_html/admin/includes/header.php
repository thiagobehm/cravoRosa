<?php
session_start();

if (basename($_SERVER['PHP_SELF']) !== 'index.php') {
	if(!isset($_SESSION['logado'])){
    	header("Location: index.php");
	}
}

?>
<!--[if IE]><link rel="shortcut icon" href="images/rose.png""><![endif]-->
<link rel="icon" href="../images/rose.png" />
<link rel="stylesheet" href="../css/bootstrap-theme.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/toastr.min.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

