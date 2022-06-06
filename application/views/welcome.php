<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: #1E1711; 
        }
        .welcome{
            
            /* background-image: url('./images/homepage-preowned-db11.webp'); */
            text-align: center;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            display: flex;
            z-index: 0;
            color: #fff;
            font-family: sans-serif;
            font-size: 300%;
            font-weight: 400%;

        }
        .leftnav{
            list-style-type: none;
            margin-top: 0.5%;
            
            display: block;
            width: 200px;
            height: auto;
            background-color: #27221E;
            left: 20px;
            /* position:fixed; */
            border: 2px brown;
            border-radius: 10px;
        }
        li a {
            display: block;
            /* width: 60px; */
        }
        .leftnavimg{
            width: 30%;
            
        }
        .imagediv{
            margin: 30%;
            padding-left: 5%;
        }
        .text{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }
        .logincustomer{
            position: absolute;
            top: 200px;
            right: 100px;
            /* background-color: blue;
            border: 2px brown;
            border-radius: 10px; */
            background: #0F87DF; 
            border-radius: 999px;
            box-shadow: #0F87DF 0 10px 20px -10px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
            border: 0;
        }
        .registercustomer{
            position: absolute;
            top: 200px;
            right: 0px;
            /* background-color: blue;
            border: 2px brown;
            border-radius: 10px; */
            background: #0F87DF;
            border-radius: 999px;
            box-shadow: #0F87DF 0 10px 20px -10px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
            border: 0;

        }

        .form-style-4{
            width: 450px;
            font-size: 16px;
            background: #495C70;
            padding: 30px 30px 15px 30px;
            border: 5px solid #53687E;
        }
        .form-style-4 input[type=submit],
        .form-style-4 input[type=button],
        .form-style-4 input[type=text],
        .form-style-4 input[type=email],
        .form-style-4 textarea,
        .form-style-4 label
        {
            font-family: Georgia, "Times New Roman", Times, serif;
            font-size: 16px;
            color: #fff;

        }
        .form-style-4 label {
            display:block;
            margin-bottom: 10px;
        }
        .form-style-4 label > span{
            display: inline-block;
            /* float: left; */
            width: 150px;
        }
        .form-style-4 input[type=text],
        .form-style-4 input[type=email] 
        {
            background: transparent;
            border: none;
            border-bottom: 1px dashed #83A4C5;
            width: 275px;
            outline: none;
            padding: 0px 0px 0px 0px;
            font-style: italic;
        }
        .form-style-4 textarea{
            font-style: italic;
            padding: 0px 0px 0px 0px;
            background: transparent;
            outline: none;
            border: none;
            border-bottom: 1px dashed #83A4C5;
            width: 275px;
            overflow: hidden;
            resize:none;
            height:20px;
        }

        .form-style-4 textarea:focus, 
        .form-style-4 input[type=text]:focus,
        .form-style-4 input[type=email]:focus,
        .form-style-4 input[type=email] :focus
        {
            border-bottom: 1px dashed #D9FFA9;
        }

        .form-style-4 input[type=submit],
        .form-style-4 input[type=button]{
            background: #576E86;
            border: none;
            padding: 8px 10px 8px 10px;
            border-radius: 5px;
            color: #A8BACE;
        }
        .form-style-4 input[type=submit]:hover,
        .form-style-4 input[type=button]:hover{
        background: #394D61;
        }

        .loginform:target{
            visibility: visible;
            opacity: 1;
        } 
        .registerform{
            visibility: hidden;
            background-color: orange;
            position: absolute;
            width: auto;
            height: auto;
            top: 300px;
            left: 800px;
            text-align: center;
            z-index: 10;

        }
        .registerform:target{
            visibility: visible;
            opacity: 1;
        }     
        .hire{
            visibility: hidden;
            position: absolute;
            width: 50%;
            height: auto;
            top: 500px;
            left: 600px;
            text-align: center;
        }


        .topright{
            
            top: 30px;;
            right: 50px;;
        }
        .searchimage{
            position: absolute;
            display: inline-block;
            top: 200px;;
            right: 180px;
            width: 3%;
            height: 6%;

        }
        /* .center{
            
            top: 30px;;
            right: 800px;;
        } */
        .cars-container {
            width: 86%; 
            height: auto;
            position: absolute;
            top: 250px;
            left: 220px;
            z-index: 0;
        }
        .carsprevew{
             
            width: 100%; 
            height: auto;
            position: relative;
            display: flex;
            margin-bottom: 20px;

            /* overflow: auto;  */
        }    

        .carsprevew .search_results{
            position: relative;
            height: auto;
            width: 33%;
            background-color: #2A231D;
            margin: 20px;
            border: 2px brown;
            border-radius: 10px;
            /* justify-content: center;
            align-items: baseline ; */
            bottom: 0;
            /* float: left; */
            /* display: flex; 
            flex: 1; */
            z-index: 0; 
            
        }

        .search_results .image{
            max-width: 100%;
            height: 100;
            border: 2px brown;
            border-radius: 10px;
            bottom: 0;
        }

 
        .addcar{
            background-color: blue;
            border: 2px brown;
            border-radius: 10px;
            background: #5E5DF0;

        }
        .logincar{
            background-color: blue;
            border: 2px brown;
            border-radius: 10px;
            background: #5E5DF0;
            border-radius: 999px;
            box-shadow: #5E5DF0 0 10px 20px -10px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            font-family: Inter,Helvetica,"Apple Color Emoji","Segoe UI Emoji",NotoColorEmoji,"Noto Color Emoji","Segoe UI Symbol","Android Emoji",EmojiSymbols,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans",sans-serif;
            /* font-size: 16px;
            font-weight: 700; */
            line-height: 24px;
            opacity: 1;
            outline: 0 solid transparent;
            padding: 8px 18px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: fit-content;
            word-break: break-word;
            border: 0;
        }
        .seemore{
            background-color: #FE6C00;
            width: 100%;
            height: auto;
            position: absolute;
            bottom: 0;
            text-align: center;
            border: 2px brown;
            border-radius: 10px;
            /* justify-content: baseline; */
            /* align-items: center; */
        }
        .details{
            width: 100%;
            height: auto;
            position: absolute;
            left: 2%;
            bottom: 10%;
        }
        a{
            list-style: none;
        }
        .hire{
            position: fixed;
            display: flex;
            flex-direction: column;
            width: 90%;
            height: 90%;
            background-color: red;
            border: 2px brown;
            border-radius: 10px;
            left: 5%; 
            top: 5%;
        }
        .hire:target{
            visibility: visible;
            opacity: 1;
            z-index: 20;
            /* visibility: hidden; */
            
        }
        .closebt .hire:target{
            visibility: collapse;
        }
        .hireimage{
            position: relative;
            width: 100%;
            height: 50%;
            background-color: #0F87DF;
        }
        .hireform{
            position: relative;
            width: 100%;
            height: 50%;
            background-color: peru;
        }
        .form{
            position: relative;
            left: 30%;
            background-color: peru;
            border: none;
        }
        .searchdiv:target{
            visibility: visible;
            opacity: 1;
            z-index: 6;
        }
        .searchdiv{
            /* visibility: hidden; */
            background-color: #2A231D;
            width: auto;
            height: auto;
            border: 5% brown;
            border-radius: 5%;
            z-index: 10;
            position: absolute;
            top: 30%;
            left: 50%;
            text-align: center;
            display: block;
            justify-content: center;
            align-items: center;
            display: flex;
            z-index: 9;
            

        }
        .placeholder{
            margin: 10px;
        }
        .gotop{
            position: fixed;
            top: 650px;
            left: 1550px;
            z-index: 10;
        } 
        .searchimg{
            width: 35px;
            margin-top: 5px;

        }
        .closebt{
            position: relative;
            display: inline-block;
            /* background-color: pink; */
            top: 1%;
            right: -49%;
            width: auto;
            height: auto;
            z-index: 25;
        }
        .closebt img{
            position: relative;
            width: 20px;
        }
        .loginform{
            visibility: hidden;
            text-align: center;
            justify-content: center; 
            align-items: center;
            background-color: orange;
            position: fixed;
            width: 50%;
            height: 70%;
            top:20%;
            left: 30%;
            text-align: center;
            z-index: 10;
        }
        .closebtn{
            position: relative;
            background-color: red;
            top: 2%;
            left: 88%;
            width: 10%;
            height: auto;
            border: 2px brown;
            border-radius: 10px;
            justify-content: center;
            z-index: 25;

        }  
        .middlefication{
            position: relative;
            left: 20%;
            background-color: orange;
            border: none;
            top: 10%;
        }
        .popup_message{
            position: fixed;
            display: block;
            top: 20%;
            left: 40%;
            width: 40%;
            height: 40%;
            background-color: skyblue;
            border: 2px brown;
            border-radius: 10px;
            z-index: 20;
        }
        .okay{
            position: relative;
            display: block;
            bottom: 5%;
            left: 50%;
            background-color: #5E5DF0;
            border: 2px brown;
            border-radius: 10px;
            z-index: 20;
        }
    
    
   
    </style>
