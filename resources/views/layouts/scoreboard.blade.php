<div class="scoreboard">
    <h2>Scoreboard</h2>
    
    @php
        $users = DB::table('users')->orderBy('entries', 'desc')->take(constant('App\Http\Controllers\MainController::MAX_STATS_USER_COUNT'))->get();
    @endphp 

    @if(!$users->isEmpty())
        <ol type="1">
        @foreach ($users as $user)
            <li><span><a href="/users/{{ $user->username }}">{{ $user->username }}</a> - {{ $user->entries }} entries</span></li>
        @endforeach
        </ol>
    @else
        <p>No activity yet.. Be the first one who register!</p>
    @endif
</div>