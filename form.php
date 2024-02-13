<!DOCTYPE html>
<html lang="en">

<!--Head Section-->
<head>
    <title>Employee Information</title>
    <meta charset="UTF-8">
    <meta name="author" content="Daniela Escobar"/>
    <meta name="description" content="Form page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!--Header Section-->
    <header id="header">
        <div class="header-container">
            <!-- Logo -->
            <a href="#"><img src="images/logo.png" class="logo" alt="page-logo"></a>
            <!-- Navigation Menu -->
            <nav>
                <ul id="navbar">
                    <li><a href="#">Home</a></li>
                    <li><a class="active" href="Form.php">Employee records</a></li>
                    <li><a href="viewContent.php">Employee information</a></li>
                </ul>
            </nav>
        </div>
        <!-- Search Form -->
        <div>
            <form class="d-flex" role="search" action="#" method="get" onsubmit="return false;">
            <input class="search" type="search" placeholder="Search" aria-label="Search" id="searchInput">
            <button class="button" type="button" onclick="search()">Search</button>
            </form>
        </div>
    </header>

    <h1>Employee information record</h1>

    <!--Form Section-->
    <section id= "formSection" class="form">
        <div class="container">
            <div class="topic-text">Complete Account Setup</div>
            <hr class="divider">
            <form action="confirmation.php" method="post">
                <div class="input-box">
                    <div class="input-row">
                        <span>First Name</span> <input type="text" name="first_name" placeholder="Enter First Name" required>
                    </div>
                    <div class="input-row">
                        <span>Last Name</span> <input type="text" name="last_name" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-row">
                        <span>Email</span> <input type="email" name="email" placeholder="employee@techcompany.ca" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                    </div>
                    <div class="input-row">
                        <span>Position</span> <input type="text" name="position" placeholder="Enter Position" required>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-row">
                        <span>Hourly Salary</span> <input type="number" name="hourly_salary" placeholder="$16.55 hour" step="0.01">
                    </div>
                    <div class="input-row">
                        <span>Work Hours</span> <input type="number" name="work_hours" placeholder="40 weekly" step="0.01" required>
                    </div>
                </div>
                <!--Send button-->
                <div class="button2">
                <input class="cancelB" type="button" value="Cancel" onclick="clearForm()">
                <input class="submit" type="submit" value="Submit form">
                </div>
            </form>
        </div>
    </section>
    
    <!--Footer Section-->
    <div class="footer">
        <footer>
            <img class="logo" src="images/logo.png" alt="page-logo">
            <p>©2024, Technology Company. All right reserved.</p>
            <div class="icon">
                <i class="fa-solid fa-earth-americas"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>
        </footer>
    </div>

    <!-- Link to Font Awesome icons -->
    <script src="https://kit.fontawesome.com/b5343ede9a.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>