@extends('layouts.app')

@section('content')
    <div style="margin: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Ver Alumno</h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 41px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group row"><label class="col-sm-2 col-form-label" for="nombreAlumno"
                                style="font-size: 20px;">Nombre</label>
                            <div class="col-sm-10"><input class="form-control" type="text" id="nombreAlumno" readonly=""
                                    placeholder="Alejandro"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label" for="AlumnoApellidos"
                                style="font-size: 20px;">Apellidos</label>
                            <div class="col-sm-10"><input class="form-control" type="text" id="AlumnoApellidos" readonly=""
                                    placeholder="Sosa Trejo"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label" for="AlumnoDir"
                                style="font-size: 20px;">Dirección</label>
                            <div class="col-sm-10"><input class="form-control" type="text" id="AlumnoDir" readonly=""
                                    placeholder="Cardenas #402, Monterrey"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label" for="AlumnoTel1"
                                style="font-size: 20px;">Teléfono 1</label>
                            <div class="col-sm-10"><input class="form-control" type="text" id="AlumnoTel1" readonly=""
                                    placeholder="826451247"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label" for="AlumnoTel2"
                                style="font-size: 20px;">Teléfono 2</label>
                            <div class="col-sm-10"><input class="form-control" type="text" id="AlumnoTel2" readonly=""
                                    placeholder=""></div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0" style="font-size: 20px;">Horario</legend>
                                <div class="col-sm-10">
                                    <div class="form-check"><input type="radio" id="5-6" class="form-check-input"
                                            value="5-6" checked="" name="HorarioRadio" disabled=""><label
                                            class="form-check-label" for="5-6" style="font-size: 16px;">5 - 6</label></div>
                                    <div class="form-check"><input type="radio" id="6-7" class="form-check-input"
                                            value="6-7" name="HorarioRadio" disabled=""><label class="form-check-label"
                                            for="6-7" style="font-size: 16px;">6 - 7</label></div>
                                    <div class="form-check"><input type="radio" id="7-8" class="form-check-input"
                                            value="7-8" name="HorarioRadio" disabled=""><label class="form-check-label"
                                            for="7-8" style="font-size: 16px;">7 - 8</label></div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row"><label class="col-sm-2 col-form-label" for="diasIr"
                                style="font-size: 20px;">Días que va</label>
                            <div class="col-sm-10"><select class="form-control" id="diasIr" disabled="">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="margin-bottom: 34px;"><span style="text-decoration: underline;">Asistencia mensual</span>
                    </h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Mes</th>
                                    <th>Numero de Assitencias</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Enero</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Febrero</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Marzo</td>
                                    <td>14</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 style="margin-bottom: 34px;"><span style="text-decoration: underline;">Asistencia del mes
                            actual</span></h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Mes</th>
                                    <th>Numero de asistencias</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Abril</td>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 63px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"><button class="btn float-right" type="submit"
                        style="width: 158px;height: 61px;background-color: #d0d0d0;">Guardar</button><button
                        class="btn float-right" type="button"
                        style="width: 158px;height: 61px;background-color: #95f7f7;margin-right: 25px;">Editar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
