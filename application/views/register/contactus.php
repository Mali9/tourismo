
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
  background-image:  url("images/register.jpg");
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
#contact textarea,
#contact select{
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  padding: 25px;
  margin: 30px 0;
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
#contact select,
#contact textarea{
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
#contact textarea:focus{
 border: 2px solid #f79100;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="password"]:hover,
#contact input[type="number"]:hover,
#contact input[type="file"]:hover ,
#contact select:hover,
#contact textarea:hover{
  -webkit-transition: border-color 0.4s ease-in-out;
  -moz-transition: border-color 0.1s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 2px solid #f79100;
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

:-ms-input-placeholder {
  color: #888;
}

.logo {margin-top:50px ;}
</style>
<button onclick="window.location.href='Home'" class="b">Home Page</button>

<center> <img class="logo"  src=images/aboutlogo.png> </center>
<div class="container">  

  <form id="contact" action="" method="post">
    <h3>Contact Us</h3>
    <img class="im" src=images/line.png>
    
	<fieldset>
      <input placeholder="Name" type="text" name="contactname" required >
    </fieldset>
	
    <fieldset>
      <input placeholder="Email" type="email" name="contactemail"  required>
    </fieldset>
	
	<fieldset>
      <input placeholder="Subject " type="text" name="contactsubject"  required>
    </fieldset>
	
    <fieldset>
    <textarea placeholder="Type your message here...." tabindex="5" name="contactmessage" rows="5" cols="50" required></textarea>
    </fieldset>
	
	
	
	
	
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Confirm</button>
    </fieldset>
	
     </form>
</div>