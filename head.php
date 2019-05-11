<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Turismo</title>
        <link rel="Stylesheet" href="<?php echo base_url(); ?>/css/home.css"></link>
        <link rel="Stylesheet" href="<?php echo base_url(); ?>/css/jquery.ui.css"></link>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"></link>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            #u a:hover{
               background-color: red;
            }
        </style>
        <script>
            $(document).ready(function () {
                $("#username").on("keyup", function () {
                    if(!$('#username').val())
                    {
                         $("#resultarea").css("display", "none");
                    }
                    else
                    {
                    $('#u').html("");
                    $("#resultarea").css("display", "block");
                    var myusername =$("#username").val();
                    $.ajax({
                        type: "GET",
                        url: "<?php echo base_url(); ?>Search/ajax",
                        data: {name: myusername},
                        cache: false,
                        success: function (data) {
                            var json = $.parseJSON(data);
                            if($("#username").val() === "")
                            {
                              $('#u').html("");  
                            }
                            var v="";
                            for (var i = 0; i <json.length; i++) {
                            v=json[i].name;
                            v=v.split(' ');
                            var e="<li><a href='<?php echo base_url(); ?>Search/aja/"+v[0]+"' style='color:black'>"+json[i].name+"</a></li>";
                            $('#u').append(e);
                        }
                        }
                        
                    });
                    }
                });
                
            });

        </script>

    </head>
    <body>
        <div class="container">
            <div class="bar">
                <div>
                    <img src="<?php echo base_url(); ?>/images/logo.png">
                    <nav>
                        <a href="<?php base_url(); ?>Home" >HOME</a>
                        <a href="<?php base_url(); ?>Categories">CATEGORIES</a>
                        <a href="<?php base_url(); ?>Tour_guide">TOUR GUIDE</a>
                        <a href="<?php base_url(); ?>Car_owner"">CAR OWNER</a>
                        <a href="<?php base_url(); ?>Contact_us">CONTACT US</a>
                        <a href="<?php base_url(); ?>About" style="color:#f79100">ABOUT US</a>
                    </nav>
                    <br>
                    <h3 style="color:green">
                        <center style="position: absolute;left: 500px;top: 200px;font-size:40px">
                            <?php
                            if ($this->session->flashdata('register')) {
                                echo $this->session->flashdata('register') . "<br>" . "Login Now!";
                            }
                            ?>
                            <?php
                            if ($this->session->flashdata('send')) {
                                echo $this->session->flashdata('send');
                            }
                            ?>
                            <?php
                            if ($this->session->flashdata('login')) {
                                echo $this->session->flashdata('login');
                            }
                            ?>

                        </center>
                        <div class="bdy1">

                            <?php
                            if ($this->session->userdata('logged_in')):
                                ?>
                                <a href="<?php echo base_url(); ?>Visitor/my_profile"><img style="position: absolute;left: 200px;top: 0px" src="<?php echo base_url() . $this->session->userdata('img'); ?>"><span style="position: absolute;left: 270px;top: 20px" class="logout">My Profile</span></a>
                                <a class="logout" style="position: absolute;left: 400px;top: 20px" href="<?php echo base_url(); ?>login/logout">Log Out</a>
                            <?php endif; ?>
                                </div>
                            <div style="position: relative;left: 450px;">
                                <form action="<?php echo base_url(); ?>Search/find" method="post">

                                    <input type="text" name="search" id="username" autocomplete="off" placeholder="search..." style="width: 250px;height: 30px;position: absolute;top: -110px;right: 450px">                                    
                                    <input type="submit" value="search"   class="btn-success" style="width: 70px;height: 30px;position: absolute;top: -110px;right: 450px;font-size: 15px;background-color: #dddddd">
                                </form>
                            </div>
                            <div id="resultarea" style="display: none;border: 1px solid #000;width: 200px;min-height: 0px;background: white;position: absolute;top: 100px;right: 180px;font-size: 15px;color: black">
                                <ul id="u" style="list-style-type:none;position: relative;right: 50px;">
                                 
                                </ul>

                            </div>
                        
                    </h3><br>
                    <h1 style="padding:0px;">TOURIRSM IN EGYPT</h1>
                    <h2 style="padding:0px">WR ARE YOUR EYES IN EGYPT TO SEE GOOD TOURISM</h2>
                    <div class="info">
                        <a href="Login"><button class="log">LOG IN</button></a>
                        <br>
                        <a href="Visitor"><button class="l1">USER</button></a>
                        <a href="Tour_guide_register"><button class="l1">TOUR GUIDE</button></a>
                        <a href="Car_owner_register"><button class="l1">CAR OWNER</button></a>
                    </div>
                </div>
            </div>

