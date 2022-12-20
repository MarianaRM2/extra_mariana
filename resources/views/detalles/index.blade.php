<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index</h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>Datos</th>
        </tr>
    <tbody>
     @foreach($detailsaleproducts as $detailsaleproduct)
        <tr>
            <td>{{$detailsaleproduct->id}}</td>
            <td>{{$detailsaleproduct->sale_id}}</td>
            <td>{{$detailsaleproduct->product_id}}</td>

        </tr>
        @endforeach 
        
    </tbody>
</table>
</body>
</html>