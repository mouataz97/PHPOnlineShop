<!DOCTYPE html>
<html lang="en">
<head>
  <title>BusinessManMarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<style>
    .bg{ background: url('../new website/montains.jpg') no-repeat;width: 100%; height: 100vh;}
    .form{
        border: 1px solid #fff; padding: 50px 60px; margin-top: 20vh; 
        -webkit-box-shadow: 4px -1px 44px 15px rgba(0,0,0,0.53);
        -moz-box-shadow: 4px -1px 44px 15px rgba(0,0,0,0.53);
        box-shadow: 4px -1px 44px 15px rgba(0,0,0,0.53);
        border-radius: 22px 22px 22px 22px;
        -moz-border-radius: 22px 22px 22px 22px;
        -webkit-border-radius: 22px 22px 22px 22px;
}   
    .form-label{
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

</style>

<body >
<div class="container-fluid bg">
    <div class="row ">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12 ">
            

                <form class="form emp">
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                        <button type="submit" class="btn ">login</button>
                </form>

            
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
</div>
</body>
</html>
