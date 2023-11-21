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

                    <section class="section-padding">
                                    
                        <?php
					        error_reporting(1);
					        include("connection.php");
						    $sel=mysql_query("select * from item ");
						    echo"<form method='post'><table border='0' align='center'><tr>";
                            $n=0;

                            while($arr=mysql_fetch_array($sel))
                            {
                                $i=$arr['img'];
   
                                if($n%3==0)
	                            {
	                                echo "<tr>";
	                            }
                                echo "<td height='280' width='240' align='center'><img src='admin/image/$i' 
                                height='200' width='200'><br/><b>product name:</b>".$arr['prod_no']."<br><b>Price:</b>&nbsp;".
                                $arr['price']."<br><a href='login.php?img=$i'><b>Buy</b></a></td>";$n++;
                            }
   	                        echo "</tr></table>
                            </form>";
	                    ?>	

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