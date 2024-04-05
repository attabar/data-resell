<?php
require_once './PHP/fundWallet.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/logo.jpeg" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
  @media (max-width: 576px) {
  .custom-btn-width {
    width: 100%;
  }
}

</style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="./assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <!-- <li class="nav-small-cap">
              <i class="bi bi-wallet fa-2x"></i><li>
              <span class="hide-menu">Home</span>
            </li> -->

            <!-- </a> -->

            <li class="sidebar-item">
              <a class="sidebar-link" href="./dashboard.php" aria-expanded="false">
                <span>
                  <i class="bi bi-house-door fa-2x"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="fundWallet.php" aria-expanded="false">
                <span>
                <i class="bi bi-wallet fa-2x"></i>
                </span>
                <span class="hide-menu">Fund Wallet</span>
              </a>
            </li>
            
            <li class="sidebar-item" data-bs-toggle="collapse" data-bs-target="#account">
            <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                <i class="bi bi-person-fill fa-2x"></i>
                </span>
                <span class="hide-menu">Account</span>
            </a>
            </li>

            <div id="account" class="collapse">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                <i class="bi bi-lock-fill"></i>
                </span>
                <span class="hide-menu">Profile</span>
              </a>
            </li>
            </div>

            <hr/>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SERVICES</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="data.php" aria-expanded="false">
                <span>
                <i class="bi bi-wifi fa-2x"></i>
                </span>
                <span class="hide-menu">Buy Data</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./airtime.php" aria-expanded="false">
                <span>
                <i class="bi bi-telephone-fill fa-2x"></i>
                </span>
                <span class="hide-menu">Buy Airtime</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                <i class="bi bi-lightbulb fa-2x"></i>
                </span>
                <span class="hide-menu">Pay Bill</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                <i class="bi bi-tv fa-2x"></i>
                </span>
                <span class="hide-menu">TV Cables</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                <i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>
                </span>
                <span class="hide-menu">Check Result</span>
              </a>
            </li>
            <hr/>
            <li class="nav-small-cap" data-bs-toggle="collapse" data-bs-target="#transaction">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">TRANSACTIONS History<i class="bi bi-caret-down"></i></span>
            </li>
            <div id="transaction" class="collapse">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                <i class="bi bi-wifi"></i>
                </span>
                <span class="hide-menu">Data Transaction</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                <i class="bi bi-telephone-fill"></i>
                </span>
                <span class="hide-menu">Airtime Transaction</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                <i class="bi bi-lightbulb"></i>
                </span>
                <span class="hide-menu">Bill Transaction</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                <i class="bi bi-tv"></i>
                </span>
                <span class="hide-menu">TV Cables Transaction</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </span>
                <span class="hide-menu">Check Result Transaction</span>
              </a>
            </li>
            </div>
            <hr/>
            <li class="nav-small-cap" data-bs-toggle="collapse" data-bs-target="#setting">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">SETTINGS <i class="bi bi-caret-down"></i></span>
            </li>
            <div id="setting" class="collapse">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                <i class="bi bi-lock-fill"></i>
                </span>
                <span class="hide-menu">Change Password</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Change Pin</span>
              </a>
            </li>
            </div>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg shadow navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
  
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
      <div class="row">
        <div class="container">
        <div class="col-lg-12 bg-danger rounded py-5">
          <h2 class="mb-5">Welcome To Lambda Data</h2>
          <?php require_once './PHP/referal.php';
          echo $referalLink;
          ?>
        </div>
        </div>


      <h3> Wallet Balance </h3>
          <div class="col-lg-4 d-flex align-items-strech">
            <div class="card">
              <div class="card-body shadow">
                <div class="d-sm-flex d-sm-block align-items-center justify-content-between">
                  <div class="mb-3 mb-sm-0">
                    <i class="bi bi-wallet fa-2x d-flex justify-content-center text-danger fw-semibold"></i><br>
                    <!-- <i class="fas fa-shopping-cart "></i>  -->
                    <h5 class="card-title fw-semibold" style="letter-spacing: 5px;">Available</h5>
                    <p class="card-text text-center"> ₦350</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

  <div class="col-lg-8" id="fundWallet">
  <div class="card bg-primary">
    <div class="card-body py-4 shadow">
      <div class="d-sm-flex d-sm-block align-items-center justify-content-between text-light">
        <div class="mb-3 mb-sm-0 text-light" style="color: white;">
          <h5 class="card-title fw-semibold" style="letter-spacing: 5px; color:yellow">ACCOUNT NUMBER:</h5>
          <h5 class="card-text" style="color: white;" id="accountNumber"> <?php echo $accountNumber ?><i class="bi bi-clipboard" id="clipboardIcon"></i></h5><div id="copiedText"></div>
          <h5 class="card-title fw-semibold" style="letter-spacing: 5px;color:brown">BANK NAME:</h5>
          <h5 class="card-text" style="color: white;"><?php echo $bankName ?></h5>
        </div>
      </div>
    </div>
  </div>
</div>

        
        <h4 class="text-center">OUR SERVICES</h4>
        <div class="row">
          <div class="col-sm-6 col-xl-3 d-flex align-items-center justify-content-center">
            <div class="card overflow-hidden rounded-2">
              <div class="d-flex align-items-center justify-content-center">
                <i class="bi bi-wifi fa-2x"></i>
            </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4" style="word-spacing: 5px;">Data Top Up</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0"><button class="btn btn-primary ms-2 fw-normal fs-3">Buy Now</button></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-xl-3 d-flex align-items-center justify-content-center">
            <div class="card overflow-hidden rounded-2">
              <div class="d-flex align-items-center justify-content-center">
              <i class="bi bi-telephone-fill fa-2x"></i>
            </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Airtime Top Up</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0"><button class="btn btn-primary ms-2 fw-normal fs-3 w-100">Buy Now</button></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                  </ul>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-xl-3 d-flex align-items-center justify-content-center">
            <div class="card overflow-hidden rounded-2">
              <div class="d-flex align-items-center justify-content-center">
              <i class="bi bi-lightbulb fa-2x"></i>
            </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Pay Electricity</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0"><button class="btn btn-primary ms-2 fw-normal fs-3">Pay Now</button></h6>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-xl-3 d-flex align-items-center justify-content-center">
            <div class="card overflow-hidden rounded-2">
              <div class="d-flex align-items-center justify-content-center">
              <i class="bi bi-tv fa-2x"></i>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Tv Subscription</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0"><button class="btn btn-primary ms-2 fw-normal fs-3">Subs Now</button></h6>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <script>
    const clipboardIcon = document.getElementById("clipboardIcon");
    const copiedTextElement = document.getElementById("copiedText");

    clipboardIcon.addEventListener('click', function(){
      const accountNumberText = document.getElementById("accountNumber").textContent.trim();

      // Create a temporary input element to copy the text
      const tempInput = document.createElement('input');
      tempInput.value = accountNumberText;

      // Append the input element to the document
      document.body.appendChild(tempInput);

       // Select the text inside the input element
       tempInput.select();

        // Copy the selected text to the clipboard
        document.execCommand('copy');
        
    // Remove the temporary input element
    document.body.removeChild(tempInput);

    copiedTextElement.textContent = 'Copied';
    })
  </script>

</script>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>
</body>

</html>