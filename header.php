
<div class="content-wrapper">
    <header class="wrapper bg-soft-primaryheader">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light;navbar-color:#FFB6C1">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.php">
              <img src="./assets/img/logof.png" alt="logo" srcset="./assets/img/logof.png 4x">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-black fs-30 mb-0 text-white">Shaadi Mubarak</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
              <li>
                  <a class="nav-link" href="./index.php" >HOME</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">US</a>
                  <ul class="dropdown-menu">
          
                      <li class="nav-item"><a class="dropdown-item" href="./our-team.php">Our Team</a>
                      </li>
                    <li class="nav-item"><a class="dropdown-item" href="./contact-us.php">Contact Us</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="./destinations.php">Destinations</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./food.php">Food</a>
                      </li>
                      <li class="nav-item"><a class="dropdown-item" href="./photography.php">Photography</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./sound-light.php">Sound and Lights</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./mehndi.php">Mehendi</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./invite.php">Invitation Cards</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./invite.php">Transport</a></li>
                  </ul>
                </li>
                
<!--
                <li>
                  <a class="nav-link" href="destinations.php" >SERVICES</a>
                </li>
              -->
                <li>
                  <a class="nav-link" href="./gallery.php" >GALLERY</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <?php
          if(empty($_SESSION)){ ?>
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-signin">Sign In</a>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="#" class="btn btn-sm btn-primary rounded" data-bs-toggle="modal" data-bs-target="#modal-signup">Sign Up</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
          <?php } else{ echo "<span style=color:red;width:19rem>"."Hello " .$_SESSION["myname"]."</span>";?>

            <li class="nav-item dropdown"   style="list-style-type: none;"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"  style="position: relative;right: 1rem;"> </a>
                  <ul class="dropdown-menu" >
                    <li class="nav-item"><a class="dropdown-item" href="./userprofile/Userprofile.php">Profile</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="cart.php">Cart</a></li>
                      
                  </ul>
                </li>

           <ul style="list-style-type: none;"><li> <form action="logout.php"><input type="submit" name="logout" value="Logout" style="background-color:black;color:#fff;border-radius:2rem;"> </form></li></ul> 
        <?php }?>
          </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start">Welcome Back</h2>
              <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
              <form class="text-start mb-3" action="signin.php" method="post">
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="Email" name="email">
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="Password" name="pwd">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPassword">Password</label>
                </div>
                <button class="btn btn-primary rounded-pill btn-login w-100 mb-2" name="signin">Sign In</button>
              </form>
              <!-- /form -->
              <p class="mb-1"><a href="signup.php" class="hover">Forgot Password?</a></p>
              <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
      <div class="modal fade" id="modal-signup" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content text-center">
            <div class="modal-body">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h2 class="mb-3 text-start">Sign up to Shaadi Mubarak</h2>
              <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
              <form class="text-start mb-3" action="signup.php" method="post" onsubmit="return SignUpValidation()">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control" placeholder="Name" id="loginName" name="loginName">
                  <label for="loginName">Name</label> 
                  <!-- <div id="msgName"></div> -->
                </div>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" placeholder="Email" id="loginEmail" name="loginEmail">
                  <label for="loginEmail">Email</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Password" id="loginPassword" name="loginPassword">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPassword">Password</label>
                </div>
                <div class="form-floating password-field mb-4">
                  <input type="password" class="form-control" placeholder="Confirm Password"  id="loginPasswordConfirm" name="loginPasswordConfirm">
                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                  <label for="loginPasswordConfirm">Confirm Password</label>
                </div>
                
                  <button class="btn btn-primary rounded-pill btn-login w-100 mb-2" name="signup">SignUp</button>
                
                
              </form>
              <!-- /form -->
              <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
              <div class="divider-icon my-4">or</div>
              <nav class="nav social justify-content-center text-center">
                <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
              </nav>
              <!--/.social -->
            </div>
            <!--/.modal-content -->
          </div>
          <!--/.modal-body -->
        </div>
        <!--/.modal-dialog -->
      </div>
      <!--/.modal -->
    </header>
  </div>
  <script src="check.js"></script>
  

 