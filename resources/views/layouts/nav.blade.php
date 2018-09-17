<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>

            @if(! Auth::check())
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link" href="/register">Registration</a>
            @endif

            @if(Auth::check())
                <a class="nav-link" href="/posts/create">Create a post</a>
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="/logout">Logout</a>
            @endif
        </nav>
    </div>
</div>