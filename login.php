<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cdmips";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if ($hashed_password) {
        // Password retrieved from the database
        if ($input_password == $hashed_password) {
            // Password matches, redirect to main dashboard
            $_SESSION['username'] = $input_username;
            header("Location: main.php");
            exit();
        } else {
            // Password does not match
            $error_message = "Password does not match";
        }
    } else {
        // Username not found
        $error_message = "Username not found";
    }

    $stmt->close();
}

$conn->close();
if (isset($error_message)) {
    echo "<script>alert('$error_message');</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Responsive Login Form</title>
</head>
<body>

<style type="text/css">
*, *::before, *::after {
box-sizing: border-box;
}


body {
margin: 0;
padding: 0;
background: url(https://imgur.com/A7GZh6o.gif) no-repeat;
background-size: cover;
overflow: hidden;
display: flex;
justify-content: center;    
align-items: center;
--border-color: yellow; /* Define a CSS variable for border color */
border-top: 20px solid var(--border-color); /* Add border to the top */
border-bottom: 20px solid var(--border-color); /* Add border to the bottom */
}

body {
--border-color: #FFC74FFB; /* Customizable color (orange in this case) */
}

.error-box {
background-color: #f2dede;
color: #a94442;
padding: 15px;
margin: 10px 0;
border: 1px solid #ebccd1;
border-radius: 4px;
}

.center {
position: absolute;
top: 50%;
left: 15%;
transform: translate(85%, -50%);
width: 340px;
background: white;
border-radius: 10px;
box-shadow: 10px 10px 15px rgba(0, 0.3, 0.3, 0.3);
background: rgba(255,255,255,1);
-webkit-backdrop-filter: blur(50px);
backdrop-filter: blur(50px);
border: 1px solid rgba(255,255,255,0.5);
}

.center h1 {
text-align: center;
color: #007222;
padding: 15px 0;
border-bottom: 1px solid silver;
}

.center form {
padding: 0 40px;
box-sizing: border-box;
}

form .txt_field {
position: relative;
margin: 30px 0;
}

.txt_field input {
width: 100%;
padding: 0 5px;
height: 40px;
font-size: 16px;
border: none;
background: none;
outline: none;
border-bottom: 2px solid #adadad;
}

.txt_field label {
position: absolute;
top: 50%;
left: 5px;
color: #adadad;
transform: translateY(-50%);
font-size: 16px;
pointer-events: none;
transition: .5s;
}

.txt_field span::before {
content: '';
position: absolute;
top: 40px;
left: 0;
width: 0%;
height: 2px;
background: #00FF40;
transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
top: -5px;
color: #00FF40;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before {
width: 100%;
}

.pass {
margin: -5px 0 20px 5px;
color: #a6a6a6;
cursor: pointer;
}

.pass:hover {
text-decoration: underline;
}

input[type="submit"] {
width: 100%;
height: 50px;
border: 1px solid;
background: #F1C93B;
border-radius: 25px;
font-size: 18px;
color: #646464;
font-weight: 700;
cursor: pointer;
outline: none;
}

input[type="submit"]:hover {
border-color: #00FF40;
transition: .5s;
}

.signup_link {
margin: 30px 0;
text-align: center;
font-size: 16px;
color: #666666;
}

.signup_link a {
color: #00B12C;
text-decoration: none;
}

.signup_link a:hover {
text-decoration: underline;
}

.inforpic {
width: 38%;
position: absolute;
transform: translate(12%, -50%);
top: 50%;
left: 50%;
overflow: hidden;
border-radius: 8px;
box-shadow: 10px 25px 30px rgba(30, 30, 100, 0.3);
border: 1px solid rgba(255,255,255,0.45);
}

.inforpic1 {
width: 74%;
display: flex;
animation: slide 20s infinite linear;
}

@keyframes slide {
0%, 100% {
  transform: translateX(0);
}

30%{
  transform: translateX(-100%);
}

40%{
  transform: translateX(-200%);
}

70%{
  transform: translateX(-300%);
}

80% {
  transform: translateX(-200%);
}

90%{
  transform: translateX(-100%);
}

}


img{
width: 90%;
}

.logocdm {
width: 50%;
height: auto; /* Set height to auto for proportional scaling */
margin-bottom: 5%;
}

.logo {
display: flex;
position: absolute;
top: 18%;
left: 20%;
transform: translate(-50%, -50%); /* Center the image */
}

@media (max-width: 768px) {
.inforpic {
  width: 80%;
  transform: translate(-40%, -50%);
}

.inforpic1 {
  width: 100%;
}
}

.loader-wrapper {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(255, 255, 255, 0.8);
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}

@media (max-width: 1200px) {
body {
  --border-color: #FFC74FFB; /* Customizable color (orange in this case) */
}
img{
display: none;
}


.center {
  width: 60%;
  height: 60%;
  padding: 20px;
  border-radius: 16px;
  box-shadow: none;
  background: rgba(255,255,255,1);
  transform: translate(10%, -50%);
}


@media (max-width: 1500px) {
body {
  --border-color: #FFC74FFB; /* Customizable color (orange in this case) */
}
img{
display: none;
}
}

@media (max-width: 1300px) {
body {
  --border-color: #FFC74FFB; /* Customizable color (orange in this case) */
}
img{
display: none;
}

}
.center {
  width: 60%;
  height: 60%;
  padding: 20px;
  border-radius: 16px;
  box-shadow: none;
  background: rgba(255,255,255,1);
  transform: translate(10%, -50%);
}

.center h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

.center form {
  padding: 0;
  margin-bottom: 20px;
}

form .txt_field {
  margin: 10px 0;
}
.center h1 {
text-align: center;
color: #007222;
padding: 15px 0;
border-bottom: 1px solid silver;
}

.center form {
padding: 0 40px;
box-sizing: border-box;
}

form .txt_field {
position: relative;
margin: 30px 0;
}

.txt_field input {
width: 100%;
padding: 0 5px;
height: 40px;
font-size: 16px;
border: none;
background: none;
outline: none;
border-bottom: 2px solid #adadad;
}

.txt_field label {
position: absolute;
top: 50%;
left: 5px;
color: #adadad;
transform: translateY(-50%);
font-size: 16px;
pointer-events: none;
transition: .5s;
}

.txt_field span::before {
content: '';
position: absolute;
top: 40px;
left: 0;
width: 0%;
height: 2px;
background: #00FF40;
transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
top: -5px;
color: #00FF40;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before {
width: 100%;
}

.pass {
margin: -5px 0 20px 5px;
color: #a6a6a6;
cursor: pointer;
}

.pass:hover {
text-decoration: underline;
}

input[type="submit"] {
width: 100%;
height: 50px;
border: 1px solid;
background: #F1C93B;
border-radius: 25px;
font-size: 18px;
color: #646464;
font-weight: 700;
cursor: pointer;
outline: none;
}

input[type="submit"]:hover {
border-color: #00FF40;
transition: .5s;
}

.signup_link {
margin: 30px 0;
text-align: center;
font-size: 16px;
color: #666666;
}

.signup_link a {
color: #00B12C;
text-decoration: none;
}

.signup_link a:hover {
text-decoration: underline;
}
}
@media (max-width: 768px) {
body {
  --border-color: #FFC74FFB; /* Customizable color (orange in this case) */
}
img{
display: none;
}


.center {
  width: 80%;
  height: 60%;
  padding: 20px;
  border-radius: 16px;
  box-shadow: none;
  background: rgba(255,255,255,1);
  transform: translate(-5%, -50%);
}

.center h1 {
  font-size: 24px;
  margin-bottom: 10px;
}

.center form {
  padding: 0;
  margin-bottom: 20px;
}

form .txt_field {
  margin: 10px 0;
}
.center h1 {
text-align: center;
color: #007222;
padding: 15px 0;
border-bottom: 1px solid silver;
}

.center form {
padding: 0 40px;
box-sizing: border-box;
}

form .txt_field {
position: relative;
margin: 30px 0;
}

.txt_field input {
width: 100%;
padding: 0 5px;
height: 40px;
font-size: 16px;
border: none;
background: none;
outline: none;
border-bottom: 2px solid #adadad;
}

.txt_field label {
position: absolute;
top: 50%;
left: 5px;
color: #adadad;
transform: translateY(-50%);
font-size: 16px;
pointer-events: none;
transition: .5s;
}

.txt_field span::before {
content: '';
position: absolute;
top: 40px;
left: 0;
width: 0%;
height: 2px;
background: #00FF40;
transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label {
top: -5px;
color: #00FF40;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before {
width: 100%;
}

.pass {
margin: -5px 0 20px 5px;
color: #a6a6a6;
cursor: pointer;
}

.pass:hover {
text-decoration: underline;
}

input[type="submit"] {
width: 100%;
height: 50px;
border: 1px solid;
background: #F1C93B;
border-radius: 25px;
font-size: 18px;
color: #646464;
font-weight: 700;
cursor: pointer;
outline: none;
}

input[type="submit"]:hover {
border-color: #00FF40;
transition: .5s;
}

.signup_link {
margin: 30px 0;
text-align: center;
font-size: 16px;
color: #666666;
}

.signup_link a {
color: #00B12C;
text-decoration: none;
}

.signup_link a:hover {
text-decoration: underline;
}
}

</style>




<div class="inforpic">
<div class="inforpic1">
  <img src="dsa1.jpeg" alt="cdmordernow" class="active">
  <img src="Payroll.jpeg" alt="cdmordernow1"class="active">
  <img src="payroll2.jpeg" alt="cdmordernow2"class="active">
  <img src="pic4.jpg" alt="cdmordernow" class="active">
  <img src="pic2.jpg" alt="cdmordernow" class="active">

</div>

</div>  
<div class="center">
    <h1>Sign in</h1>
    <form method="post" id="loginForm">
    <div class="txt_field">
              <input type="text" name="username" required>
              <span></span>
              <label>Username</label>
      </div>
              <div class="txt_field">
              <input type="password" name="password" required>
              <span></span>
              <label>Password</label>
              </div>
              
      <div class="pass" ><a href="forgot.php" class="pass">Forgot Password?</div>

      <div class="signup_link">
      <input id="button" type="submit" value="Log in"><br><br>

      </div>
      
  </form>
  
</div>


</body>
</html>   