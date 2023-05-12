<h1>Creación de un cliente</h1>
<form action="{{ route('cliente.store') }}" method="post">
    @csrf
    <label for="name" class="control-label">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Nombre ...">

    <label for="email" class="control-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email ...">

    <label for="phone" class="control-label">Teléfono</label>
    <input type="phone" class="form-control" name="phone" placeholder="Telefono ...">

    <label for="address" class="control-label">Dirección</label>
    <input type="address" class="form-control" name="address" placeholder="Dirección ...">

    <button type="submit" class="btn btn-success">Guardar</button>
</form>