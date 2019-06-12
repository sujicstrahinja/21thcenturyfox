<div class="form">
    <h3>Create an account</h3>
    <form action="{{ route('register') }}" method="post">
        {{ csrf_field() }}
        @method('POST')

        <input type="text" name="name" placeholder="Username" required="">
        <input type="email" name="email" placeholder="Email Address" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <input type="submit" value="Register">

        @include('includes.form_errors')
    </form>
</div>