@csrf
                <label for="">Titulo</label>
                <input type="text" class="form-control" name="title" value="{{ old("title", $category->title) }}">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" value="{{ old("slug", $category->slug) }}">
                <label for="">Descripcion</label>
                <textarea name="description" class="form-control">
                        {{ old("description", $category->description) }}
                </textarea>
                <button class="btn btn-primary" type="submit">Enviar</button>