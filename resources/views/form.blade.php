
<h1>Form Submission By Laravel</h1>
<form action="form" method="post">

    @csrf
    <input type="text" name="username" maxlength="45" minlength="3" placeholder="Enter Username">
    <br>
    <br>
    <input type="password" name="password" minlength="4" placeholder="Enter Password Here">

    <button type="submit">Login</button>
</form>
