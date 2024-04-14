<?php
require 'user/config.php';

if(!empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM user_tbl WHERE id = $id");  
    $row = mysqli_fetch_assoc($result);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>

    <!--Side Panel-->
    <div class="sidebar">
        <div class="hero">
            <img src="img/logo1.jpg" alt="">
            <hr class="underline">
        </div>
        <div class="logo">
            <ul class="menu">
                <li class="active">
                    <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.php">
                        <i class="fa-solid fa-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="store.php">
                        <i class="fa-solid fa-shop"></i>
                        <span>Store</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-paw"></i>
                        <span>Pets</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="user/index.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
    <h1>Welcome <?php echo $row['firstname']; ?></h1>
        <div class="header-wrapper">
            <div class="header-title">
            
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>

            <div class="user-info">
                <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
                </div>
                <img src="img/img.jpg" alt="">
            </div>
        </div>

        <div class="card-container">
            <h3 class="main-title">Todays'data</h3>
            <div class="card-wrapper">
                <div class="payment-card">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Payment Amount
                            </span>
                            <span class="amount-value">₱500.00</span>
                        </div>
                        
                        <i class="fa-solid fa-peso-sign icon"></i>
                    </div>
                    <span class="card-detail">*** *** 845</span>
                </div>
            </div>
        </div>

        <div class="tabular-wrapper">
            <h3 class="main-title">Finance Data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Pet Name</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tbody>


                            <tr>
                                <td>2023-05-01</td>
                                <td>name</td>
                                <td>expenses</td>
                                <td>comapny</td>
                                <td>contact</td>
                                <td>address</td>
                                <td><button>Edit</button></td>
                            </tr>
                            <tr>
                                <td>2023-05-01</td>
                                <td>Expenses</td>
                                <td>Office Supplies</td>
                                <td>₱250.00</td>
                                <td>Office Supplies</td>
                                <td>Pending</td>
                                <td><button>Edit</button></td>
                            </tr>
                            <tr>
                                <td>2023-05-01</td>
                                <td>Expenses</td>
                                <td>Office Supplies</td>
                                <td>₱250.00</td>
                                <td>Office Supplies</td>
                                <td>Pending</td>
                                <td><button>Edit</button></td>
                            </tr>
                            <tr>
                                <td>2023-05-01</td>
                                <td>Expenses</td>
                                <td>Office Supplies</td>
                                <td>₱250.00</td>
                                <td>Office Supplies</td>
                                <td>Pending</td>
                                <td><button>Edit</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">Total $1000</td>
                            </tr>
                        </tfoot>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>