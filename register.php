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

                <section class="contact-section section-padding" id="section_4">
                    <div class="container">
                        <div class="row">   

                            <?php
                                error_reporting(1);
                                include("connection.php");

                                if($_POST['sub'])
                                { 
                                    $name=$_POST['t1'];
                                    $email=$_POST['t2'];
                                    $password=$_POST['t3'];
                                    $phone=$_POST['t4'];
                                    $city=$_POST['t5'];
                                    $town=$_POST['t6'];

                                    if(mysql_query("insert into register(name,email,password,phone,city,township) values('$name','$email','$password','$phone','$city','$town')"))
                                    {
                                        //echo "<script>location.href='reg_success.php?email=$email'</script>"; 
                                        header("location:reg_success.php?name=$name & email=$email");
                                    }
                                    else 
                                    {
                                        $error= "user already exists";
                                    }
                                }

                            ?>

                            <div class="col-lg-12 col-12">
                                <h2 class="text-white mb-4 pb-lg-2">Register</h2>
                            </div>

                            <div class="col-lg-6 col-12">
                                <form  method="post" class="custom-form contact-form">

                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Name </label>
                                        <input type="text" name="t1" id="t1" class="form-control" />
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="t2" id="t2" class="form-control" />
                                    </div>

                                    <div class="col-lg-6 col-12">
				                        <label class="form-label">Password</label>
                                        <input type="password" name="t3" id="t3" class="form-control" />
                                    </div>

                                    <div class="col-lg-6 col-12">
				                        <label class="form-label">Phone </label>
                                        <input type="text" name="t4" id="t4" class="form-control" />
                                    </div>

                                    <div class="col-lg-6 col-12">
				                        <label class="form-label">City </label>
                                        <input type="text" name="t5" id="t5" class="form-control" />
                                    </div>

                                    <div class="col-lg-6 col-12">
				                        <label class="form-label">Town </label>
                                        <input type="text" name="t6" id="t6" class="form-control" />
                                    </div>

                                    <input type="submit" name="sub" id="sub" value="Register" class="submit_button" />
				                    <input type="reset" name="Cancel" value="Cancel" class="submit_button" />
                                    <label><?php echo "<font color='red'>$error</font>";?></label>
                                </div>

                                </form>
                            </div>
        
                            <div class="clear"></div>
		                </div>
                    </div>
                </section>
            </main>

            <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/vegas.min.js"></script>
        <script src="js/custom.js"></script>

</body>
</html>