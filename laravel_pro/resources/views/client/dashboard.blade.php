<h4>
    Client Dashboard
</h4>

@if(auth()->guard('client')->check())
    <h2>
        Client Authentificated
    </h2>
@endif

<form action="{{ route('logoutClient')}}" method="POST">
    @csrf
    <input type="submit" value="logout">
</form>
