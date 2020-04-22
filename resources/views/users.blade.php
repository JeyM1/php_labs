@extends('layouts.app')

@section('title', "Profile: $username")

@section('content')
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
<a href="/" class="back-to-main">Back to Main Page</a>
@include('layouts.scoreboard')
@endsection