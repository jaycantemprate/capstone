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
                <li>
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
                <li class="active">
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
            <h3 class="main-title">Calendar</h3>
            <div class="card-wrapper">
                <div class="payment-card">
                    <div class="card-header">
                        <div class="amount">
                            <span class="title">
                                Calendar
                            </span>
                            <span class="amount-value">₱500.00</span>
                        </div>
                        
                        <i class="fa-solid fa-peso-sign icon"></i>
                    </div>
                    <span class="card-detail">*** *** 845</span>
                </div>
            </div>
        </div>


        </div>
    </div>
</body>
</html>