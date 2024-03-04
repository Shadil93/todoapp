@extends('layout.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
  <div class="card-body">
         <p>task:{{  $data->task }}</p>
         <h5> date: {{ $data->date }}</h5>
         <p> <b>status:<b> {{ $data->status }} </p>
  </div>
</div>
                    
                

        </div>
    </div>
</div>



@endsection