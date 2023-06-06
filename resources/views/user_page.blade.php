<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ auth()->user()->name }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>You Logged As</h1>
</div>

<div class="container">
    <div class="row text-center">
        <h1>{{ auth()->user()->name }}</h1>
        <p>{{ auth()->user()->email }}</p>
    </div>
</div>

</body>
</html>
