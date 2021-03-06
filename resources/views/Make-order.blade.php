<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
<h4>Make an order</h4>
<form method="post" action="{{route('order')}}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Full name</label>
        <input type="text" class="form-control" name="fullname" id="exampleFormControlInput1" placeholder="Enter your full name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Leave comment</label>
        <textarea class="form-control" name="comment" id="exampleFormControlTextarea2">
        </textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Vendor code of product</label>
        <input type="text" class="form-control" name="vendor_code" id="exampleFormControlInput3" placeholder="Vendor code" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Product brand</label>
        <input type="text" class="form-control" name="brand" id="exampleFormControlInput3" placeholder="Brand name">
    </div>
    <button type="submit">Order</button>
</form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
