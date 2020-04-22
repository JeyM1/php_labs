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
                    Entries Collector
                </div>
                <h2>Login to existing account</h2>
                <form method="post" class="form-login">
                    @csrf
                    <div class="auth-fields">
                        <div>
                            <p>Username: </p>
                            <input type="text" name="username" required>
                        </div>
                        <div>
                            <p>Password: </p>
                            <input type="password" name="password" minlength="6" required>
                        
                        </div>
                    </div>  
                    <div class="submit-btns">
                        <input type="submit" name="submit" value="Login">
                        <input type="submit" name="submit" value="Register">
                    </div>
                    @if(isset($login_failed) || isset($registration_failed))
                    <div class="error_message">
                        {{ $login_failed??$registration_failed }}
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </body>
</html>
