<!-- Modal Create -->
<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Crear Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('students-grades.store')}}" id="modalCreate">
                @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Sección</label>
                            <input type="text" class="form-control"  name="section" id="section" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Alumno</label>
                            <select class="form-control"  name="student" id="student" required>
                            @foreach ($students as $student)
                                <option value="{{$student -> id}}">{{$student -> name}} {{$student -> lastname}}</option>
                            @endforeach   
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Grado</label>
                            <select class="form-control"  name="grade" id="grade" required>
                            @foreach ($grades as $grade)
                                <option value="{{$grade -> id}}">{{$grade -> name}}</option>
                            @endforeach   
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal Create -->

<!-- Modal Update -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('students-grades.update')}}" id="modalUpdate">
                @csrf
                <div class="row">
                        <div class="form-group col-md-4">
                            <label>Sección</label>
                            <input type="text" class="form-control"  name="section" id="sectionUpdate" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Alumno</label>
                            <select class="form-control"  name="student" id="studentUpdate" required>
                            @foreach ($students as $student)
                                <option value="{{$student -> id}}">{{$student -> name}} {{$student -> lastname}}</option>
                            @endforeach   
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Grado</label>
                            <select class="form-control"  name="grade" id="gradeUpdate" required>
                            @foreach ($grades as $grade)
                                <option value="{{$grade -> id}}">{{$grade -> name}}</option>
                            @endforeach   
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" class="form-control" value="" name="hidden" id="hidden"></input>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal Update -->



<!-- Modal Delete-->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modalDeleteTitle">Eliminar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('students-grades.delete')}}" id="modalDelete">
                @csrf
                    <div class="row">
                        <div class="form-group col-md-12" style="text-align:center;">
                            <h2>¿Estás seguro/a que deseas eliminar este registro?</h2>
                            <input type="hidden" class="form-control" value="" name="hidden" id="hiddenDelete"></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN Modal Delete-->