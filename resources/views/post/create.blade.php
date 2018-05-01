@extends('layouts.app')
@section('content')
<div class="container">
    <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control" name="nbarang">
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
            <textarea name="deskripsi" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Harga Barang</label>
            <input type="integer" class="form-control" name="hbarang">
        </div>
        <div class="form-group">
            <label for="">Jumlah Barang</label>
            <input type="integer" class="form-control" name="jbarang">
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <input type="file" name="gambar" class="validate"/ >
            </div>
        </div>
        
        <div class="form-group">
            <input type='submit' class='btn btn-primary' value="save">
        </div>
    
    </form>
</div> 
@endsection