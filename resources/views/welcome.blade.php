    <x-guest-layout>
            <main class="global-main">
                <div class="hero-section">
                    <div class="hero-wrap global-padding">
                        <h1 class="hero-title global-title"><span>Welcome to King-Aj's Blog<br></span> We promote positive  tech
                            through <span>well researched articles</span> on everything web development</h1>
                        <div class="hero-search is-flat" data-ghost-search>
                            <span>Search posts, tags and authors</span><span class="global-dynamic-color"><svg
                                    role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m16.822 18.813 4.798 4.799c.262.248.61.388.972.388.772-.001 1.407-.637 1.407-1.409 0-.361-.139-.709-.387-.971l-4.799-4.797c3.132-4.108 2.822-10.005-.928-13.756l-.007-.007-.278-.278a.6985.6985 0 0 0-.13-.107C13.36-1.017 7.021-.888 3.066 3.067c-4.088 4.089-4.088 10.729 0 14.816 3.752 3.752 9.65 4.063 13.756.93Zm-.965-13.719c2.95 2.953 2.95 7.81 0 10.763-2.953 2.949-7.809 2.949-10.762 0-2.951-2.953-2.951-7.81 0-10.763 2.953-2.95 7.809-2.95 10.762 0Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="widget-section global-padding">
                    <small class="global-subtitle">Popular tags</small>
                    <div class="widget-wrap is-tags">
                        <a href="{{route('tags', 'react')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">React</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/react.png"
                                    alt="">
                            </div>
                        </a>
                        <a href="{{route('tags', 'vue')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">Vue.js</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/vue.png"
                                    alt="">
                            </div>
                        </a>
                        <a href="{{route('tags', 'node')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">Node</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/node.png"
                                    alt="">
                            </div>
                        </a>
                        <a href="{{route('tags', 'laravel')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">Laravel</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/laravel.png"
                                    alt="">
                            </div>
                        </a>
                        <a href="{{route('tags', 'design')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">Design</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/design.jpeg"
                                    alt="">
                            </div>
                        </a>
                        <a href="{{route('tags', 'javascript')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">JavaScript</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/javascript.jpeg"
                                    alt="">
                            </div>
                        </a>
                        <a href="{{route('tags', 'python')}}" class="item global-image-orientation global-radius">
                            <h2 class="item-title">Python</h2>
                            <div class="widget-image global-image">
                                <img src="/storage/images/python.png"
                                    alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="loop-section global-padding">
                    <small class="global-subtitle">What’s new?</small>
                    <div class="loop-wrap is-top">
                        <article class="item is-top is-first">
                            <div class="item-image global-image global-image-orientation global-radius">
                                <a href="{{route('view_article', $latest->id)}}"
                                    class="global-link"
                                    aria-label="{{$latest->title}}"></a>
                                <img sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1600px"
                                    src="/storage/images/{{$latest->image}}"
                                    loading="lazy" alt="">
                            </div>
                            <div class="item-content">
                                <div class="item-tags global-tags">
                                    @if ($latest->tag != "")
                                        @foreach (explode(',', $latest->tag) as $tag)
                                            <a href="{{route('tags', $tag)}}">{{ $tag }}</a>
                                        @endforeach
                                    @endif
                                </div>
                                <h2 class="item-title"><a
                                        href="{{ route('view_article', $latest->id) }}">{{$latest->title}}</a></h2>
                                <p class="item-excerpt global-excerpt">
                                    {{$latest->description}}
                                </p>
                                <div class="global-meta is-full-meta">
                                    <div class="global-meta-wrap">
                                        <div>
                                            <div class="global-meta-avatar is-image global-image">
                                                <a href="{{route('author', $latest->user->id)}}" class="global-link"
                                                    title="Damian Erdman"></a>
                                                <img src="/storage/images/{{$latest->user->image}}"
                                                    alt="Damian Erdman" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="global-meta-content">
                                        <div>
                                            by
                                            <a href="{{route('author', $latest->user->id)}}">{{$latest->user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="subscribe-form global-radius">
                            <div class="global-dynamic-color">
                                <small class="global-subtitle">Newsletter</small>
                                <h3 class="subscribe-title">Get all the latest posts delivered straight to your inbox.
                                </h3>
                            </div>
                            <div class="subscribe-wrap">
                                <form method="post" action="{{route('subscribe')}}">@csrf
                                    <input name="email" type="email" placeholder="Your email address"
                                        aria-label="Your email address" required>
                                    <button class="global-button no-color">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        @foreach ($side as $side)
                        <article class="item is-top">
                            <div class="item-image global-image global-image-orientation global-radius">
                                <a href="{{ route('view_article', $side->id) }}" class="global-link"
                                    aria-label="AI can solve new problems very easily"></a>
                                <img src="/storage/images/{{$side->image}}"
                                    loading="lazy" alt="">
                            </div>
                            <div class="item-content">
                                <div class="item-tags global-tags">
                                    @if ($side->tag != "")
                                        @foreach (explode(',', $side->tag) as $tag)
                                            <a href="{{route('tags', $tag)}}">{{ $tag }}</a>
                                        @endforeach
                                    @endif
                                </div>
                                <h2 class="item-title"><a href="{{ route('view_article', $side->id) }}">{{$side->title}}</a></h2>
                                <div class="global-meta">
                                    <div class="global-meta-content">
                                        by
                                        <a href="{{route('author', $side->user->id)}}">{{$side->user->name}}</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                    <small class="global-subtitle">Featured posts</small>
                    <div class="featured-section global-radius is-gray-accent">
                        <div class="global-cover is-featured"
                            style="background-image:url(content/images/size/w1600/2022/10/photo-1519923834699-ef0b7cde4712.jpg)">
                        </div>


                        <small class="featured-subtitle">Editor’s Choice</small>
                        <h2 class="featured-title">Get started with our best stories</h2>
                        <div class="featured-content items-3 global-dynamic-color">
                            <article class="item">
                                <a href="{{route('view_article',$ai->id)}}" class="global-link"
                                    aria-label="{{$ai->title}}"></a>
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <img src="/storage/images/{{$ai->image}}"
                                        loading="lazy" alt="">
                                </div>
                                <div class="item-content">
                                    <h2 class="item-title"><a
                                            href="{{route('view_article', $ai->id)}}">{{$ai->title}}</a></h2>
                                    <div class="global-meta">
                                        <div class="global-meta-content">
                                            by
                                            <a href="{{route('author', $ai->user->id)}}">{{$ai->user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <a href="{{route('view_article', $node->id)}}" class="global-link"
                                    aria-label="{{$node->title}}"></a>
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <img src="/storage/images/{{$node->image}}"
                                        loading="lazy" alt="">
                                </div>
                                <div class="item-content">
                                    <h2 class="item-title"><a
                                            href="{{route('view_article', $node->id)}}">{{$node->title}}</a></h2>
                                    <div class="global-meta">
                                        <div class="global-meta-content">
                                            by
                                            <a href="{{route('author', $node->user->id)}}">{{$node->user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <a href="{{route('view_article', $react->id)}}" class="global-link"
                                    aria-label="{{$react->title}}"></a>
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <img src="/storage/images/{{$react->image}}"
                                        loading="lazy" alt="">
                                </div>
                                <div class="item-content">
                                    <h2 class="item-title"><a
                                            href="{{route('view_article', $react->id)}}">{{$react->title}}</a></h2>
                                    <div class="global-meta">
                                        <div class="global-meta-content">
                                            by
                                            <a href="{{route('author', $react->user->id)}}">{{$react->user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <small class="loop-subtitle global-subtitle">Previous posts</small>
                    <div class="loop-wrap">
                        @foreach ($posts as $post)
                            <article class="item">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <a href="{{ route('view_article', $post->id) }}" class="global-link"
                                        aria-label="We are stronger as a group than an individual"></a>
                                    <img src="/storage/images/{{ $post->image }}" loading="lazy" alt="">
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        @if ($post->tag != "")
                                            @foreach (explode(',', $post->tag) as $tag)
                                            <a href="{{route('tags', $tag)}}">{{ $tag }}</a>
                                            @endforeach
                                        @endif

                                    </div>
                                    <h2 class="item-title"><a
                                            href="{{ route('view_article', $post->id) }}">{{ $post->title }}</a></h2>
                                    <p class="item-excerpt global-excerpt">
                                        {{ $post->description }}
                                    </p>
                                    <div class="global-meta">
                                        <div class="global-meta-content">
                                            by
                                            <a href="{{route('author', $post->user->id)}}">{{$post->user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
                <div class="pagination-section">
                    {{$posts->links()}}
                    <a href="page/2/index.html" aria-label="Load more"></a>
                    <button class="global-button">Load more</button>
                </div>


            </main>
    </x-guest-layout>
