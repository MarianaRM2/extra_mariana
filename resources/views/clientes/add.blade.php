<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add</h1>
    <form action="/clientes" method="POST">
                        
        {!!csrf_field()!!}
        
        <label for=""> Nombre:</label>
        <input class="form-control" type="text" name="name">
        <div class="row">
            <button type="submit" class="btn btn-primary m-3">Guadar</button>

        </div>
</body>
</html>