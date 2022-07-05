<h1>User Login</h1>

<form action="user" method="POST">
    @csrf
    <input type="text" name="username" placeholder="username" id="">
    <br><br>
    <input type="password" name="password" placeholder="Password" id="">
    <br><br>
    <button type="submit">Login</button>
</form>
