<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    FashionablyLate
    </header>
    <p>Register</p>
    <form action="/admin" method="post">
        @csrf
        <button type="submit">登録</button>
    </form>
    
</body>
</html>