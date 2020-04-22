<div class="scoreboard">
    <h2>Scoreboard</h2>
    <ol type="1">
    @forelse (DB::table('users')->orderBy('entries', 'desc')->take(constant('App\Http\Controllers\MainController::MAX_STATS_USER_COUNT'))->get() as $user)
        <li><span><a href="/users/{{ $user->username }}">{{ $user->username }}</a> - {{ $user->entries }} entries</span></li>
        @empty
        <p>No users</p>
    @endforelse
    </ol>
</div>