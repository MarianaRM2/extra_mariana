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

                    <form action="/detalles" method="POST">
                        <div>
                        {!!csrf_field()!!}
                        <select class="form-control form-select" aria-label="Default select example" name="sale_id">
                            <label for=""> Elige la ventas</label>
                                @foreach($sales as $sale)   
                            <option value={{$sale->id}}>{{$sale->client_id}}</option>
                               @endforeach
                            </select>
                        <select class="form-control form-select" aria-label="Default select example" name="product_id">
                                <option selected>Elige el producto</option>
                                    @foreach($products as $product)   
                                <option value={{$product->id}}>{{$product->name}}</option>
                                   @endforeach
                                </select>
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>
                        </div>
                    </form>

</body>
</html>