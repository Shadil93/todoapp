@extends('layout.index')
@section('content')

<div class="container">
    <div class="row">
        @if(session()->has('success'))

        <div style="text-align:  center; margin-top:20px; " class="alert alert-success col-md-12">
            <strong> {{session()->get('success') }}</strong>
        </div>

        @endif
        <div class="col-3">

        </div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">

  <div class="card-body">
  <form action="{{ route('do_register')}}" method="post">
         @csrf

         <label>Task</label>
         <input type="text" name="task" class="form-control" >

         <label>date time</label>
         <input type="date" name="date" class="form-control" >

         <label>status</label>
         <input type="text" name="status" value="pending...." class="form-control" >
         <br>

         <button type="submit" class="btn btn-success" >submit</button>
     </form>
 
  </div>
</div>

      
        </div>
    </div>
</div>

    

@endsection