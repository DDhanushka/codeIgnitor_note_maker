<!doctype html>
<html>
    <head>
        <title><?= $title?></title>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css')?>">
    </head>
<body>
    <div class="mynav">
        <nav class="container navbar navbar-expand-lg  ">
            <a class= "navbar-brand" href="<?php echo base_url('welcome')?>">Welcome</a>
            <a class= "navbar-brand" href="<?php echo base_url('notes')?>">All-Notes</a>
            <a class= "navbar-brand" href="<?php echo base_url('notes/create')?>">Create</a>   
            <a class= "navbar-brand" href="<?php echo base_url('notes/report')?>">Report</a>   
        </nav>      
    </div>
    
        <div class="jumbotron myJumbo">
            <div class="container">
                <?= $heading?>
            </div>
        </div>
        <content>
            <div class="container">
