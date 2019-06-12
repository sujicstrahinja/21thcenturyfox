<div class="form">
    <h3>Login to your account</h3>
    <form action="{{ route('login') }}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="Username" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <input type="submit" value="Login">
    </form>
</div>