<!DOCTYPE HTML>
<html>
        <?php
        $posv=array();
        $negv=array();
        foreach($pos->result() as $d)
        {
            array_push($posv,$d->cont_pos);
            //echo $d->cont_pos."<br>";
        }
        foreach($neg->result() as $f)
        {
            array_push($negv, $f->cont_neg);
            //echo $d->cont_neg."<br>";
        }
        ?>
    <head>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCwZgR-7bn-mSegYojeEEs_xUI_PhgN9uM" async="" defer="defer" type="text/javascript"></script>
    <head><?php echo $map['js']; ?></head>

        <meta charset="utf-8">
        <title>PYRAMIDS</title>
        <link rel="Stylesheet" href="<?= base_url(); ?>css/Eg.css"></link>
        <style>
            .im1
            {
                margin: 20px;
                vertical-align: middle;
            }
        </style>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
    var x=new Array();
    var y=new Array();
     x[0]='Positive';
     x[1]='Negative';

     y[0]=<?php echo $posv[0]; ?>;
     y[1]=<?php echo $negv[0]; ?>;

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          [x[0],     y[0]],
          [x[1],      y[1]]
        ]);

        var options = {
          title: 'People Who Visit Egypt',
          width: 700,
        height: 500,
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>



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
                        <a href="<?php echo base_url();?>Visitor/my_profile"><img src="<?php echo base_url() . $this->session->userdata('img'); ?>"><span class="logout">My Profile</span></a>
                        <a class="logout" href="<?php echo base_url(); ?>Login/logout">Log Out</a>
                        <?php
                    endif;
                    ?>
                </div>
                <h1><?php  foreach($users as $d):?>
                    <?=$d->name?>
                    
                </h1>
                <div class="bdy2">


                        <img class="im1" src="<?= base_url(); ?>images/<?php echo $d->pic; ?>"> 
                    
                    <?php endforeach;?>
                </div>
                <div class="info" style="min-height:800px">
                  
                    <p>
                        <?php 
                            foreach($users as $t)
                            {
                                echo $t->description;
                            }
                        ?>
                    </p>
                    <div style="margin-bottom: 20px;">
                    <h2 style="color: gray">write your reviwe about this place:</h2>
                    <?php 
                            foreach($users as $d):?>
                            
                    <form action="<?= base_url()?>Rate/ra/<?= $d->place_id?>" method="post" accept-charset="utf-8">
                 <input type="text" name="reviwe" style="width: 250px;min-height: 100px;font-size: 20px;"><br>
                <button style="float: left;margin-top: 10px" type="submit" class="btn-primary">send</button>
                </form>
            <?php endforeach; ?>
                </div><br>
                    <?php 
                    if(!is_null($posv) || !is_null($negv))
                    {
                    ?>
                                         <div style="margin-top:40px;text-align:center;display:inline-block;color:blue">
                        <h1>Tourists Opnioins About This Place depending on there reviews</h1>
                    </div>
                 <div id="piechart_3d" style="text-align:center;margin-left:300px;width:80%;height:250px">
                </div>
                <?php
                }
                ?>
                </div>
                <div  style="width:100%;height: 150px; margin-top:100px">
                    <?php echo $map['html']; ?>
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
        </div>

        <script src="jquery-3.1.1.js"></script>
        <script src="car_owner.js"></script>
    </body>
</html>