@include('admin.includes.alerts')
<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome" value ="{{ $detail->name ?? old('name') }}">
</div>
<div class="form-group">
    <button class="btn btn-dark"><i class="fas fa-check"></i> Enviar</button>
</div>

