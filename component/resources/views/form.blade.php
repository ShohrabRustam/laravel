<?php

    $msg = "";

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insert Data </title>
</head>

<body>

    
    <!-- INSER ALL DATA INTO THE FORM -->

   <div class="container">
   <!-- <a href="http://localhost/codeig/index.php/MyController">     <button class="btn btn-primary btn-lg" type="submit" > View Data</button> </a> -->
    <h3 class="text-center"> ... Registration.... </h3>
    <hr>
    <br>
    <form sction "{{url('/')}}/register" method="post">
        @csrf
        <!-- error->all() -->
        <div class="container">
        <x-input label="Name " name="fullName" type="text"  />
        <x-input label="Gmail " name="gmailAddress" type="gmail" />
        <x-input label="Phone No " name="phoneNumber" type="number" />
        <x-input label="Address " name="address" type="text" />
        <x-input label="Password " name="password" type="password" />
        <x-input label="Confirm Password " name="password_confirmation" type="password" />

        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>