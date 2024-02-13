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
    
    <!-- PHP Section -->
    <section class="php">
    <?php
    $servername="localhost";
    $username="root";
    $password="3152022";
    $database="db_techCompany";
    
    //create connetion
    $conn = new mysqli($servername, $username, $password, $database);
    
    //checking connection
    if($conn->connect_error) {
        die("Connection failed".$conn->connect_error);
    }

    // Check if the table exists
    $table_exists_query = "SHOW TABLES LIKE 'tbl_employee_info'";
    $table_exists_result = $conn->query($table_exists_query);

    if ($table_exists_result->num_rows == 0) {
        // Table does not exist, create it
        $create_table_sql = "CREATE TABLE tbl_employee_info (
            employee_id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(30),
            last_name VARCHAR(30),
            email VARCHAR(30),
            position VARCHAR(30),
            hourly_salary DECIMAL(8,2) NOT NULL DEFAULT 16.55,
            hours_worked DECIMAL(8,2) DEFAULT 0
        )";
    
        if ($conn->query($create_table_sql) === TRUE) {
            echo '<div id="success-message1">Table created successfully</div>';
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }

    // Insert data into the table
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $hourly_salary = floatval($_POST['hourly_salary']);;
    $hours_worked = floatval($_POST['work_hours']);

    $insert_data_sql = "INSERT INTO tbl_employee_info (
                            first_name,
                            last_name,
                            email,
                            position,
                            hourly_salary,
                            hours_worked)
                        VALUES ('$first_name', '$last_name', '$email', '$position', $hourly_salary, $hours_worked)";

    if ($conn->query($insert_data_sql) === TRUE) {
        echo '<div id="success-message2">Information saved successfully!</div>';
    } else {
        echo "Error inserting data: " . $conn->error;
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
