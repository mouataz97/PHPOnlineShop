<!DOCTYPE html>
<html lang="en">
<head>
  <title>BusinessManMarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<style>
    .bg{ background: url('../PHPOnlineShop/montains.jpg') no-repeat;width: 100%; height: 100vh;}
    .emp{
        border: 1px solid #fff; padding: 50px 60px; margin-top: 20vh; 
        -webkit-box-shadow: 4px -1px 44px 15px rgba(0,0,0,0.53);
        -moz-box-shadow: 4px -1px 44px 15px rgba(0,0,0,0.53);
        box-shadow: 4px -1px 44px 15px rgba(0,0,0,0.53);
        border-radius: 22px 22px 22px 22px;
        -moz-border-radius: 22px 22px 22px 22px;
        -webkit-border-radius: 22px 22px 22px 22px;
}   
    .emp-label{
            color:black;
            font-size: 25px ;
            font-family: Brush Script MT;
        }
    .btn{
        background-color: black;
        color:white;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.19);
    }
    .btn:hover{
        color:orangered;
    }
    .insert{
        width: 250px;
        border-radius: 22px 22px 22px 22px;
    }
    
</style>

<body >
<div class="container-fluid bg">
    <div class="row ">
    <div class="col-md-3 col-sm-5 col-xs-12"></div>
        <div class="col-md-6 col-sm-6 col-xs-8 ">
            <div class="row emp">
                <div class="col-sm col-xs col-md">
                    <img src="../PHPOnlineShop/human_logo.png" alt="logo" width="240" height="240">
                </div>
                <div class="col-sm col-xs col-md">
                    <form>
                            <div class="mb-3 ">
                                <h3 style="color: white ;text-align: center;"> Member Login</h3>
                            </div>
                            <div class="mb-3 ">
                                <input  type="email" class="form-control insert" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="&#61447; Email" style="font-family: FontAwesome;" >
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control insert" id="exampleInputPassword1"  placeholder="&#61475; Password" style="font-family: FontAwesome;">
                            </div class="insert">
                                <button type="submit" class="btn insert">login</button>
                                <p style="text-align:center;"><a href="#">  Forgot : Username/Password</a></p>
                                <br>
                                <p style="text-align:center;"><a href="#" style="font-size: 10px; color:red;">Create your account →</a></p>
                        </form>
                </div>
            </div>
           
        </div>
        <div class="col-md-4 col-sm-5 col-xs-12"></div>
        </div>
    </div>
</div>
</body>
</html>
