<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>TOUR GUIDE</title>
        <link rel="Stylesheet" href="<?= base_url(); ?>/css/tour_guide_profile.css"></link>
        <style>
            form{border:5px solid black;background-color:white;width:70%;margin:auto; }
            .home{width:100px;background:black;border:0px;color:white;}
            .edit{width:90%;margin: auto;text-align: center}
            .mf
            {
                width:120px;
                height:120px;
                border-radius: 70px;
                margin: 20px;
                vertical-align: middle;
            }
            .bdy1
            {
                width:90%;
                margin: auto
            }
            .bdy1 a
            {
                text-decoration: none;
                color: black;
                margin: 10px
            }
            .bdy1 a:hover
            {
                color: blue
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
                    <?php
                    if ($this->session->userdata('logged_in')):
                        ?>
                        <a href="<?php echo base_url(); ?>Visitor/my_profile">
                            <img class="mf" src="<?php echo base_url() . $this->session->userdata('img'); ?>">
                            <span class="logout">My Profile</span>
                        </a>
                        <a class="logout" href="<?php echo base_url(); ?>Login/logout">Log Out</a>
                    <?php endif; ?>
                    <input type="text" placeholder="  Search...">
                </div>
                <div class="edit">

                    <br><br>
                    <center><h3 style="color:red">
                            <?php echo validation_errors(); ?>
                        </h3>
                    </center>

                    <center> <img class="logo"  src=<?php echo base_url(); ?>images/logo.png> </center>
                    <div class="container">  

                        <?php
                        $id = $this->session->userdata('id');
                        echo form_open("Update/edit_tguide/$id", array('id' => 'contact', 'enctype' => 'multipart/form-data'));
                        ?>
                        <h3>My Data</h3>
                        <img class="im" src=<?php echo base_url(); ?>images/line.png>

                        <fieldset>

                            Name<input value=<?php
                            foreach ($tour_guide as $k) {
                                echo $k->username;
                            }
                            ?> placeholder="Name" type="text" name="username" required="" onblur="get('name_error', this.value);" >
                            <br> <div  style="" id="name_error"></div>    
                        </fieldset>

                        <fieldset>

                            Email :<input         <input value=<?php
                                                         foreach ($tour_guide as $k) {
                                                             echo $k->email;
                                                         }
                                                         ?> placeholder="Email Address" type="email" name="email" required="" onblur="get('email_error', this.value);" >
                                                         <div  style="font-family: cursive" id="email_error"></div>

                        </fieldset>
                        <fieldset>
                            Password<input placeholder="Password"          value=<?php
                                                         foreach ($tour_guide as $k) {
                                                             echo $k->password;
                                                         }
                                                         ?>  type="text" name="password"  required="" onblur="get('pass_error', this.value);" >
                            <div  style="font-family: cursive" id="pass_error"></div>
                        </fieldset>
                        <!--
                            <fieldset>
                              
                                <input  placeholder="Phone Number " type="tel" name="phone"  required="" onblur="get('phone_error', this.value);" >
                            </fieldset>
                         <div  style="float: right;position: relative;right: 150px;top:0px;color: green;font-size: 20px;font-family: cursive" id="phone_error"></div>
                        -->
                        <fieldset>

                            Country<input value=<?php
                                                         foreach ($tour_guide as $k) {
                                                             echo $k->country;
                                                         }
                                                         ?> placeholder="Country" type="text" name="country" required="" onblur="get('country_error', this.value);" >
                            <div  style="color:green;font-size:20px;font-family: cursive" id="country_error"></div>

                        </fieldset>
                        <fieldset>
                            Age<input placeholder="Age "      <input value=<?php
                                                         foreach ($tour_guide as $k) {
                                                             echo $k->age;
                                                         }
                                                         ?> type="number" min="10" max="100" name="age" required="" >
                        </fieldset>

                        <fieldset >
                            Gender<select  id="country"  name="gender" required="">

                                <?php
                                foreach ($tour_guide as $k) {
                                    if ($k->gender == 'male')
                                        echo '<option value="male">Male</option>
            <option value="female">Female</option>';
                                    else
                                        echo 'option value="female">Female</option>
                <option value="male">Male</option>
                ';
                                }
                                ?>
                            </select>
                        </fieldset>

                        <fieldset>
                            Image<input type="file" name="userpic" accept="image/*">
                        </fieldset>


                        <fieldset>
                            <button name="submit" value="update" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                        </fieldset>



<?php form_close(); ?>
                    </div>
                    <script>
                        function get(field, value)
                        {

                            var xmlhttp;

                            if (window.XMLHttpRequest)
                            {// for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp = new XMLHttpRequest();
                            } else
                            {// for IE6, IE5
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }

                            xmlhttp.onreadystatechange = function ()
                            {
                                if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
                                {
                                    document.getElementById(field).innerHTML = xmlhttp.responseText;
                                } else
                                {
                                    document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
                                }
                            };
                            xmlhttp.open("GET", "<?php echo base_url(); ?>valid/valid.php?field=" + field + "&value=" + value, true);
                            xmlhttp.send(null);
                        }

                    </script>   
                </div>

            </div>
        </div>
        <div class="foot">
            <div class="foot1">
                <div class="left">
                    <font color="white" size=1 class="end1">TOURISMO &COPY COPYRIGHT 2017 DESIGN BY SABOOR DESIGN</font>
                </div>
                <div class="cent">
                    <div><a href="http:\\www.facebook.com"><img class="face" src="<?= base_url(); ?>images/1.png"></a></div>
                    <div><a href="https://twitter.com"><img class="face" src="<?= base_url(); ?>images/2.png"></a></div>
                    <div><a href="https://www.instagram.com"><img class="face" src="<?= base_url(); ?>images/4.png"></a></div>
                </div>
                <div class="rig">
                    <font color="white" size=1 class="end">TOURISMO &COPY COPYRIGHT</font>
                </div>
            </div>
        </div>

        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/tour_guide.js"></script>
    </body>
</html>