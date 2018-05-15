@extends('layouts.app')

@section('content')
<style>
body{margin-top:20px;}	
</style>


<div class="container bootstrap snippet">
    
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="gambar" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Data dibawah <strong>wajib</strong> diisi.
        </div>
        <h3>Profil</h3>
        
        <form class="form-horizontal" role="form" method="POST" action="">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" type="text" value="{{AUth::user()->name}}" readonly style="background-color:#efefef">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="{{AUth::user()->email}}" readonly style="background-color:#efefef">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Alamat:</label>
            <div class="col-lg-8">
              <input class="form-control" name="alamat" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.HP:</label>
            <div class="col-lg-8">
              <input class="form-control" name="hp" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">No.Rekening:</label>
            <div class="col-lg-8">
              <input class="form-control" name="rek" type="text" value="">
            </div>
          </div>
          <button type="submit"  class="btn btn-success" value="save">Submit</button>
        </form>
      </div>
  </div>
</div>
<hr>
@endsection