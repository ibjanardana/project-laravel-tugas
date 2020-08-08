@extends('master')
@section('title', 'Pertanyaan Details')
@section('breadcumb', 'Pertanyaan Details')
@section('pertanyaan-details')
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Judul Pertanyaan</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <a href="{{url('/pertanyaan/edit')}}" class="btn btn-primary">Ubah Pertanyaan</a>
</form>
@endsection
