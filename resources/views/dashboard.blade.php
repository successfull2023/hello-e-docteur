<!DOCTYPE html>
<html lang="en">

<head>



  @section('contenu')
      <div class="row">
        @extends('layouts.mainlayouts')

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </nav>
              </div><!-- End Page Title -->
            <!-- Sales Card -->
            <div class="row">
                <div class="col-xl-4 col-md-6">
              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Patients <span>| Cette année</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>2500</h6>
                      <span class="text-danger small pt-1 fw-bold">20%</span> <span class="text-muted small pt-2 ps-1">Taux de croissance</span>
                    </div>
                  </div>

                </div>

              </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card info-card customers-card">

                  <div class="card-body">
                    <h5 class="card-title">Rendezvous <span>| Cette année</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>3000</h6>
                        <span class="text-danger small pt-1 fw-bold">30%</span> <span class="text-muted small pt-2 ps-1">Taux de croissance</span>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div class="col-xl-4 col-md-6">
                <div class="card info-card customers-card">

                  <div class="card-body">
                    <h5 class="card-title">Medecinss <span>| Cette année</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>15</h6>
                        <span class="text-danger small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">Taux de croissance</span>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div><!-- End Sales Card -->





      </div>
    </section>

  @endsection

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="asset/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="asset/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="asset/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



</html>
