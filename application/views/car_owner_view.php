<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car owners</title>
    <style>
        body{
            background-color: #1E1711; 
        }
        /* .body{
            background-color: #1E1711; 
            width: 100%;
            position: static;

        .welcome{
            
            /* background-image: url('./images/homepage-preowned-db11.webp'); 
            text-align: center;
            width: 100%;
            height: auto;
            justify-content: center;
            align-items: center;
            display: flex;
            z-index: 0;

        }
        .welcome h1{
                        color: #fff;
            font-family: sans-serif;
            font-size: 200%;
            font-weight: 400%;

        } */
        .leftnav{
            list-style-type: none;
            margin-top: 0.5%;
            /* position: relative; */
            display: block;
            width: 200px;
            /* width: 13%;  */
            height: auto;
            background-color: #27221E;
            left: 20px;
            border: 2px brown;
            border-radius: 10px;

        }
        li a {
            display: block;
            /* width: 60px; */
        }
        /* .leftnavimg{
            width: 30%; 
            
        }*/
        .text{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }
        /* .leftnavimg{
            width: 30%;
            
        } */
        .dashboard{
            /* display: flex; */
            position: absolute;
            /* background-color: red; */
            top: 0%;
            left: 220px;
            /* left: 14%; */
            width: 86%;
            height: 100%;
            display:flex;
            flex-direction: column;
            /* visibility: hidden;   */
           
        }
        .box{
            /* background-color: red; */
            /* position: absolute;   */
            /* background-color: magenta;  */
            width: 100%; 
            height: 100%;
            
            position: relative;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            top: 0%;
            left: 0%;
        }
        .box2{
           
            /* position: absolute;   */
            /* background-color: magenta;  */
            width: 100%; 
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            /* top: 2%;
            left: 0%; */
        }
        .box p{
            margin-left: 40%;
        }
        .box2 p{
            margin-left: 40%;
        }
        .left{
            position: relative;
            left: 0;
            top: 0;
            width: 33.33%;
            height: 100%;
            /* background-color: blue;  */
            display: block;
        }        
        .center{
            position: absolute;
            left: 33.33%;
            top: 0;
            /* background-color: purple; */
            width: 33.33%;
            max-height: 100%;
            /* display: inline-block; */
            /* margin: 50; */
            /* border: 2px brown;
            border-radius: 10px; */
        
        }
        .right{
            position: absolute;
            left: 66.66%;
            top: 0;
            width: 33.33%;
            height:100%;
            /* background-color: maroon; */
            /* display: block;  */
        }
        .earnings{
            background-color: #2A231D;
            position: relative;
            width: 90%;
            min-height: 300;
            max-height: 330px;
            margin: 5%;
            border: 2px ;
            border-radius: 10px;
            display: inline-block; 

            /* display: flex;   */
        }
        .headdate{
            display: inline-block ;
            position: relative;
            color: #FE6C00;
            /* top: %; */
            left: 50%;

        }
        .headamount{
            display: inline-block ;
            color: green;
            font-family: biorhyme;
            position: relative;
            left: 30%;
           
        }
        .earningresults{
            position: relative;
            top: 15%;
            left: 0%;
            width: 100%;
            height: 20%;
            /* background-color: red;  */
        }
        .name{
            position: relative;
            left: 2%;
        }
        .date{
            position:relative;
            left: 50%;
        }
        .amount{
            position: relative;
            left: -5%;
        }
        .transactions{
            background-color: #2A231D;
            position: relative;
            width: 90%;
            min-height: 250px;
            margin: 5%;
            border: 2px brown;
            border-radius: 10px;
            display: inline-block; 
            
            
        } 

        .activities{
            background-color: #2A231D;
            position: relative;
            width: 90%;
            left: 0;
            min-height: 300;
            max-height: 330px;
            margin: 5%;
            border: 2px brown;
            border-radius: 10px;
            display: inline-block;
           
        }
        .income{
            position: relative;
            display: inline;
            top: 0%;
            left: 4%;
        }
        .withdrawn{
            position: relative;
            display: inline;
            top: 5%;
            left: 4%;
        }
        .acc{
            position: relative;
            display: inline;
            top: 10%;
            left: 4%;
        }
        .margine{
            position: relative;
            display: inline;
            top: 15%;
            left: 4%;
        }
        .incomeam{
            position: absolute;
            display: inline-block;
            top: 20%;
            left: 70%;
        }
        .withdrawnam{
            position: absolute;
            top: 30%;
            left: 70%;
            display: inline-block;
        }
        .accam{
            position: absolute;
            top: 40%;
            left: 70%;
            display: inline-block;
        }
        .margineam{
            position: absolute;
            top: 50%;
            left: 70%;
            color: green;
            display: inline-block;
        }

        .status{
            background-color: red;
            position: relative;
            left: 25%;
            top: 0%;
            width: 50%;
            min-height: 15px;
            
            border: 2px brown;
            border-radius: 10px;
           
            align-items: center;
            
            display: flex;
        }
        /* .status.currenly{
            position: relative ;
            left: 0%;

        } */

        .indiv{
            background-color: red;
            width: 20%;
            max-height: 20px;
            position: relative;
            top: 7%;
            left: 40%;
            display: inline-block;
            border: 2px brown;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
        }
        .outdiv{
            background-color: green;
            width: 20%;
            max-height: 20px;
            position: relative;
            top: 7%;
            left: 10%;
            display: inline-block;
            border: 2px brown;
            border-radius: 10px; 
        }
        .inout{
            position: relative;
            top: 10%;
            /* background-color: red ; */
            height: auto;
            width: 100%;
            display: inline-block;
        }
        .dateout{
            position:relative;
            left: 5%; 
        }
        .datein{
            position:relative;
            left: 45%;
            top: -2;
        }
        
        .carstatus{
            background-color: #2A231D;
            position: relative;
            left: 0;
            width: 90%;
            min-height: 300;
            max-height: 330px;
            margin: 5%;
            border: 2px brown;
            border-radius: 10px;
            display: inline-block; 
            
        }
        .seemore{
            background-color: FE6C00;

        }
        
        .registerform{
            visibility: hidden;
            background-color: orange;
            position: relative;
            width: auto;
            height: auto;
            top: 50%;
            left: 50%;
            text-align: center;
            z-index: 10;

        }
        .registerform:target{
            visibility: visible;
            opacity: 1;
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
        /* get car in db */
        .registerform{
            position: fixed;
            width: 70%;
            height: 50%;
            left: 20%;
            top: 10%;
            align-content: center;
            background-color: peru;
        }
        .middlefication{
            position: relative;
            left: 30%;
            background-color: peru;
            border: none;
            top: 10%;
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
            z-index: 12;

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
    </style>
</head>
<body>
    <!-- <div class="body"> -->
            <!--<section class='top'>-->
                <!-- <div class="body welcome">
                    <!-- <h1 >Welcome to CarHire</h1> 
                </div> -->

            <!-- the left division-->
                <div class='body leftnav'>
                    <div class="leftnav imagesdiv">           
                        <li>
                                <br>
                                <ul> <a href="#"><img class="leftnavimg" src="./images/home.png" alt=""></a><p class="text">Home</p> </ul> 
                                <br>
                                <ul><img class=" leftnavimg" src="./images/add.png" alt="" ></img><p class="text" onclick="document.getElementById('addcar').style.visibility='visible'">Add your car</p></ul>
                                <br>
                                <!-- <ul><a href="#carownerlogin"><img class=" leftnavimg" src="./images/login.png"></img></a><p class="text">Log in</p></ul>
                                <br> -->
                                <ul> <img class="leftnavimg" src="./images/user.png" alt=""> <p class="text">Account</p></ul>
                                <br>
                                <ul> <img class="leftnavimg" src="./images/setting.png" alt=""><p class="text">Settings</p></ul>
                                <br>
                                <ul> <img class="leftnavimg" src="./images/help.png" alt=""><p class="text">Get help</p></ul>
                                <br>
                                <ul> <img class="leftnavimg" src="./images/star.png" alt=""><p class="text">Rate us</p></ul>
                                <br>
                                <ul> <img class="leftnavimg" src="./images/logout.png" alt=""><p class="text">Log out</p></ul>
                                
                                <br>
                                
                                <ul></ul>

                            </li>
                    </div>
                    <div class="registerform" id="addcar" >
                        <div class="closebtn" onclick="document.getElementById('addcar').style.visibility='hidden'"><span class="text" >close</span></div>
                        <form class="form-style-4 middlefication" action="<?php echo base_url()?>Car_owner/carinDB" method="post" enctype='multipart/form-data'>
                            <label for="field1">
                            <span>Car name</span><input type="text" name="name" required="true" />
                            </label>
                            <label for="field3">
                            <span>Make name</span><input type="text" name="makename" required="true" />
                            </label> 
                            <label for="field2">
                            <span>Model year</span><input type="text" name="yearofmodel" required="true" />
                            </label>
                            <label for="field2">
                            <span>Time of rent in days</span><input type="text" name="renttime" required="true" />
                            </label>
                            <label for="field3">
                            <span>Location</span><input type="text" name="location" required="true" /> 
                            </label>    
                            <label for="field4">
                                <span>Picture</span> <input type="file" name="picture">
                            </label>
                            <!-- <label for="field4">
                            <span>Picture</span> <input type="file" name="picture">
                            </label> -->
                            <!-- <label>
                            <span> </span><input type="submit" value="Send" />
                            </label> -->

                            <span> </span><input type="submit" value="Send" />
                            </label>
                            </form>
                        </form>

                    </div> <br>
                <?php if ($this->session->flashdata('carindb_message')!== null): ?>

		        <div id="kenob1" class=" popup_message"><span class="text"><?php echo $this->session->flashdata('carindb_message'); ?></span>
                    <div class="closebtn" onclick="document.getElementById('kenobi1').style.visibility='hidden'" ><span class="text" >close</span></div>
                </div> 
	            <?php endif; ?>           
                <?php if ($this->session->flashdata('carindb_error_message')!== null): ?>
		            <div class=" popup_message"><span class="text"><?php echo $this->session->flashdata('carindb_error_message'); ?></span></div> 
	            <?php endif; ?>

                </div>
            <!-- 
            center part -->
            <div class="dashboard">
                
                  <div id="details" class=" dashboard box">
                    <div class="box left">
                        <div class="left earnings">
                            <!-- this will show when the car is succesifuly rented out --> 
                            <p class="text">Your earning</p>
                            <!-- the full earnings table class earn-->   
                                <span class="text  headamount">Amount</span>
                                <span class="text headdate">Date</span>
                              
                              
                                <!-- the dive to have the foreach loop --> 
                                <div class=" earningresults">
                                    <!-- image&name has both the image and name of the car --> 
                                      
                                    <img class=" image" src="" alt="">     
                                     <span class="text  name">mazda</span>
                                     <span class="text date">12/23/20</span>
                                     <span class="text  amount">10000</span>       
                                </div>
                        </div>


                    </div>
                    <div class="box center">  
                        <div class="center activities">
                            <p class="text">Car activities</p>
                            <div class=" status">
                                <span class=" text currently">Currently</span><img src="" alt=""></ul>
                            </div>
                            <div class=" outdiv"><span class="text">OUT</span></div>
                            <div class="indiv"><span class="text">BACK</span></div>
                            <!-- div with data from the db-->  
                            <div class="inout">
                                <span class="text dateout"> 12/12/20</span>
                                <span class="text datein">15/12/20</span>
                            </div>
                        </div>
                    </div>
                    <div class="box right">
                        <div class="right carstatus">
                        <p class="text">Your car stats</p>
                        </div>
                    </div>


                </div>
                <div id="details" class="body box2">
                    <div class="box2 left">
                        <div class="left transactions">
                            <!-- this will show when the car is succesifuly rented out-->  
                        <p class="text">Your transactions</p> 
                                
                                <span class="text headamount">Amount</span>
                                <span class="text headdate">Date</span>
                                <!-- the dive to have the foreach loop-->  
                                <div class=" earningresults">
                                    <!-- image&name has both the image and name of the car --> 
                                      
                                    <img class=" image" src="" alt="">     
                                            
                                    <span class="text  name">mazda</span>
                                        
                                    <span class="text date">12/23/20</span>
                                       
                                    <span class="text  amount">10000</span>
                                </div>
                        </div>
                        <br>
     
                    </div>
                    <div class="box2 center">  
                        <div class="center activities">
                        <p class="text">Your account</p> 
                        <span class="text income">Income</span><br>
                        <span class="text withdrawn">Withdrawn</span><br>
                        <span class="text acc">Total in account</span><br>
                        <span class="text margine">Margine deference</span><br>
                        <!-- amounts --> 
                        <span class="text incomeam">10000</span>
                        <span class="text withdrawnam">0</span>
                        <span class="text accam">10000</span>
                        <span class="text margineam">+100%</span>
                        </div>
                    </div>
                    <div class="box2 right">
                        <div class="right carstatus">
                        <p class="text">Notifications</p>
                        </div>
                    </div>


                </div> 
            </div>
               
    <!-- </div> -->
    
    <script>

    </script>

</body>
</html>