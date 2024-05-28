<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Function to display the schedule
function displaySchedule() {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "cdmips");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the user's schedule from the database
    $username = $_SESSION['username'];
    $stmt = $conn->prepare("SELECT Schedule FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Return the schedule as a string
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $schedule = $row['Schedule'];
        return $schedule;
    } else {
        return "No schedule found.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Dashboard</title>
</head>
<body>

<h3 class="fixed-h3">WORK SCHEDULE</h3>
<h2 class="fixed-h2">Your work schedule is from <?php echo displaySchedule(); ?></h2>

</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CDMIPS</title>
  <link rel="stylesheet" href="mainstyle.css">
  <script src="https://kit.fontawesome.com/c6ccbaf82d.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="navbar">
  <div class="navbar_right">
    <a href="#" title="Settings"><i class="fa-solid fa-gear navbar_icon"></i></a>
    <a href="profile.php" title="Profile"><i class="fa-solid fa-circle-user navbar_icon"></i></a>
  </div>
  </div>
  <div class="side_bar active" id="sidebar">
    <div class="logo">
      <a href="dashboard.php">
        <img src="logo\cdm-logo.png" alt="logo1" class="cdm-logo">
        CDM<span class="ips">IPS</span>
        <img src="logo\cdm-ics.png" alt="logo2" class="ics-logo">
      </a>
    </div>
    <ul>
      <li><a href="main.php"><i class="fa-solid fa-house-chimney"></i> Dashboard</a></li>
      <li><a href="schedule.php" title="Schedule"><i class="fa-sharp fa-regular fa-calendar-days"></i> Schedule</a></li>
      <li><a href="exeception.php" title="Submit Exception"><i class="fa-solid fa-circle-exclamation"></i> Submit Exception</a></li>
      <li><a href="#" title="Work Report"><i class="fa-regular fa-rectangle-list"></i> Work Report</a></li>
      <li><a href="#" title="Payroll Report"><i class="fa-solid fa-money-check"></i> Payroll Report</a></li>
    </ul>
      <div class="footer">
        <p> cdmpayrollsys@gmail.com</p>
        
<a href="logout.php">Logout</a>
      </div>
  </div>
  <script src="mainscript.js"></script>
</body>
</html>