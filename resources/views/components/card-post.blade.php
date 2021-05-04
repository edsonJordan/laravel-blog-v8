@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden" >
    @if ($post->image)
    <img class="w-full h-72 object-cover object-center" src="http://127.0.0.1:8000/storage/{{$post->image->url}}" alt="">
    @else   
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/05/05/12/12/coffee-5132832_960_720.jpg" alt="">
    @endif
                        
    <div class="px-6 py-4">
        <h1>
            <a href="{{route('posts.show', $post)}}" class="font-bold text-xl mb-2">
                {{$post->name}}
            </a>
            <div class="text-gray-700 text-base">
                {{-- {{$post->stract}} --}}
                {{-- imprimir como html --}}
                {!! $post->stract !!}
            </div>
        </h1>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2" >{{$tag->name}}</a>
        @endforeach
    </div>
</article>