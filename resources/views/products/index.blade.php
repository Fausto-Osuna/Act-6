<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            display: grid;
        }
        button{
            background-color: #476C9B;
            text-decoration: none;
            color: white;
            text-align: center;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            font-size: 24px;
            place-self: center;
            cursor: pointer;
        }
        button:hover{
            opacity: 0.8;
        }
        h1{
            text-align: center;
        }
    </style>
    <title>Product View</title>
</head>
<body>
    <h1>Product View</h1>
    <button type="button" onClick="window.location='{{ route('addProduct'); }}'">Add Product</button>
</body>
</html>
