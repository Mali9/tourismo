
<?php
    $this->load->view('head');
    $cnt=array();
    $cntry=array();

    foreach($vis as $x)
    {
        array_push($cnt,$x->cunt);
        array_push($cntry,$x->country);
    }
    //$d=mysql_fetch_array($vis,MYSQLI_NUM);
    //echo $d[0];
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
    var x=new Array();
    var y=new Array();
     x[0]='<?php echo $cntry[0]; ?>';
     x[1]='<?php echo $cntry[1]; ?>';
     x[2]='<?php echo $cntry[2]; ?>';
     x[3]='<?php echo $cntry[3]; ?>';
     x[4]='<?php echo $cntry[4]; ?>';

     y[0]=<?php echo $cnt[0]; ?>;
     y[1]=<?php echo $cnt[1]; ?>;
     y[2]=<?php echo $cnt[2]; ?>;
     y[3]=<?php echo $cnt[3]; ?>;
     y[4]=<?php echo $cnt[4]; ?>;

      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          [x[0],     y[0]],
          [x[1],      y[1]],
          [x[2],  y[2]],
          [x[3], y[3]],
          [x[4],    y[4]]
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
    $cnt=array();
    $cntry=array();

    foreach($place as $x)
    {
        array_push($cnt,$x->cunt);
        array_push($cntry,$x->place);
      
    }
    ?>
  <script type="text/javascript">
  var xx=new Array();
  var yy=new Array();

     xx[0]='<?php echo $cntry[0]; ?>'; 
     xx[1]='<?php echo $cntry[1]; ?>';
     xx[2]='<?php echo $cntry[2]; ?>';
     xx[3]='<?php echo $cntry[3]; ?>';

     yy[0]=<?php echo $cnt[0]; ?>;
     yy[1]=<?php echo $cnt[1]; ?>;
     yy[2]=<?php echo $cnt[2]; ?>;
     yy[3]=<?php echo $cnt[3]; ?>;

    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        [xx[0], yy[0], "#b87333"],
        [xx[1], yy[1], "silver"],
        [xx[2], yy[2], "gold"],
        [xx[3], yy[3], "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Most Places Visited",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<style>
    .stat {
        padding:20px 5px;
        background:#c5c5c5;
        text-align:center;
        float:left;
        margin-left:100px;
        width:150px;
        font-size: 91px;
    }
    .stat-count {
        font-size: 91px;
        font-weight: normal;
        letter-spacing: -0.02em;
        line-height: 1.2;
        margin-bottom: 20px;
        overflow:hidden;
        font-family:"Georgia", Courier, monospace;
        padding: 0;
        position: relative;

    }
    .stat-detail {
        color:black;
        padding-top:10px;

        font: italic 1.3rem/1.75 "Georgia", Courier, monospace;
    }
    .vs1
    {
        text-align: center;
        width:90%;
        margin: auto
    }
    .v
    {
        width:48%;
        display:inline-block;
        vertical-align: top;
        text-align: center;
    }
</style>
<div style="position:absolute;top: 2980px;left: 590px">
    <span class="stat-count"></span>
    <p class="stat-detail" style="font-size: 60px;position: absolute;top: 0px;right: -50px"></p>
</div>
<div class="bdy">
    <div class="port">
        <h1 style="color:#A16236;text-align:center;margin-bottom:80px">PORTFOLIO</h1>
        <?php
        if($this->session->userdata('type') == 'tourist' && !is_null($adds))
        {
          ?>
         <div class="adds" style="margin:auto;width:90%;text-align:center;height:300px">
          <h2 style="color:red">
            ADS 
          </h2>
          <?php
      foreach($adds as $d)
      {
        echo "<a href='".$d->link."'><img style='margin:20px;height:70%;width:20%' src='".base_url().$d->ads_img."'></a>";
      }
          ?>
        </div>
        <?php
      }
        ?>
        <div>
              <center>
                <div class="mySlides w3-animate-left" style="display:inline-block;verical-align:top;width:70%;background-image: url('<?php echo base_url(); ?>/images/Rome-Colosseum.jpg')">
                    <div>
                        <h1>Rome-Colosseum</h1>
                    </div>
                </div>
                <div class="mySlides w3-animate-left" style="display:inline-block;verical-align:top;width:70%;background-image: url('<?php echo base_url(); ?>/images/hhome.png')">
                    <div>
                        <h1>AL Kanrnak</h1>
                    </div>
                </div>
</center>
        </div>
    </div>






        <div class="vs1">
            <h1>OUR VISULAZATION</h1>


    <div id="piechart_3d" class="v"></div>
 
<div id="columnchart_values" class="v"></div>
        </div>
    <div class="service">
        <h1>OUR SERVICES</h1>
        <div>
            <img src="<?php echo base_url(); ?>/images/bulb.png">
            <h4>CREATIVE,EXCELLENT<br>AND CONTENT</h4>
        </div>
        <div>
            <img src="<?php echo base_url(); ?>/images/monitor.png">
            <h4>ALMOST PLACES IN EGYPT</h4>
        </div>
        <div>
            <img src="<?php echo base_url(); ?>/images/car.png">
            <h4>HIRE ACAR TO TRANSFER<br>YOU AS YOU LIKE</h4>
        </div>
        <div>
            <img src="<?php echo base_url(); ?>/images/guid.png">
            <h4>HIRE A TOUR-GIUDE<br>TO GUIDE YOU</h4>
        </div>
    </div>
    <div class="xx"></div>
    <div class="optinion">
        <div class="opt">
            <h1>DEVELOPERS</h1>
            <div class="d1">
                <div><img src="<?php echo base_url(); ?>/images/T1.jpg"></div>
                <h2>MOHAMED TAWFEEK</h2>
            </div>
            <div class="d2">
                <div><img src="<?php echo base_url(); ?>/images/T2.jpg"></div>
                <h2>MAHMOUD ASHRAF</h2>
            </div>
            <div class="d3">
                <div><img src="<?php echo base_url(); ?>/images/T3.jpg"></div>
                <h2>MOHAMED ALI</h2>
           </div>
            <div class="d4">
                <div><img src="<?php echo base_url(); ?>/images/T5.jpg"></div>
                <h2>MOHAMED SAAD</h2>
            </div>
            <div class="d3">
                <div><img src="<?php echo base_url(); ?>/images/T4.jpg"></div>
                <h2>MOHAMED ASHRAF</h2>
            </div>
              <div class="d3">
                <div><img src="<?php echo base_url(); ?>/images/T6.jpg"></div>
                <h2>AHMED AZOOZ</h2>
            </div>
        </div>
    </div>
    <div id="contant" class="contant">
        <div class="cont1">
            <div style="padding-top:150px">
                <img src="<?php echo base_url(); ?>/images/location.png" style="padding-bottom:40px">
                <p><br>10 Mostafa Mokhtar st. off Amar <br>ibn Yasser,Hegas sqi Heliopolis,<br>cairo,Egypt</p><br>
                <img src="<?php echo base_url(); ?>/images/mobile.png">
                <p>010-000-0000</p><br>
                <img src="<?php echo base_url(); ?>/images/fax.png">
                <p>010-000-0000</p>
            </div>
            <div>
                <h1>CONTACT US</h1>
                <?php echo form_open('home/send_mail'); ?>
                <input type="text" placeholder="Name" name="name" required=""><br>
                <input type="email" placeholder="E-mail" name="email" required=""><br>
                <input type="text" placeholder="subject" name="subject" required=""><br>
                <input type="text" placeholder="Mobile" name="phone" required=""><br>
                <textarea rows="8" placeholder="Message" name="message" required=""></textarea><br>
                <input class="send" type="submit" value="send" name="send">
                <?php form_close(); ?>
            </div>
        </div>
    </div>
</div>


<?php
$this->load->view('footer');
?>