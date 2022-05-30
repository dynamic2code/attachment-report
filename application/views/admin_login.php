<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin login</title>
    <style>
                body{
            background-color: #1E1711; 
        }
        .heading{
            /* background-color: #fff; */
            width: fit-content;
            
            position: absolute;
            left: 40%;
            top: 20%;
        }
        .heading h1{
            color: white;
        }
        .text{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
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
        .form{
            position: absolute;
            left: 35%;
            top: 30%;
        }

    </style>
</head>
<body>
    <?php //echo phpinfo(); ?>
    <div class="heading">
        <h1>For admins only</h1>
    </div>
    <div class="form">
        <div class=" log"> 
            <p class="text">log in here</p>
        </div>
            
    <!-- <form action="<?php echo base_url()?>admin/login_validation" method="post">
        user name <input type="text" name=""> 
        password <input type="password" name="password">
        <input type="submit" name="insert">
    </form> -->
    <form class="form-style-4" action="<?php echo base_url()?>admin/login_validation" method="post">
                        <label for="field2">
                        <span>username</span><input type="text" name="username" required="true" />
                        </label>
                        <label for="field4">
                        <span>Enter Your password</span><input type="password" name="password"  required="true"/>
                        </label>
                        <label>
                        <span> </span><input type="submit" value="Send" />
    </form>
    </div>

</body>
</html>