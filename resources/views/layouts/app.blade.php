<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>MessageBoard</title>
</head>
<body>
    <div class="header">
        <a class="header-logo" href="/">MessageBoard</a>

        <div class="header-list">
            <ul>
                <li class="nav-item">新規メッセージの投稿</li>
            </ul>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>