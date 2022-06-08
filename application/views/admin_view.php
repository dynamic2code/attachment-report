<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <style>
        body{
            background-color: #1E1711; 
        }
        /* .body{
            background-color: #1E1711; 
            width: 100%;
            position: static; */
     
        .welcome{
            
            /* background-image: url('./images/homepage-preowned-db11.webp'); */
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

        }
        .leftnav{
            list-style-type: none;
            margin-top: 0.5%;
            
            display: block;
            width: 200px;
            /* width: 13%; */
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
        ul{
            display: block;
            height: auto;
        }
        .leftnavimg{
            width: 30%;
            /* height: auto;
            display: inline-block; */
  
        }
        .imagediv{
            margin: 30%;
            padding-left: 5%;
        } 
        .details{
            position: absolute;
            display: flex;
            flex-direction: column;
            width: 86%;
            height: 100%;
            top: 0%;
            left: 220px;
            /* left: 14%; */
            /* background-color: #394D61; */
        }
        .text{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }
        /* .leftnavimg{
            width: 30%;
            
        } */

        .box{
            /* background-color: red; */
            /* position: absolute;   
            background-color: magenta; */
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
            /* background-color: red; */
            /* position: absolute;   
            background-color: magenta; */
            width: 100%; 
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            /* top: 50%;
            left: 0%; */
        }
        .left{
            position: relative;
            left: 0;
            top: 0;
            width: 33.33%;
            height: 100%;
            /* background-color: blue; */
            display: block;
        }        
        .center{
            position: absolute;
            left: 33.33%;
            top: 0;
            /* background-color: purple;  */
            width: 33.33%;
            height: 100%;
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
        }
        .account{
            background-color: #2A231D;
            position: absolute;
            width: 90%;
            min-height: 300;
            max-height: 330px; 
           
            margin: 5%;
            border: 2px brown;
            border-radius: 10px;   
        }
        .transactions{
            background-color: #2A231D;
            position: absolute;
            width: 90%;
            margin: 5%;
            border: 2px brown;
            border-radius: 10px; 
            min-height: 300;
            max-height: 330px;
        } 

        .activities{
            background-color: #2A231D;
            width: 90%;
            left: 0;

            margin: 5%;
            border: 2px brown;
            border-radius: 10px;
            min-height: 300;
            max-height: 330px;
        }
        .carstatus{
            background-color: #2A231D;
            left: 0;
            width: 90%;
            
            margin: 5%;
            border: 2px brown;
            border-radius: 10px;
            min-height: 300px;
            max-height: 330px; 
        }
        .seemore{
            background-color: FE6C00;

        }
        
        .registerform{
            visibility: hidden;
            background-color: orange;
            position: absolute;
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
        .box p{
            margin-left: 40%;
        }
        .box2 p{
            margin-left: 40%;
        }
        .status{
            background-color: #2A231D;
            position: absolute;
            left: 50%;
            top: 1%;
            width: 10%;
            height: 5%;
            display: inline;
            border: 2px brown;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
        }
        .currenly{
            position: absolute;
        }
        .closebtn{
            position: relative;
            position:sticky;
            background-color: red;
            top: 2%;
            left: 88%;
            width: 10%;
            height: 7%;
            border: 2px brown;
            border-radius: 10px;
            justify-content: center;
            z-index: 12;

        }
        .loginform{
            visibility: hidden;
            text-align: center;
            justify-content: center; 
            align-items: center;
            background-color: orange;
            position: fixed;
            width: 50%;
            height: 50%;
            top:30%;
            left: 30%;
            text-align: center;
            z-index: 10;
        }
        .middlefication{
            position: relative;
            left: 30%;
            background-color: orange;
            border: none;
            top: 10%;
        }
        /* form for verification */
        .formcontainer{
            visibility: hidden; 
            position: fixed;
            background-color: orange;
            z-index: 20;
            top: 5%;
            bottom: 5%;
            left: 20% ;
            right: 10% ;
            width:70% ;
            height: 90%; 
            overflow-y: auto;

        }
        .verify{
            position: relative;
            height: 50%;
            max-width: fit-content;
            color: #495C70;


        }





    </style>
</head>
<body>
    <!-- <h1>welcome to the admins page</h1>
    <section>
    <form action="<?php echo base_url()?>admin/carinDB" method="post">
        manufactures name: <input type="text" name="name"><br>
        make name: <input type="text" name="makename"><br>
        year of model:<input type="text" name="yearofmodel"><br>
        Time on rent:<input type="text" name="renttime"><br>
        <input type="submit" name="insert">
    </form>
    <form action="<?php echo base_url()?>admin/carinimage" method="post">
    picture:<input type="file" name="pic"><br>
        <input type="submit" name="insert">
    </form>
    </section>
    for the statistics of the whole business
    <section class="statistics">
        <div class="cars">
            <div class="registerd cars"></div>
            <div class="carsin"></div>
            <div class="carsout"></div>

        </div>
        <div class="employees">

        </div>
        <div class="partners" >
             mechanics,hospitals and other supporting industies
        </div>
        <div class="money">
            <div class="totalincome"></div>
            <div class="deducting"></div>
            <div class="income"></div>
        </div>

    </section> -->
     <!-- <div class="body"> -->
            <!--<section class='top'>-->
            <div class="body welcome">
                    <!-- <h1 >Welcome to CarHire</h1> -->
                </div>

            <!-- the left division-->
                <div class=' leftnav'>
                
                    <div class="leftnav imagesdiv">           
                        <li>
                                <br>
                                <ul> <a href="#"><img class="leftnavimg" src="./images/home.png" alt=""></a><p class="text">Home</p> </ul> 
                                <br>
                                <ul><img class=" leftnavimg" src="./images/add.png" onclick="document.getElementById('addcar').style.visibility='visible'"></img><p class="text">Add your car</p></ul>
                                <br>
                                <!-- <ul><a href="#carownerlogin"><img class=" leftnavimg" src="./images/login.png"></img></a><p class="text">Log in</p></ul>
                                <br> -->
                                <ul> <img class="leftnavimg" src="./images/user.png" alt="" ></img> <p class="text" onclick="document.getElementById('formcustomer').style.visibility='visible'">verify customer</p></ul>
                                <!-- <ul><img class=" leftnavimg" src="./images/add.png" alt="" ></img><p class="text" onclick="document.getElementById('formcustomer').style.visibility='visible'">Add your car</p></ul> -->
                                <br>
                                <ul> <img class="leftnavimg" src="./images/setting.png" alt="" onclick="document.getElementById('gethelp').style.visibility='visible'"><p class="text">Settings</p></ul>
                                <br>
                                <ul> <img class="leftnavimg" src="./images/help.png" alt="" ><p class="text" onclick="document.getElementById('formcarowner').style.visibility='visible'">verify car-owner</p></ul>
                                <br>
                                <!-- <ul> <img class="leftnavimg" src="./images/star.png" alt=""><p class="text">Rate us</p></ul> -->
                                <br>
                                <ul> <img class="leftnavimg" src="./images/logout.png" alt="" onclick="document.getElementById('gethelp').style.visibility='visible'"><p class="text">Log out</p></ul>
                                
                                <br>
                                
                                <ul></ul>

                            </li>
                    </div>
                </div>    
            <?php if (isset($verify_customer)):?>
                <div class="formcontainer" id="formcustomer">
                    <div class="closebtn" onclick="document.getElementById('formcustomer').style.visibility='hidden'"><span class="text" >close</span></div>
                    <!-- for presenting the customers that have yet to be verified -->
                    <?foreach ($verify_customer as $div): ?>
                    <div class="verify" id="verify_cutomer" >
                        <form class="form-style-4 middlefication" action="<?php echo base_url()?>Admin/results_customer" method="post">
                            <img class="formimg" src="<?php echo base_url()?>/images/<?php echo $div->id_front; ?>" alt="">
                            <img class="formimg" src="<?php echo base_url()?>/images/<?php echo $div->id_back; ?>" alt="">
                            <img class="formimg" src="<?php echo base_url()?>/images/<?php echo $div->driving_license; ?>" alt="">
                            <div>
                                <input class="formbt" type="radio" name="qualified" value="qualified" /> <span>verified</span>
                                <input class="formbt" type="radio" name="not qualified" value="not qualified" /><span>not verified</span>
                                <input type="submit" value="Submit">
                                <!-- <button ><span>qualified</span></button>
                                <button ><span>not qualified</span></button> -->
                            </div>
                        </form>

                    </div> 
                    <?php endforeach;?>
                    
                </div>
            <? endif;?> 

            <?if (isset($verify_car_owner)):?> 
                <div class="formcontainer" id="formcarowner">
                    <div class="closebtn" onclick="document.getElementById('formcarowner').style.visibility='hidden'"><span class="text" >close</span></div>
                    <?php foreach($verify_car_owner as $div):?>
                    <div class="verify" id="verify_car_owner">
                        <form class="form-style-4 middlefication" action="<?php echo base_url()?>Admin/results_car_owner" method="post">
                            <img class="formimg" src="<?php echo base_url()?>/images/<?php echo $div->id_front; ?>" alt="">
                            <img class="formimg" src="<?php echo base_url()?>/images/<?php echo $div->id_back; ?>" alt="">
                            <img class="formimg" src="<?php echo base_url()?>/images/<?php echo $div->supporting_documents; ?>" alt="">
                            <div>
                                <input class="formbt" type="radio" name="qualified" value="qualified" /> <span>verified</span>
                                <input class="formbt" type="radio" name="not_qualified" value="not_qualified" /><span>not verified</span>
                                <input type="submit" value="Submit">
                                <!-- <button ><span>qualified</span></button>
                                <button ><span>not qualified</span></button> -->
                            </div>
                        </form>
                    </div>
                    <?php endforeach;?>
                </div>       
            <?php endif;?>  

            <!-- 
            center part -->
        <div class="details">
                <div id="" class=" box">
                    <div class="box left">
                        <div class="left account">
                            <!-- this will show when the car is succesifuly rented out -->
                        <p class="text">Cars in system</p>
                        <div class="earn">
                            <!-- the full earnings table class earn -->
                            <div class="date&amount">
                                <div class="date&amount date">

                                </div>
                                <div class="date&amunt amount">
            
                                </div>
                                <!-- the dive to have the foreach loop -->
                                <div class="earningresults">
                                    <!-- image&name has both the image and name of the car -->
                                    <div class="earningresults image&name">
                                        <div class="image&name image">

                                        </div>
                                        <div class="image&name name">

                                        </div>
                                    </div>
                                    <div class="earningsresults date">

                                    </div>
                                    <div class="earningsresults amount">

                                    </div>

                                </div>

                            </div>
                        </div> 
                    
                        </div>


                    </div>
                    <div class="box center">  
                        <div class="center activities">
                        <p class="text">Car activities</p>
                        <div class="status">
                            <!-- <p class=" text currently">Currently</p><img src="" alt="in"></ul> -->
                        </div>
                        </div>
                    </div>
                    <div class="box right">
                        <div class="right carstatus">
                        <p class="text">Account</p>
                        </div>
                    </div>


                </div>
                <div id="details" class="body box2">
                    <div class="box2 left">
                        <div class="left transactions">
                            <!-- this will show when the car is succesifuly rented out -->
                        <p class="text">user numbers</p> 
                        </div>
                        <br>
     
                    </div>
                    <div class="box2 center">  
                        <div class="center activities">
                        <p class="text">Hot spots</p> 
                        </div>
                    </div>
                    <div class="box2 right">
                        <div class="right carstatus">
                        <p class="text">Partners</p>
                        </div>
                    </div>


                </div>
        </div>

    
</body>
</html>