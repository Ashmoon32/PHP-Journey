<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    @extends("layouts.app")

    @section("content")
        <div class="container">
            <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{  $article->title  }}</h5>
                    <div class="card-title mb-2 text-muted small">
                        {{  $article->created_at->diffForHumans() }}
                    </div>
                    <p class="card-text">{{  $article->body }}</p>
                    <a 
                        href="{{  url("/articles/delete/$article->id") }}" 
                        class="btn btn-warning">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>