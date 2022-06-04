
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Infulencer Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">TOP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('infulencers.index') }}">Infulencers</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('infulencers.add') }}">追加</a>
                </li>
            @endauth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Books</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.add') }}">追加</a>
                </li>
                {!! Form::open(['route' => 'logout', 'name' => 'logout']) !!}
                <li class="nav-item">
                    <a href="javascript:logout.submit()" class="nav-link">ログアウト</a>
                </li>
                {!! Form::close() !!}
            @endauth
        </ul>
        </div>
    </div>
</nav>