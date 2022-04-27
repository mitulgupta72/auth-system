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
                <form action="{{Route('adding-item')}}" method="post">
                    <!-- @if(Session::has('sucess'))
                    <div class="alert alert-success">{{Session::get('sucess')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif -->
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter product Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name Here " name="name" value="{{old('name')}}">
                        <span class="text-danger">@error ('name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="manufacture_by">Enter manufacture Name</label>
                        <input type="text" class="form-control" placeholder="Enter manufacture Here " name="manufacture_by" value="{{old('manufacture_by')}}">
                        <span class="text-danger">@error ('manufacture_by'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="manufacture_date">Enter Manufacture Date</label>
                        <input type="text" class="form-control" placeholder="Enter manufacture Date " name="manufacture_date" value="{{old('manufacture_date')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}} @enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="expiry_date">Enter Expiry Date</label>
                        <input type="text" class="form-control" placeholder="Enter Expiry Date " name="expiry_date" value="{{old('expiry_date')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}} @enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="price">Enter Price</label>
                        <input type="text" class="form-control" placeholder="Enter Price " name="price" value="{{old('price')}}">
                        <!-- <span class="text-danger">@error ('price'){{$message}} @enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="weight">Enter Product Weight</label>
                        <input type="text" class="form-control" placeholder="Enter Product Weight " name="weight" value="{{old('weight')}}">
                        <!-- <span class="text-danger">@error ('name'){{$message}} @enderror</span> -->
                    </div>
                    <div class="form-group">
                        <label for="product_id">Enter Product Id</label>
                        <input type="text" class="form-control" placeholder="Enter Product Id " name="product_id" value="{{old('product_id')}}">
                        <span class="text-danger">@error ('product_id'){{$message}} @enderror</span>
                    </div>

                    <br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Add Item</button>
                    </div>
                    <br>
                    <a href="#">All Items List</a>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
