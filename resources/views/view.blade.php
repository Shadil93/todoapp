@extends('layout.index')
@section('content')


<div class="conatiner">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-4">
            <form action="" method="POST">
                @csrf
            <table class="table table-danger table-bordered">
                <tr>
                    <th>task</th>
                    <th>date</th>
                    <th>status</th>
                    <th>mark as completed</th>
                   
                    <th colspan="2" style="text-align: center;">Action</th>
                </tr>
                 @foreach($data as $datas)
                <tr>
                    <td>{{ $datas->task}}</td>
                    <td>{{ $datas->date}}</td>
                    <td>{{ $datas->status}}</td>
                    <td>

                    @if($datas->status=="pending....")
                    <a href="{{ route('update',$datas->id) }}" class="btn btn-danger btn-sm">complete</a>
                   @else 
                   <a href="" class="btn btn-success btn-sm">completed</a>
                   @endif
                    </td>
                
                    <td><a href="{{ route('show',$datas->id)}}" class="btn btn-success">show</a></td>
                    <td><a href="{{ route('delete',$datas->id) }}" class="btn btn-danger">delete</a></td>
                </tr>
                </form>
                @endforeach
            </table>
        </div>
    </div>
</div>

<!-- <script>
        function changeCheckbox() {
            // Get the checkbox element
            var checkbox = document.getElementById('dynamicCheckbox');

            // Toggle the class to change the checkbox style
            checkbox.classList.toggle('checked-checkbox', checkbox.checked);
            checkbox.classList.toggle('unchecked-checkbox', !checkbox.checked);
        }
    </script> -->
@endsection