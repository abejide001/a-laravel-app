<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                @if(Auth::user())
                <a class="nav-link active" href="/">Home</a>
                @endif
                    {{--@if(Auth::user())--}}
                    {{--<a class="nav-link active" href="/">Datatable</a>--}}
                    {{--@endif--}}
                @if(Auth::user())
                <a class="nav-link active" href="/posts/create">Create</a>
                @endif
                @if(!Auth::user())
                <a class="nav-link active" href="/register">Register</a>
                @endif
                @if(!Auth::user())
                <a class="nav-link active" href="/login">Login</a>
                @endif
                    @if(Auth::user())
                <a class="nav-link active" href="/logout">Logout</a>
                    @endif
                @if(Auth::check())
                <a class="nav-link active ml-auto" href="#">Welcome {{Auth::user()->name}}</a>
                    @endif
            </nav>
        </div>
    </div>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Blog</h1>
            <p class="lead blog-description">An example blog template built with laravel</p>
        </div>
    </div>
</header>
