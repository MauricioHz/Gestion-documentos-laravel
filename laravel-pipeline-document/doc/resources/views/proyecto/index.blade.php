@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-lg-11 col-xl-10">
            <div class="card-list">
                <div class="card-list-head">
                    <h6>Evaluation</h6>
                    <div class="dropdown">
                        <button class="btn-options" type="button" id="cardlist-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Rename</a>
                            <a class="dropdown-item text-danger" href="#">Archive</a>
                        </div>
                    </div>
                </div>
                <div class="card-list-body">
                    <!-- objeto proyecto -->
                    <div id="proyectos">
                        <div class="row content-list-head">
                            <div class="col-auto">
                                <h3>Tasks</h3>
                                <button class="btn btn-round" data-toggle="modal" data-target="#task-add-modal">
                                    <i class="material-icons">add</i>
                                </button>
                            </div>
                            <form class="col-md-auto">
                                <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">filter_list</i>
                                        </span>
                                    </div>
                                    <input type="search" class="form-control search" placeholder="Filter tasks" aria-label="Filter Tasks" aria-describedby="filter-tasks">
                                </div>
                            </form>
                        </div>
                        <!-- list -->
                        <div class="list">
                            @foreach ($proyectos as $proyecto)
                                <div class="card card-task">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="#">
                                                <h6 data-filter-by="text" class="proyecto">{{ $proyecto->nombre . $proyecto->uuid}}</h6>
                                            </a>
                                            <span class="text-small">Today</span>
                                        </div>
                                        <div class="card-meta">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons">playlist_add_check</i>
                                                <span>3/4</span>
                                            </div>
                                            <div class="dropdown card-options">
                                                <button class="btn-options" type="button" id="task-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item id-proyecto" href="#" data-id-proyecto="{{ $proyecto->uuid }}" data-toggle="modal" data-target="#documentosModal">Documentos del proyecto</a>
                                                    <a class="dropdown-item" href="{{ url('documento.subir') }}">Subir documento</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- fin list -->
                    </div>
                    <!-- fin objeto proyecto -->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="task-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('proyecto.store') }}" method="post">
                {!! csrf_field() !!}
                <div class="modal-header">
                    <h5 class="modal-title" id="">Nuevo proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active show" id="task-add-details-tab" data-toggle="tab" href="#task-add-details" role="tab" aria-controls="task-add-details" aria-selected="true">Detalle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="task-add-members-tab" data-toggle="tab" href="#task-add-members" role="tab" aria-controls="task-add-members" aria-selected="false">Usuarios</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="task-add-details" role="tabpanel" aria-labelledby="task-add-details-tab">
                            <div class="form-group row">
                                <label for="nombre" class="col-sm-4 col-form-label">Proyecto</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Breve nombre del grupo de documentos" require>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descripcion" class="col-sm-4 col-form-label">Descripción</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Breve descripción del proyecto" require>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fechaInicio" class="col-sm-4 col-form-label">Fecha inicio</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" require>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fechaVencimiento" class="col-sm-4 col-form-label">Fecha termino</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="fechaVencimiento" name="fechaVencimiento" require>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="task-add-members" role="tabpanel" aria-labelledby="task-add-members-tab">
                            <div class="form-group-users filter-list-1533934830272">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-1" checked="">
                                    <label class="custom-control-label" for="task-user-1">
                                        <div class="d-flex align-items-center">
                                            <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Claire Connors</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-2" checked="">
                                    <label class="custom-control-label" for="task-user-2">
                                        <div class="d-flex align-items-center">
                                            <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Marcus Simmons</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-3" checked="">
                                    <label class="custom-control-label" for="task-user-3">
                                        <div class="d-flex align-items-center">
                                            <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Peggy Brown</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-4" checked="">
                                    <label class="custom-control-label" for="task-user-4">
                                        <div class="d-flex align-items-center">
                                            <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Harry Xai</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-5">
                                    <label class="custom-control-label" for="task-user-5">
                                        <div class="d-flex align-items-center">
                                            <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Sally Harper</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-6">
                                    <label class="custom-control-label" for="task-user-6">
                                        <div class="d-flex align-items-center">
                                            <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Ravi Singh</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-7">
                                    <label class="custom-control-label" for="task-user-7">
                                        <div class="d-flex align-items-center">
                                            <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Kristina Van Der Stroem</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-8">
                                    <label class="custom-control-label" for="task-user-8">
                                        <div class="d-flex align-items-center">
                                            <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">David Whittaker</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-9">
                                    <label class="custom-control-label" for="task-user-9">
                                        <div class="d-flex align-items-center">
                                            <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Kerri-Anne Banks</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-10">
                                    <label class="custom-control-label" for="task-user-10">
                                        <div class="d-flex align-items-center">
                                            <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Masimba Sibanda</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-11">
                                    <label class="custom-control-label" for="task-user-11">
                                        <div class="d-flex align-items-center">
                                            <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Krishna Bajaj</span>
                                        </div>
                                    </label>
                                </div><div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-user-12">
                                    <label class="custom-control-label" for="task-user-12">
                                        <div class="d-flex align-items-center">
                                            <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2">
                                            <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Kenny Tran</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Crear nuevo proyecto</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal documentos del proyecto seleccionado -->
<div class="modal fade" id="documentosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Documentos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group lista-documentos">
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection