
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-shadow navbar-semi-light bg-primary">
        <div class="navbar-wrapper">
            <div class="navbar-header expanded">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                    <img class="brand-logo" alt="modern admin logo" src="../images/logo.png">
                    <!-- <h3 class="brand-text">Admin Dashboard</h3></a></li> -->
                <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
            </div>
            <div class="navbar-container content">
            <div class="collapse navbar-collapse row no-gutters justify-content-end" id="navbar-mobile">
                
                <ul class="nav navbar-nav ">
                
                
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 mb-0 user-name text-bold-700"><?php echo $_SESSION['username']; ?></span></a>
                        <div class="dropdown-menu dropdown-menu-right">                        
                            <a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>