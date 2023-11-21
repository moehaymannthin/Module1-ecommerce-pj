<?php
	error_reporting(1);
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Beans Cafe</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/vegas.min.css" rel="stylesheet">
        <link href="css/Beans.css" rel="stylesheet">
    </head>
    
    <body>
                
            <main>
                <nav class="navbar navbar-expand-lg">                
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="index.html">
                            <img src="images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Beans Cafe">
                            Beans
                        </a>
        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="index.php">Home</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="product.php">Menu</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="register.php">Register</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

    				<h2 align="center">Welcome!! <?php echo "<font color=blue>".$_REQUEST['name']."</font>"; ?> </h2><br>
					<p align="center">You have created your account successfully!!!</p>
					<p align="center">Thank you for registration.</p>
                    <br><br>
					<p align="center"><a href="?log=out">Go back</a></p>

			</main>

	</body>
</html>