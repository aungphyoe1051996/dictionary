@extends('layouts.frontendLayout')
@section('content')

@include('frontend.header')

<div class="container-fluid">

<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
  <form>
  <div class="form-group">
    <label class="form-control" for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <select class="form-control">
    <option>Default select</option>
  </select>
  <div class="form-group">
    <label class="form-control" for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
</form>

  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>



</div>


@include ('frontend.footer')
@endsection