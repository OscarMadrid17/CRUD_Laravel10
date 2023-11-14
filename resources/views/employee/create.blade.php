<h1>Formulario de creacion de empleados</h1>

<form action="{{route('employee.store')}}" method="POST">
    @csrf
    @include('employee.form', ['mode'=>'crear']);

</form>
