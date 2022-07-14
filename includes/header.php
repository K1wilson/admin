<?php
require_once('authenticate.php')?>

    <div class="header">
                <img src="Images/download.jpeg" alt="zalego" style="height: 50px; width:50px;" class="rounded-circle">
                <a href="#" class="navbar-trigger"><span></span></a>
				<span><b><?php echo $_SESSION['login']?></b></span>
		        <span class="pull-right" style="padding-top:0;text-decoration:none">
	            <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i></a>
        </span>
    </div>