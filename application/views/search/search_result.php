<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search Page</title>
        <link rel="Stylesheet" href="<?= base_url() ?>css/about.css"></link>
        <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCwZgR-7bn-mSegYojeEEs_xUI_PhgN9uM" async="" defer="defer" type="text/javascript"></script>


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
                    if ($this->session->userdata('logged_in')):
                        ?>
                        <a href="<?php echo base_url(); ?>Visitor/my_profile"><img src="<?php echo base_url() . $this->session->userdata('img'); ?>"><span class="logout">My Profile</span></a>
                        <a class="logout" href="<?php echo base_url(); ?>Login/logout">Log Out</a>
                    <?php endif; ?>
                    <input type="text" placeholder="  Search...">
                </div>
                <div class="b " style="width:90%;margin:auto;text-align:center">
                    <?php
                    if (!empty($result['categories']) || !empty($result['places'])):
                        ?>
                           <?php
                            $item = 0;
                            if ($result['categories'] != " ") 
                            {
                                echo '<div style="display:inline-block;width:23%">';

                                foreach ($result['categories'] as $row) {
                                   
                                    echo '
                        <a href=' . base_url() . 'Categories/places?sub=' . $row->cat_id . '">
                        <div>
                            <img src=' . base_url() . "images/" . $row->picture . ' style="width:150px">
                            <h2>' . $row->name . '<br> TOURISM</h2>
                        </div>
                    </a>';
                                    
                                }
                                echo '</div>';
                            }
                            if ($result['places'] != " ") {
                                echo '<div style="display:inline-block;width:23%">';
                                foreach ($result['places'] as $row) {
                                    
                                    echo '
                        <a href=' . base_url() . 'Categories/plac?sub=' . $row->place_id . '>
                        <div>
                            <img src=' . base_url() . "images/" . $row->pic . ' style="width:150px">
                            <h2>' . $row->name . '<br> TOURISM</h2>
                        </div>
                    </a>
                    ';
                                         
                                }
                                echo '</div>';
                            }
                            ?>

                        
                        <?php
                    endif;
                    if (!empty($result['car_owner']) || !empty($result['tourist']) || !empty($result['tour_guide'])):
                        ?>
                       <?php
                            $item = 0;
                            if ($result['car_owner'] != " ") {
                            echo '<div style="display:inline-block;width:23%">';

                                foreach ($result['car_owner'] as $row) 
                                {

                                    echo '
                        <a href=' . base_url() . 'Car_owner/prof?sub=' . $row->carOwner_id . '>
                        <div>
                            <img src=' . base_url() . "images/" . $row->profile_pic . ' style="width:150px">
                            <h2>' . $row->username . '<br> TOURISM</h2>
                        </div>
                    </a>
                    ';

                                }
                                echo '</div>';
                            }
                            if ($result['tour_guide'] != " ") {
                                echo '<div style="display:inline-block;width:23%">';
                                foreach ($result['tour_guide'] as $row) {
                                   

                                    echo '
                        <a href=' . base_url() . 'Tour_guide/profile?sub=' . $row->tourGuide_id . '>
                        <div>
                            <img src=' . base_url() . "images/" . $row->profile_pic . ' style="width:150px">
                            <h2>' . $row->username . '<br> TOURISM</h2>
                        </div>
                    </a>
                    ';
                                }
                                echo '</div>';
                            }
                            if ($result['tourist'] != " ") {
                                echo '<div style="display:inline-block;width:23%">';
                                foreach ($result['tourist'] as $row) 
                                {
                                    
                                    
                                    echo '
                        <a href=' . base_url() . 'prof?sub=' . $row->tourist_id . '>
                        <div>
                            <img src=' . base_url() . "images/" . $row->profile_pic . ' style="width:150px">
                            <h2>' . $row->username . '<br> TOURISM</h2>
                        </div>
                    </a>
                    ';

                                }

                                echo '</div>';
                                             }              
                                         
                            ?>


                            <?php
                            else
                            :
                                echo ' ';
                            
                        endif;
                        
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
                            <div><a href="http://www.facebook.com"><img class="face" src="<?= base_url() ?>images/1.png"></a></div>
                            <div><a href="https://twitter.com"><img class="face" src="<?= base_url() ?>images/2.png"></a></div>
                            <div><a href="https://www.instagram.com"><img class="face" src="<?= base_url() ?>images/4.png"></a></div>
                        </div>
                        <div class="rig">
                            <font color="white" size=1 class="end">TOURISMO &COPY COPYRIGHT</font>
                        </div>
                    </div>
                </div>
            </div>
            <script src="<?= base_url() ?>js/jquery-3.1.1.js"></script>
            <script src="<?= base_url() ?>js/about.js"></script>
    </body>
</html>