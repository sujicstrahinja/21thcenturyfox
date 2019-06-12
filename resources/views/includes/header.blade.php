<div class="header">
    <div class="container">
        <div class="w3layouts_logo">
            <a href="{{ route('home') }}"><h1>One<span>Movies</span></h1></a>
        </div>
        <div class="w3_search">
            {{--<form action="#" method="post">--}}
                {{--<input type="text" name="Search" placeholder="Search" required="">--}}
                {{--<input type="submit" value="Go">--}}
            {{--</form>--}}
        </div>
        <div class="w3l_sign_in_register">
            <ul>
                {{--<li><i class="fa fa-phone" aria-hidden="true"></i> (+000) 123 345 65</li>--}}
                @if(session()->has("user"))
                    <li>{{ session()->get('user')->name }} is logged in</li>
                @endif
                @if(!session()->has("user"))
                    <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                @else
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                @endif
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>