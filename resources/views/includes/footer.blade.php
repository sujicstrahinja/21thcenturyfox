<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <form action="{{ route('subscription.store') }}" method="post">
                            @csrf
                            @method("POST")
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>

                    @if(session()->get('successSubscription'))
                        <div class="alert alert-success">
                            {{ session()->get('successSubscription') }}
                        </div><br />
                    @endif
                    @include('includes.form_errors')
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <a href="{{ route('home') }}"><h2>One<span>Movies</span></h2></a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                @foreach($links as $link)
                    @if($link->name === 'Admin Panel')
                        @if(session()->has('user'))
                            @if(session()->get('user')->role_id === 1)
                                <li><a href="{{ route($link->href) }}">{{ $link->name }}</a></li>
                            @endif
                        @endif
                    @else
                        <li><a href="{{ route($link->href) }}">{{ $link->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>