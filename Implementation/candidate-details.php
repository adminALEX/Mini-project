<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" type="image/png" href="edit.png"/>
        <title>Candidate Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="./stylesheets/index-style.css">
        <link rel="stylesheet" type="text/css" href="./stylesheets/index.css">
        <style>
            body{
    font-family: 'Roboto Slab', serif;
    background: vertical-gradient(-45deg, #a95ecc, #8474a1, #6ec6ca, #08979d);
	background-size: 1000% 1000%;
	animation: gradient 20s ease infinite;
}
@keyframes gradient {
	0% {
		background-position: 0% 45;
	}
	45 {
		background-position: 100% 45;
	}
	100% {
		background-position: 0% 45;
	}
}

.row {
  display: flex;
}

.column {
  flex: 45;
}
        </style>
  
    </head>
    <body onload="loaded();">
        <br>
        <div id="overlay">
          <div id="overlay-header jumbotron">
            <br>
            <h1>CONFIRM YOUR DETAILS</h1><br>
          </div>
          <div id="overlay-body-details">
<?php
$uname = $_POST['nameval']; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reg WHERE uname = '$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name : " . $row["fname"]."<br>". "Username : " . $row["uname"]."<br>" ."Aadhar Number :" . $row["aadhar"]."<br>"."Phone :". $row["ph_no"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
          </div>
          <div class = "btn-class">
          <button type="button" class="btn btn-dark" ><a href="./pseudo-loader.html">Proceed</a></button>
          <button type="button" class="btn btn-dark" style="margin-left:45x" onclick="off()">Close</button>
          </div>

        </div>
        <div class="container bg-light">
        <div class="whole-cd animate-element">
            <a href="#" id="votenow-button" onclick="on()" class="float"><p>VOTE NOW!</p>
              </a>
              <br><br><div class="row">
                <div class="col-2">
                <button class="custom-btn btn-5" onclick="window.location.replace('index.php')">LOGOUT</button></div>
                <div class="col-10" style="padding-left:25%;font-size:35px;">
                <b>Candidate Details</b>
                </div><br>
              
              </div>
              <hr>
            <br>
            <script>
              
            document.getElementById("overlay").style.display="none";</script>
            <div class="row shadow">
                <div class="column">
                    <h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank">Details</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna aliqua. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Mattis enim ut tellus elementum sagittis.</p>
                    <br><h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank"">Achievements</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectet orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna a</p>
                    <br><h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank">Political Life</a></h3>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore um dolor sit amet, consectet orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut lab magna a</p>
                </div>
                <div class="column" >
                  <div id="cf">
                    <img class="bottom" src="vector-party.jpg" height="545x" width="475px" />
                    <img class="top" src="man1.jpeg"  height="545x" width="475px" />
                  </div>
                </div>
            </div>
            <br><hr>
            <div class="row shadow">
                <div class="column">
                    <h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank">Details</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna aliqua. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Mattis enim ut tellus elementum sagittis.</p>
                    <br><h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank"">Achievements</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectet orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna a</p>
                    <br><h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank">Political Life</a></h3>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore um dolor sit amet, consectet orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut lab magna a</p>
                </div>
                <div class="column" >
                  <div id="cf">
                    <img class="bottom" src="vector-party.jpg" height="545x" width="475px" />
                    <img class="top" src="man1.jpeg"  height="545x" width="475px" />
                  </div>
                </div>
            </div>
            <br><hr>
            <div class="row shadow">
                <div class="column">
                    <h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank">Details</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna aliqua. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Mattis enim ut tellus elementum sagittis.</p>
                    <br><h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank"">Achievements</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectet orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore magna a</p>
                    <br><h3><a href="https://en.wikipedia.org/wiki/Politics" target="_blank">Political Life</a></h3>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut labore et dolore um dolor sit amet, consectet orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun ut lab magna a</p>
                </div>
                <div class="column" >
                  <div id="cf">
                    <img class="bottom" src="vector-party.jpg" height="545x" width="475px" />
                    <img class="top" src="man1.jpeg"  height="545x" width="475px" />
                  </div>
                </div>
            </div>
            <br><hr>
            <div class="footer">Copyright &#169; 2002&#x2013;2026 </div>
          </div>
          <script type ="text/javascript" src="./scripts/index.js"></script>

    </body>
</html>