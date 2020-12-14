<!doctype html>
<html>
    <head>
        <title><?= $title?></title>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
        <!-- Custome CSS styles -->
        <link rel="stylesheet" href="<?php echo base_url('css/main.css')?>">
        <script src="https://kit.fontawesome.com/d6185a5372.js" crossorigin="anonymous"></script>
    </head>
<body>
<!-- Navigation -->
    <div class="mynav">
        <nav class="container navbar navbar-expand-lg  ">
            <a class= "navbar-brand" href="<?php echo base_url('welcome')?>"><i class="fas fa-home"></i> Welcome</a>
            <a class= "navbar-brand" href="<?php echo base_url('notes')?>"> <i class="fas fa-stream"></i> All-Notes</a>
            <a class= "navbar-brand" href="<?php echo base_url('notes/create')?>"><i class="fas fa-plus-circle"></i> Create</a>   
            <a class= "navbar-brand" href="<?php echo base_url('notes/report')?>"><i class="far fa-file"></i> Report</a>   
        </nav>      
    </div>
    <!-- Jumbotron -->
        <div class="jumbotron myJumbo">
            <div class="container">
                <?= $heading?>
            </div>
        </div>
        <content>
            <div class="container">
            <!-- Begining of the body content -->