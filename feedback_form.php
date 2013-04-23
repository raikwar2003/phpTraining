<!--include Header-->
<?php include 'includes/header.php'; ?>
<!--header-->

<content class="row-fluid">

    <!--include SideBar-->
    
    <?php include 'includes/sidebar.php'; ?>
    <!--SideBar-->
    <section class="span9">
        <form class="well row-fluid span12 transparentBG" action="success.php" method="post" >
            <fieldset>
                <legend>Feedback Form</legend>
                <div class="span12 pullLeft0">
                    <label for="fullname"><strong>Full Name</strong></label>
                    <input type="text" class="span12" id="fullname" name="fullname" />
                </div>
                <div class="span12 pullLeft0">
                    <label for="email"><strong>Email</strong></label>
                    <input type="text" class="span12" id="email" name="email" />
                </div>
                <div class="span12 pullLeft0">
                    <label for="last_name"><strong>Contact No.</strong></label>
                    <input type="text" class="span12"  id="last_name" name="last_name" />
                </div>
                <div class="span12 pullLeft0">
                    <label for="feedback"><strong>Feedback</strong></label>
                    <textarea class="span12" id="feedback" name="feedback" rows="5"></textarea>
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