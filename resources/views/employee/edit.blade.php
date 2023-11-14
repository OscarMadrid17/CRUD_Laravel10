<h1>Formulario de edicion de empleado</h1>


<form action="{{route('employee.update', $employee->id)}}" method="POST">
    @csrf

    @method('PUT')

    @include('employee.form', ['mode'=>'editar'])

    <a href="{{route('employee.index')}}">Volver a Inicio</a>
</form>

