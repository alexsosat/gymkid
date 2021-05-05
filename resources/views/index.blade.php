@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-lg-4 offset-lg-0">
                    <img class="img-fluid center" src="{{ asset('img/gymkid.jpeg') }}" width="500px" height="500px" />
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col col-md-12 col-lg-6">
                <div class="container py-5">
                    <h2 class="text-center">Destacado</h2>
                    <div class="row ">
                        <div class="mx-auto">
                            <div class="card rounded shadow border-0">
                                <div class="card-body p-5 bg-white rounded">
                                    <div class="table-responsive">
                                        <table id="Destacado"
                                            style="  width: 100%;
                                                                                                                                                                                                        "
                                            class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellidos</th>
                                                    <th>Razón</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Cynthia</td>
                                                    <td>Trejo Sauceda</td>
                                                    <td>Deuda</td>
                                                </tr>
                                                <tr>
                                                    <td>Leonardo</td>
                                                    <td>Sosa Trejo</td>
                                                    <td>Multiples faltas</td>
                                                </tr>
                                                <tr>
                                                    <td>Alejandro</td>
                                                    <td>Sosa Trejo</td>
                                                    <td>Deuda</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-12 col-lg-6">
                <div class="container py-5">
                    <h2 class="text-center text-black">Últimos movimientos</h2>
                    <div class="row">
                        <div class="mx-auto">
                            <div class="card rounded shadow border-0">
                                <div class="card-body p-5 bg-white rounded">
                                    <div class="table-responsive">
                                        <table id="UltMov" style="width: 100%;" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellidos</th>
                                                    <th>Tipo de movimiento</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Melquiades</td>
                                                    <td>Sosa Herrera</td>
                                                    <td>Inscripcion</td>
                                                </tr>
                                                <tr>
                                                    <td>Miguel</td>
                                                    <td>Varela Delgado</td>
                                                    <td>Pago</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
