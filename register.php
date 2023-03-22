<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background-color: beige;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .container{
            width: 400px;
            margin: 0 auto;
            margin-top: 60px;
            padding: 10px;
        }
        
        .container div input{
            border-color: burlywood;
            border-width: 3px;
        }
        h3{
            color: blueviolet;
            text-align: center;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        h2{
            text-align: center;
            color: deeppink;
            margin-top: 20px;
        }
        .submit input{
            border-radius: 5px;
        }
        a{
            margin-left: 200px;
        }
    </style>
    
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h2>To DO list </h2>
    <div class="container">
    <h3>register</h3>
    <form action="registerProcess.php" method="post">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Id</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter your proper ID... " name="id" required>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your username ... " name="name" required>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter a valid email... " name="email" required>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter a valid pasword... " name="password" required>
    </div>
    <div class="submit">
        <input type="submit" value="Submit" name="submit">
    </div>
    </form>
    
</body>
</html>