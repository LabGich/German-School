<?php $session = session(); ?>
<header id="header" class="fixed-top mb-4 ">
  <div class="container d-flex align-items-center">

    <!--<h1 class="logo me-auto"><a href="/public/">F.L.C. Mombasa </a></h1>-->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/" class="logo me-auto"><img src="/public/assets/logo.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="/public/">Home</a></li>
        <li><a href="/public/About">About</a></li>
        <li><a href="/public/Courses">Courses</a></li>
        <!--<li class="dropdown"><a href="/public/Attendance"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>-->
        <!--  <ul>-->
        <!--    <li><a href="/public/Attendance">Attendance</a></li>-->
        <!--    <li><a href="/public/Homework">Homework</a></li>-->
        <!--  </ul>-->
        <!--</li>-->
        <!-- <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li> -->
        <!-- Events and Trainers we will come to that -->
        <li class="dropdown"><a href="#"><span>Fee Structure</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/public/Feestructurearabic">Arabic Course</a></li>
            <li><a href="/public/Feestructurechinese">Chinese Course</a></li>
            <li><a href="/public/Feestructureenglish">English Course</a></li>
            <li><a href="/public/Feestructurefrench">French Course</a></li>
            <li><a href="/public/Feestructuregerman">German Course</a></li>
            <li><a href="/public/Feestructureitalian">Italian Course</a></li>
            <li><a href="/public/Feestructurejapanese">Japanese Course</a></li>
            <li><a href="/public/Feestructureportuguese">Portuguese Course</a></li>
            <li><a href="/public/Feestructurespanish">Spanish Course</a></li>
            <li><a href="/public/Feestructureswahili">Swahili Course</a></li>
          </ul>
        </li>     
         <?php if ($session->usertype === 'Admin') { ?>
        <li class="dropdown"><a href="#"><span>Lists</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/public/userlist">User List</a></li>
            <li><a href="/public/Enrollmentlist">Enrollment List</a></li>
            <li><a href="/public/Scholarshiplist">Scholarship List</a></li>
            <li><a href="/public/Addinstructor">Add Instructor</a></li>
          </ul>
        </li>
        <?php } ?>
        <li><a href="/public/Scholarship">Apply Scholarship</a></li>
        <li><a href="/public/Contact">Contact</a></li>         
        <?php if (!$session->username){ ?>
        <li class="dropdown"><a href="#"><span>Portal Login<i class="bi bi-chevron-down"></i></span></a>
          <ul>
          <li><a href="/public/Loginstaff">Staff Portal</a></li>
            <li><a href="/public/Login">Student Portal</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <?php if (!$session->username){ ?>
      <a href="/public/Admission" class="get-started-btn">Apply Today</a>
      <?php } ?>
      <?php if (($session->username)){ ?>
            <a href="/public/Logout" class="get-started-btn"><i class="bi bi-file-lock-fill"> </i> Logout</a>
            <a href="/public/Profile" class="get-started-btn"><i class="bi bi-file-lock-fill"> </i> Dashboard</a>
        <?php } ?>
  </div>
</header><!-- End Header -->