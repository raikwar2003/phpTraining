<!--include Header-->
<?php include 'includes/header.php'; ?>
<!--header-->

<content class="row-fluid">

    <!--include SideBar-->
    
    <?php include 'includes/sidebar.php'; ?>
    <!--SideBar-->
    <section class="span9">
    	<div class="well row-fluid span12 transparentBG">
            <!--<h3 class="text-center">Success</h3>-->
			
            <?php //Create Connection
				//$con=mysqli_connect("localhost","root","","phptraining");
//				
//				//Check connection
//				if(mysqli_connect_errno($con))
//				{
//					echo "Failed to connect to MySQL: ". mysqli_connect_error();
//					}
//				
//				$sql="INSERT INTO users (user_name, first_name, last_name, email)
//				VALUES
//				('$_POST[user_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]')";
//				if(!mysqli_query($con,$sql)){
//					die('Error: '.mysqli_error($con));
//				}
//				echo "Welcome <strong>". $_POST['first_name']." ".$_POST['last_name']."</strong> in our training sessions";
				//echo "<h3 class='text-center'>Contratulations, new user successfully added</h3>";
				
				//mysqli_close($con);
				//header("Location: index.php");

				/*echo "<pre>";
				print_r($_POST)."<br>";
				print_r($_REQUEST)."<br>";
				print_r($_GET);
				echo "</pre>";	*/		


                /*echo "Username: " . $_REQUEST["user_name"]. "<br>"; 
                echo "First: " . $_REQUEST["first_name"]. "<br>"; 
                echo "Last Name: " . $_REQUEST["last_name"]. "<br>"; 
                echo "Email: " . $_REQUEST["email"] . "<br>"; */
				
            ?>
        </div>
    </section>
    <!--SideBar-->
    
</content>

<!--include Footer-->
<?php include 'includes/footer.php'; ?>
<!--Footer-->