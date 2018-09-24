@extends('layouts.app')

@section('content')
  @if (session('successMsg'))
    <div class="alert alert-dismissable alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>Well done!</strong> {{session('successMsg')}}
    </div>
  @endif
    <h1>Crud App</h1>
    <table class="table table-striped table-hover table-bordered">
      <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th class="text-center">Action</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td class="text-center"><a href="{{route('edit', $student->id)}}" class="btn btn-raised btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
 </a> ||
  <form id="delete-form-{{$student->id}}" action="{{route('delete',$student->id)}}" method="POST" style="display:none;">
    {{csrf_field()}}
    {{method_field('delete')}}
  </form>
  <button onClick="if(confirm('Confirm deleting the student info?')){
    event.preventDefault();
    document.getElementById('delete-form-{{$student->id}}').submit();
  }else{
    event.preventDefault();
  }" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
</td>
          </tr>
        @endforeach

      </tbody>
    </table>
    {{$students->links()}}
@endsection
