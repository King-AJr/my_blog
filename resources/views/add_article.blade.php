<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Post article</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body>
    <div class="container mt-5">
        <h1>Add your Article</h1>
        <form method="post" action="{{ route('post_article') }}" enctype="multipart/form-data">
            @csrf
            @foreach ($errors as $err)
                <p>{{$err}}</p>
            @endforeach
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="form-group">
                <label> Header Image</label>
                <input type="file" name="image" class="form-control" />
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea id="summernote" name="body"></textarea>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" />
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tag" class="form-control" />
            </div>
            <br>
            @if (Auth::user()->role == 'writer')
            <select name="status">
                <option value="draft">Send to draft</option>
                <option value="pending">Send to Queue</option>
            </select>
            @endif
            <select name="status">
                <option value="draft">Send to draft</option>
                <option value="pending">Send to Queue</option>
                <option value="approved">Publish Now</option>
            </select>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-block">Send</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>

</body>
</html>
</x-app-layout>
