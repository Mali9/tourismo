<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Car Owner Profile</title>
        <link rel="Stylesheet" href="<?= base_url(); ?>/css/Car_owner_profile.css"></link>
        <style>

            .edt
            {
                border:0px;height:50px;
                background-color: black;
                color:white;
                width:150px;
                margin: 20px
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
                    </div>    
                    <center>
                        <div style="color: salmon">
                            <h1>
                                <?php
                                if( $this->session->flashdata('hired')){
                                    echo $this->session->flashdata('hired');
                                }
                                ?>
                            </h1>
                        </div>
                    </center>
                </div>
                <div class="bdy2">
                    <div class="d1">
                        <?php foreach ($users as $row): ?>
                            <img src="<?php echo base_url() . $row->profile_pic; ?>">
                        <?php endforeach; ?>
                        <div class="d12" style="width:60%">
                            <?php
                            foreach ($users as $row):
                                if ($this->session->userdata('type') == 'car_owner' && $this->session->userdata('id') == $row->carOwner_id):
                                    ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                                    <a href="<?= base_url()?>Hire/car_notification/<?=$row->carOwner_id?>">
                                        <div style="width: 30px;height: 40px;border-radius: 90%;background: red;position: relative;right: 150px;top: 0px">

                                            <h3 style="color: white;position: relative;left: 10px"><?= $note?></h3>
                                        </div>
                                    </a>
                            
                            
                            
                            
                            
                            
                            
                                    <?php
                                endif;
                            endforeach;
                            ?>
                            <b><font size=6>


                                <?php foreach ($users as $row): ?> 

                                    <?php echo $row->username; ?>

                                    <font style="color:#f79100">CAR OWNER</font>  
                                    </font></b>
                            </div>
                            <?php
                            $idd = $row->carOwner_id;
                            if ($idd == $this->session->userdata('id') && $this->session->userdata('type') == 'car_owner'):
                                ?> 
                                <?php
                                $r = $this->session->userdata('id');
                                ?>

                                <a href="<?= base_url(); ?>Update/show_cowner_info/<?php echo $r; ?>">
                                    <button  class="edt">Edit Profile</button>
                                </a>
                                <?php
                            elseif ($this->session->userdata('type') == 'tourist'):
                                ?>  

                                <a href="<?= base_url() ?>/Hire/rentedCarOwner/<?= $row->carOwner_id ?>"> <button class="hire">Hire</button></a>
                                <?php
                            else:
                                ?>
                            <?php endif; ?>
                            <?php
                        endforeach;
                        ?>

                    </div>
                </div>
                <div style="width:100%" class="bdy3">
                    <div>
                        
                        <a href="#bdy" style="color:#f79100" class="about">About</a>
                    </div>
                </div>
                <div class="bdy4">
                    <div class="bd4">
                        <div class="b4">
                            <div class="line">
                            </div>
                            <div class="info">
                                <h2>HIRED FROM VISITOR</h2>
                                <br>
                                <?php
                                if(!empty($c)){
                                foreach($c->result() as $r)
                                echo "<h1>".$r->ct."</h1>"; 
                                }
                                ?>
                                <h3>VISITOR</h3>
                            </div>
                            <?php
                            foreach ($users as $row) {
                                echo ' <img src="'.base_url().$row->car_pic .'">';
                            }
                            ?>
                            <div class="personal_info">
                                <h2>NAME</h2><p>:&nbsp <?php
                                    foreach ($users as $row) {
                                        echo $row->username;
                                    }
                                    ?></p><br>
                                <h2>FROM</h2><p>:&nbsp  <?php
                                    foreach ($users as $row) {
                                        echo $row->place;
                                    }
                                    ?></p><br>
                                <h2>AGE</h2><p>:&nbsp  <?php
                                    foreach ($users as $row) {
                                        echo $row->age;
                                    }
                                    ?></p><br>
                                <h2>PHONE</h2><p>:&nbsp  01010016630</p><br>
                                <h2>INTEREST</h2><p>:&nbsp  LOVE DESIGNING,MEDIA,GRPHICES...ETC.</p>
                                <br><br>
                                <h2 style="width:300px">MEMBER SINCE</h2><br>
                                <p>JULY 08,2016</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bdyy4">
                    <div class="pic"><h2>PICTURES WITH TOURISTS</h2><a><button>add</button></a></div>
                    <div class="d11">
                        <img src="../images/car.jpg" style="float:left">
                        <img class="x" src="../images/car.jpg">
                        <img class="y" src="../images/car.jpg">
                        <img src="../images/car.jpg" style="float:right">
                    </div>
                    <div class="d2">
                        <img src="../images/car.jpg" style="float:left">
                        <img class="x" src="../images/car.jpg">
                        <img class="y" src="../images/car.jpg">
                        <img src="../images/car.jpg" style="float:right">
                    </div>
                    <div class="d3">
                        <img src="../images/car.jpg" style="float:left">
                        <img class="x" src="../images/car.jpg">
                        <img class="y" src="../images/car.jpg">
                        <img src="../images/car.jpg" style="float:right">
                    </div>
                    <div class="d4">
                        <img src="../images/car.jpg" style="float:left">
                        <img class="x" src="../images/car.jpg">
                        <img class="y" src="../images/car.jpg">
                        <img src="../images/car.jpg" style="float:right">
                    </div>
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
    <script src="Car_owner_profile.js"></script>
</body>
</html>