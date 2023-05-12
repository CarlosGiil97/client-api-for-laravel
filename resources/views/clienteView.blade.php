<h1>Creación de un cliente</h1>

<form action="{{ route('cliente.update') }}" method="post">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$cliente['id'] ?? null}}" />
    <label for="name" class="control-label">Nombre</label>
    <input type="text" class="form-control" name="name" value="{{$cliente['name']}}" placeholder="Nombre ...">

    <label for="email" class="control-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{$cliente['email']}}" placeholder="Email ...">

    <label for="phone" class="control-label">Teléfono</label>
    <input type="phone" class="form-control" name="phone" value="{{$cliente['phone']}}" placeholder="Telefono ...">

    <label for="address" class="control-label">Dirección</label>
    <input type="address" class="form-control" name="address" value="{{$cliente['phone']}}" placeholder="Dirección ...">

    <button type="submit" class="btn btn-success">Actualizar</button>
</form>