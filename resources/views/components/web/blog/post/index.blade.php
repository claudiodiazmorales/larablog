<div>
    {{ $slot }}
    @foreach ($posts as $item)
        <div class="card card-white mb-2">
            <h3>{{$item->title}}</h3>
            <a href="{{route("web.blog.show", $item->id)}}" class="btn btn-primary">Ir</a>
            <p>{{$item->description}}</p>
        </div>
    @endforeach
    {{ $posts->links() }}
</div>