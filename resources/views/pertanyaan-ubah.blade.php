@extends('master')
@section('title', 'Ubah Pertanyaan')
@section('breadcumb', 'Ubah Pertanyaan')
@section('pertanyaan-ubah')
<div class="form-group">
    <label for="exampleFormControlInput1">Judul Pertanyaan</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="modalUbah">Ubah Pertanyaan</button>
</form>
@endsection
