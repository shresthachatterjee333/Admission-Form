<?php
$first=$_POST['first'];
$last=$_POST['last'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
if(isset($gender) && $gender=='m')
    $gen="Male";
else if(isset($gender) && $gender=='f')
    $gen="Female";
else
    $gen="Not Selected";
$father=$_POST['father'];
$occ1 = $_POST['occ1'];
$mother=$_POST['mother'];
$occ2 = $_POST['occ2'];
$phone1= $_POST['phone1'];
$phone2= $_POST['phone2'];
$add1=$_POST['add1'];
$email=$_POST['email'];
$school1=$_POST['school1'];
$board1=$_POST['board1'];
if(isset($board1) && $board1=='IC')
    $boar1="ICSE";
else if(isset($board1) && $board1=='CB')
    $boar1="CBSE";
else if(isset($board1) && $board1=='WB')
    $boar1="WBCHSE";
else
    $boar1="Not Selected";
$per1 = $_POST['per1'];
$school2=$_POST['school2'];
$board2=$_POST['board2'];
if(isset($board2) && $board2=='IC')
    $boar2="ICSE";
else if(isset($board2) && $board2=='CB')
    $boar2="CBSE";
else if(isset($board2) && $board2=='WB')
    $boar2="WBCHSE";
else
    $boar2="Not Selected";
$stream=$_POST['stream'];
    if(isset($stream) && $stream=='S')
        $stre="Science";
    else if(isset($stream) && $stream=='C')
        $stre="Commerce";
    else if(isset($stream) && $stream=='H')
        $stre="Humanities";
    else
        $stre="Not Selected";
$per2 = $_POST['per2'];
$course = $_POST['course'];
$per3 = $_POST['per3'];
$dob1 = $_POST['dob1'];
$res1 = $_POST['res1'];
$res2 = $_POST['res2'];
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark nav">
        <div class="container-fluid">
          <a class="navbar-brand menu1" href="javascript:void(0)">Andrew College</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item m1">
                <a href="./home.html" class="nav-link menu" href="javascript:void(0)">Home</a>
              </li>
              <li class="nav-item m1">
                <a href="./about.html" class="nav-link menu" href="javascript:void(0)">About Us</a>
              </li>
              <li class="nav-item m1">
                <a href="./index.html" class="nav-link menu" href="javascript:void(0)">Admission Form</a>
              </li>
              <li class="nav-item m1">
                <a href="./contact.html" class="nav-link menu" href="javascript:void(0)">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2 btm1" type="text" placeholder="Search">
              <button class="btn btn-primary btm" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
<form action="" method="post">
<div class="mid">
    <div class="midrap">
    <table>
        <tr>
            <th> First Name:</th>
            <th>    </th>
            <th> Last Name:</th>
            <th>    </th>
            <th> Date Of Birth:</th>
            <th>    </th>
            <th>Gender</th>
        </tr>
        <tr>
            <th><input type="text" name="first" value="<?php echo($first) ?>" ></th>
            <th>    </th>
            <th><input type="text" name="last" value="<?php echo($last) ?>"></th>
            <th>    </th>
            <th><input type="text" name="dob" value="<?php echo($dob) ?>"></th>
            <th>    </th>
            <th><input type="text" name="gender" value="<?php echo($gen)?>"></th>
        </tr>
        <tr>
            <th> Father's Name:</th>
            <th>    </th>
            <th> Father's Occupation:</th>
            <th>    </th>
            <th> Mother's Name:</th>
            <th>    </th>
            <th> Mother's Occupation:</th>
        </tr>
        <tr> 
               <th><input type="text" name="father" value="<?php echo($father) ?>"></th>
               <th>    </th>
               <th><input type="text" name="occ1" value="<?php echo($occ1) ?>"></th>
               <th>    </th>
               <th><input type="text" name="mother" value="<?php echo($mother) ?>"></th>
               <th>    </th>
               <th><input type="text" name="occ2" value="<?php echo($occ2) ?>"></th>
        </tr>
        <tr>
            <th> Phone Number:</th>
            <th>    </th>
            <th> Alternate Phone Number:</th>
            <th>    </th>
            <th> Address:</th>
            <th>    </th>
            <th> Email:</th>
        </tr>
         <tr> 
              <th><input type="text" name="phone1" value="<?php echo($phone1) ?>"></th>
              <th>    </th>
              <th><input type="text" name="phone2" value="<?php echo($phone2) ?>"></th>
              <th>    </th>
              <th><input type="text" name="add1" value="<?php echo($add1) ?>"></th>
              <th>    </th>
              <th><input type="text" name="email" value="<?php echo($email) ?>"></th>
        </tr>
        <tr>
            <th> Class 10 th school name:</th>
            <th>    </th>
            <th> Class 10 th board name:</th>
            <th>    </th>
            <th> Class 10 th overall percentage:</th>
            <th>    </th>
            <th> Class 12 th school name:</th>
        </tr>
        <tr>  
              <th><input type="text" name="school1" value="<?php echo($school1) ?>"></th>
              <th>    </th>
              <th><input type="text" name="board1" value="<?php echo($boar1)?>"></th>
              <th>    </th>
              <th><input type="text" name="per1" value="<?php echo($per1) ?>"></th>
              <th>    </th>
              <th><input type="text" name="school2" value="<?php echo($school2) ?>"></th>
        </tr>
        <tr>
            <th> Class 12 th board name:</th>
            <th>    </th>
            <th> Class 12 th stream:</th>
            <th>    </th>
            <th> Class 12 percentage:</th>
            <th>    </th>
            <th> Course where you want to take the admission :</th>
        </tr>
        <tr> 
       <th><input type="text" name="board2" value="<?php echo($boar2)?>"></th>
       <th>    </th>
       <th><input type="text" name="stream" value="<?php echo($stre)?>"></th>
       <th>    </th>
       <th><input type="text" name="per2" value="<?php echo($per2) ?>"></th>
       <th>    </th>
       <th><input type = "text" name="course" value="<?php echo($course) ?>"></th>
        </tr>
        <tr>
            <th> Course percentage:</th>
            <th>    </th>
            <th> Birth Certificate:</th>
            <th>    </th>
            <th> Class 10 th Result:</th>
            <th>    </th>
            <th> Class 12 th Result:</th>
        </tr>
        <tr>    <th><input type="text" name="per3" value="<?php echo($per3) ?>"></th>
        <th>    </th>
        <th><input type="file" name="dob1" value="<?php echo($dob1) ?>" ></th>
        <th>    </th>
        <th><input type="file" name="res1" value="<?php echo($res1) ?>" ></th>
        <th>    </th>
        <th><input type="file" name="res2" value="<?php echo($res2) ?>" ></th>
        </tr>
    </table>
</div>
</div>
</form>
  <!-- Footer -->
  <footer class="text-center text-lg-start bg text f1">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span></span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 f2">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4 f2">
              <i class="fas fa-gem me-3"></i>College
            </h6>
            <p>
              Andrew College, established in 1956,14 August; is an undergraduate college in Kolkata, West Bengal,
              India. It is affiliated with the University of Calcutta. The name commemorates the legacy of Sir Andrew
              the first Indian vice-chancellor of the University of Calcutta.
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 f2">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact </h6>
            <p><i class="fas fa-home me-3"></i> 51/71 Dum Dum Road,Kolkata - 700074</p>
            <p>
              <i class="fas fa-envelope me-3 f2"></i>
              andrewindex.com
            </p>
            <p><i class="fas fa-phone me-3"></i> 9051612094</p>
            <p><i class="fas fa-print me-3"></i> 9836016395</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:Shrestha Chatterjee
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
