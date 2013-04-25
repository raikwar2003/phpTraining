
<?php //Create Connection
	include './classes/employee.php'; 
	if($_POST){
		$emp=new Employee();
		$emp->addEmployee($_POST["user_name"], $_POST["first_name"], $_POST["last_name"], $_POST["email"]);
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
        <form class="well row-fluid span12 transparentBG" action="" method="post" >
            <fieldset>
                <legend>Create New User</legend>
                <div class="span6 pullLeft0">
                    <label for="user_name"><strong>Username</strong></label>
                    <input type="text" class="span12" id="user_name" name="user_name" />
                </div>
                <div class="span6">
                    <label for="first_name"><strong>First Name</strong></label>
                    <input type="text" class="span12" id="first_name" name="first_name" />

                </div>
                <div class="span6 pullLeft0">
                    <label for="last_name"><strong>Last Name</strong></label>
                    <input type="text" class="span12"  id="last_name" name="last_name" />
                </div>
                <div class="span6">
                    <label for="email"><strong>Email</strong></label>
                    <input type="text" class="span12" id="email" name="email" />
                </div>
                <div class="span12 pullLeft0 text-right">
                    <input type="submit" name="submit" value="Submit" class="btn" />
                    <input type="reset" name="reset" value="Reset" class="btn" />
                </div>
            </fieldset>
        </form>
    </section>
    <!--SideBar-->
    
</content>

<!--include Footer-->
<?php include 'includes/footer.php'; ?>
<!--Footer-->

