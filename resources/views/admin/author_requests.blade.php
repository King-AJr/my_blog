<x-app-layout>
    <main class="global-main">
        <div class="post-header">
            <div class="post-header-wrap global-padding is-center">
                <div class="post-header-content">
                    <h1 class="post-title global-title">Requests</h1>
                    <p class="post-excerpt global-excerpt">Here are the request to be authors.</p>
                </div>
            </div>
        </div>
        <div class="custom-archive global-padding">
            <small class="global-subtitle">Authors Request</small>
            @foreach ($requests as $request)
            <div class="loop-wrap is-authors">
                <div class="custom-archive-item item">
                    <div class="item-image global-image global-image-orientation global-radius is-portrait">
                        <a href="{{route('single_request', $request->id)}}" class="global-link"
                            aria-label="Breana Flatley"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px"
                            src="/storage/images/{{$request->image}}"
                            alt="{{$request->user->name}}">
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="{{route('single_request', $request->id)}}">{{$request->user->name}}</a></h2>
                        <p class="item-excerpt global-excerpt is-authors">{{$request->about}}</p>
                    </div>
                </div>

                </div>
            @endforeach

            </div>
    </main>
</x-app-layout>
{{--  --}}
