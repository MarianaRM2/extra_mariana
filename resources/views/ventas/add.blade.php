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

    <label for=""> Tipo:</label>
                    <form action="/ventas" method="POST">
                        <div>
                        {!!csrf_field()!!}
                        <select class="form-control form-select" aria-label="Default select example" name="client_id">
                            <option selected>Elige el cliente</option>
                                @foreach($clients as $client)   
                            <option value={{$client->id}}>{{$client->name}}</option>
                               @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>
                        </div>
                    </form>

</body>
</html>