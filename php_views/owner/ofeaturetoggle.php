<?php
// Set the page title dynamically
$pageTitle = "Feature Toggle"; 

// Include the header
include('../asset_for_pages/header.php');

?>

        <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Feature List</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Feature Toggle</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
              </ul>
            </div>
            <div class="row">

                <!-- End of the page header -->
             
            <div class="col-md-12">

                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Payments</div>
                    <div class="form-check form-switch" style="--bs-form-switch-width:60px;--bs-form-switch-height:24px">
                      <input class="form-check-input" type="checkbox" role="switch" id="switchSizeLargeChecked" checked />
                    </div>
                  </div>
                </div>

    <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <div class="card-title">Payments</div>
      <div class="d-flex align-items-center">
        <div class="form-check form-switch me-2" style="--bs-form-switch-width:60px;--bs-form-switch-height:24px">
          <input class="form-check-input" type="checkbox" role="switch" id="switchSizeLargeChecked" checked />
        </div>
        <div class="position-relative">
          <button class="info-button" aria-label="More Info">i</button>
          <div class="info-tooltip">
            This toggle enables or disables payment functionality.
          </div>
        </div>
      </div>
    </div>
  </div>

                <div class="card">
                  <div class="card-header">
                    <div class="card-title">User Restrictions</div>
                    <div class="form-check form-switch" style="--bs-form-switch-width:60px;--bs-form-switch-height:24px">
                      <input class="form-check-input" type="checkbox" role="switch" id="switchSizeLargeChecked" checked />
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <div class="card-title">URL Restrictions</div>
                    <div class="form-check form-switch" style="--bs-form-switch-width:60px;--bs-form-switch-height:24px">
                      <input class="form-check-input" type="checkbox" role="switch" id="switchSizeLargeChecked" checked />
                    </div>
                  </div>
                </div>

              </div>
              
            </div>
          </div>
        </div>


<?php
// Include the footer
include('../asset_for_pages/footer.php');
?>
