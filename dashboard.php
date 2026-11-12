<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nevexa - PG & Hostel Management</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stlye.css">
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>

   
    
   <header class="main-header">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/NEVEXA Logo.png" alt="NEVEXA  logo">
        <!-- <span>PG & HOSTEL MANAGEMENT</span> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto nav-links align-items-lg-center">
          <li class="nav-item"><a class="active" href="index.php">Home</a></li>
          <li class="nav-item"><a href="about.php">About</a></li>
          <li class="nav-item"><a href="features.php">Features</a></li>
          <li class="nav-item"><a href="food_menu.php">Food Menu</a></li>
          <li class="nav-item"><a href="dashboard.php">dashboard</a></li>
          <li class="nav-item"><a href="contact.php">Contact</a></li>
          <li class="nav-item d-flex flex-column flex-lg-row gap-2 mt-2 mt-lg-0">
  
             <a href="login.php" class="login-link">Login</a>
                    <a href="singup.php" class="login-link">singup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    
<!-- Main Content -->
<main class="main-content">

    <!-- Topbar -->
    <header class="topbar">
        <div>
            <h5>Dashboard Overview</h5>
            <p>Welcome back! Here is your hostel summary.</p>
        </div>

        <div class="top-actions">
            <a href="#notices" class="icon-btn" aria-label="Notices">
                <i class="bi bi-bell"></i>
            </a>

            <div class="profile">
                <div class="profile-avatar">
                    <i class="bi bi-person"></i>
                </div>
                <div>
                    <h6>Admin User</h6>
                    <small>Hostel Administrator</small>
                </div>
            </div>
        </div>
    </header>

    <!-- Welcome Banner -->
    <section class="welcome-banner">
        <div>
            <h2>Welcome to NEVEXA Dashboard!</h2>

            <p>
                Manage hostel complaints, maintenance, food menus
                and facilities from one organized dashboard.
            </p>

            <a href="#complaints" class="btn btn-light">
                View Complaints
                <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="welcome-icon">
            <i class="bi bi-buildings"></i>
        </div>
    </section>

    <!-- Statistics -->
    <section class="row g-3 mb-4">

        <div class="col-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <span class="stat-note">Students</span>
                </div>
                <h3>248</h3>
                <p>Total Registered Students</p>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <span class="stat-note">Complaints</span>
                </div>
                <h3>32</h3>
                <p>Total Complaints</p>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <i class="bi bi-tools"></i>
                    </div>
                    <span class="stat-note">Pending</span>
                </div>
                <h3>08</h3>
                <p>Pending Maintenance</p>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <span class="stat-note">Overall</span>
                </div>
                <h3>92%</h3>
                <p>Hostel Health Score</p>
            </div>
        </div>

    </section>

    <!-- Complaints and Food Menu -->
    <section class="row g-4 mb-4">

        <!-- Complaints -->
        <div class="col-lg-7" id="complaints">
            <div class="content-card">

                <div class="card-heading">
                    <h5>Recent Complaints</h5>
                    <a href="#maintenance" class="view-link">View All</a>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Room Light Not Working</h6>
                        <p>Room 204 · Complaint #NV101</p>
                    </div>
                    <span class="status pending">Pending</span>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-droplet"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Water Leakage</h6>
                        <p>Room 108 · Complaint #NV102</p>
                    </div>
                    <span class="status progress">In Progress</span>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-fan"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Ceiling Fan Repair</h6>
                        <p>Room 305 · Complaint #NV103</p>
                    </div>
                    <span class="status completed">Completed</span>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Wi-Fi Connection Issue</h6>
                        <p>Study Room · Complaint #NV104</p>
                    </div>
                    <span class="status pending">Pending</span>
                </div>

            </div>
        </div>

        <!-- Food Menu -->
        <div class="col-lg-5" id="food-menu">
            <div class="content-card">

                <div class="card-heading">
                    <h5>Today's Food Menu</h5>
                    <span class="view-link">Daily Menu</span>
                </div>

                <div class="food-item">
                    <div class="food-icon">🍳</div>
                    <div class="food-info">
                        <h6>Breakfast</h6>
                        <p>Poha, Tea & Fruits</p>
                    </div>
                    <span class="food-time">8:00 AM</span>
                </div>

                <div class="food-item">
                    <div class="food-icon">🍛</div>
                    <div class="food-info">
                        <h6>Lunch</h6>
                        <p>Roti, Dal, Rice & Sabzi</p>
                    </div>
                    <span class="food-time">1:00 PM</span>
                </div>

                <div class="food-item">
                    <div class="food-icon">☕</div>
                    <div class="food-info">
                        <h6>Evening Snacks</h6>
                        <p>Tea & Sandwich</p>
                    </div>
                    <span class="food-time">5:00 PM</span>
                </div>

                <div class="food-item">
                    <div class="food-icon">🍲</div>
                    <div class="food-info">
                        <h6>Dinner</h6>
                        <p>Roti, Paneer & Rice</p>
                    </div>
                    <span class="food-time">8:00 PM</span>
                </div>

            </div>
        </div>

    </section>

    <!-- Health Score and Maintenance -->
    <section class="row g-4 mb-4" id="maintenance">

        <!-- Health Score -->
        <div class="col-lg-6" id="health-score">
            <div class="content-card">

                <div class="card-heading">
                    <h5>Hostel Health Score</h5>
                    <i class="bi bi-heart-pulse fs-4"
                       style="color:#3979d8;"></i>
                </div>

                <div class="health-score">
                    <div class="score-circle">
                        <h3>92%</h3>
                        <small>Excellent</small>
                    </div>

                    <div>
                        <h6>Great Hostel Condition!</h6>
                        <p>
                            Your hostel is maintaining a good standard
                            of cleanliness, facilities and maintenance.
                        </p>
                    </div>
                </div>

                <div class="progress-label">
                    <span>Cleanliness</span>
                    <strong>95%</strong>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:95%"></div>
                </div>

                <div class="progress-label">
                    <span>Maintenance</span>
                    <strong>88%</strong>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:88%"></div>
                </div>

                <div class="progress-label">
                    <span>Safety & Facilities</span>
                    <strong>93%</strong>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:93%"></div>
                </div>

            </div>
        </div>

        <!-- Maintenance Summary -->
        <div class="col-lg-6">
            <div class="content-card">

                <div class="card-heading">
                    <h5>Maintenance Overview</h5>
                    <i class="bi bi-wrench-adjustable fs-4"
                       style="color:#3979d8;"></i>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-fan"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Fan & Electrical Check</h6>
                        <p>Block A · Scheduled maintenance</p>
                    </div>
                    <span class="status progress">Scheduled</span>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-droplet-half"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Water Purifier Service</h6>
                        <p>Block B · Service required</p>
                    </div>
                    <span class="status pending">Due Soon</span>
                </div>

                <div class="complaint-item">
                    <div class="complaint-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="complaint-info">
                        <h6>Safety Inspection</h6>
                        <p>Common areas · Routine check</p>
                    </div>
                    <span class="status completed">Completed</span>
                </div>

                <div class="mt-4 p-3 rounded-3"
                     style="background:#edf4ff;">
                    <h6 class="fw-bold mb-2"
                        style="color:#102b50;">
                        <i class="bi bi-info-circle me-2"></i>
                        Maintenance Reminder
                    </h6>
                    <p class="small mb-0" style="color:#60718a;">
                        Review pending issues regularly to help
                        keep hostel facilities in good condition.
                    </p>
                </div>

            </div>
        </div>

    </section>

    <!-- Recent Activity and Notices -->
    <section class="row g-4" id="activity">

        <div class="col-lg-7">
            <div class="content-card">

                <div class="card-heading">
                    <h5>Recent Activity</h5>
                    <a href="#activity" class="view-link">Activity Log</a>
                </div>

                <div class="activity-item">
                    <div class="activity-dot">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <div>
                        <h6>Fan Repair Completed</h6>
                        <p>Room 305 · Sample activity record</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-dot">
                        <i class="bi bi-chat-left-text"></i>
                    </div>
                    <div>
                        <h6>New Complaint Reported</h6>
                        <p>Room 204 · Light issue reported</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-dot">
                        <i class="bi bi-megaphone"></i>
                    </div>
                    <div>
                        <h6>Hostel Notice Updated</h6>
                        <p>Sample announcement for hostel residents</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-5" id="notices">
            <div class="content-card">

                <div class="card-heading">
                    <h5>Important Notices</h5>
                    <i class="bi bi-megaphone fs-4"
                       style="color:#3979d8;"></i>
                </div>

                <div class="activity-item">
                    <div class="activity-dot">
                        <i class="bi bi-calendar-event"></i>
                    </div>
                    <div>
                        <h6>Scheduled Maintenance</h6>
                        <p>Water purifier servicing is planned. Confirm the schedule with the administrator.</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-dot">
                        <i class="bi bi-bell"></i>
                    </div>
                    <div>
                        <h6>Report Facility Issues</h6>
                        <p>Report broken equipment promptly for timely attention.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

