<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html>
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FAQ's</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="header_styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
          $(document).ready(function(){
            $("#hide").click(function(){
              $("h1").hide(1000);
            });
            $("#show").click(function(){
              $("h1").show(1000);
            });
          });
        </script>
        
        <script> 
          $(document).ready(function(){
            $("#flip").click(function(){
              $("#panel").slideToggle("slow");
            });
          });
        </script>
        
        <script> 
           $(document).ready(function(){
             $("#FAQ1").click(function(){
               $("#ANS1").slideToggle("slow");
             });
           });
        </script>
        
        <script> 
          $(document).ready(function(){
            $("#FAQ2").click(function(){
              $("#ANS2").slideToggle("slow");
            });
          });
        </script>
        
        <script> 
          $(document).ready(function(){
            $("#FAQ3").click(function(){
              $("#ANS3").slideToggle("slow");
            });
          });
        </script>
        
        <script> 
          $(document).ready(function(){
            $("#FAQ4").click(function(){
              $("#ANS4").slideToggle("slow");
            });
          });
        </script>
        
        <script> 
          $(document).ready(function(){
            $("#FAQ5").click(function(){
              $("#ANS5").slideToggle("slow");
            });
          });
        </script>
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
      
        <h2 style="font-size: 40px; padding-left: 100px; padding-left: 750px;"><u>FAQ'S</u></h2><br><br>
      
        <div>
          <h1 style="text-align: center; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif "><u><b>Quote of the Day</b></u>: A dog is the only thing on earth that loves you more than you love yourself.</h1><br>
          <button id="hide" style="color: crimson; background-color: rgba(255, 255, 255, 0.1); float: right;"><b>Hide</b></button>
          <button id="show" style="color: crimson; background-color: rgba(255, 255, 255, 0.1); float: left;"><b>Show Quote of the Day</b></button>
        </div>
        
        <br><br><br>
             
        <div id="flip"><h3>Click here to know Why we have Reviews</h3></div>
        <div id="panel">Thank you for using Petsville! We’re here to help you every step of the way from “just looking”, to bringing your pet home, to living a long and happy life with your new family member.
          The following Questions are some of the most frequently asked questions about adopting a pet that you see on Petsville. If you can’t find the answer below, please contact us (click on <a href="contact.php" style="color: red;">"Contact"</a> or at the link at the top of the webpage) with any additional questions you have.
        </div>
<br><br>
<div id="FAQ1">1.HOW OFTEN DO YOU FIND ANIMALS WHO NEEDS HELP??</div>
<div id="ANS1">SADLY, ITS QUITE FREQUENT THAT SOME PET IS IN DIRE NEED OF HELP</div>
<br><br>
<div id="FAQ2">2. DO YOU HAVE TROUBLE HANDLING THE ANIMAL WHEN RESCUED??</div>
<div id="ANS2">YES DEFINITELY, THEY USUALLY HAVE TROUBLES ACCEPTING YOU INITIALLY. BUT WE TAKE OUR MEASURES AND THEY BECOME ANGELS EVENTUALLY.</div>
<br><br>
<div id="FAQ3">3. WHAT IS THE PROTOCOL TO ADOPT FROM YOUR ORGANIZATION??</div>
<div id="ANS3">YOU CAN VISIT THE PETS PAGE IN OUR WEBSITE OR CONTACT EITHER ARJUN OR AKSHAY (DETAILS AVAILABLE IN THE CONTACT PAGE) FOR MORE INFORMATION ON THIS TOPIC.</div>
<br><br>
<div id="FAQ4">4.IF I HAVE TO RETURN THE PET, IS IT POSSIBLE?</div>
<div id="ANS4">YES, OFCOURSE YOU CAN RETURN THE PET IF YOU HAVE A VALID REASON. THERE ARE SPECIFIC GUIDLINES YOU WOULD HAVE TO FOLLOW AND YOU WOULD HAVE TO FOSTER IT UNTIL WE FIND A NEW HOME FOR THE PET.</div>
<br><br>
<div id="FAQ5">5. WHAT ARE THE PETS THAT YOU GENERALLY BRING IN?</div>
<div id="ANS5">WE DO NOT HAVE ANY SPECIFIC REQUIREMENTS. WE BRING IN ANY ANIMAL THAT NEEDS HELP AND TAKE CARE OF IT TILL SOMEONE ADOPTS THEM.</div>
</html>
