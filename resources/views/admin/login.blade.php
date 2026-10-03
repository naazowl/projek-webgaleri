<h2>Login Admin</h2>

<form method="POST" action="/admin/login">
    @csrf
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>

@if(session('error'))
<p style="color:red">{{ session('error') }}</p>
@endif
