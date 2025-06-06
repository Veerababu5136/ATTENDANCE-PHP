<?php


$connection = mysqli_connect('localhost', 'root', 'veera', 'u238517430_demy');

if (!$connection) 
{
    die("Connection failed: " . mysqli_connect_error());
} 
else 
{     
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    
    <link rel="stylesheet" href="style.css">

<!-- Bootstrap 5.3 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<!-- Header as a Navbar with Responsive Menu Icon -->
<header class="bg-primary text-white p-3 mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DSS</a>
        </div>
    </nav>
</header>
<br><br><br><br><br><br><br>

   <!-- Main Content -->
<div class="container">
    <div class="row justify-content-center">
        <!-- Login Card -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="login.php" method="POST">
                        <!-- Email Input -->
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!-- Bootstrap 5.3 JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <?php

    include('footer.php');
    ?>
    
</body>
</html>
