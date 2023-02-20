<x-app-layout>
    <main class="global-main">
        <div class="post-header">
            <div class="post-header-wrap global-padding is-center is-archive-image">
                <div class="post-header-content">
                    <div class="archive-image global-image">
                        <img src="../../content/images/size/w300/2022/10/photo-1655721529468-d0d81b2dc489.jpg"
                            alt="Idea">
                    </div>
                    <h1 class="post-title global-title">{{$tag}}</h1>
                    <p class="post-excerpt global-excerpt">Here are all the articles related to {{$tag}}</p>

                </div>
            </div>
        </div>
        <div class="loop-section global-padding">
            <small class="global-subtitle">{{count($articles)}} post</small>
            <div class="loop-wrap">
                @if (count($articles) == '0')
                    <p>Sorry there are no post related to {{$tag}} at the moment</p>
                @else
                @foreach ($articles as $article)
                <article class="item">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="{{route('view_article', $article->id)}}" class="global-link"
                            aria-label="AI can solve new problems very easily"></a>
                        <img sizes="(max-width:480px) 300px, 600px" src="/storage/images/{{ $article->image }}"
                            loading="lazy" alt="">
                    </div>
                    <div class="item-content">
                        <div class="item-tags global-tags">
                            @if ($article->tag != '')
                                @foreach (explode(',', $article->tag) as $tag)
                                    <a href="{{route('tags',$tag)}}">{{ $tag }}</a>
                                @endforeach
                            @endif
                        </div>
                        <h2 class="item-title"><a
                                href="{{ route('view_article', $article->id) }}">{{ $article->title }}</a></h2>
                        <p class="item-excerpt global-excerpt">
                            {{ $article->description }}
                        </p>
                        <div class="global-meta">
                            <div class="global-meta-content">
                                by
                                <a href="{{route('author', $article->user->id)}}">{{$article->user->name}}</a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                @endif

            </div>
        </div>
        @if (count($articles) > '3')
        <div class="pagination-section">
            <a href="page/2/index.html" aria-label="Load more"></a>
            <button class="global-button">Load more</button>
        </div>
        @endif
    </main>
</x-app-layout>
{{--  --}}
