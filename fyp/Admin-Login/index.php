<!-- Including header -->
<?php include_once('../include/header.php'); ?>
<!-- Including header -->


<div class="container">
    <div class="admin-sign">
    <form method="post" action="match.php">
        <div id="div_login">
            <h3>SMART SOCIETY SYSTEM</h3>
            <div>
                <input type="text" required class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" required class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
    </div>
</div>


 <!-- Including footer -->
 <?php include_once('../include/footer.php'); ?>
<!-- Including footer -->
