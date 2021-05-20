<!DOCTYPE html>

        <!--header-->
        <header class="header">
            <div class="header-quickLinks js-header-quickLinks d-lg-none">
                <div class="quickLinks-top js-quickLinks-top"></div>
                <div class="js-quickLinks-wrap-m">
                </div>
            </div>
            <div class="header-topline d-none d-lg-flex">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto d-flex align-items-center">
                            <div class="header-info"><i class="icon-placeholder2"></i>1560 Holden Street San Diego, CA 92139
                            </div>
                            <div class="header-phone"><i class="icon-telephone"></i><a
                                    href="tel:1-847-555-5555">1-800-267-0000</a></div>
                            <div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <div class="col-lg-2 d-flex align-items-lg-center">
                            <a href="index.html" class="header-logo"><img src="images/logo.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="col-lg ml-auto header-nav-wrap">
                            <div class="header-nav js-header-nav">
                                <nav class="navbar navbar-expand-lg btco-hover-menu">
                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="programs.php">Programs</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="doctors.php">Doctors</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="gyms.php">Gym</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="restaurant.php">Restaurants</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="tips.php">Tips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="homemade.php">Homemade Food</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Are you?</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="doctor/index.php">Doctor</a></li>
                                                    <li><a class="dropdown-item" href="homemade/index.php">Handmade food maker?</a></li>
                                                </ul>
                                            </li>
                                            <?php
                                            if (!isset($_SESSION['username'])) {
                                                echo "<li class='nav-item'>
                                                <a class='nav-link' href='login.php'>login</a>
                                                </li>";
                                            }
                                            else{
                                                echo  "<li class='nav-item dropdown'>
                                                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                                        Welcome, ".$_SESSION['full_name']."
                                                    </a>
                                                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                                        <a class='dropdown-item' href='profile.php'>Profile</a>
                                                        <a class='dropdown-item' href='logout.php'>Logout</a>
                                                    </div>
                                                </li>";
                                            }
                                            ?>
                                            
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>