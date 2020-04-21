<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User {{ $username }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @if($logged_in)
                        Hello 
                    @else 
                        Profile:
                    @endif
                    {{ $username }}
                </div>
                @if ($just_registered??false)
                    <h2>Welcome to our portal!</h2>
                @endif
                <h2>
                    @if($logged_in)
                        Your total entries: 
                    @else
                        {{ $username."'s"}} total entries:
                    @endif
                    {{ $entries ?? "error" }}
                </h2>
            </div>
        </div>
    </body>
</html>
