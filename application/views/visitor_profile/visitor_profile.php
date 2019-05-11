<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Visitor Profile</title>
        <link rel="Stylesheet" href="<?php echo base_url(); ?>css/visitor_profile.css"></link>
                    <style>

                    .edt
                    {
                        border:0px;height:50px;
                        background-color: black;
                        color:white;
                        width:150px;
                    }
                    .edt:hover
                    {
                        background-color:lightgreen
                    }
            </style>
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
                    <div> 
                        <b><a class="logout" style="text-decoration: none;font-size: 30px; color: black;" href="<?php echo base_url(); ?>login/logout">Log Out</a></b>

                    </div>    
                </div>
                <div class="bdy2">
                    <div class="d1">
                        <img src="<?php echo base_url() . $this->session->userdata('img'); ?>">

                        <div class="d12" style="width:60%">
                            <b><font size=6><?= $this->session->userdata('username') ?></font></b>
                        </div>
                        <a href="<?=base_url()?>Update/show_visit_info/<?= $this->session->userdata('id')?>"><button class="edt">Edit Profile</button></a>
                    </div>
                </div>
                <div class="bdy3">
                    <div>
                        <a href="#bdy" class="port">Portfolio</a>
                        <a href="#bdy" style="color:#f79100" class="about">About</a>
                    </div>
                </div>
                <div class="bdy4">
                    <div class="bd4">
                        <div class="b4">
                            <div class="inf">
                         
                                <div class="info">
                                    <h2>TOOK CAR</h2>
                                    <br>
                                    <?php
                                    foreach ($took->result() as $v) 
                                    {
                                      echo "<h1>".$v->ct."</h1>";
                                    }
                                    
                                    ?>
                                    <h3>CAR</h3>
                                </div>
                                <div class="line"></div>
                                <div class="info">
                                    <h2>HIRED</h2>
                                    <br>
                                    
                                <h1><?php echo $dat; ?></h1>
                                    
                                    
                                    <h3>VISITOR</h3>
                                </div>
                            </div>
                            <div class="personal_info">
                                <h2>NAME</h2><p>:&nbsp <?= $this->session->userdata('username') ?></p><br>
                                <h2>FROM</h2><p>:&nbsp  <?= $this->session->userdata('country') ?></p><br>
                                <h2>AGE</h2><p>:&nbsp  <?= $this->session->userdata('age') ?> YEARS OLD</p><br>

                                <br><br>
                                <h2 style="width:300px">MEMBER SINCE</h2><br>
                                <p><?= $this->session->userdata('date') ?></p><br><br><br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bdyy4">
                    <div class="pic"><h2>PLACES YOU VISITED BEFORE</h2><a><button>add</button></a></div>
                    <div class="d11">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:left">
                        <img class="x" src="<?php echo base_url(); ?>images/car.jpg">
                        <img class="y" src="<?php echo base_url(); ?>images/car.jpg">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:right">
                    </div>
                    <div class="d2">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:left">
                        <img class="x" src="<?php echo base_url(); ?>images/car.jpg">
                        <img class="y" src="<?php echo base_url(); ?>images/car.jpg">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:right">
                    </div>
                    <div class="d3">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:left">
                        <img class="x" src="<?php echo base_url(); ?>images/car.jpg">
                        <img class="y" src="<?php echo base_url(); ?>images/car.jpg">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:right">
                    </div>
                    <div class="d4">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:left">
                        <img class="x" src="<?php echo base_url(); ?>images/car.jpg">
                        <img class="y" src="<?php echo base_url(); ?>images/car.jpg">
                        <img src="<?php echo base_url(); ?>images/car.jpg" style="float:right">
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="foot1">
                    <div class="left">
                        <font color="white" size=1 class="end1">TOURISMO &COPY COPYRIGHT 2017 DESIGN BY SABOOR DESIGN</font>
                    </div>
                    <div class="cent">
                        <div><a href="http:\\www.facebook.com"><img class="face" src="<?php echo base_url(); ?>images/1.png"></a></div>
                        <div><a href="https://twitter.com"><img class="face" src="<?php echo base_url(); ?>images/2.png"></a></div>
                        <div><a href="https://www.instagram.com"><img class="face" src="<?php echo base_url(); ?>images/4.png"></a></div>
                    </div>
                    <div class="rig">
                        <font color="white" size=1 class="end">TOURISMO &COPY COPYRIGHT</font>
                    </div>
                </div>
            </div>
        </div>
        <script src="jquery-3.1.1.js"></script>
        <script src="visitor_profile.js"></script>
    </body>
</html>