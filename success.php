<!--include Header-->
<?php include 'includes/header.php'; ?>
<!--header-->

<content class="row-fluid">

    <!--include SideBar-->
    
    <?php include 'includes/sidebar.php'; ?>
    <!--SideBar-->
    <section class="span9">
        <h3>Success</h3>
        <?php 
			echo $_GET["user_name"]."<br>"; 
			echo $_GET["first_name"]."<br>"; 
			echo $_GET["last_name"]."<br>"; 
			echo $_GET["email"]."<br>"; 
		?>
    </section>
    <!--SideBar-->
    
</content>

<!--include Footer-->
<?php include 'includes/footer.php'; ?>
<!--Footer-->