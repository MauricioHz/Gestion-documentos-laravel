@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-around mt-3 mt-lg-3">
      <div class="col-md-9 col-lg-8">
         <h3 class="text-center">
            <p>
               <code><strong>{{ $documento->nombre .'.'. $documento->extencion }}</strong></code>
            </p>
         </h3>
      </div>
   </div>
   <div class="row">
      <div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1">
         <div class="d-flex align-items-center">
            <ul class="avatars">
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Claire Connors" aria-describedby="tooltip75138">
                  <img alt="Claire Connors" class="avatar" src="{{ URL::asset('assets/img/avatar-female-1.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Marcus Simmons">
                  <img alt="Marcus Simmons" class="avatar" src="{{ URL::asset('assets/img/avatar-male-1.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Peggy Brown">
                  <img alt="Peggy Brown" class="avatar" src="{{ URL::asset('assets/img/avatar-female-2.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="Harry Xai">
                  <img alt="Harry Xai" class="avatar" src="{{ URL::asset('assets/img/avatar-male-2.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sally Harper">
                  <img alt="Sally Harper" class="avatar" src="{{ URL::asset('assets/img/avatar-female-3.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ravi Singh">
                  <img alt="Ravi Singh" class="avatar" src="{{ URL::asset('assets/img/avatar-male-3.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Kristina Van Der Stroem">
                  <img alt="Kristina Van Der Stroem" class="avatar" src="{{ URL::asset('assets/img/avatar-female-4.jpg') }}">
                  </a>
               </li>
               <li>
                  <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="David Whittaker">
                  <img alt="David Whittaker" class="avatar" src="{{ URL::asset('assets/img/avatar-male-4.jpg') }}">
                  </a>
               </li>
            </ul>
            <button class="btn btn-round" data-toggle="modal" data-target="#user-manage-modal">
            <i class="material-icons">add</i>
            </button>
         </div>
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1">
         <!-- menu lista -->
         <ul class="nav nav-tabs nav-fill">
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#versiones" role="tab" aria-controls="versiones" aria-selected="false">Versiones</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active show" data-toggle="tab" href="#tareas" role="tab" aria-controls="tareas" aria-selected="true">Tareas</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#actividad" role="tab" aria-controls="actividad" aria-selected="false">Actividad</a>
            </li>
         </ul>
         <!-- fin menu lista -->
         <!-- contenido -->
         <div class="tab-content">
            <!-- tab -->
            <div class="tab-pane fade" id="versiones" role="tabpanel" aria-labelledby="versiones-tab">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <div id="parametros">
                              <h5 class="card-title"></h5>
                              <div class="content-list" data-filter-list="checklist">
                                 <div class="row content-list-head">
                                    <div class="col-auto">
                                    </div>
                                    <form class="col-md-auto">
                                       <div class="input-group input-group-round">
                                          <div class="input-group-prepend">
                                             <span class="input-group-text">
                                             <i class="material-icons">filter_list</i>
                                             </span>
                                          </div>
                                          <input type="search" class="form-control search" placeholder="Filtro versiones" aria-label="Filter checklist" aria-describedby="filter-checklist">
                                       </div>
                                    </form>
                                 </div>
                                 <!--end of content list head-->
                                 <div class="content-list-body">
                                    <ul class="list-group list">
                                       <li class="list-group-item">
                                          <div class="media align-items-center">
                                             <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                   <span class="parametro"> Dapibus verde facilisis i</span>
                                                </div>
                                                <div class="dropdown">
                                                   <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="material-icons">more_vert</i>
                                                   </button>
                                                   <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#">Download</a>
                                                      <a class="dropdown-item" href="#">Share</a>
                                                      <div class="dropdown-divider"></div>
                                                      <a class="dropdown-item text-danger" href="#">Delete</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="list-group-item">
                                          <span class="parametro">Dapibus rojo ac facilisis i</span>
                                       </li>
                                       <li class="list-group-item">
                                          <span class="parametro">Morbi amarillo leo risu</span>
                                       </li>
                                       <li class="list-group-item">
                                          <span class="parametro">Porta claro ac consectetur a</span>
                                       </li>
                                       <li class="list-group-item">
                                          <span class="parametro">Vestibulum at ero</span>
                                       </li>
                                    </ul>
                                 </div>
                                 <!--end of content list body-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tab -->
            <div class="tab-pane fade show active" id="tareas" role="tabpanel" aria-labelledby="tareas-tab">
               <div class="content-list">
                  <div id="checks">
                     <div class="row content-list-head">
                        <div class="col-auto">
                        </div>
                        <form class="col-md-auto">
                           <div class="input-group input-group-round">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">filter_list</i>
                                 </span>
                              </div>
                              <input type="search" class="form-control search" placeholder="Filtro versiones" aria-label="Filter checklist" aria-describedby="filter-checklist">
                           </div>
                        </form>
                     </div>
                     <div class="content-list-body">
                        <form class="checklist list" tabindex="0">
                           <div class="xxx">
                              <div class="row" tabindex="0">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-1" checked="">
                                       <label class="custom-control-label" for="checklist-item-1"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Create boards in Matboard" data-filter-by="value" style="width: 205px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                              <div class="row" tabindex="0" style="">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-3" checked="">
                                       <label class="custom-control-label" for="checklist-item-3"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Identify three distinct aesthetic styles for boards" data-filter-by="value" style="width: 369px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                              <div class="row" tabindex="0" style="">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-2" checked="">
                                       <label class="custom-control-label" for="checklist-item-2"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Invite team to boards" data-filter-by="value" style="width: 163px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                              <div class="row" tabindex="0">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-4">
                                       <label class="custom-control-label" for="checklist-item-4"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Add aesthetic style descriptions as notes" data-filter-by="value" style="width: 313px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                              <div class="row" tabindex="0">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-5">
                                       <label class="custom-control-label" for="checklist-item-5"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Assemble boards using inspiration from Dribbble, Land Book, Nicely Done etc." data-filter-by="value" style="width: 589px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                              <div class="row" tabindex="0">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-6">
                                       <label class="custom-control-label" for="checklist-item-6"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Gather feedback from project team" data-filter-by="value" style="width: 268px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                              <div class="row" tabindex="0">
                                 <div class="form-group col">
                                    <span class="checklist-reorder">
                                    <i class="material-icons">reorder</i>
                                    </span>
                                    <div class="custom-control custom-checkbox col">
                                       <input type="checkbox" class="custom-control-input" id="checklist-item-7">
                                       <label class="custom-control-label" for="checklist-item-7"></label>
                                       <div>
                                          <input type="text" placeholder="Checklist item" value="Invite clients to board before next concept meeting" data-filter-by="value" style="width: 387px;" class="filter-check">
                                          <div class="checklist-strikethrough"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end of form group-->
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tab -->
            <div class="tab-pane fade" id="actividad" role="tabpanel" aria-labelledby="actividad-tab">
               <div class="row justify-content-center">
                  <div class="col-lg-9">
                     <div class="text-center d-flex align-items-center justify-content-center pt-5">
                        <div class="content-list">
                            <div id="actividad">
                            <div class="row content-list-head">
                                <div class="col-auto">
                                    <h3>Activity</h3>
                                </div>
                                <form class="col-md-auto">
                                    <div class="input-group input-group-round">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">filter_list</i>
                                        </span>
                                        </div>
                                        <input type="search" class="form-control search" placeholder="Filter activity" aria-label="Filter activity" aria-describedby="filter-tasks">
                                    </div>
                                </form>
                            </div>
                            <!--end of content list head-->
                            <div class="xxx">
                                <div class="content-list-body list">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="1">
                                            <label class="custom-control-label" for="1"><span class="customCheck">Check verde this custom checkbox</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="2">
                                            <label class="custom-control-label" for="2"><span class="customCheck">Check rojo this custom checkbox</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="3">
                                            <label class="custom-control-label" for="3"><span class="customCheck">Check azul this custom checkbox</span></label>
                                        </div>                                                                
                                </div>
                            </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- fin contenido -->
         </div>
      </div>
   </div>
</div>
@endsection