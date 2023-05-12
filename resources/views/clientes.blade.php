   <!-- Scripts -->
   <script src="{{ asset('/resources/js/app.js') }}" defer></script>

   <!-- Styles -->
   <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet">


   <h1>Clientes</h1>
   <table class="table table-striped">
       <thead>
           <tr>
               <th>Id</th>
               <th>Nombre</th>
               <th>Email</th>
               <th>Direccion</th>
               <th>Numero</th>
               <th>Acciones</th>
           </tr>
       </thead>
       <tbody>
           @foreach($data as $cliente)
           <tr>
               <td>{{$cliente['id']}}</td>
               <td>{{$cliente['name']}}</td>
               <td>{{$cliente['email']}}</td>
               <td>{{$cliente['address']}}</td>
               <td>{{$cliente['phone']}}</td>
               <td>
                   <a href="{{ route ('cliente.view', $cliente['id'])}}">Ver</a>
                   <a href="{{ route ('cliente.delete', $cliente['id'])}}">Borrar</a>
               </td>
           </tr>
           @endforeach
       </tbody>
   </table>

   <a href="/cliente/">Crear usuarios</a>