<!-- FOOTER start -->
    <footer>
  <div class="footer-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h5>NEVEXA</h5>
          <p>Smart PG and Hostel Maintenance Management System. Making hostel operations organized and efficient.</p>
          <!-- YE RAHE ICONS -->
          <div class="footer-social mt-3">
            <a href="https://www.facebook.com/techsima22"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.youtube.com/@techsima"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.instagram.com/techsima22/"><i class="fa-brands fa-instagram"></i></a>
             <a href="https://www.linkedin.com/in/techsima"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
        <div style="flex:1; min-width:150px;">
        <h5>Quick Links</h5>
        <a class="f-link" href="#">Home</a>
        <a class="f-link" href="#">About Us</a>
        <a class="f-link" href="#">Key Features</a>
        <a class="f-link" href="#">How It Works</a>
        <a class="f-link" href="#">Privacy Policy</a>
      </div>

      <div style="flex:1; min-width:150px;">
        <h5>Services</h5>
        <a class="f-link" href="#">Room & Bed Management</a>
        <a class="f-link" href="#">Food Menu & Mess</a>
        <a class="f-link" href="#">QR Based Complaint Alert</a>
        <a class="f-link" href="#">Health & Maintenance</a>
        <a class="f-link" href="#">Asset History Tracking</a>
      </div>

      <div style="flex:1; min-width:180px;">
        <h5>Contact Us</h5>
        <p style="margin-bottom:8px;"> support@nevexa.com</p>
        <p style="margin-bottom:8px;"> +91 98765 43210</p>
        <p style="margin-bottom:12px;"> Lucknow, UP - 226001</p>
        <a class="f-link" style="color:white; border:1px solid #2a3452; display:inline-block; padding:6px 12px; border-radius:6px;" href="#">Contact Us →</a>
      </div>
    </div>

    <!-- RIGHT SIDE TEXT -->
    <div class="copyright-row">
      <span>© 2026 Nevexa. All rights reserved.</span>
    </div>
  </div>

  <div class="footer-red">
    © 2026 NEVEXA Project | Smart Hostel Management - Complaint Tracking, Food Management, Health Monitoring & Asset History | Designed & Developed by Techsima Team
  </div>
</div>
</footer>
</body>

</html