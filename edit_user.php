 <?php
 
			/*$con=mysqli_connect("localhost","root","","phptraining");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			
			$result = mysqli_query($con,"SELECT * FROM users where id='$_GET[id]'");
			
			$row = mysqli_fetch_array($result);
			
			if(isset($_POST['update']))
			{	
				//$update="UPDATE users SET user_name='$_POST[user_name]', first_name='$_POST[first_name]', last_name='$_POST[last_name]', email='$_POST[email]' where id='$_REQUEST[id]'";
				mysqli_query($con,"UPDATE users SET user_name='$_POST[user_name]', first_name='$_POST[first_name]', last_name='$_POST[last_name]', email='$_POST[email]' where id='$_REQUEST[id]'");
				header("Location: success.php");
			}*/
			/*if($_GET){
				$emp=new Employee;
				$emp->editEmployee($_GET["user_name"], $_GET["first_name"], $_GET["last_name"], $_GET["email"]);
			}*/			
			
			include 'classes/employee.php';
			$result = Employee::editEmployee();

			if(isset($_POST['update']))
			{	
				$updateUser = new Employee();
				$updateUser->update();
			}
		
?>
<!--include Header-->
<?php include 'includes/header.php'; ?>
<!--header-->

<content class="row-fluid">

    <!--include SideBar-->
    
    <?php include 'includes/sidebar.php'; ?>
    <!--SideBar-->
    <section class="span9">
        <form class="well row-fluid span12 transparentBG" action="" method="post">
            <fieldset>
                <legend>Edit User</legend>
                <div class="span6 pullLeft0">
                    <label><strong>Username</strong></label>
                    <input type="text" class="span12" name="user_name" value="<?php print_r ("$result[user_name]") ?>" />
                </div>
                <div class="span6">
                    <label><strong>First Name</strong></label>
                    <input type="text" class="span12" name="first_name" value="<?php print_r ("$result[first_name]") ?>" />
                </div>
                <div class="span6 pullLeft0">
                    <label><strong>Last Name</strong></label>
                    <input type="text" class="span12" name="last_name" value="<?php print_r ("$result[last_name]") ?>" />
                </div>
                <div class="span6">
                    <label><strong>Email</strong></label>
                    <input type="text" class="span12" name="email" value="<?php print_r ("$result[email]") ?>" />
                </div>
                <div class="span12 pullLeft0 text-right">
                    <input type="submit" name="update" value="Update" class="btn" />
                    <input type="button" name="cancel" value="Cancel" class="btn" />
                </div>
            </fieldset>
        </form>
    </section>
    <!--SideBar-->
    
</content>

<!--include Footer-->
<?php include 'includes/footer.php'; ?>
<!--Footer-->