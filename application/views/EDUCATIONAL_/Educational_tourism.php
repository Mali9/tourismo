<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Car Owner</title>
        <link rel="Stylesheet" href="../css/Educational_tourism.css"></link>
    </head>
    <body>
        <div class="container">
           <div class="bar">
             <div>
                    <img src="<?php echo base_url(); ?>images/logo.png">
                    <nav>
                        <a href="<?php echo base_url(); ?>Home" >HOME</a>
                        <a href="<?php echo base_url(); ?>Categories">CATEGORIES</a>
                        <a href="<?php echo base_url(); ?>Tour_guide">TOUR GUIDE</a>
                        <a href="<?php echo base_url(); ?>Car_owner"">CAR OWNER</a>
                        <a href="<?php echo base_url(); ?>Contact_us">CONTACT US</a>
                        <a href="<?php echo base_url(); ?>About" style="color:#f79100">ABOUT US</a>
                    </nav>
                </div>
            </div>
            <div class="bdy">
                <div class="bdy1">
                    <?php
                    if($this->session->userdata('logged_in')):
                    ?>
                    <a href="<?php echo base_url();?>Visitor/my_profile"><img src="<?php echo base_url(). $this->session->userdata('img'); ?>"><span class="logout">My Profile</span></a>
                    <a class="logout" href="<?php echo base_url(); ?>Login/logout">Log Out</a>
                    <?php endif;?>
                </div>
                <h1><font color="#f79100"></font>TOURISM</h1>
                <?php
                $item = 0;
                foreach($users as $row)
                {
                if($item % 4 == 0)
                {
                echo '<div class="bdy2">';
                }
                $item++;
                $s=$row->place_id;
                echo '
                    <a href="plac/?sub='.$s.'">
                    <div class="d1" style="background-image: url(../images/'.$row->pic.');">
                        <div>
                            <h3>'.$row->name.'<br><font color="#f79100"></font></h3>
                        </div>
                    </div>
                    </a>
                    ';
                if($item % 4 == 0)
                {
                echo '</div>';
                }
                }
                ?>
            </div>
        </div>
        </div>
        <div class="foot">
            <div class="foot1">
                <div class="left">
                    <font color="white" size=1 class="end1">TOURISMO &COPY COPYRIGHT 2017 DESIGN BY SABOOR DESIGN</font>
                </div>
                <div class="cent">
                    <div><a href="http:\\www.facebook.com"><img class="face" src="../images/1.png"></a></div>
                    <div><a href="https://twitter.com"><img class="face" src="../images/2.png"></a></div>
                    <div><a href="https://www.instagram.com"><img class="face" src="../images/4.png"></a></div>
                </div>
                <div class="rig">
                    <font color="white" size=1 class="end">TOURISMO &COPY COPYRIGHT</font>
                </div>
            </div>
        </div>
    </div>
    <script src="jquery-3.1.1.js"></script>
    <script src="Educational_tourism.js"></script>
</body>
</html>