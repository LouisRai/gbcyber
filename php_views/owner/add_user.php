<?php
// Set the page title dynamically
$pageTitle = "Add User - CyberCafe"; 

// Include the header
include('../asset_for_pages/header.php');

?>

<div class="page-inner">
    <div class="page-header">
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
                <a href="#">User</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">User Information</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
        </ul>
    </div>

    <!-- User Form Section -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">User Information</div>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-sm-2 col-form-label">Role:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="role" name="role">
                                    <option>Admin</option>
                                    <option>Regular User</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bandwidth" class="col-sm-2 col-form-label">Bandwidth Allocated [Mbps]:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="bandwidth" name="bandwidth">
                                    <option>50</option>
                                    <option>100</option>
                                    <option>150</option>
                                    <option>Custom</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dataUsage" class="col-sm-2 col-form-label">Data Usage:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="dataUsage" name="dataUsage">
                                    <option>10 GB</option>
                                    <option>20 GB</option>
                                    <option>Custom</option>
                                    <option>Slider</option> <!-- Added Slider option -->
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="transferRate" class="col-sm-2 col-form-label">Data Transfer Rate:</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="transferRate" name="transferRate">
                                    <option>Slow Lane</option>
                                    <option>Fast Lane</option>
                                </select>
                            </div>
                        </div>

                        <!-- Save and Cancel Buttons -->
                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
// Include the footer
include('../asset_for_pages/footer.php');
?>