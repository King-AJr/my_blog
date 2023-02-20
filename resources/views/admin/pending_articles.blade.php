<x-app-layout>
    <main class="global-main">
        <div class="post-header">
            <div class="post-header-wrap global-padding is-center">
                <div class="post-header-content">
                    <h1 class="post-title global-title">Pending Articles</h1>
                    <p class="post-excerpt global-excerpt">Here are your pending articles</p>
                </div>
            </div>
        </div>
        <div class="custom-archive global-padding">
            <small class="global-subtitle">Pending Articles</small>
            @foreach ($articles as $article)
            <div class="loop-wrap is-authors">
                <div class="custom-archive-item item">
                    <div class="item-image global-image global-image-orientation global-radius is-portrait">
                        <a href="{{route('view_article', $article->id)}}" class="global-link"
                            aria-label="{{$article->title}}"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px"
                            src="/storage/images/{{$article->image}}"
                            alt="{{$article->title}}">
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="{{route('view_article', $article->id)}}">{{$article->title}}</a></h2>
                        <p class="item-excerpt global-excerpt is-authors">{{$article->description}}</p>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
    </main>
</x-app-layout>
