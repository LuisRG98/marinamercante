@extends('layout')
@section('content')

<style type="text/css">
#regiration_form fieldset:not(:first-of-type) {
  display: none;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<div class="container">
<div style="overflow-x:auto;" class="mx-auto mb-3">
  <h1>Checklist</h1>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
    </div>
  </div>

  <form class="bg-white shadow rounded py-3 px-4" id="regiration_form"  action="{{route('checklists.store')}}"  method="post">
    @csrf


    @if($emb->clase_tipo=='DRAGA')
      @include('checklists.draga')
    @elseif($emb->clase_tipo=='BOTE/DESLIZADOR')
      @include('checklists.emenor')
    @elseif($emb->clase_tipo=='BARCAZA CERRADA')
      @include('checklists.bmadera')
    @elseif($emb->clase_tipo=='BARCAZA ABIERTA')
      @include('checklists.bmadera')
    @elseif($emb->clase_tipo=='BOTE/DESLIZADOR')
      @include('checklists.emenor')
    @elseif($emb->clase_tipo=='LANCHA')
      @include('checklists.emenor')
    @elseif($emb->clase_tipo=='MOTONAVE')
      @include('checklists.emenor')
    @endif

    <input type="hidden" name="emb_id" id="emb_id" value="{{$emb->id}}">
    <input type="hidden" name="clase_tipo" id="clase_tipo" value="{{$emb->clase_tipo}}">


  </form>
</div>
</div>
@include('checklists._script')
@endsection
