<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include 'server/config.php';
?>


<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <header class="navbar navbar-expand flex-column flex-md-row bg-dark">
            <a class="navbar-brand ml-0 mr-3" href="index.php"><img src="img/logo.png"></a>

            <div class="navbar-nav-scroll">
                <ul class="navbar-nav bd-navbar-nav flex-row ml-mr-auto">
                    <li>
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="servicos.php">Serviços</a>
                    </li>
                    <li>
                        <a class="nav-link" href="documentacao.php">Documentação</a>
                    </li>
                    <li>
                        <a class="nav-link" href="downloads.php">Downloads</a>
                    </li>
                </ul>

            </div>

             <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li>
                    <a class="nav-link active" href="login.php">Login</a>
                </li>
            </ul>

        </header>

        <div class="container bg-light mt-5 col-lg-2 col-md-4 col-8">
            <form action="../php/findEmail.php" method="post" id="formAction" class="pt-3 pb-3">
                
                <div class="form-group pt-2">
                    <label for="txtEmail">Email</label>
                    <input class="form-control" type="email" name="txtEmail" id="txtEmail" placeholder="Enter email">
                </div>
                <div class="form-group pt-2">
                    <label for="txtPass">Password</label>
                    <input class="form-control" type="password" name="txtPass" id="txtPass" placeholder="Enter password">
                </div>
                <div class="col-16 text-center pt-1">
                <button type="submit" class="btn btn-primary w-75">Entrar</button>
                </div><br>
               
            </form>
            </div>
        
        <div class="container col-md-3 col-lg-3 col-sm-1 col-8 pl-3">
            <p class="text-center"><a href="forgotpassword.php">Forgot password?</a></p>
            <p class="text-center"><a href="createuser.php">Sign Up</a></p>
            
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>