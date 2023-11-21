<?php
	session_start();
	if($_SESSION['sid']=="")
	{
		header('location:index.php');
	}
	else
	{
?>
<?php
	error_reporting(1);
	include("connection.php");
	$img=$_FILES['img']['name'];
	$prono=$_POST['t1'];
	$price=$_POST['t2'];

	if($_POST['sub'])
	{
		$qry="INSERT INTO item(img,prod_no,price)VALUES('$img','$prono','$price')";
		$result=mysql_query($qry) or die ("save items query fail.");

		if($result)			
	   	{
			mkdir("image/$i");
			move_uploaded_file($_FILES['img']['tmp_name'],"image/$i".$_FILES['img']['name']);	
  			// move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
			$err="<font size='+2'>item inserted successfully</font>";
		}
		else
	 	{
	   		echo "item is not inserted";
	   	}
	}  
	mysql_close($con);
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
		<link href="css/style.css" rel="stylesheet">
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
                                    <a class="nav-link click-scroll" href="home.php">Home</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="insert.php">Update menu</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="view-product.php">Menu</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="view-order.php">Order</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="view-feedback.php">Feedback</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="logout.php">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            		<h1 align="center"> Update menu </h1>
                		<form  name="testform" method="post" enctype="multipart/form-data" >
							<table style="border-color:#000000;border-style: dotted;margin-left:500px;" width="500" align="left">
								<tr>
									<td height="20px"></td>
								</tr>	

								<tr>
									<td><span class="style3">Image:</span></td>
									<td><input name="img" type="file"></td>
								</tr>

				 				<tr>
									<td height="20px"></td>
								</tr>			
	
								<tr>
				  					<td><span class="style3">product name: </span></td>
				  					<td><label><input name="t1" type="text" id="t1"></label></td>
								</tr>

				 				<tr>
									<td height="20px"></td>
								</tr>			
				
								<tr>
				  					<td><span class="style3">Price:</span></td>
				  					<td><label><input name="t2" type="text" id="t2"></label></td>
								</tr>

				 				<tr>
									<td height="20px"></td>
								</tr>			
				
								<tr>
									<td  colspan="2" align="center">
										<input name="sub" type="submit" value="Submit">
									</td>
								</tr>
				
							</table>
						</form>
					<h2><?php echo $err;?></h2>
       
        		<div class="clear"></div>
			</main>

<?php }  ?>


</body>
</html>