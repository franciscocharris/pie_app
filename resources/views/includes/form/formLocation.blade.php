<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" type="text" placeholder="nombra esta direccion para que sea facil de identificar" class="form-control @error('name') is-invalid @enderror"
              name="name" value="{{ old('name', $location->name ) }}" autocomplete="name" autofocus>
        
              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>
        
        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Department">Departamento</label>
            <input id="Department" type="text" placeholder="departamento" class="form-control @error('Department') is-invalid @enderror"
              name="Department" value="{{ old('Department', $location->Department ) }}"  autocomplete="address-level1" autofocus>
        
              @error('Department')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="municipality">Municipio</label>
            <input id="municipality" type="text" placeholder="municipio / ciudad" class="form-control @error('municipality') is-invalid @enderror"
              name="municipality" value="{{ old('municipality', $location->municipality ) }}" required  autocomplete="address-level2" autofocus>
        
              @error('municipality')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>
        
        
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="neighborhood">vecindario</label>
            <input id="neighborhood" type="text" placeholder="vecindario / barrio" class="form-control @error('neighborhood') is-invalid @enderror"
              name="neighborhood" value="{{ old('neighborhood', $location->Department ) }}"  autocomplete="neighborhood" autofocus>
        
              @error('neighborhood')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <label for="address">Direccion</label>
    <input id="address" type="text" placeholder="Direccion" class="form-control @error('address') is-invalid @enderror"
      name="address" value="{{ old('address', $location->address ) }}" required  autocomplete="address" autofocus>

      @error('address')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
</div>
