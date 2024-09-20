<?php
    require '../Backend/home.dashboard.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Users Management </title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" type="text/css" href="../Assets/css/blade.css">
</head>
<body>

<div class="dashboard-container">

    <div class="topnav">
        <h1 class="app-title"> Loan App - Manage Customers </h1>
        <div class="user-info">
            <span class="username"> <?php echo $_SESSION['username']; ?> |<?php echo ($_SESSION['role'] == 'admin') ? ' Signed in as Administrator ' : ' Signed in as Clerk '; ?>| <?php echo ($_SESSION['is_active'] == 1) ? 'Active' : 'Inactive'; ?></span>
            <a href="../Backend/logout.php" class="logout">Logout</a>
        </div>
    </div>

    <div class="sidebar">
        <h3> </h3>
        <br>
        <ul>
            <li><a href="dashboard.php"> Home </a></li>
            <li><a href="users.dashboard.php">User Management</a></li>
            <li><a href="customers.dashboard.php">Customer Management </a></li>
            <li><a href="loans.dashboard.php">Loan Management </a></li>
            <li><a href="../Backend/logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="card-container">
            <!-- First Row: 3 Cards -->
            <div class="card">
                <div class="container">
                    <!-- Number here -->
                    <h1>100</h1>
                    <h2><b>Current Customers</b></h2>
                    <p><?php echo $userCount; ?></p>
                </div>
            </div>
            <div class="card">
                <!-- Number here -->
                <div class="container">
                    <h1>100</h1>
                    <h2><b>Active Customers</b></h2>
                    <p><?php echo $loanProductCount; ?></p>
                </div>
            </div>
            <div class="card">
                <!-- Number here -->
                <div class="container">
                    <h1>100</h1>
                    <h2><b>In-Active Customers</b></h2>
                    <p><?php echo $customerCount; ?></p>
                </div>
            </div>
        </div>

        <hr><br>

        <div>
            <h1> Manage Customer Data </h1>

        </div>

        <hr><br>

        <div>
            <h3> All Customer</h3>
        </div>

    </div>

</div>

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</body>
</html>
