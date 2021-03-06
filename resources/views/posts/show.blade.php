<x-app-layout>
    <div class="container py-8">
        <h1 class="text-2xl font-bold text-gray-600" >{{$post->name}}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {!!$post->stract!!}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Content index --}}
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="@if($post->image) http://127.0.0.1:8000/storage/{{$post->image->url}} @else https://cdn.pixabay.com/photo/2020/05/05/12/12/coffee-5132832_960_720.jpg @endif" alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>
            {{-- Content similar --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4" >Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show', $similar)}}">
                                @if ($similar->image)
                                <img class="w-36 h-20 object-cover object-center" src="http://127.0.0.1:8000/storage/{{$similar->image->url }}" alt="">
                                @else
                                <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/05/05/12/12/coffee-5132832_960_720.jpg" alt="">
                                @endif
                                

                                <span class="ml-2 text-gray-600" > {{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>