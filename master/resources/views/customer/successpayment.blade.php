@extends('layout.customer')

@section('title','Thank for Payment - FootballBadboys')

@section('content')

<!-- modal 2  -->
<div class="mt-5 mb-5 p-5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Pemberitahuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="lead">Terimakasih telah membeli catalog kami.</span><br><br>
                <span class="lead"> Harap tunggu pesan dari admin football badboys beberapa saat lagi. <br><br>
                    More
                    info
                    hubungi kami
                    <span class="text-danger"><a href="https://wa.me/628176741908">628176741908</a></span><br><br>
                <span class="small"><small> Hati-hati penipuan megatas-namakan FootballBadboys nomor
                        Footballbadboys
                        resmi
                        hanya pada nomor tersebut. Terimakasih</small></span>
            </div>
            <div class="modal-footer">
                <a href="https://wa.me/628176741908" class="btn btn-primary">Konfirmasi Pembayaran</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal 2 -->

@endsection