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
        <h1 class="app-title"> Loan App - Manage Users </h1>
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
                    <h2><b>Current Users</b></h2>
                    <p><?php echo $userCount; ?></p>
                </div>
            </div>
            <div class="card">
                <!-- Number here -->
                <div class="container">
                    <h1>100</h1>
                    <h2><b>Current Loan Products</b></h2>
                    <p><?php echo $loanProductCount; ?></p>
                </div>
            </div>
            <div class="card">
                <!-- Number here -->
                <div class="container">
                    <h1>100</h1>
                    <h2><b>Current Customers</b></h2>
                    <p><?php echo $customerCount; ?></p>
                </div>
            </div>
        </div>

        <hr><br>

            <h1> Manage Users Data </h1>
            <div class="container-user-form">
                <div class="form-container">
                    <form action="submit.php" method="POST">
                        <!-- Username and Email in one row -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" id="username" name="username" required class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" id="password" name="password" required class="form-input">
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div class="form-group form-group-full">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" required class="form-input">
                        </div>
                        <!-- Role Field -->
                        <div class="form-group form-group-full">
                            <label for="role" class="form-label">Role:</label>
                            <select id="role" name="role" required class="form-input">
                                <option value="admin">Admin</option>
                                <option value="clerk">Clerk</option>
                            </select>
                        </div>
                        <!-- Buttons -->
                        <div class="form-group form-group-full">
                            <input type="submit" value="Add New User" class="form-submit">
                            <input type="submit" value="Update User Details" class="form-submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="user-data-container">
                <h2>User List</h2>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>john_doe</td>
                            <td>john@example.com</td>
                            <td>Admin</td>
                            <td>
                                <button class="action-button edit">Edit</button>
                                <button class="action-button delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>jane_smith</td>
                            <td>jane@example.com</td>
                            <td>Clerk</td>
                            <td>
                                <button class="action-button edit">Edit</button>
                                <button class="action-button delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        <hr><br>

    </div>

</div>

<script>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</body>
</html>
