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
            <div class="col--md-4 col-md-offset-" style="margin-top:20px;">
                <h4>Registration</h4>
                <hr>
                <form action="{{Route('register-user')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name Here " name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Enter Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password " name="password" value="">
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="login">Already registered !! Login Here</a>
                </form>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>