</head>
<body>
<!-- where all the clients will be
the log in will be shown ontop of the main file
all for the renter car owner 
-->
<div class="welcome">
    <h1 >Welcome to CarHire</h1>
</div>

<!-- the left division-->
<div class='leftnav'>
    <div class="leftnav imagesdiv">           
         <li>
                <br>
                <ul> <a href=""><img class="leftnavimg" src="./images/home.png"alt=""></a><p class="text">Home</p> </ul>
                <br>
                <ul><img class=" leftnavimg" src="./images/add.png" onclick="document.getElementById('addcar').style.visibility='visible'"></img><p class="text"> add your car</p></ul>
                <br>
                <ul><img class=" leftnavimg" src="./images/login.png" onclick="document.getElementById('carownerlogin').style.visibility='visible'"></img><p class="text">Log in( car owners)</p></ul>
                <br>
                <ul><img class="leftnavimg" src="./images/notes.png" alt="" onclick="document.getElementById('regform').style.visibility='visible'"> <p class="text">Register to hire</p></ul>
                <br>
                <ul><img class="leftnavimg" src="./images/login.png" alt="" onclick="document.getElementById('loginform').style.visibility='visible'"> <p class="text">log in to hire</p></ul>
                <br>
                <ul> <img class="leftnavimg" src="./images/user.png" alt=""> <p class="text">Account</p></ul>
                <br>
                <ul> <img class="leftnavimg" src="./images/setting.png" alt="" onclick="document.getElementById('settings').style.visibility='visible'"><p class="text">Settings</p></ul>
                <br>
                <ul> <img class="leftnavimg" src="./images/help.png" alt="" onclick="document.getElementById('gethelp').style.visibility='visible'"><p class="text">Get help</p></ul>
                <br>
                <ul> <img class="leftnavimg" src="./images/settings.png" alt="" onclick="document.getElementById('support').style.visibility='visible'"><p class="text">Offer support</p></ul>
                <br>
                <ul> <img class="leftnavimg" src="./images/star.png" alt=""><p class="text">Rate us</p></ul>
                <br>
                <ul><form  action="<?php echo base_url()?>Customer/log_out" method="post">
                        <!-- <input type="submit" value=" <img class="leftnavimg" src="./images/logout.png" alt=""><p class="text">Log out</p></ul>"> -->
                        <input class="leftnavimg" type="image" src="./images/logout.png" name="submit" alt="submit">
                    </form>
                    <p class="text">Log out</p>
                <br>
                
                <ul></ul>

            </li>
    </div>
