@if (!isset($user))
    @inject('user', 'App\Models\User')
@endif

<label for="name">tipo Documento</label> 
<div class="row">
    <div class="col-md-4 input-group mb-3">
        <select name="document_type" id="document_type" class="custom-select rounded-0">
            <option {{ $user->document_type == 'cc' ? 'selected' : '' }}  value="cc">cedula de ciudadania</option>
            <option {{ $user->document_type == 'ti' ? 'selected' : '' }}  value="ti">Tarjeta de Identidad</option>
            <option {{ $user->document_type == 'ps' ? 'selected' : '' }}  value="ps">pasaporte</option>
        </select>
    
        @error('document_type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    
    </div>
    <div class="col-md-8 input-group mb-3">
        
        <input id="document" type="number" placeholder="Numero documento" class="form-control @error('document') is-invalid @enderror"
            name="document" value="{{ old('document', $user->document ) }}"  autocomplete="document" autofocus>

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    
        @error('document')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    
    </div>
</div>


@auth
<label for="name">nombre</label>
@endauth
<div class="input-group mb-3">
    <input id="name" type="text" placeholder="nombre" class="form-control @error('name') is-invalid @enderror"
        name="name" value="{{ old('name', $user->name ) }}"  autocomplete="name" autofocus>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user"></span>
        </div>
    </div>

    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>

@auth
<label for="email">correo</label>
@endauth
<div class="input-group mb-3">
    <input id="email" type="email" placeholder="correo" class="form-control @error('email') is-invalid @enderror"
        name="email" value="{{ old('email', $user->email ) }} "  autocomplete="email">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-envelope"></span>
        </div>
    </div>

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>

@auth
<label for="password">contraseña (opcional)</label>
@endauth
<div class="input-group mb-3">
    <input id="password" type="password" placeholder="contraseña"
        class="form-control @error('password') is-invalid @enderror" name="password" 
        autocomplete="new-password">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>

@auth
<label for="password-confirm">confirmar contraseña (opcional)</label>
@endauth
<div class="input-group mb-3">
    <input id="password-confirm" type="password" placeholder="repetir contraseña" class="form-control"
        name="password_confirmation"  autocomplete="new-password">
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
    </div>
</div>

@if (empty($user->terms)) 
    <div class="form-check">
        <input required="acepta" type="checkbox" class="form-check-input  @error('terms') is-invalid @enderror" value="1" id="terms" name="terms">
        <label class="form-check-label" for="terms">Aceptar <a href="">terminos y condiciones</a></label>
    </div>
    @error('terms')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <br>
@endif
