<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            display: grid;
            justify-content: center;
            align-items: center;
            background-color: #243447;
        }
        .create{
            background-color: #D19C1D;
            text-decoration: none;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            font-size: 24px;
            cursor: pointer;
            border: 1px;
        }
        .create:hover{
            opacity: 0.8;
        }
        h1 {
            color: white;
        }

        .container{
            margin: auto;
        }

    </style>
    <title>Product View</title>
</head>
<body>
    <div class="container">
        <h1>Product View</h1>
        <form action="{{ route('create') }}" method="GET">
            <button type="submit" class="btn btn-primary create">Agregar producto</button>
        </form>
    </div>


</body>
</html>
