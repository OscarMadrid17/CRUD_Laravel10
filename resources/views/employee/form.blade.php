

<label for="name">Nombre</label>
    <input type="text"  value="{{isset($employee->name)?$employee->name:'' }}"  name="name" id="name">
    <br>

    <label for="email">email</label>
    <input type="text"  value="{{isset($employee->email)?$employee->email:''}}"  name="email" id="email">
    <br>

    <label for="password">Password</label>
    <input type="password"  value="{{isset($employee->password)?$employee->password:''}}"  name="password" id="password">
    <br>

    <input type="submit" value="{{$mode}} datos">
    <br>
    <a href="{{route('employee.index')}}">Regresar</a>
    <br>
