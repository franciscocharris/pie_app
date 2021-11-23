@csrf
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
          <div class=" col-md-6 form-group">
              <label for="name">nombre del atributo</label>
              <input id="name" type="text" placeholder="ej: tamaño pantalla, ram, SO" class="form-control @error('name') is-invalid @enderror"
              name="name" value="{{ old('name', $attribute->name ) }}"  autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class=" col-md-6 form-group">
              <label for="units">unidad de medida del atributo</label>
              <input id="units" type="text" placeholder="ej: pulgadas,GB,kg,etc" class="form-control @error('units') is-invalid @enderror"
              name="units" value="{{ old('units', $attribute->units ) }}"  autocomplete="units" autofocus>

              @error('units')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-md 6 form-group">

            <div class="form-check">
              <input {{$attribute->multi_value == 1 ? 'checked' : ''}} value="{{$attribute->multi_value ? '1' : '0'}}" name='multi_value' type="checkbox" class="form-check-input  "  id="multi_value" >
              <label  class="form-check-label" for="exampleCheck1">multi valor</label>
              <p>si el atributo es multi valor, se mostraran mas campos para poderse rellenar en el formulario
                de producto, ej: color puede ser multivalor, y se pondran mas campos cuando se este 
                registrando un producto disponible en varios colores
              </p>
              
            </div>
          </div>
        </div>


    </div>
</div>




