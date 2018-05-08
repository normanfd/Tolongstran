@extends('layouts.app')

@section('content')
<div class="prod"><h2 align="center">My Account</h2></div>

<form action="" method="post" >

  <div class="form-group col-md-4">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email"  value="{{AUth::user()->email}}" readonly style="background-color:#efefef">
  </div>
  <div class="form-group col-md-4">
    <label for="pwd">Nama:</label>
    <input type="text" class="form-control" id="nama"  value="{{AUth::user()->name}}" readonly style="background-color:#efefef">
  </div>
  <div class="form-group col-md-4">
    <label for="pwd">Alamat:</label>
    <input type="text" class="form-control" id="alamat" value="">
  </div>
  <div class="form-group col-md-4">
    <label for="pwd">NO.Rekening:</label>
    <input type="text" class="form-control" id="rek" value="">
  </div>
  <div class="form-group col-md-4">
    <label for="pwd">NO.Handphone:</label>
    <input type="text" class="form-control" id="hp" value="">
    <br>
  <button type="submit" class="btn btn-default" value="Update">Submit</button>
</form> 




@endsection
