@csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title',$post->title) }}">
        </div>
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{ old('url_clean',$post->url_clean) }}">
           
        </div>
        <div class="form-group">
            <label for="url_clean">Categoria</label>
            <select class="form-control" name="category_id" id="category_id">
               @foreach ($categorias  as $title => $id)
                <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $title }}</option>
               @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="url_clean">Posted</label>
            <select class="form-control" name="posted" id="posted">
               @include('dashboard.partials.option-yes-no',['val' => $post -> posted]);
            </select>
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" placeholder="Deja un comentario aqui" id="content" rows="3" name="content">{{ old('content',$post->content) }}</textarea>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Enviar">


