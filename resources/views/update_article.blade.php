<!DOCTYPE html>
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
        <form method="post" action="{{ route('update_article', $post) }}" enctype="multipart/form-data">
            @csrf
            @foreach ($errors as $err)
                <p> {{$err}}</p>
            @endforeach
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control" />
            </div>
            <div class="form-group">
                <label> Header Image</label>
                <input type="file" name="image" value="/storage/images/{{$post->image}}" class="form-control" />
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea id="summernote"  name="body">{!!$post->body!!}</textarea>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="{{$post->description}}" class="form-control" />
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input type="text" name="tag" value="{{$post->tag}}" class="form-control" />
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-block">Publish</button>
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
