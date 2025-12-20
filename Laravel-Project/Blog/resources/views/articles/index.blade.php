<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>
<body>

    @extends("layouts.app")

    @section("content")
        <div class="container">

            
            @if(session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif

            {{ $articles->links() }}

            @foreach($articles as $article)
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <div class="card-subtitle mb-2 text-muted small">
                            {{ $article->created_at->diffForHumans() }}
                        </div>
                        <p class="card-text">{{ $article->body }}</p>
                        <a 
                        href="{{ url("/articles/detail/$article->id") }}" 
                        class="card-link">
                        View Detail &raquo;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection

</body>
</html>