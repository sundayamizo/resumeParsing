<!DOCTYPE html>
<html>
<title>Resume Processing</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/style-torquoise.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
</style>
<body>
<!-- Navbar -->
<ul class="w3-navbar w3-theme w3-top w3-left-align" style="z-index:4;">
  <li class="w3-opennav w3-right w3-hide-large">
    <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-theme-l1">RESUME LOGO</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-hover-teal">Resume</a></li>
  <li class="w3-hide-small"><a href="#" class="w3-hover-teal">Resume</a></li>

</ul>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:200px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-torquoise w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <a href="#" class="w3-hover-torquoise">Resume</a>
  <a href="#" class="w3-hover-torquoise">Resume</a>

</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:200px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
 <!-- PHP START -->
    <?php
if(isset($_POST['submitform'])){
    //filename.....
$filename = $_POST['name'];
$filename .= "_Resume.txt";
// open a file or create a file if not exists....
$myfile = fopen($filename, "w") or die("Unable to open file!");

//Applicant's name...
// $name = "Anything";
$name = $_POST['name'];
$name .= "\n";
$email = $_POST['email'];
$email .= "\n";
$fname = $_POST['fname'];
$fname .= "\n";
$addr = $_POST['addr'];
$addr .= "\n";
$exp = $_POST['exp'];
$exp .= "\n";
$qfn = $_POST['qfn'];
$qfn .= "\n";
$about = $_POST['about'];

// write all data to the file...
if(fwrite($myfile, $name)&&fwrite($myfile, $email)&&fwrite($myfile, $fname)&&fwrite($myfile, $addr)&&fwrite($myfile, $qfn)&&fwrite($myfile, $exp)&&fwrite($myfile, $about))
{
    ?>
    <div class="w3-container w3-section w3-green">
<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>

  <p>Data Entered Successfully!</p>
</div>
<?php
}
else{
    ?>

    <div class="w3-container w3-section w3-red">
<span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
  <p>Error while Entering Data!</p>
</div>
<?php
}
fclose($myfile);
}
?>

<!-- PHP END -->

      <h1 class="w3-text-teal">Please Fill Up The Form!</h1>
<p>

    <form action="resume2txt.php" method="post" class="w3-container">
            <label class="w3-label">Name</label>
            <input name="name" class="w3-input" type="text" required>
            <br/>
            <label class="w3-label">Email</label>
            <input class="w3-input" type="email" name="email" required >
            <br/>
            <label class="w3-label">Father's Name</label>
            <input name="fname" class="w3-input" type="text" required>
            <br/>
            <label class="w3-label">Address</label>
            <input name="addr" class="w3-input" type="text" required>
            <br/>
            <label class="w3-label">Qualification</label>
            <input name="qfn" class="w3-input" type="text" required>
            <br/>
            <label class="w3-label">Experience</label>
            <input name="exp" class="w3-input" type="text" required>
            <br/>
            <label class="w3-label">About</label>
            <input name="about" class="w3-input" type="text" required>
            <br/>
            <input type="hidden" value="TRUE" name="submitform" >
            <button class="w3-btn w3-teal">Submit</button>

    </form>
</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-16 w3-center">Some Info</p>
      <p class="w3-border w3-padding-medium w3-padding-16 w3-center">Some Info</p>
    </div>
  </div>

</div>


<script>
var mySidenav = document.getElementById("mySidenav");
var overlayBg = document.getElementById("myOverlay");
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

<div class="" style="padding:16px; background-color:teal;color:white;text-align:center;">
&copy; Some Rights Reserved!
</div>
</body>
</html>