</div>

            
                <div class="loginform" id="addcar" >
                <div class="closebtn" onclick="document.getElementById('addcar').style.visibility='hidden'"><span class="text">close</span></div>
                    <form class="form-style-4 middlefication" action="<?php echo base_url()?>Car_owner/register" method="post" enctype="multipart/form-data">
                        <label for="field1">
                        <span>Enter Your first Name</span><input type="text" name="firstname" required="true" />
                        </label>
                        <label for="field3">
                        <span>Enter Your second Name</span><input type="text" name="secondname" required="true" />
                        </label> 
                        <label for="field2">
                        <span>Email Address</span><input type="email" name="email" required="true" />
                        </label>
                        <label for="field4">
                        <span>Enter Your password</span><input type="password" name="password"  required="true"/>
                        </label>
                        <label for="field4">
                            <span>National id front</span> <input type="file" name="id_front" required="true">
                        </label>
                        <label for="field4">
                            <span>Narional id back</span> <input type="file" name="id_back" required="true">
                        </label>
                        <label for="field4">
                            <span>Suporting documents</span> <input type="file" name="supporting_documents" required="true">
                        </label>
                        <label>
                        <span> </span><input type="submit" value="Send" />
                        </label>
                    </form>
    
                </div> <br>
        <?php if ($this->session->flashdata('car_owner_reg_message')!== null): ?>
		    <div id="kenobi1" class="  popup_message" >
            <div class="closebtn" onclick="document.getElementById('addcar').style.visibility='kenobi1'" ><span class="text" >close</span></div>
                <span class="text"><?php echo $this->session->flashdata('car_owner_ reg_message'); ?></span>

            </div> 
	    <?php endif; ?>
        <?php if ($this->session->flashdata('car_owner_reg_error_message')!== null): ?>
		    <div id="kenobi2" class="  popup_message" >
                <span class="text"><?php echo $this->session->flashdata('car_owner_ reg_error_message'); ?></span>
                <div class="closebtn" onclick="document.getElementById('kenobi2').style.visibility='hidden'" ><span class="text" >close</span></div>
            </div> 
	    <?php endif; ?>   
            <div class="loginform" id="carownerlogin">
                <div class="closebtn" onclick="document.getElementById('carownerlogin').style.visibility='hidden'"><span class="text" >close</span></div>
                <form class="form-style-4 middlefication" action="<?php echo base_url()?>Car_owner/login_validation" method="post">
                
                        <label for="field2">
                        <span>Email Address</span><input type="email" name="email" required="true" />
                        </label>
                        <label for="field4">
                        <span>Enter Your password</span><input type="password" name="password"  required="true"/>
                        </label>
                        <label>
                        <span> </span><input type="submit" value="Send" />
                </form>
            </div> 
        <?php if ($this->session->flashdata('car_log_error_message')!== null): ?>
		    <div id="kenobi3" class=" car_log_ error_message text popup_message"><?php echo $this->session->flashdata('car_log_ error_message'); ?>
            <div class="closebtn" onclick="document.getElementById('addcar').style.visibility='kenobi3'" ><span class="text" >close</span></div>
            </div> 
	    <?php endif; ?>
        
        </div>


