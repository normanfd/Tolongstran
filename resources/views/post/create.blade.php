@extends('layouts.img')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Post Barang
        </div>
        <div class="card-body">
        <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                
                <div class="form-group has-feedback{{ $errors->has('nbarang') ? ' is-invalid' : '' }}">
                    <label for="">Nama Barang</label>
                    <input type="text" class="form-control" name="nbarang" value="{{ old('nbarang') }}" required autofocus>
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
                <div class="form-group has-feedback{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}">
                    <label for="">Deskripsi Barang</label>
                    <textarea name="deskripsi" rows="5" class="form-control" required autofocus>{{ old('deskripsi') }}</textarea>
                    <div class="col-md-6">
                        @if ($errors->has('deskripsi'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Harga Sewa Barang</label>
                    <input type="number" name="hbarang" class="form-control has-feedback{{ $errors->has('hbarang') ? ' is-invalid' : '' }}"  value="{{ old('hbarang') }}" required autofocus>
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
                    <input type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="jbarang" class="form-control{{ $errors->has('jbarang') ? ' is-invalid' : '' }}"  value="{{ old('jbarang') }}" required autofocus>
                    <div class="col-md-6">
                        @if ($errors->has('jbarang'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('jbarang') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <!-- autofokusnya masih bermasalah -->
                <div class="form-group">
                    <div class="input-field">
                        <input type="file" name="gambar" class="validate{{ $errors->has('gambar') ? ' is-invalid' : '' }}"  value="{{ old('gambar') }}" required autofocus >
                    </div>
                </div>
                <div class="form-group">
                <button type="submit"  class="btn btn-outline-success" value="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection
