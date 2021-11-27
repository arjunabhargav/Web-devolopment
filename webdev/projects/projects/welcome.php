<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <title>Adoption Certificate</title>
    
    <link rel="stylesheet" href="stylephp2.css">
    <link rel="stylesheet" href="header_styles.css">
</head>

    <body>
        <header> 
            <img class="logo" src="logo.png" alt="logo">
            <nav>
                <ul class="nav_links">
                <li><a href="petsville.php">Home</a></li>
                <li><a href="Project_2.php">Pets</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="faqs.php">FAQ's</a></li>
                <li><a href="logout.php">Log-out</a></li>
                </ul>          
            </nav>
        </header>
        
        <u><h1>Enter The Name That Should Appear on your Certificate.</h1></u>
        <br>
        <div ng-app="myApp" ng-controller="myCtrl">
           
            <h3>First Name: <input type="text" ng-model="firstName" size="25px"><br></h3>
            <h3>Last Name:  <input type="text" ng-model="lastName" size="26px"><br></h3>
            <br>
            <p style="color: black; text-align: center; font-size: 23px;"><b>Congrats!!!<u> Your Adoption was Successful</u>. You Will Recieve the Adoption Certificate on your <u>Registered E-Mail</u> along with the further course of action.</b>
            
                <section class="certificate">
                    <div class="certi">
                        <div class="certi-image img-1"></div>
                        <div class="text"><h1>{{firstName + " " + lastName}}</h1></div>     
                    </div>
                </section>      
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <center><b><h2>*You can take a screenshot of the Certificate. An official one will be sent to your Registered E-Mail after the process is completed.*</h2></b></center>
               
        <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.firstName= "";
            $scope.lastName= "";
        });
        </script>

        </body>
</html>
