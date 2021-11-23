@csrf
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
          <div class=" col-md-6 form-group">
              <label for="name">nombre de la Categoria</label>
              <input id="name" type="text" placeholder="nombre de la categoria" class="form-control @error('name') is-invalid @enderror"
              name="name" value="{{ old('name', $category->name ) }}"  autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        </div>

    @include('includes.showImage', ['model' => $category, 'disk' => 'categories'])
        <div class="col-md-12">
            <div class="col-md-6 form-group">
                <label for="image">imagen categoria</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="image">escojer archivo</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Subir</span>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>