<!-- top part -->
    
        <div class='topright'> 
          <a href="#searchdiv"><img class="searchimage" src="./images/search.png" alt=""> </a>    
        <!-- <a href="#loginform"><button class="logincustomer">login</button></a> -->
                <div class="loginform" id="loginform">
                <div class="closebtn" onclick="document.getElementById('loginform').style.visibility='hidden'"><span class="text" >close</span></div>
                    <form class="form-style-4 middlefication" action="<?php echo base_url()?>Customer/login_validation" method="post">
                        <label for="field2">
                        <span>Email Address</span><input type="email" name="email" required="true" />
                        </label>
                        <label for="field4">
                        <span>Enter Your password</span><input type="password" name="password"  required="true"/>
                        </label>
                        <label>
                        <span> </span><input type="submit" value="Send" />
                    </form>
    
                </div>
                <?php if ($this->session->flashdata('customer_log_message')!== null): ?>
		            <div id="kenobi4" class=" customer_log_message text popup_message"><?php echo $this->session->flashdata('customer_log_message'); ?>
                    <div class="closebtn" onclick="document.getElementById('kenobi4').style.visibility='hidden'" ><span class="text" >close</span></div>
                    </div> 
	            <?php endif; ?>
                <?php if ($this->session->flashdata('customer_log_error_message')!== null): ?>
		        <div id="kenobi5" class=" customer_log_ error_message text popup_message"><?php echo $this->session->flashdata('customer_log_error_message'); ?>
                    <div class="closebtn" onclick="document.getElementById('kenobi5').style.visibility='hidden'" ><span class="text" >close</span></div>
                </div> 
	            <?php endif; ?>
            <!-- <a href="#regform"><button  class="registercustomer">register</button></a> -->
                <div class="loginform"  id="regform" >
                    <div class="closebtn" onclick="document.getElementById('regform').style.visibility='hidden'"><span class="text">close</span></div>
                    <form class="form-style-4 middlefication" action="<?php echo base_url()?>Customer/exist" method="post" enctype="multipart/form-data">
                        <label for="field1">
                        <span>Enter Your first Name</span><input type="text" name="firstname" required="true" />
                        </label>
                        <label for="field3">
                        <span>Enter Your second Name</span><input type="text" name="secondname" required="true" />
                        </label> 
                        <label for="field2">
                        <span>Email Address</span><input type="email" name="email" required="true" />
                        </label>
                        <label for="field4">
                        <span>Enter Your password</span><input type="password" name="password"  required="true"/>
                        </label>
                        <label for="field4">
                            <span>National id front</span> <input type="file" name="id_front"required="true"> 
                        </label>
                        <label for="field4">
                            <span>Narional id back</span> <input type="file" name="id_back" required="true">
                        </label>
                        <label for="field4">
                                <span>Driving license</span> <input type="file" name="driving_license" required="true">
                        </label>
                        <label>
                        <span> </span><input type="submit" value="Send" />
                        </label>
                    </form>
                </div> 
                <?php if ($this->session->flashdata('customer_reg_message')!== null): ?>
		            <div id="kenobi6" class=" customer_reg_message text popup_message"><?php echo $this->session->flashdata('customer_reg_message'); ?>
                    <div class="closebtn" onclick="document.getElementById('kenobi6').style.visibility='hidden'" ><span class="text" >close</span></div>
                    </div> 
	            <?php endif; ?>
                <?php if ($this->session->flashdata('customer_reg_error_message')!== null): ?>
                    <div id="kenobi7" class=" customer_reg_ error_message text popup_message"><?php echo $this->session->flashdata('customer_reg_error_message'); ?>
                    <div class="closebtn" onclick="document.getElementById('kenobi7').style.visibility='hidden'" ><span class="text" >close</span></div>
                    </div> 
                <?php endif; ?>
             
        </div>
        <?php if ($this->session->flashdata('error_message')!== null): ?>
		    <div id="kenobi8" class=" error_message text popup_message"><?php echo $this->session->flashdata('error_message'); ?>
            <div class="closebtn" onclick="document.getElementById('kenobi8').style.visibility='hidden'" ><span class="text" >close</span></div>
            </div> 
	    <?php endif; ?>
   
