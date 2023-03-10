<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tu pedido se ha realizado correctamente.</p>
    <p>El id de tu pedido es {{ $id }}</p>
   
        <h3>Lista de los productos del pedido</h3>
        <ul>
            @foreach($productos as $producto)
                <li>{{ $producto['name'] }} ({{ $producto["quantity"] }} unidades) </li>
            @endforeach
        </ul>
</body>
</html>
