@csrf
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
          <div class=" col-md-6 form-group">
              <label for="name">nombre de la sub Categoria</label>
              <input id="name" type="text" placeholder="nombre de la sub categoria" class="form-control @error('name') is-invalid @enderror"
              name="name" value="{{ old('name', $sub_category->name ) }}"  autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class=" col-md-6 form-group">
              <label for="categories_id">category</label>
              <select class="custom-select rounded-0 @error('categories_id') is-invalid @enderror" name="categories_id" id="categories_id">
                  <option value="" >--Seleccionar--</option>
                  @foreach ($categories as $category)
                      <option {{ $category->id == $sub_category->categories_id ? 'selected' : '' }} value="{{$category->id}}" >{{ $category->name}}</option>
                  @endforeach
              </select>
              @error('categories_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <h2 class="h3">Lista de Permisos</h2>
                <div class="row">

                    @foreach ($attributes as $attribute)
                        {{-- @dump($sub_category->attribute) --}}
                        <div class="col-md-20 form-check">
                            <input {{ $sub_category->$attribute ? 'checked' : '' }} type="checkbox" class="form-check-input" name="attributes[]" id="{{ $attribute->name }}" value="{{$attribute->id}}" >
                            <label class="form-check-label" for="{{$attribute->name}}">{{$attribute->name}}</label>
                        </div>
    
                        {{-- {{$role->hasattribute($attribute)}} --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>




