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
                    <li><a href="Form.php">Employee records</a></li>
                    <li><a class="active" href="viewContent.php">Employee information</a></li>
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

    <h1>View employee data</h1>

    <!-- PHP Section -->
    <section class="php">
    <?php
    $servername="localhost";
    $username="root";
    $password="dani1234";
    $database="db_techCompany";
    
    //create connetion
    $conn = new mysqli($servername, $username, $password, $database);
    
    //checking connection
    if ($conn->connect_error) {
        die("connection failed".$conn->connect_error);
    }

    
    //selecting all data from the table
    $sql = "SELECT * FROM tbl_employee_info";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<div class="table-container">';
        echo "<table>";
        echo "<tr>";
        echo "<th>Employee ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Position</th>";
        echo "<th>Hourly Salary</th>";
        echo "<th>Hours Worked</th>";
        echo "</tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["employee_id"] . "</td>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            echo "<td>" . $row["hourly_salary"] . "</td>";
            echo "<td>" . $row["hours_worked"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo '</div>';
    } else {
        echo "0 results found";
    }
    
    $conn->close();
    ?>
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
</body>
</html>