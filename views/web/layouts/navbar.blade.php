<nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Shorten</a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link pt" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                @if(! auth('users'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">
                            <button class="btn btn-log text-white btn-sm">
                                Login
                            </button>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">
                            <button class="btn btn-reg text-white btn-sm">
                                Register
                            </button>

                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('my-links') }}">
                            <button class="btn btn-reg text-white btn-sm">
                                My links
                            </button>

                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ url('logout') }}" method="post" id="logout">
                            <a class="nav-link" href="javascript:void(0);" onclick="document.getElementById('logout').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>