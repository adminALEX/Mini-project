<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  <link rel="icon" type="image/png" href="edit.png"/>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./stylesheets/stl.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script>



      let a = document.forms["myForm"]["fname"].value;
      let b = document.forms["myForm"]["uname"].value;
      let c = document.forms["myForm"]["aadhar"].value;
      let d = document.forms["myForm"]["ph_no"].value;
      let e = document.forms["myForm"]["pass"].value;
      let f = document.forms["myForm"]["con_pass"].value;
  function validateForm() {
      if(e!=f){
        alert("Passwords doesn't match.");
        return false;
      }

}



     </script>
   </head>
<body>
  <div class="container">
    <div class="title">Registration<span id="Message" class="Message" style="float:right"></span></div>
    <div class="content">
      <form name="myForm" action="first.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" size="10" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="uname" maxlength="10" placeholder="Enter your username" name="uname" required><span id ="usernameLoading"></span><span id="usernameResult"></span>
          </div>
          <div class="input-box">
            <span class="details">Aadhar Number</span>
            <input type="tel" size="12" placeholder="Enter your Aadhar Number"  name="aadhar"  required> 
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" min="" size="10" placeholder="Enter your number" name="ph_no"  required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name="pass" id="pass" type="password" placeholder="Password" onkeyup='passConfirm();' />
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input name="con_pass" id="con_pass" type="password" placeholder="Password" onkeyup='passConfirm();' />
          </div>
        </div>
        <div class="button">
          <input name="submit" type="submit" value="submit" onclick="validateForm()">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
