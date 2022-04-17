<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <title>MessageBoard</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">MessageBoard</a>
            
            </div>  
        
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    {{-- メッセージ作成ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'nav-link']) !!}</li>
                </ul>
            </div>
        

        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>