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
        margin: 0 auto;
        position: relative;
    }

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
    #contact select:focus{
        border: 2px solid #f79100;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="password"]:hover,
    #contact input[type="number"]:hover,
    #contact input[type="file"]:hover ,
    #contact select:hover{
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

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }

    :-ms-input-placeholder {
        color: #888;
    }

    .logo {margin-top:50px;}
</style>

<button onclick="window.location.href = '<?php echo base_url(); ?>Home'" class="b">Home Page</button><br><br>
<center><h3 style="color:red">
        <?php echo validation_errors(); ?>
    </h3>
</center>

<center> <img class="logo"  src=<?php echo base_url(); ?>images/logo.png> </center>
<div class="container">  

    <?php echo form_open("Login/owner_register", array('id' => 'contact', 'enctype' => 'multipart/form-data')); ?>
    <h3>Register</h3>
    <img class="im" src=<?php echo base_url(); ?>images/line.png>

    <fieldset>

        <input style="float: left" placeholder="Name" type="text" name="username" required="" onblur="get('name_error', this.value);" >

    </fieldset>
    <div  style="float: right;position: relative;right: 30px;top:0px;" id="name_error"></div>

    <fieldset>

        <input placeholder="Email Address" type="email" name="email" required="" onblur="get('email_error', this.value);" >
    </fieldset>
    <div  style="float: right;position: relative;right: 150px;top:0px;color: green;font-size: 20px;font-family: cursive" id="email_error"></div>
    <fieldset>
        <input placeholder="Password " type="Password" name="password"  required="" onblur="get('pass_error', this.value);" >
    </fieldset>
    <div  style="float: right;position: relative;right: 0px;top:0px;color: green;font-size: 20px;font-family: cursive" id="pass_error"></div>

    <fieldset>

        <input placeholder="Phone Number " type="tel" name="phone"  required="" onblur="get('phone_error', this.value);" >
    </fieldset>
    <div  style="float: right;position: relative;right: 150px;top:0px;color: green;font-size: 20px;font-family: cursive" id="phone_error"></div>
    <fieldset>

        <input placeholder="Country" type="text" name="country" required="" onblur="get('country_error', this.value);" >
    </fieldset>
    <div  style="float: right;position: relative;right: 150px;top:0px;color: green;font-size: 20px;font-family: cursive" id="country_error"></div>
    <fieldset>
        <input placeholder="Age " type="number" min="10" max="100" name="age" required="" >
    </fieldset>

    <fieldset >
        <select  id="country" name="gender" required="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </fieldset>
    <fieldset>
        <input placeholder="Salary " type="number" min="1" max="1000" name="salary"  required>
    </fieldset>

    <fieldset>
        <input placeholder="Car type" type="text" name="car_type"  required onblur="get('car_error', this.value);">
    </fieldset>
    
    <div  style="float: right;position: relative;right: 150px;top:0px;color: green;font-size: 20px;font-family: cursive" id="car_error"></div>
    <h4>choose car picture</h4>
    <fieldset>
        <input type="file" name="userpic" accept="image/*">
    </fieldset>
    <h4>choose profile picture</h4>
    <fieldset>
        <input type="file" name="carpic" accept="image/*">
    </fieldset>


    <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
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
