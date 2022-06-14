<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comercial</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header') }}
      @yield('content')
</body>
<style>
    img.slider-img{
        height:300px !important
    }
    .slide-text{
        background-color: #40584b6e;
    }
    .trendring-image{
        height:100px;
    }
    .trending-item{
        float:left;
        width:25%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-image{
        height:200px;
    }
    .trending-image{
        height: 150px;
        margin-top: 20px;
    }
    .detail{
        margin-top: 50px;
    }
    .card-list-divider{
        border-bottom: 2px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    </style>
</html>
