    <!-- Start: Bootstrap DataTables -->
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

                    </div>
                </div>
            </div>

            <div class="bootstrap_datatables">

                <table id="AlumnoTabla" style="width:100%" class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Seguro</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Días que va</th>
                            <th>Horario</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $qry = "select socio.nombre_Al as nombre, socio.Apellidos_Al as apellidos, Seguro.tipo_seguro,
                        concat(tutor.direccion,', ',ciudad.nombre_ciudad) as direccion, tutor.telefono_prim as telefono,
                        socio.dias_que_va as 'dias que va',
                        horarios.nombre_horario, socio.status, socio.Id_Alumno, inscritos.fecha_inicio from inscritos
                        inner join socio on inscritos.AlumnoId_socio = socio.Id_Alumno
                        inner join seguro on inscritos.SeguroIdSeguro = seguro.IdSeguro
                        inner join tutor on inscritos.TutorIdTutor = Tutor.IdTutor
                        inner join ciudad on tutor.ciudadid_ciudad = id_ciudad
                        inner join horarios on inscritos.HorariosId_Horario = Horarios.id_horario
                        where fecha_inicio = (select max(fecha_inicio) from inscritos as b where b.AlumnoId_socio =
                        inscritos.AlumnoId_socio);";
                        $result_set = $conexion->query($qry);

                        while ($registro = $result_set->fetch_assoc()) {
                        echo '<tr>
                            <td><a href="AlumnoIndividual.php?AlumnoVer=' .
                                $registro['Id_Alumno'] .
                                '">' .
                                    $registro['nombre'] .
                                    '</a></td>
                            <td>' .
                                $registro['apellidos'] .
                                '</td>
                            <td>' .
                                $registro['tipo_seguro'] .
                                '</td>
                            <td>' .
                                $registro['direccion'] .
                                '</td>
                            <td>' .
                                $registro['telefono'] .
                                '</td>
                            <td>' .
                                $registro['dias que va'] .
                                '</td>
                            <td>' .
                                $registro['nombre_horario'] .
                                '</td>
                            <td>';
                                if ($registro['status'] == 1) {
                                echo 'activo';
                                } else {
                                echo 'inactivo';
                                }
                                echo '</td>

                            <td>
                                <div onclick="loadDynamicContentModal(' .
                                $registro['Id_Alumno'] .
                                ')" class="btn-modal-target edit" id="btn-bootstrap" style="cursor:pointer;">
                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>

                                </div>
                                <div onclick="deleteDynamicStudent(' .
                                $registro['Id_Alumno'] .
                                ')" class="btn-modal-target delete" id="btn-bootstrap" style="cursor:pointer;"><i
                                        class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></div>
                            </td>
                        </tr>';
                        }

                        $result_set->close();
                        mysqli_close($conexion);
                        ?>
                        <script>
                            function loadDynamicContentModal(modal) {
                                var options = {
                                    modal: true,
                                    height: 300,
                                    width: 500
                                };
                                $('#modal-dynamic').load('EditarModal.php?modal=' + modal,
                                    function() {
                                        $('#editEmployeeModal').modal({
                                            show: true
                                        });
                                    });
                            }

                            function deleteDynamicStudent(erasable) {
                                var options = {
                                    modal: true,
                                    height: 300,
                                    width: 500
                                };
                                $('#Erasable-dym').load('EliminarModal.php?erasable=' + erasable,
                                    function() {
                                        $('#deleteEmployeeModal').modal({
                                            show: true
                                        });
                                    });
                            }

                        </script>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- End: Bootstrap DataTables -->

    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="AgregarAlumno.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Añadir Alumno</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="alNombre" required>
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="alApellidos" required>
                        </div>
                        <div class="form-group">
                            <label>Nacimiento</label>
                            <input type="date" class="form-control" name="FechaNac" required>
                        </div>
                        <div class="form-group">
                            <label>Nombre Tutor</label>
                            <input type="text" class="form-control" name="tutNombre" required>
                        </div>
                        <div class="form-group">
                            <label>Apellidos Tutor</label>
                            <input type="text" class="form-control" name="tutApellidos" required>
                        </div>
                        <div class="form-group">
                            <label>Seguro</label>
                            <input type="text" class="form-control" name="alSeguro" required>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <textarea class="form-control" name="alDireccion" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" name="alCiudad" required>
                        </div>
                        <div class="form-group">
                            <label>Teléfono Primario</label>
                            <input type="text" class="form-control" name="tutTelprim" required>
                        </div>
                        <div class="form-group">
                            <label>Teléfono Secundario</label>
                            <input type="text" class="form-control" name="tutTelSec">
                        </div>
                        <div class="form-group">
                            <label>Días que va</label>
                            <select class="form-control" id="DiasQueVa" name="goingDays">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Horario</label>
                            <select class="form-control" id="HorarioDeIda" name='HorarioSelected'>
                                <option value="5-6">5:00 - 6:00</option>
                                <option value="6-7">6:00 - 7:00</option>
                                <option value="7-8">7:00 - 8:00</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input ml-5" id="AlumnoStatus" name="alStat"
                                value="0x31">
                            <label class="form-check-label" for="AlumnoStatus">Status</label>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="EditarAlumno.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Alumno</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="modal-dynamic"></div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Confirmar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="EliminarAlumno.php">
                    <div id="Erasable-dym"></div>
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    </body>

    </html>
