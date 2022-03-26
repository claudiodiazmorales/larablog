@csrf
                <label for="">Titulo</label>
                <input type="text" name="title" value="{{ old("title", $category->title) }}">
                <label for="">Slug</label>
                <input type="text" name="slug" value="{{ old("slug", $category->slug) }}">
                <label for="">Descripcion</label>
                <textarea name="description">
                        {{ old("description", $category->description) }}
                </textarea>
                <button type="submit">Enviar</button>