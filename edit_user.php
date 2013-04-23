<!--include Header-->
<?php include 'includes/header.php'; ?>
<!--header-->

<content class="row-fluid">

    <!--include SideBar-->
    
    <?php include 'includes/sidebar.php'; ?>
    <!--SideBar-->
    <section class="span9">
        <form class="well row-fluid span12 transparentBG">
            <fieldset>
                <legend>Edit User</legend>
                <div class="span6 pullLeft0">
                    <label><strong>First Name</strong></label>
                    <input type="text" class="span12" value="" />
                </div>
                <div class="span6">
                    <label><strong>Last Name</strong></label>
                    <input type="text" class="span12" value="Raikwar" />
                </div>
                <div class="span6 pullLeft0">
                    <label><strong>Username</strong></label>
                    <input type="text" class="span12" value="ravi.raikwar" />
                </div>
                <div class="span6">
                    <label><strong>Email</strong></label>
                    <input type="text" class="span12" value="ravi.raikwar@3pillarglobal.com" />
                </div>
                <div class="span12 pullLeft0 text-right">
                    <input type="button" name="submit" value="Submit" class="btn" />
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