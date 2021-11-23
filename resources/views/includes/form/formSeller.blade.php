
<div class="form-group">
    <label for="store_name">Nombre del negocio (opcional)</label>
    <input id="store_name" type="text" placeholder="plazaganga store" class="form-control @error('store_name') is-invalid @enderror"
        name="store_name" value="{{ old('store_name', $seller->store_name ) }}" autocomplete="store_name" autofocus>

        @error('store_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>




<div class="form-group">
    <label for="Refund_Policy">escribe tus politicas de reembolso (opcional)</label>
    <textarea id="Refund_Policy" type="text" placeholder="tus politicas de reembolso" class="form-control @error('Refund_Policy') is-invalid @enderror"
        name="Refund_Policy" value="{{ old('Refund_Policy', $seller->Refund_Policy ) }}"  autocomplete="address-level1" autofocus>
        {{ old('store_name', $seller->Refund_Policy ) }}  
    </textarea>

        @error('Refund_Policy')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
</div>

<div class="form-group">
    <label for="exampleInputFile">logo o imagen del negocio</label>
    {{-- @dump(count($seller->images)) --}}
    @include('includes.showImage', ['model' => $seller, 'disk' => 'sellers'])
    <div class="input-group">
      <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Escoger archivo</label>
      </div>
      <div class="input-group-append">
        <span class="input-group-text" id="">subir</span>
      </div>
    </div>
  </div>
