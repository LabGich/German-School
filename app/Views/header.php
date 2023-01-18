<?php $session = session(); ?>
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <!--<h1 class="logo me-auto"><a href="/">F.L.C. Mombasa </a></h1>-->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/" class="logo me-auto"><img src="/assets/logo.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/About">About</a></li>
        <li class="dropdown"><a href="/Courses"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/Courses">Arabic Course</a></li>
            <li><a href="/Courses">Chinese Course</a></li>
            <li><a href="/Courses">English Course</a></li>
            <li><a href="/Courses">French Course</a></li>
            <li><a href="/Courses">German Course</a></li>
            <li><a href="/Courses">Italian Course</a></li>
            <li><a href="/Courses">Japanese Course</a></li>
            <li><a href="/Courses">Spanish Course</a></li>
            <li><a href="/Courses">Swahili Course</a></li>
          </ul>
        </li>
        <!--<li class="dropdown"><a href="/Attendance"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>-->
        <!--  <ul>-->
        <!--    <li><a href="/Attendance">Attendance</a></li>-->
        <!--    <li><a href="/Homework">Homework</a></li>-->
        <!--  </ul>-->
        <!--</li>-->
        <!-- <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li> -->
        <!-- Events and Trainers we will come to that -->
        <li class="dropdown"><a href="#"><span>Fee Structure</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/Feestructurearabic">Arabic Course</a></li>
            <li><a href="/Feestructurechinese">Chinese Course</a></li>
            <li><a href="/Feestructureenglish">English Course</a></li>
            <li><a href="/Feestructurefrench">French Course</a></li>
            <li><a href="/Feestructuregerman">German Course</a></li>
            <li><a href="/Feestructureitalian">Italian Course</a></li>
            <li><a href="/Feestructurejapanese">Japanese Course</a></li>
            <li><a href="/Feestructurespanish">Spanish Course</a></li>
            <li><a href="/Feestructureswahili">Swahili Course</a></li>
          </ul>
        </li>        
        <li><a href="/Scholarship">Apply Scholarship</a></li>
        <li><a href="/Contact">Contact</a></li>         
        <?php if (!isset($_SESSION['username'])){ ?>
        <li class="dropdown"><a href="#"><span>Portal Login<i class="bi bi-chevron-down"></i></span></a>
          <ul>
          <li><a href="/Loginstaff">Staff Portal</a></li>
            <li><a href="/Login">Student Portal</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <?php if (!isset($_SESSION['username'])){ ?>
      <a href="/Admission" class="get-started-btn">Apply Today</a>
      <?php } ?>
      <?php if (isset($_SESSION['username'])){ ?>
            <a href="/Logout" class="get-started-btn"><i class="bi bi-file-lock-fill"></i>Logout</a>
        <?php } ?>
  </div>
</header><!-- End Header -->