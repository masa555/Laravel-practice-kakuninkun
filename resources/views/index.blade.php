<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113133697-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-113133697-1');
        </script>

    </head>
    <body>
    <p></p>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <h1>ユーザー情報表示くん</h1></br></br>
                あなたのブラウザが送信している情報の一覧です。</br></br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>項目</th>
                        <th>内容</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>アクセスした時間</td>
                            <td>{{date("Y-m-d H:i:s",$request->server("REQUEST_TIME"))}}</td>
                        </tr>
                        <tr>
                            <td>あなたのIPアドレス</td>
                            <td>{{$request->server("REMOTE_ADDR")}}</td>
                        </tr>
                        <tr>
                            <td>あなたの接続元ポート番号</td>
                            <td>{{$request->server("REMOTE_PORT")}}</td>
                        </tr>
                        <tr>
                            <td>ユーザーエージェント</td>
                            <td>{{$request->server("HTTP_USER_AGENT")}}</td>
                        </tr>
                        <tr>
                            <td>直前に見ていたページ(リファラー)</td>
                            <td>{{$request->headers->get('referer')}}</td>
                        </tr>
                        <tr>
                            <td>使用しているプロトコル</td>
                            <td>{{$request->server("SERVER_PROTOCOL")}}</td>
                        </tr>
                        <tr>
                            <td>サーバールート</td>
                            <td>{{$request->server("SERVER_PORT")}}</td>
                        </tr>
                        <tr>
                            <td>要求したURL</td>
                            <td>{{$request->server("REQUEST_URI")}}</td>
                        </tr>
                        <tr>
                            <td>メソッド</td>
                            <td>{{$request->server("REQUEST_METHOD")}}</td>
                        </tr>
                        <tr>
                            <td>コネクション</td>
                            <td>{{$request->server("HTTP_CONNECTION")}}</td>
                        </tr>
                        <tr>
                            <td>あなたが扱えるメディアタイプ</td>
                            <td>{{$request->server("HTTP_ACCEPT")}}</td>
                        </tr>
                        <tr>
                            <td>圧縮機能の対応状況(HTTP_ACCEPT_ENCODING)</td>
                            <td>{{$request->server("HTTP_ACCEPT_ENCODING")}}</td>
                        </tr>
                        <tr>
                            <td>使用言語</td>
                            <td>{{$request->server("HTTP_ACCEPT_LANGUAGE")}}</td>
                        </tr>
                        <tr>
                            <td>クッキー</td>
                            <td>{{$request->server("HTTP_COOKIE")}}</td>
                        </tr>
                        <tr>
                            <td>HTTP_UPGRADE_INSECURE_REQUESTS</td>
                            <td>{{$request->server("HTTP_UPGRADE_INSECURE_REQUESTS")}}</td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>

        <div class="container">
        gatetool.net 2018
        </div>
    </body>
</html>