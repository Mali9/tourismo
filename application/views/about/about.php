<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>About</title>
        <link rel="Stylesheet" href="css/about.css"></link>
        <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCwZgR-7bn-mSegYojeEEs_xUI_PhgN9uM" async="" defer="defer" type="text/javascript"></script>

        <?php echo $map['js']; ?>
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
                    <a href="<?php echo base_url();?>visitor/my_profile"><img src="<?php echo base_url(). $this->session->userdata('img'); ?>"><span class="logout">My Profile</span></a>
                    <a class="logout" href="<?php echo base_url(); ?>login/logout">Log Out</a>
                    <?php endif;?>
                    
                </div>
                <div class="bdy2">
                    <p>
                        Tourism in Egypt is considered one of the most important sources of 
                        national income, including availability of dollar annual revenues, and 
                        revenues in foreign currency, which enabled it to participate significantly 
                        To Gross National Product, and the fight against unemployment by 
                        hiring a large segment of the labor force in Egypt.<br><br>

                        Egypt, one of the leading tourist countries in the world, it acquires
                        number of Expats tourist in the world, it has a lot of places that attract 
                        tourists of all kinds, and the proliferation of temples, museums, 
                        monuments and historical buildings, art and gardens, vast on its land, and 
                        ownership of the structure of a strong infrastructure is based on the 
                        tourism sector service including hotel rooms, villages and tourist resorts 
                        and tourism companies and airline offices.<br><br>


                        The areas of Luxor, Aswan, Cairo, Alexandria, the northern coast, the 
                        Red Sea, South Sinai of the most attractive areas for tourists, the date of 
                        return of tourism in Egypt to the ancient Egyptians, and continued as a 
                        destination and a desirable tourist destination over the past centuries and 
                        through contemporary history.<br><br>
                        -The Problem:-<br>
                        The 2011 Egyptian revolution that included attacks on foreign journalists 
                        such as British journalist Natasha Smith and South African Lara Logan in 
                        Cairo’s Tahrir Midan (Liberation Square), along with the series of 
                        2012–13 Egyptian protests, have negatively affected tourism.<br><br>


                        The new regime has worked hard to create stability and the Red Sea 
                        resorts in particular have had increasing tourist numbers.<br><br>


                        During the Egyptian Revolution of 2011, the number of visitors
                        plummeted by over 37% that year falling from 14 million in 2010 to
                        9 million by the end of 2011.<br><br>


                        This has impacted a diverse range of businesses directly or indirectly 
                        dependent on tourism, from travel accommodation and tourist attractions 
                        to car rental and air transportation, as well as health and wellness 
                        industries.<br><br>


                        Tour operators offering heavy discounts to encourage tourists back have 
                        been somewhat successful at the Red Sea resorts where prices remain 
                        lower compared to 2011. <br><br>


                        In the first half of 2014 the number of tourists further declined by 25% as
                        compared with the same period of 2013, while revenues  shrank by 25%
                        as well.<br><br>


                        In 2013, Egypt ranked 85th as the world's best country in terms of
                        tourism and traveling, falling ten places from its ranking of 75 in 2011.
                        However it regained some ground in the 2015  rankings being rated 83rd
                        overall
                    </p>
                </div>
                <?php echo $map['html']; ?>  
            </div>


            <div class="foot">
                <div class="foot1">
                    <div class="left">
                        <font color="white" size=1 class="end1">TOURISMO &COPY COPYRIGHT 2017 DESIGN BY SABOOR DESIGN</font>
                    </div>
                    <div class="cent">
                        <div><a href="http://www.facebook.com"><img class="face" src="images/1.png"></a></div>
                        <div><a href="https://twitter.com"><img class="face" src="images/2.png"></a></div>
                        <div><a href="https://www.instagram.com"><img class="face" src="images/4.png"></a></div>
                    </div>
                    <div class="rig">
                        <font color="white" size=1 class="end">TOURISMO &COPY COPYRIGHT</font>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/about.js"></script>
    </body>
</html>