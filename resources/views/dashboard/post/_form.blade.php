@csrf
                <label for="">Titulo</label>
                <input type="text" class="form-control" name="title" value="{{ old("title", $post->title) }}">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" value="{{ old("slug", $post->slug) }}">
                <label for="">Contenido</label>
                <input type="text" class="form-control" name="content" value="{{ old("content", $post->content) }}">

                <label for="">Categorias</label>
                {{-- <select name="category_id">
                        <option value=""></option>
                        @foreach ($categories as $item)
                             <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                </select> --}}

                <select name="category_id" class="form-control">
                        <option value=""></option>
                        @foreach ($categories as $title => $id)
                             <option {{ old("category_id", $post->category_id) == $id ? 'selected' : ''  }} value="{{$id}}">{{$title}}</option>
                        @endforeach
                </select>

                <label for="">Posteado</label>
                <select name="posted" id="" class="form-control">
                        <option {{ old("posted", $post->posted) == 'not' ? 'selected' : ''  }} value="not">No</option>
                        <option {{ old("posted", $post->posted) == 'yes' ? 'selected' : ''  }} value="yes">Si</option>
                </select>

                <label for="">Descripcion</label>
                <textarea name="description" class="form-control">
                {{ old("description", $post->description) }}
                </textarea>
                @if (isset($task) && $task == 'edit')
                        <label for="">Imagen</label>
                        <input type="file" name="image" class="form-control" id="">
                @endif

                <button class="btn btn-primary" type="submit">Enviar</button>