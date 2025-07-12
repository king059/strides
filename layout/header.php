
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="PLACEHOLDER_TOKEN_FROM_BACKEND">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/image/logo.png">
    <title>Partnership - Homepage</title>
    
</head>
<body>

    <!-- Scripts -->
    <script src="../js/vendor/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <!-- Header -->
    <header class="sticky-top bg-accent-color">
        <div class="r-container">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid">
                    <div class="logo-container">
                        <a class="navbar-brand" href="../"><img src="../assets/image/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleIcon(this)">
                        <img src="../assets/icons/align-3-right.svg" alt="Icon" class="icon-img"/>                        
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto mb-2 mb-xl-0 gap-xl-3 gap-2">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                    <li><a class="dropdown-item" href="faq.php">FAQs</a></li>
                                    <li><a class="dropdown-item" href="team.php">Team</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="service.php">Services</a></li>
                                    <li><a class="dropdown-item" href="service_detail.php">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu"> 
                                    <li>
                                        <div style="background-color: blue; color: white; max-width: 100%; display: flex; align-items: center; text-align: center; justify-content: center;">
                                            <strong class="">Home pages</strong>
                                        </div>
                                        
                                    
                                    <ul>                                 
                                    <li><a class="dropdown-item" href="../Auth/newpass.php">Reset Password</a></li>
                                    <li><a class="dropdown-item" href="../Auth/forget.php">Forget Password</a></li>
                                    <li><a class="dropdown-item" href="../Auth/2fa.php">2fa</a></li>
                                    <li><a class="dropdown-item" href="../Auth/verify.php">Verify</a></li>
                                    <li><a class="dropdown-item" href="../Auth/kyc.php">KYC</a></li>
                                    <li><a class="dropdown-item" href="404.php">404 Error</a></li>
                                    </ul>
                                    </li>

                                    <li>
                                        <div style="background-color: blue; color: white; max-width: 100%; display: flex; align-items: center; text-align: center; justify-content: center;">
                                        <strong>Dashboard pages</strong>
                                        </div>
                                        <ul>
                                            <!-- <li><a class="dropdown-item" href="../user/dashboard.php">Dashboard</a></li> -->
                                            <li><a class="dropdown-item" href="../user/dashboard.php">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="404.php">404 Error</a></li>
                                            <li><a class="dropdown-item" href="404.php">404 Error</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <div class="mb-xl-0 mb-3">
                            <a href="../user/login.php" class="btn btn-accent px-5 py-3 rounded-pill">Access</a>
                            <!-- {If Session active
                            <a href="../user/dashboard.php" class="btn btn-accent px-5 py-3 rounded-pill">Portal</a>
                            endIF}-->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->