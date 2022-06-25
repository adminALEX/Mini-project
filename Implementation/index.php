<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="edit.png"/>
        <title>Login</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
//     <?php
//     $mysqli = new mysqli("localhost", "root", "", "sample");
//     $result = $mysqli->query("SELECT uname FROM reg where uname = $username");
//     mysqli_num_rows($result);
//     ?>
//  function checkUser(name){
//         const val = document.getElementById(name.id).value;
//         setCookie("userCookie",val);
//             <?php
//     if (isset($_COOKIE['username'])) {
//         $username = $_COOKIE['username'];
//         }
        
//         if($result<0){
//             echo"Username Not AVAILABLE";
//         }
//     ?>
 //}

   

        // var username = document.getElementById()
        // console.log("Checking");
        // createCookie("username",);
//  var username = document.getElementById('nameval').value;
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sample";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT * FROM reg WHERE uname = '$uname'";
// $result = $conn->query($sql);

// ?>


            function sendData(){
            var a = document.getElementById('nameval').value;
            
            var form = document.createElement("form");
            input = document.createElement("input");
            form.action = "candidte-details.php";
            form.method = "post"
            input.type = "text";
            input.name = "nameval";
            input.value = a;
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
            }
        </script>
    </head>
    <body onload="onload()"> 
        <br>
        <hr>
        <div class="head-cl">
            <h1 class="heading-style"><center>Online Voting System</center></h1>
        </div>
        <hr>
        <br><br>
        <div class="body-cl">
            <form method="post" action="candidate-details.php">
            <label>USERNAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><input name="nameval" id="nameval" type="text"  oninput="checkUser(this)"  required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
            <label>PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="password" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        </div><br>
        <div class="sub-cl" style="padding-left:35%;">

            <button class="button-56" type="submit">LOGIN</button>
            <button class="button-56 remove-decoration" onclick="window.location.replace('reg1.php')"><a href="reg1.php">REGISTER</a></button>

        </div>
        </form>
        <br><br><br><br><br><br><br><br><br>
        <br><br>
        <div class="footer">Copyright &#169; 2002&#x2013;2026 </div>
        </div>
        <link rel="stylesheet" href="./stylesheets/buttonstyle.css">
        <link rel="stylesheet" href="./stylesheets/index-style.css">  
        <br><br>
    
    </body>
</html>