
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }



    body {

        font-family: "ITC Avant Garde Gothic std", Helvetica, Arial, sans-serif;
        font-size: 12px;
        line-height: 30px;
        color: #f79100;
        background-image:  url("<?php echo base_url(); ?>images/register.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }


    .container {
        max-width: 400px;
        width: 100%;
        margin-top: -75 ;
        margin-left:500;
        position: relative;
    }
    .clearfix:after { clear: both ;}

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="password"],
    #contact input[type="number"],
    #contact button[type="submit"] ,
    #contact input[type="file"],
    #contact select{
        font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
        padding: 25px;
        margin: 150px 0;
        margin-top: 180px;
    }

    .im {margin: 5px 0 30px 0;}

    #contact h3 {
        display: block;
        font-size: 35px;
        font-weight: 400;
        margin-bottom: 10px;
    }



    fieldset {
        border: medium none ;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="password"],
    #contact input[type="number"],
    #contact input[type="file"],

    #contact select{
        width: 100%;
        border: 2px solid #212121;
        border-radius: 4px;
        margin: 0 0 10px 0;
        padding: 10px;
        background-color:transparent;

        color:#f79100;
    }

    #contact input[type="text"]:focus,
    #contact input[type="email"]:focus,
    #contact input[type="tel"]:focus,
    #contact input[type="password"]:focus,
    #contact input[type="number"]:focus,
    #contact input[type="file"]:focus,
    #contact select:focus,
    #contact input[type="checkbox"]:focus{
        border: 2px solid #f79100;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="password"]:hover,
    #contact input[type="number"]:hover,
    #contact input[type="file"]:hover ,
    #contact select:hover,
    #contact input[type="checkbox"]:hover{
        -webkit-transition: border-color 0.4s ease-in-out;
        -moz-transition: border-color 0.1s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 2px solid #f79100;
    }



    #contact button[type="submit"] {
        width: 100%;
        border: none;
        background: #f79100;
        color: #000;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
        font-weight:bold;
        border-radius: 4px;
    }

    #contact button[type="submit"]:hover {

        background-color:#ffaf3d;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;

    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }
    .b{
        width: 150px;
        border: none;
        background: #f79100;
        color: #000;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
        font-weight:bold;
        border-radius: 4px;
        position: relative;
        top:10px;
        left: 600px;
    }
    .b:hover{
        background: #d9d9d9;
    }

    :-ms-input-placeholder {
        color: #888;
    }
    .logo {margin-top:50 ;}


</style>
<button onclick="window.location.href = '<?php echo base_url(); ?>Home'" class="b">Home Page</button>

<center> <img class="logo"  src=<?php echo base_url(); ?>images/logo.png> </center><br>

<center><h1 style="color: red"><?php
if($this->session->flashdata('login-failed'))
{
    echo $this->session->flashdata('login-failed');
}

?></h1></center>
<div class="container">
    <div style="position: relative;right: 750px;top:150px;">
        <button style="position: relative;left: 650px;width: 150px;height:55px" name='tourist_login' type='submit' class='b' id='but1' data-submit='...Sending'>Log in As tourist </button>
        <button style="position: absolute;top:10px;left: 850px" name='car_owner__login' type='submit' class='b' id='but2' data-submit='...Sending'>Log in As car Owner </button>
        <button style="position: absolute;top:10px;left: 1050px" name='tour_guide_login' type='submit' class='b' id='but3' data-submit='...Sending'>Log in As tour Guide </button>
    </div>


     <?php echo form_open("Login/login", array('id' => 'contact', 'enctype' => 'multipart/form-data')); ?>
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
    
    <?php form_close(); ?>
</div>
<script>
    var f11 = "<h3>Log in As tourist </h3><br>" + "<fieldset><input placeholder='Email' type='email' name='username'  required>" + "</fieldset>" +
            "<fieldset>" + "<input placeholder='Password ' type='Password' name='password'  required>" + "</fieldset><fieldset>"
            + "<input  style='position:relative;left:00px' name='tourist_login' type='submit' id='contact-submit'value ='Login' data-submit='...Sending' class='b'>" + "</fieldset>" +
            "<fieldset><input type='checkbox' name='remember' id='login_remember_me' value='1'><font color ='#888' >Remember me </font>" +
            "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href='#asd'> <font color=#888 > Forget Password ? </font></a></fieldset>";


    var f22 = "<h3>Log in As car owner </h3><br>" + "<fieldset><input placeholder='Email' type='email' name='username'  required>" + "</fieldset>" +
            "<fieldset>" + "<input placeholder='Password ' type='Password' name='password'  required>" + "</fieldset><fieldset>"
            + "<input  style='position:relative;left:00px' name='car_owner_login' type='submit' value ='Login' id='contact-submit' data-submit='...Sending' class='b'>" + "</fieldset>" +
            "<fieldset><input type='checkbox' name='remember' id='login_remember_me' value='1'><font color ='#888' >Remember me </font>" +
            "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href='#asd'> <font color=#888 > Forget Password ? </font></a></fieldset>";


    var f33 = "<h3>Log in As tour guide </h3><br>" + "<fieldset><input placeholder='Email' type='email' name='username'  required>" + "</fieldset>" +
            "<fieldset>" + "<input placeholder='Password ' type='Password' name='password'  required>" + "</fieldset><fieldset>"
            + "<input  style='position:relative;left:00px' name='tour_guide_login' type='submit' value ='Login' id='contact-submit' data-submit='...Sending' class='b'>" + "</fieldset>" +
            "<fieldset><input type='checkbox' name='remember' id='login_remember_me' value='1'><font color ='#888' >Remember me </font>" +
            "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href='#asd'> <font color=#888 > Forget Password ? </font></a></fieldset>";


    function str()
    {
        document.getElementById('but1').addEventListener('click', f1, false);
        document.getElementById('but2').addEventListener('click', f2, false);
        document.getElementById('but3').addEventListener('click', f3, false);

    }
    function f1()
    {
        
        document.getElementById('contact').innerHTML = f11;
    }
    function f2()
    {
        document.getElementById('contact').innerHTML = f22;
    }
    function f3()
    {
        document.getElementById('contact').innerHTML = f33;
    }
    window.addEventListener('load', str, false);
</script>
