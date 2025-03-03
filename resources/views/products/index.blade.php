<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime-Themed Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Purple Gradient */
            color: white;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }
        .heading {
            text-align: center;
            font-weight: bold;
            font-size: 34px;
            margin-bottom: 30px;
            color: #fff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
            border: none;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            background: #fff;
            color: black;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            padding: 20px;
            text-align: center;
        }
        .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #6a11cb; /* Purple */
        }
        .price {
            color: #ff914d;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .btn-buy {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
            transition: background 0.3s ease-in-out;
            border: none;
        }
        .btn-buy:hover {
            background: linear-gradient(to right, #4a0d8a, #1b5cfc);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">✨ Anime-Themed Products ✨</h1>
        <div class="row justify-content-center">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/{{ $product['image'] }}" alt="{{ $product['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="price">Price: ₱{{ number_format($product['price'], 2) }}</p>
                            <button class="btn btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
