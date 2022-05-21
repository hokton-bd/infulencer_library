<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Infulencer Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">TOP</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('infulencers.index') }}">Infulencers</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('books.index') }}">Books</a>
            </li>
        </ul>
        </div>
    </div>
</nav>