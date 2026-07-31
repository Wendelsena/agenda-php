<?php
    include_once("config/url.php");
    include_once("config/process.php");

    if (isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php">
                    <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Agenda">
                </a>
                <div class="navbar-nav">
                    <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>/index.php">Agenda</a>
                    <a class="nav-link" id="add-link" href="<?= $BASE_URL ?>/create.php">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="container my-4">