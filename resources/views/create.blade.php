@extends('layouts.app')

@section('content')
  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$error}}</strong>       
      </div>
    @endforeach
  @endif
 <div class="panel panel-default">
  <div class="panel panel-heading">
   <h3 class="panel-title">Add New Student</h3>
  </div>
  <div class="panel-body">
   <form class="form-horizontal" action="{{route('store')}}" method="POST">
    {{csrf_field()}}
    <fieldset>

      <div class="form-group">
        <label for="firstName" class="col-md-2 control-label">First Name</label>
        <div class="col-md-10">
          <input class="form-control" name="firstname" id="firstName" type="text">
        </div>
      </div>

      <div class="form-group">
        <label for="lastName" class="col-md-2 control-label">Last Name</label>
        <div class="col-md-10">
          <input class="form-control" name="lastname" id="lastName" type="text">
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-md-2 control-label">Email</label>
        <div class="col-md-10">
          <input class="form-control" name="email" id="email" type="email">
        </div>
      </div>

      <div class="form-group">
        <label for="phone" class="col-md-2 control-label">Phone Number</label>
        <div class="col-md-10">
          <input class="form-control" name="phone" id="phone" type="text">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-10 col-md-offset-2">
          <button type="button" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

     </fieldset>
   </form>
  </div>
 </div>
@endsection
