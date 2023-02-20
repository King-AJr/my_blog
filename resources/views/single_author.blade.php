<x-app-layout>
    <main class="global-main">
        <div class="post-header">
            <div class="post-header-wrap global-padding is-center is-archive-image">
                <div class="post-header-content">
                    <div class="archive-image global-image">
                        <img src="/storage/images/{{ $author->image }}" alt="Brenda Reichel">
                    </div>
                    <h1 class="post-title global-title">{{ $author->name }}</h1>
                    <p class="post-excerpt global-excerpt">{{ $author->request->about }}</p>
                </div>
            </div>
        </div>
        <div class="loop-section global-padding">
            <small class="global-subtitle">2 posts</small>
            <div class="loop-wrap">
                @foreach ($articles as $article)
                    <article class="item">
                        <div class="item-image global-image global-image-orientation global-radius">
                            <a href="{{ route('view_article', $article->id) }}" class="global-link"
                                aria-label="{{ $article->title }}"></a>
                            <img sizes="(max-width:480px) 300px, 600px" src="/storage/images/{{ $article->image }}"
                                loading="lazy" alt="">
                        </div>
                        <div class="item-content">
                            <div class="item-tags global-tags">
                                <a href="../../tag/design/index.html">{{$article->tag}}</a>
                            </div>
                            <h2 class="item-title"><a
                                    href="{{ route('view_article', $article->id) }}">{{$article->title}}</a></h2>
                            <p class="item-excerpt global-excerpt">
                                {{$article->description}}
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
            </div>
        </div>
    </main>
</x-app-layout>
{{--  --}}
