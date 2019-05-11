<?php
$value = $_GET['value'];
$formfield = $_GET['field'];

//Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "name_error") {
    if (strlen($value) ==0){
        return;
    }elseif(strlen($value) < 2) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>Invalid name it Must be 2+ letters</div>";
    } else {
        echo "<div style='color: green;font-size: 20px;font-family: cursive'>Valid</div>";
    }
}

//Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "pass_error") {
    
     if (strlen($value) ==0){
        return;
    }elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $value)) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>8didgit at least ,Password must contain at least one upper alphapet and number</div>";
    } else {
             echo "<div style='color: green;font-size: 20px;font-family: cursive'>Strong Password</div>";
    }
}

//Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email_error") {
     if (strlen($value) ==0){
        return;
    }elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>Invalid email</div>";
    } else {
        echo "<span>Valid</span>";
    }
}
    //check phone number
    if ($formfield == "phone_error") {
     if (strlen($value) ==0){
        return;
    }elseif (!preg_match("/^[0-9]*$/", $value) || strlen($value)<7) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>Invalid phnoe number</div>";
    } else {
        echo "<span>Valid</span>";
    }
    }
      //check country
    if ($formfield == "country_error") {
     if (strlen($value) ==0){
        return;
    }elseif (!preg_match("/^[a-z]+$/", $value)||strlen($value)<3) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>Invalid country name</div>";
    } else {
        echo "<span>Valid</span>";
    }
    
    } 
        //check language
    if ($formfield == "lang_error") {
     if (strlen($value) ==0){
        return;
    }elseif (!preg_match("/^[a-z]+$/", $value)||strlen($value)<2) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>Invalid language</div>";
    } else {
        echo "<span>Valid</span>";
    }
    
    } 
          //check car type
    if ($formfield == "car_error") {
     if (strlen($value) ==0){
        return;
    }elseif (!preg_match("/^[a-z]+$/", $value)||strlen($value)<2) {
        echo "<div style='color: red;font-size: 20px;font-family: cursive'>Invalid car type</div>";
    } else {
        echo "<span>Valid</span>";
    }
    
    }
?>