<x-app-layout>
    <main class="global-main">
        <div class="post-header">
            <div class="post-header-wrap global-padding is-center is-archive-image">
                <div class="post-header-content">
                    <div class="archive-image global-image">
                        <img src="/storage/images/{{$request->image}}"
                            alt="{{$request->user->name}}">
                    </div>
                    <h1 class="post-title global-title">{{$request->user->name}}</h1>
                    <p class="post-excerpt global-excerpt">{{$request->about}}</p>

                </div>
            </div>
        </div>
        <div class="loop-section global-padding">
            <small class="global-subtitle">Samples</small>
            <div class="loop-wrap">
                <a href="{{$request->sample_1}}">sample 1</a>
                <a href ="{{$request->sample_2}}">Sample 2</a>
               @if ($request->role == 'user')
                <form method="post" action="{{ route('approve_author', $request->user->id) }}">@csrf
                    <input type="text" value="writer" name="role" style="visibility: hidden">
                    <button class="global-button no-color">Approve Author</button>
                </form>
               @else
                <button class="global-button no-color">Approved!!</button>
               @endif

            </div>
        </div>

    </main>
</x-app-layout>
{{-- - --}}
