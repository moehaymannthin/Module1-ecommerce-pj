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
                                    $phone=$_POST['t3'];
                                    $mesg=$_POST['t4'];

                                    if(mysql_query("insert into content(name,email,phone,mesg) values('$name','$email','$phone','$mesg')"))
                                    {
                                        $er="<font color='white' size='+1'> Message sent successfully</font>"; 
                                    }
                                }
                            ?>
	
                            <div class="col-lg-12 col-12">
                                <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
                            </div>

                            <div class="col-lg-6 col-12">
                                <form method="post" name="contact" action="#" class="custom-form contact-form">

                                <div class="row">

                                    <div class="col-lg-6 col-12">
                                        <label for="phone" class="form-label">Name:</label>
                                        <input type="text" id="t1" name="t1" class="form-control" />
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label for="email" class="form-label">Email Address:</label>
                                        <input type="email" id="t2" name="t2" class="form-control" />
                                    </div>

                                    <div class="clear h10"></div>
                    
                                    <div class="col-lg-6 col-12">
                                        <label for="phone" class="form-label">Phone:</label>
                                        <input type="text" id="t3" name="t3" class="form-control" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col-12">
                                        <label for="text" class="form-label">Message:</label> 
                                        <textarea id="t4" name="t4" rows="0" cols="0" class="form-control"></textarea>
                                        <input type="submit" name="sub"  id="sub" value="Send" class="submit_button" />
                                    </div>
                                </div>

                                </form>
			                    <h2><?php echo $er;?></h2>
                            </div>

                            <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                                <em class="text-white d-block mb-4">Phone: (95)123456789</em>
                                <em class="text-white d-block mb-4">Email: admin@beans.co</em>
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