<?php
// Set the page title dynamically
$pageTitle = "Add User - CyberCafe"; 

// Include the header
include('../asset_for_pages/header.php');

?>

<div class="page-inner">
    <!-- Dashboard Main Content -->
    <div class="row">
      
      <!-- Key Metrics Section -->
      <div class="col-md-4">
        <!-- Total Bandwidth Used Card -->
        <div class="card">
          <div class="card-header">
            <div class="card-title">Total Bandwidths Used</div>
          </div>
          <div class="card-body">
            <canvas id="bandwidthChart"></canvas> <!-- Placeholder for chart -->
            <div class="mt-3">Total Used: 120 GB</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 d-flex">
        <!-- Active Users Card (with Add User button) -->
        <div class="card flex-fill">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">Active Users</div>
            <button class="btn btn-success">Add User</button> <!-- Add User Button -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>User Name</th>
                    <th>Data Used (GB)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Michael Lee</td>
                    <td>30</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      

      <div class="col-md-4">
        <!-- Devices Connected Card -->
        <div class="card">
          <div class="card-header">
            <div class="card-title">Devices Connected</div>
          </div>
          <div class="card-body">
            <canvas id="deviceStatsChart"></canvas> <!-- Placeholder for chart -->
            <div class="mt-3">Devices Connected: 50</div>
          </div>
        </div>
      </div>
      
    </div>

    <!-- Bandwidth Usage Section -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Bandwidth Usage by Users</div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>User Name</th>
                    <th>Data Used (GB)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Michael Lee</td>
                    <td>30</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Device Stats Section -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Device Stats</div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Device Name</th>
                    <th>Data Used</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Desktop</td>
                    <td>30 GB</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Smartphone</td>
                    <td>20 GB</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Laptop</td>
                    <td>10 GB</td>
                    <td>Inactive</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Line Chart for Total Bandwidth Used
    var ctx1 = document.getElementById('bandwidthChart').getContext('2d');
    var bandwidthChart = new Chart(ctx1, {
      type: 'line',
      data: {
        labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'],
        datasets: [{
          label: 'Bandwidth Used (GB)',
          data: [12, 15, 10, 20, 18, 25, 30],
          borderColor: '#4e73df',
          backgroundColor: 'rgba(78, 115, 223, 0.1)',
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });


    // Bar Chart for Devices Connected
    var ctx3 = document.getElementById('deviceStatsChart').getContext('2d');
    var deviceStatsChart = new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: ['Device 1', 'Device 2', 'Device 3', 'Device 4', 'Device 5'],
        datasets: [{
          label: 'Data Used (GB)',
          data: [10, 15, 5, 20, 25],
          backgroundColor: '#ffc107',
          borderColor: '#ffc107',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>

<!-- End the charts script -->

<?php
// Include the footer
include('../asset_for_pages/footer.php');
?>