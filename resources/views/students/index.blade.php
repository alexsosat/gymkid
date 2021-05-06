@extends('layouts.app')

@section('custom_scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
        crossorigin="anonymous" defer>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" defer></script>
    <script src="{{ asset('js/studentsTable.js') }}" defer></script>
@endsection

@section('content')
    <div class="container my-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Alumnos</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Añadir alumno</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
                    </div>
                </div>
            </div>

            <div class="bootstrap_datatables">

                <table id="StudentsTable" style="width:100%" class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Seguro</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Días que va</th>
                            <th>Horario</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                                            <i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i>
                                        </a>
                                        <a class="delete" href="#"
                                            onclick="event.preventDefault();if(confirm('¿Estas seguro de eliminar a {{ $student->name }}?\nEsta acción no se podrá deshacer')){document.getElementById('delete-student-id').submit();}">
                                            <i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i>
                                        </a>

                                        <form id="delete-student-id" method="POST" class="d-none">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </div>
                                </td>
                                <td><a href="AlumnoIndividual.html">{{ $student->name }}</a></td>
                                <td>{{ $student->surname }}</td>
                                <td>Insurance</td>
                                <td>Bolivar 906, Montemorelos, NL</td>
                                <td>82633450</td>
                                <td>5</td>
                                <td>7-8</td>
                                <td>Activo</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
