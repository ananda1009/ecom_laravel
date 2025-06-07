@extends('layouts.main')
@push('title')
<title>Login</title>
@endpush
@section('main-section')
<div class="container custome_login">
<div class="lor">
    <div class="col-sm-4 offset-sm-4">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>

@endsection