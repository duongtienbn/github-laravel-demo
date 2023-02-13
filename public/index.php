<?php

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>ユーザーを登録します。</title>
</head>
<body>
    <div id="Wrapper"> 
        <div class="container">
            <div class="row justify-content-around">
                <form action="reg.php" method="post" 
                class="col-md-7 bg-light p-3 m-5">
                    <h1 class="text-center text-uppercase
                    text-uppercase h3 py-3">ユーザーを登録します。</h1>

                    <div class="form-group">
                        <label for="fullname">姓名</label>
                        <input type="text" name="fullname" 
                        id="fullname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="username">ユーザー名</label>
                        <input type="text" name="username" 
                        id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" 
                        id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" 
                        id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">性別</label><div>

                        <div class="form-check form-check-inline"required>
                            <input type="radio" name="gender" 
                            id="male" value="male"
                            class="form-check-input" checked> 
                            <label for="male">
                            <div class="form-check-label">男</div>
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender"
                            id="female" value="female"
                            class="form-check-input">
                            <label for="female">
                            <div class="form-check-label">女</div>
                            </label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="address">場所</label>
                        <input type="text" name="address" 
                        id="address" class="form-control">
                    </div>
                    <input type="submit" value="登録"
                    class="btn-primary btn-dark btn btn-block mb-5">
                </form>

            </div>
        </div>

    </div>
</body>
</html> ';
// echo "$html";
// echo "</br>";
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);






