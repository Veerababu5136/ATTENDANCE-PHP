<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSS Admin Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <!-- Include header -->

<!-- Header as a Navbar with Responsive Menu Icon -->
<header class="bg-primary text-white p-3 mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DSS</a>
        </div>
    </nav>
</header>

    <div class="container mt-5">
        <!-- Main heading -->
        <h1 class="text-center mb-5">DSS Admin Dashboard</h1>

        <!-- Section for services -->
        <h2 class="text-center mb-4">Admin Controls</h2>
        
        <!-- Admin Controls as Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Manage Attendance</h5>
                        <p class="card-text">Monitor and update attendance records for all users.</p>
                        <a href="admin_login.php" class="btn btn-primary">Go to Manage Attendance</a>
                    </div>
                </div>
            </div>
            
          
        </div>
    </div>

    <!-- Include footer -->
    <?php include('footer.php') ?>

<!-- Bootstrap 5.3 JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
