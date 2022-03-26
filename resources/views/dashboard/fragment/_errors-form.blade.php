@if ($errors->any())
        @foreach ($errors->all() as $item)
        
        <div>
                {{$item}}
        </div>
            
        @endforeach
@endif