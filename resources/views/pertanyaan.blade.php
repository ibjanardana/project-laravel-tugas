@extends('master')
@section('title', 'Pertanyaan')
@section('breadcumb', 'Pertanyaan')
@section('pertanyaan')
<div class="col-md-4">
    <a href="{{url('pertanyaan/create')}}" class="btn btn-primary mb-3" data-toggle="modal" data-target="#buatModal">+ Buat Pertanyaan</a>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('/pertanyaan/details')}}" class="card-link">Details</a>
                <a href="#" class="card-link">Hapus</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="buatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul Pertanyaan</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Isi Judul Pertanyaan..." required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi Pertanyaan Disini...." required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
