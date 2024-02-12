<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email form</title>
</head>
<body>
    <div>
        
        <div class="card">
            <h3>Contact Us detail:</h3>
            <h5>Nome: {{ $name }}</h5> 
            <p>Email: {{ $email }}</p>
            <p>Subject: {{ $sub }}</p>
            <p>Message: {{ $mess }}</p>
        </div>
    </div>
</body>
</html>