<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Add Item</h4>
                <hr>
                <form action="{{Route('register-user')}}" method="post">
                    @if(Session::has('sucess'))
                    <div class="alert alert-success">{{Session::get('sucess')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter product Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name Here " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="name">Product manufacture name</label>
                        <input type="text" class="form-control" placeholder="manufacture name " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="manufacture date">Manufacture Ddate</label>
                        <input type="text" class="form-control" placeholder="Enter manufactyre date " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="expiry date">Expiry Date</label>
                        <input type="text" class="form-control" placeholder="Enter Expiry Date " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="price">Enter Product Price</label>
                        <input type="text" class="form-control" placeholder="Enter Product price " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="weight">Enter Product Weight</label>
                        <input type="text" class="form-control" placeholder="Enter Product weight " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="id">Enter Product Id</label>
                        <input type="text" class="form-control" placeholder="Enter product id " name="name" value="{{old('name')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}}@enderror</span> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Add Item</button>
                    </div>
                    <br>
                    <a href="login">All Items List</a>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

