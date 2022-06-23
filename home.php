<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>

<body>
     <?php
        session_start();
        require_once "configfile.php";
        // if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        //     header("location: loginPage.php");
        //     exit;
        // }

        $registeredUserName = $_SESSION["username"];
        // $sql = "SELECT username FROM userstab WHERE id= $registeredUser";
        // $result = $conn->query($sql); 
        // if ($result->num_rows > 0) { 
        //     // output data of each row 
        //     while($row = $result->fetch_assoc()) { 
        //     $registeredUserName= $row["username"]; 
        //     } 
        //    } else { 
        //     echo "No corresponding user"; 
        //    } 
        //    $conn->close();
                
    ?>
    <div class="topnav">
        <a class="active" href="home.html">Home Page</a>
        <a href="index.php">Browse</a>
        <a href="loginPage.php">Login</a>
        <a href="register.php">Register</a>
        <a href="allOrders.php">Previous Orders</a>
        <a href="cart.php">Cart
            <span class="badge badge-light">0</span>
        </a>
    </div>
    <div class="welcome">Welcome Mr. / Mrs. <b><?php echo $registeredUserName?></b>, you were last online on <b>X-day - XX.XX.XXXX.</b></div>
    <div class="welcome">
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="img/carousel_1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel_2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="img/carousel_3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</body>
</html>