<!--central section -->
        <?php if (isset($results)): ?>
             <div class="cars-container">
                <?php $counter = 0; ?>                
                <?php foreach ($results as $div): ?>
                    <?php if ($counter == 0 || $counter%3 == 0): ?>
                        <div class="carsprevew" > 
                    <?php endif; ?>

                    <div class="box search_results" id="">
                        <div class="">
                            <img class="box image" src="<?php echo base_url()?>/images/<?php echo $div->imagename?>" alt="">
                            <div class=" box status"></div>
                         </div> 
                        <div class="box details">
                            <p class="text">Name: <?php echo $div->name; ?><br></p>
                            <p class="text">Make: <?php echo $div->makename; ?><br></p>
                            <p class="text">Year:<?php echo $div->yearofmodel; ?><br></p>

                            
                            
                        </div><br>
                        <a href="#hire_<?php echo $div->car_id; ?>"> <div class="box seemore" onclick="document.getElementById('hire_<?php echo $div->car_id; ?>').style.visibility='visible'"><p class="text">See more</p></div></a>

                    </div>   

                    <?php if (($counter + 1)%3 == 0 || ($counter + 1) == $results_count): ?> 
                        </div> 
                    <?php endif; ?>
                    <?php $counter++; ?>

                    <div id="hire_<?php echo $div->car_id; ?>" class='hire'>
                            <div class="closebt">
                                <img  src="./images/delete-button.png" alt="" onclick="document.getElementById('hire_<?php echo $div->car_id; ?>').style.visibility='hidden'">
                            </div>
                        <div class="hireimage">
                            <img src="<?php echo base_url()?>/images/<?php echo $div->imagename?>" alt="">  

                        </div>
                        <div class="hireform">
                            <h3><?php echo $div->name; ?></h3>
                            <form class="form-style-4 form" action="<?php echo base_url()?>Customer/make_order" method="post">                      
                                <input type="hidden" name="car_id" value="<?php echo $div->car_id; ?>" >
                                <label for="field1">
                                <span>Pick up place</span><input type="text" name="pickupplace" required="true"></input>
                                </label>
                                <label for="field2">
                                <span>Return place</span><input type="text" name="dropoffplace" required="true"></input>
                                </label>
                                <label for="field2">
                                <span>Time for rent</span><input type="text" name="time" required="true" />
                                </label>
                                <label for="field3">
                                <span>Pick up time</span><input type="text" name="pickuptime" required="true"></input>
                                </label>
                                <label for="field4">
                                <span>Return time</span><input  type="text" name="dropofftime"  required="true"></input>
                                </label>
                                <label for="field4">
                                <span>Driving mode</span><input type="checkbox" name="mode" id="">
                                                        <input type="checkbox" name="mode" id="">
                                </label>
                                <label>
                                    <!-- enter the method of payment -->
                                <span> </span><input type="submit" value="Finish" />
                            </form>
                        </div>

                    </div>
                        <?php if ($this->session->flashdata('customer_notregisterd_error_message')!== null): ?>
                            <div id="kenobi19" class=" customer_reg_message text popup_message"><?php echo $this->session->flashdata('customer_notregisterd_error_message'); ?>
                            <div class="closebtn" onclick="document.getElementById('kenobi19').style.visibility='hidden'" ><span class="text" >close</span></div>
                            </div> 
	                    <?php endif; ?> 
                <?php endforeach; ?>
   
             </div>
             <?php endif; ?>  
            
            <!-- for the results to be shown after the useer searches --> 
            <div class="gotop">
            <a href="#place"><img class="searchimg" src="./images/up-arrow.png" alt=""></a>
            <br>
            <!-- <p class="text">Go to top</p></ul> -->
            </div>
            <div id="searchdiv" class="searchdiv">            
                <form class="search" action="<?php echo base_url()?>Welcome/index" method="post">
                    <input class='placeholder' id="place" type="text" name="search_term" placeholder="Search..">
                </form>
            </div>



                            <!-- for the get help -->
                            <div id="gethelp" class="loginform">
                                    <div class="closebtn">
                                        <img href="hire" src="./images/delete-button.png" alt="" onclick="document.getElementById('gethelp').style.visibility='hidden'">
                                    </div>
                                    <form class="form-style-4 form middlefication" action="<?php echo base_url()?>Customer/get_help" method="post">                      
 
                                        <label for="field1">
                                        <span>Location</span><input type="text" name="location" required="true"></input>
                                        </label>
                                        <label for="field2">
                                        <span>Type of distress</span><input type="text" name="distress" required="true"></input>
                                        </label>
                                        <label for="field2">
                                        <span>Details of help needed</span><input type="text" name="details" required="true" />
                                        </label>
                                        <label>
                                            <!-- enter the method of payment -->
                                        <span> </span><input type="submit" value="Finish" />
                                    </form>
                                </div>
                                <!-- for the offer support -->
                                <div id="support" class="loginform">
                                    <div class="closebtn">
                                        <img href="hire" src="./images/delete-button.png" alt="" onclick="document.getElementById('support').style.visibility='hidden'">
                                    </div>
                                    <form class="form-style-4 form middlefication" action="<?php echo base_url()?>Customer/register_support" method="post">                      
 
                                        <label for="field1">
                                        <span>Name of institution</span><input type="text" name="institution" required="true"></input>
                                        </label>
                                        <label for="field2">
                                        <span>Type of support</span><input type="text" name="support" required="true"></input>
                                        </label>
                                        <label for="field2">
                                        <span>location</span><input type="text" name="location" required="true" />
                                        </label>
                                        <label for="field3">
                                        <span>Business certificate</span><input type="file" name="cert" required="true"></input>
                                        </label>
                                        <span> </span><input type="submit" value="Finish" />
                                    </form>
                                </div>  
                                
                                <div id="settings" class="loginform">
                                    <div class="closebtn">
                                        <img href="hire" src="./images/delete-button.png" alt="" onclick="document.getElementById('settings').style.visibility='hidden'">
                                    </div>
                                    <span class="text">Dark mode</span>
                                    <span class="text">location</span>
                                </div>
                    
                    
        </section>

   

<!-- the styling and scripting -->
    <script>
        function TestsFunction() {
            var T = document.getElementById("regform");
            T.style.display = "block";  // <-- Set it to block
        }
        // function myFunction1() {
        //     var x = document.getElementById("mydiv1");
        //     if (x.style.display === "none") {
        //         x.style.display = "block";
        //     } else {
        //         x.style.display = "none";
        //     }
        // }    
        //     function myFunction() {
        //     var x = document.getElementById("mydiv");
        //     if (x.style.display === "none") {
        //         x.style.display = "block";
        //     } else {
        //         x.style.display = "none";
        //     }    
        // }
        // function myFunction2() {
        //     var y = document.getElementById("register");
        //     if (y.style.display === "none") {
        //         y.style.display = "block";
        //     } else {
        //         y.style.display = "none";
        //     } 
    
        // }
        // function show_hire_details(){

        // } 

    </script>

</body>
</html>