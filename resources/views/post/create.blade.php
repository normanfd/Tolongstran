@extends('layouts.app')
@section('content')
<div class="container">
    <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control{{ $errors->has('nbarang') ? ' is-invalid' : '' }}" name="nbarang" value="{{ old('nbarang') }}" required autofocus>
            <div class="col-md-6">
                @if ($errors->has('nbarang'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('nbarang') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Deskripsi Barang</label>
            <textarea name="deskripsi" rows="5" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}"  value="{{ old('nbarang') }}" required autofocus></textarea>
            <div class="col-md-6">
                @if ($errors->has('deskripsi'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('deskripsi') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="">Harga Barang</label>
            <input type="integer" name="hbarang" class="form-control{{ $errors->has('hbarang') ? ' is-invalid' : '' }}"  value="{{ old('hbarang') }}" required autofocus>
            <div class="col-md-6">
                @if ($errors->has('hbarang'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('hbarang') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="">Jumlah Barang</label>
            <input type="integer" name="jbarang" class="form-control{{ $errors->has('jbarang') ? ' is-invalid' : '' }}"  value="{{ old('jbarang') }}" required autofocus>
            <div class="col-md-6">
                @if ($errors->has('jbarang'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('jbarang') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        
        <div class="form-group">
            <div class="input-field">
                <input type="file" name="gambar" class="validate{{ $errors->has('gambar') ? ' is-invalid' : '' }}"  value="{{ old('gambar') }}" required autofocus >
            </div>
        </div>
        <div class="form-group">
           <input type='submit' class='btn btn-primary' value="save">
        </div>
    </form>
</div> 
@endsection