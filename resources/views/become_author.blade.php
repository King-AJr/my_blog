<x-app-layout>
    <div class="custom-wrap">
        <div class="custom-container">
            <div class="custom-logo-wrap">
                <div class="custom-logo global-logo is-header"> <a href="{{route('welcome')}}" class="is-logo"><img
                            src="/storage/images/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="custom-content">
                <form method="post" action="{{ route('submit_author') }}" enctype="multipart/form-data">@csrf
                    @foreach ($errors->all() as $err)
                        <p>{{$err}}</p>
                    @endforeach
                    <h1 class="custom-title">Become an Author</h1>
                    <label>About yourself</label>
                    <textarea placeholder="Tell us about yourself as a writer" name="about"
                        aria-label="Tell us about yourself as a writer" required></textarea>
                    <br>
                    <label>Give us some of your samples</label>
                    <input type="text" placeholder="Sample 1" name="sample_1" aria-label="Give us some samples"
                        required>
                    <input type="text" placeholder="Sample 2" name="sample_2" aria-label="Give us some samples"
                        required>
                    <label>Add an image of yourself</label>
                        <input type="file"  name="image" aria-label="add your image"
                        required>
                    <button class="global-button">Submit</button>
                </form>
            </div>
        </div>
        <div class="custom-image global-bg-image"
            style="background-image: url(../content/images/2022/10/uby-yanes-mAgNvtRlGzA-unsplash.jpg)"></div>
    </div>
</x-app-layout>
