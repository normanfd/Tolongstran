@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-header">
      Profil
    </div>
    <div class="card-body">
      <form action="" method="post" > 
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email"  value="{{AUth::user()->email}}" readonly style="background-color:#efefef">
        </div>
          
        <div class="form-group">
            <label for="pwd">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama"  value="{{AUth::user()->name}}" readonly style="background-color:#efefef">
          </div>
          <div class="form-group">
            <label for="pwd">Alamat:</label>
            <input type="text" class="form-control" id="alamat" value="">
          </div>
          
        <div class="form-group">
            <label for="pwd">Nomor rekening:</label>
            <input type="text" class="form-control" id="rek" value="">
          </div>
        
          <div class="form-group">
            <label for="pwd">Nomor telepon:</label>
            <input type="text" class="form-control" id="hp" value="">
            <br>
        </div>
          <button type="submit" class="btn btn-default" value="Update">Submit</button>
      </form>  
    </div>
  </div>
</div>
@endsection