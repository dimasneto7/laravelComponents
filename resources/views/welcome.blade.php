<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Components</h1>
        <hr>
        @for($i=0 ; $i<10 ; $i++)
            <x-alert/>
            <x-users.posts/>
        @endfor
    </div>


</body>
</html>
