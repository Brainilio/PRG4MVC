<div class="card-header"><a href="/home">Dashboard<a></div>

<div class="card-header"><a href="/home/fav">Favorieten<a></div>

@if(Auth::user()->admin == 1)
<div class="card-header"><a href="/home/users">Gebruikers<a></div>
@endif