<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hello Laravel
                </div>
                <h2>Login to existing account</h2>
                <form method="post" class="form-login">
                    @csrf
                    <div class="auth-fields">
                        <input type="text" name="username" required>
                        <input type="password" name="password" required>
                    </div>
                    <div class="submit-btns">
                        <input type="submit" name="submit" value="Login">
                        <input type="submit" name="submit" value="Register">
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>
