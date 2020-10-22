<?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $about=$_POST['about'];
        $email=$_POST['email'];
        $passward=$_POST['passward'];
      
        $to=$_POST['email'];
        $subject="from my website";
        $message="name:".$name;
        $header="From: sach4599@gmail.com";
        if(mail($to,$subject,$message,$header))
        {
          echo"mail send successfully";
        }
        else
        {
          echo"mail was not send";
        }
      }
?>
<!doctype html>
<html lang="en">
 <style>
  .form{
          margin: auto;
          max-width: 350px;
          background: rgba(0,0,0,0.8);
          padding: 45px;
          margin-top: 90px;
          color: white;
          border-radius: 20px;
  }
  input[type=passward],input[type=email],input[type=text]{
    width: 100%;
    box-sizing: border-box;
    border-radius: 20%;
    padding: 5px;
  }
  input[type=submit]{
         
         width:100%;
         box-sizing: border-box;
         border-radius: 20%;
         padding: 5px;
         margin-top: 20px;
         text-align: center;
         background-color: lightskyblue;
         
  }

 </style>    


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  </head>
  <body>
      <div class="form">
        <form action="registration.php" method="POST">     
        <input type="text"  id="name" placeholder="name" name="name" >
        <input type="text"  id="about" placeholder="about you" name="about" >
        <input type="email"  id="email" placeholder="email" name="email" aria-describedby="emailHelp">
        <input type="passward"  id="passward" placeholder="passward" name="passward" >
        <input type="submit" placeholder="submit" > 
        </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>  