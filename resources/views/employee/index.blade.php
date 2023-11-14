<h1>Mostrar la lista de empleados</h1>

@if(Session::has('message'))

{{Session::get('message')}}

@endif

<a href="{{route('employee.create')}}">Registrar nuevo empleado</a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td>
                <a href="{{ route('employee.edit', $employee->id) }}">Editar</a>

            </td>

            <td>
                <form action="{{route('employee.destroy', $employee->id)}}" method="POST">
                    @csrf

                    @method('DELETE')

                    <input type="submit" onclick="return confirm('Confirmar')" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
