@extends('layouts.app')
@section('content')
<div class="col-lg-9">
   <div class="text-center d-flex align-items-center justify-content-center pt-5">
      <div>
         <img alt="Empty State" src="assets/img/empty-state.svg" class="w-50" style="opacity:.8" />
         <span class="h3 d-block mt-3">Content Here</span>
         <p>
            Add your page content here
         </p>
         <hr>
         <div class="">
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
               </div>
               @endif
               You are logged in!
            </div>         
         <a class="btn btn-primary btn-sm" href="{{ route('proyectos') }}">Ir a la pagina proyectos</a>
      </div>
   </div>
</div>
@endsection