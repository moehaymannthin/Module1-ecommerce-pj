<?php
    error_reporting(1);
    session_start();
    $i=$_REQUEST['img'];
    $_SESSION['sid']=$_POST['id'];
    include("connection.php");
    $i=$_REQUEST['img'];

    if($_POST['ord'])
    { 
        $prodno=$_POST['prodno'];
        $price=$_POST['price'];
        $name=$_POST['nam'];
        $phone=$_POST['pho'];
        $add=$_POST['add'];
        $ordno=ord.rand(100,500);

        if(mysql_query("insert into orders(productno,price,name,phone,address,order_no) values('$prodno','$price','$name','$phone','$add','$ordno')"))
        {
        //echo "<script>location.href='ordersent.php?prod'</script>";
        header("location:ordersent.php?order_no=$ordno");  
        }
        else 
        {  
            $error= "user already exists";
        }
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
    
                    <section class="contact-section section-padding" id="section_4">
                        <div class="container">
                            <div class="row">   
                                <div class="col-lg-12 col-12">
                                    <h2 class="text-white mb-4 pb-lg-2">Order</h2>
                                </div>

        <?php
			include("connection.php");
			$sel=mysql_query("select * from item  where img='$i' ");
			$mat=mysql_fetch_array($sel);
		?>

        <div class="col-lg-6 col-12">
            <form  method="post" class="custom-form contact-form">
            <div class="row">

            <div class="col-lg-6 col-12">
				<label class="form-label">Product No </label>
                <input type="text" name="prodno" id="prodno" value="<?php echo $mat['prod_no'];?>" class="form-control" />
            </div>

            <div class="col-lg-6 col-12">
                <label class="form-label">price  </label>
                <input type="text" name="price" id="price" value="<?php echo $mat['price'];?>" class="form-control" />
            </div>

            <div class="col-lg-6 col-12">
				<label class="form-label">Name </label>
                <input type="text" name="nam" id="nam" class="form-control" />
            </div>

            <div class="col-lg-6 col-12">
				<label class="form-label">Phone </label>
                <input type="text" name="pho" id="php" class="form-control" />
            </div>

            <div class="col-lg-6 col-12">
				<label class="form-label">Address</label>
                <textarea id="add" name="add" rows="0" cols="0" class="form-control"></textarea>
            </div>
		 
                <input type="submit" name="ord" id="ord" value="sent order" class="submit_button" />
				<input type="submit" name="Cancel" value="Cancel" class="submit_button" />

            </div>
			</form>
        </div> 
        
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

