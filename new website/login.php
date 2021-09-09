<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body{
        background-color:darkgray;
    }
</style>
<div class="jumbotron jumbotron-fluid text-center">
  <h1>Welcome to <strong style="color:green">mysupermarket</strong></h1>
  <p>Find quality Manufacturers, Suppliers, and suggest new products in future sells</p> 
</div>



<form action = "" method = "post">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
        
            <div class="col-md-center">

                <div class="col">
                    <div class="p-3 border">
                        <div class="input-group flex-nowrap">   
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" id="myuse" name="email" placeholder="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="p-3 border">
                        <input type="text" id="mypass" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="col">
                    <div class="p-3 border">
                        <button id="mylog" type="button" class="btn btn-dark" width="20px">Log In</button>
                        <button id="mysing" type="button" class="btn btn-dark" width="20px">Sing Up</button>
                        <button id="myrep" type="button" class="btn btn-dark" width="20px">Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
</body>
</html>
