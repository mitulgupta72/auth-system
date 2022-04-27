<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Enrolled Items</h4>
                <hr>
                <table class='table'>
                    <thead>
                        <th>Name</th>
                        <th>Manufactured By</th>
                        <th>Manufacture Date</th>
                        <th>Expiry Date</th>
                        <th>Price</th>
                        <th>Weight</th>
                        <th>Product id</th>
                        <th>Print Button</th>
                    </thead>
                    @foreach($data as $item)
                    <tbody>
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['manufacture_by']}}</td>
                            <td>{{$item['manufacture_date']}}</td>
                            <td>{{$item['expiry_date']}}</td>
                            <td>{{$item['price']}}</td>
                            <td>{{$item['weight']}}</td>
                            <td>{{$item['product_id']}}</td>
                             <td>
                                 <a href="#">Print</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <td>user name: {{$dataa->name}} </td>
                <br>
                <td>user email: {{$dataa->email}} </td>
                <br>
                <td><a href="logout">logout</a></td>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>