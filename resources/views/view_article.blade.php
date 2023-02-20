    <x-app-layout>
        <main class="global-main">
            <progress class="post-progress"></progress>
            <article class="post-section is-sidebar">
                <div class="post-header">
                    <div class="post-header-wrap global-padding">
                        <div class="post-header-content">

                            <h1 class="post-title global-title">{{ $post->title }}</h1>
                            <p class="post-excerpt global-excerpt">{{ $post->description }}</p>
                            <div class="post-tags global-tags">
                                @if ($post->tag != '')
                                    @foreach (explode(',', $post->tag) as $tag)
                                        <a href="{{route('tags', $tag)}}">{{ $tag }}</a>
                                    @endforeach
                                @endif
                            </div>
                            <div class="post-meta-wrap">
                                <div class="global-meta is-full-meta is-post">
                                    <div class="global-meta-wrap">
                                        <div>
                                            <div class="global-meta-avatar is-image global-image">
                                                <a href="{{ route('author', $post->user->id) }}" class="global-link"
                                                    title="Breana Flatley"></a>
                                                <img src="/storage/images/{{ $post->user->image }}" alt="Breana Flatley"
                                                    loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="global-meta-content">
                                        <div>
                                            by
                                            <a href="{{ route('author', $post->user->id) }}">{{ $post->user->name }}</a>
                                        </div>
                                        <time datetime="2022-10-07"><span>{{ $post->created_at }}</span>4 min
                                            read</time>
                                    </div>
                                </div>
                                <div class="post-share-wrap">
                                    <a href="https://twitter.com/intent/tweet?text=The%20trick%20to%20getting%20more%20done%20is%20to%20have%20the%20freedom%20to%20roam%20around&amp;url=https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                        target="_blank" rel="noopener" aria-label="Share on Twitter"><svg role="img"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                        </svg></a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                        target="_blank" rel="noopener" aria-label="Share on Facebook"><svg
                                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z" />
                                        </svg></a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;title=The%20trick%20to%20getting%20more%20done%20is%20to%20have%20the%20freedom%20to%20roam%20around&amp;url=https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                        target="_blank" rel="noopener" aria-label="Share on Linkedin"><svg
                                            role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-header-image is-wide">
                            <figure>
                                <div class="global-image global-image-orientation global-radius is-panoramic">
                                    <img sizes="(max-width:480px) 300px, (max-width:768px) 600px, (max-width:1024px) 1200px, 2000px"
                                        src="/storage/images/{{ $post->image }}" alt="{{ $post->title }}">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="post-wrap global-padding">
                    <div class="post-sidebar">
                        <div class="is-authors">
                            <small class="global-subtitle">Written by</small>
                            <a href="{{ route('author', $post->user->id) }}">
                                <img src="/storage/images/{{ $post->user->image }}" alt="" loading="lazy">
                                <div>
                                    <h3 class="post-sidebar-title">{{ $post->user->name }}</h3>
                                    <p>{{ $post->user->request->about }}.</p>
                                </div>
                            </a>
                        </div>
                        <div class="is-featured">
                            <small class="global-subtitle">Editor’s Choice</small>
                            <a href="{{ route('view_article', $ai->id) }}">
                                <img src="/storage/images/{{ $ai->image }}" alt="" loading="lazy">
                                <div>
                                    <h3 class="post-sidebar-title">{{ $ai->title }}</h3>
                                </div>
                            </a>
                            <a href="{{ route('view_article', $node->id) }}">
                                <img src="/storage/images/{{ $node->image }}" alt="" loading="lazy">
                                <div>
                                    <h3 class="post-sidebar-title">{{ $node->title }}</h3>
                                </div>
                            </a>
                            <a href="{{ route('view_article', $react->id) }}">
                                <img src="/storage/images/{{ $react->image }}" alt="" loading="lazy">
                                <div>
                                    <h3 class="post-sidebar-title">{{ $react->title }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="subscribe-form global-radius is-sticky">
                            <div class="global-dynamic-color">
                                <small class="global-subtitle">Newsletter</small>
                                <h3 class="subscribe-title">Get all the latest posts delivered straight to your
                                    inbox.</h3>
                            </div>
                            <div class="subscribe-wrap">
                                <form method="post" action="{{ route('subscribe') }}">@csrf
                                    <input name="email" type="email" placeholder="Your email address"
                                        aria-label="Your email address" required>
                                    <button class="global-button no-color">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="post-content">
                        {!! $post->body !!}
                        <div class="post-tags global-tags">
                            @auth

                                @if (Auth::user()->role == 'admin' && Request::is('view_article/*'))
                                    <form method="post" action="{{ route('delete_article', $post) }}">@csrf
                                        <button class="global-button no-color">Delete Article</button>
                                    </form>
                                @endif
                                <br>
                                @if (Auth::user()->role == 'admin' || ('writer' && Request::is('view_article/*')))
                                    <a href="{{ route('update_article', $post) }}" style="padding: 0;"><button
                                            class="global-button no-color">Update Article</button></a>
                                @endif
                                @if ($post->status == 'pending')
                                    <form method="post" action="{{ route('approve_article', $post) }}">@csrf
                                        <input type="text" value="approved" name="status"
                                            style="visibility: hidden">
                                        <button class="global-button no-color">Approve Article</button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                        <div class="post-share">
                            <div class="post-share-wrap">
                                <a href="https://twitter.com/intent/tweet?text=The%20trick%20to%20getting%20more%20done%20is%20to%20have%20the%20freedom%20to%20roam%20around&amp;url=https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                    target="_blank" rel="noopener" aria-label="Share on Twitter"><svg role="img"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z" />
                                    </svg></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                    target="_blank" rel="noopener" aria-label="Share on Facebook"><svg
                                        role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z" />
                                    </svg></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&amp;title=The%20trick%20to%20getting%20more%20done%20is%20to%20have%20the%20freedom%20to%20roam%20around&amp;url=https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                    target="_blank" rel="noopener" aria-label="Share on Linkedin"><svg
                                        role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg></a>
                                <a href="javascript:" class="post-share-link" id="copy"
                                    data-clipboard-target="#copy-link" aria-label="Copy link"><svg role="img"
                                        viewBox="0 0 33 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M27.3999996,13.4004128 L21.7999996,13.4004128 L21.7999996,19 L18.9999996,19 L18.9999996,13.4004128 L13.3999996,13.4004128 L13.3999996,10.6006192 L18.9999996,10.6006192 L18.9999996,5 L21.7999996,5 L21.7999996,10.6006192 L27.3999996,10.6006192 L27.3999996,13.4004128 Z M12,20.87 C7.101,20.87 3.13,16.898 3.13,12 C3.13,7.102 7.101,3.13 12,3.13 C12.091,3.13 12.181,3.139 12.272,3.142 C9.866,5.336 8.347,8.487 8.347,12 C8.347,15.512 9.866,18.662 12.271,20.857 C12.18,20.859 12.091,20.87 12,20.87 Z M20.347,0 C18.882,0 17.484,0.276 16.186,0.756 C14.882,0.271 13.473,0 12,0 C5.372,0 0,5.373 0,12 C0,18.628 5.372,24 12,24 C13.471,24 14.878,23.726 16.181,23.242 C17.481,23.724 18.88,24 20.347,24 C26.975,24 32.347,18.628 32.347,12 C32.347,5.373 26.975,0 20.347,0 Z" />
                                    </svg></a>
                                <small class="share-link-info global-alert">The link has been copied!</small>
                            </div>
                            <input type="text"
                                value="https://reiro.fueko.net/the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/"
                                id="copy-link" aria-label="Copy link input">
                        </div>
                    </div>
                </div>
            </article>
            <aside class="navigation-section global-padding">

            </aside>
            <div class="comments-section global-padding">
                <div class="comments-wrap global-radius">
                    <div class="comments-content">
                        <div class="comments-header">
                            <h3>Member discussion</h3>
                            <script data-ghost-comment-count="61816f89191d5015302076ff" data-ghost-comment-count-empty="0 comments"
                                data-ghost-comment-count-singular="comment" data-ghost-comment-count-plural="comments"
                                data-ghost-comment-count-tag="span" data-ghost-comment-count-class-name="" data-ghost-comment-count-autowrap="true">
                            </script>
                        </div>

                        <script defer src="https://cdn.jsdelivr.net/ghost/comments-ui@~0.10/umd/comments-ui.min.js"
                            data-ghost-comments="https://reiro.fueko.net/" data-api="https://reiro.fueko.net/ghost/api/content/"
                            data-admin="https://reiro.fueko.net/ghost/" data-key="3d825fc0e10091ccd9cd5c1f35"
                            data-styles="https://cdn.jsdelivr.net/ghost/comments-ui@~0.10/umd/main.css" data-title="" data-count="false"
                            data-post-id="61816f89191d5015302076ff" data-sentry-dsn="" data-color-scheme="auto" data-avatar-saturation="60"
                            data-accent-color="#f9c345" data-app-version="0.10" data-comments-enabled="all" data-publication="Reiro"
                            crossorigin="anonymous"></script>

                    </div>
                </div>
            </div>
            <div class="special-section global-padding">
                <small class="global-subtitle">You might also like</small>
                <div class="special-wrap">
                    @foreach ($posts as $post)
                    <article class="item is-special">
                        <div class="item-image global-image global-image-orientation global-radius">
                            <a href="{{route('view_article', $post->id)}}" class="global-link"
                                aria-label="{{$post->title}}"></a>
                            <img
                                sizes="(max-width:480px) 300px, 600px"
                                src="/storage/images/{{$post->image}}"
                                loading="lazy" alt="">
                        </div>
                        <div class="item-content">
                            <h2 class="item-title"><a
                                    href="{{route('view_article', $post->id)}}">{{$post->title}}</a></h2>
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
        </main>
    </x-app-layout>
