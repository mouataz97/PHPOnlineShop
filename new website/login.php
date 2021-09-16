<!DOCTYPE html>
<html lang="en">
<head>
  <title>BusinessManMarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
   body{
       background-color: black;
   }
    
    #background_image{
        background-image: Url('shop-cover.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .nav{
        background-color: green;
    }
    
    .nav-link{
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 30px;
    }

    .nav-link:hover{
        background-color: darkgreen;
        color: black;
    }

    .nav-link:active {
        background-color: #04AA6D;
        color: red;
    }

</style>

<body>
<div>
    <div class="jumbotron text-center ">
        <h1 class="text-danger">Welcome to <strong style="color:green">BMMarket</strong></h1>
        <h4 style="color:black;"> quality Manufacturers, Suppliers, and suggest new products in the future sells</h4> 
        <h2>you can log in from here </h2>
    </div>
</div>

<div  class="col-xs m-4 ">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="../new website/home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../new website/login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../new website/signup.php">Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../new website/cart.php">Cart</a>
        </li>
    </ul>
</div>

<div id="background_image">
<form action = "" method = "post" >
    <div class="container-fluid" >
        <div class="row justify-content-md">
        
            <div class="col-xs p-4">

                <div class="col " >
                    <div class="p-3 border" >
                        <div class="input-group flex-nowrap" >   
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" id="myuse" name="email" placeholder="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>

                <div class="col" id="centry">
                    <div class="p-3 border">
                        <input type="text" id="mypass" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="col">
                    <div class="p-3 border" id="centry">
                        <button id="mylog" type="button" class="btn btn-dark" width="20px">Log In</button>
                        <button id="mysing" type="button" class="btn btn-dark" width="20px">Sing Up</button>
                    </div>
                </div>
            </div>
            <div class="col-md-right ">
                <div class="col-2 p-4 ">
                    <textarea name="textarea" id="reparea" cols="30" rows="5" placeholder="you can report an issue from here !!!"></textarea>
                    
                    <div class="col-l p-1">
                        <button id="myrep" type="button" class="btn btn-dark" width="20px" id="centry">Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
</div>

</body>
</html>
