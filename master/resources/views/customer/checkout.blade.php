@extends('layout.customer')

@section('title','Checkout - FootballBadboys')

@section('content')

<div class="container">
    <section class="checkout">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Checkout</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment</li>
            </ol>
        </nav>
        <!--END Breadcrumb -->
        <ul>
            <li>
                @include('layout.partials._alert')
            </li>
        </ul>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h4>FORM PEMBAYARAN</h4>
        <div class="row">
            <div class="col-xl-8">
                <div class="border shadow payment__forms">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputName">
                        </div>
                        <div class="form-group">
                            <label for="noWa">No WhatsApp</label>
                            <input type="number" class="form-control" name="phone" id="noWa" aria-describedby="numberHelp" required>
                            <small id="numberHelp" class="form-text text-muted">Tuliskan dengan lengkap
                                Digunakan untuk konfirmasi pembayaran</small>
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" name="province" id="province" required>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->name }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota/Kabupaten</label>
                            <select class="form-control" name="city" id="city" required>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" name="address" id="address"
                                aria-describedby="addressHelp" required></textarea>
                            <small id="addressHelp" class="form-text text-muted">Tuliskan dengan lengkap
                                digunakan sebagai pengiriman paket anda.</small>
                        </div>
                        <div class="form-group">
                            <label for="kodepos">Kode Pos</label>
                            <input type="number" class="form-control" name="kodepos" id="kodepos" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Metode Pembayaran</label>
                            <select class="form-control" name="payment_method" id="exampleFormControlSelect1">
                                <option>Transfer BCA - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer BTN - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer BRI - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer Mandiri - 012345678 a/n Adnan Aziz</option>
                                <option>Transfer Bank DIY - 012345678 a/n Adnan Aziz</option>
                            </select>
                        </div>
                        <div class="form-group form-check ">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1" required>Dengan ini saya
                                menyetujui <a href="#"> syarat</a> dan <a href="#">ketentuan</a>
                                FootballBadboys</label>
                        </div>
                        <button type="submit" class="btn btn-primary bg-dark w-100">SUBMIT FORM</button>
                    </form>
                </div>

                <div class="info border shadow">
                    <h4 class="col-xlor">INFORMASI</h4>
                    <ul>
                        <li>
                            <p>- Sistem pembayaran dilakukan melalui via WhatsApp
                            </p>
                        </li>
                        <li>
                            <p>-Harga tersebut belum termasuk harga ongkos kirim</p>
                        </li>
                        <li>
                            <p>- Detail ongkos kirim akan dikirim melalui via WhatsApp dan
                                dapat dicek langsung melalui website penyedia layanan jasa pengiriman
                            </p>
                        </li>
                        <li>
                            <p>- Informasi lebih lanjut hubungi <a href="#"> customer Service</a> Football
                                Badboys
                            </p>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-xl-4 ">
                <aside class="preorder border shadow">
                    <div class="preorder__first">
                        <span><span class="number__value"> {{ Cart::count() }}</span> Item</span>
                        <span><a href="{{ route('cart.index') }}">Edit</a></span>
                    </div>

                    <div class="preorder__product-preview">

                        @foreach (Cart::content() as $item)
                        <div class="row space">
                            <div class="col-xl-4 preorder__parent">
                                <img class="preorder__img" src="{{ asset('storage/products/'. json_decode($item->model->image)[0]) }}"
                                    alt="product preview image">
                            </div>
                            <div class="col-xl-8 product__text-payment">
                                <span>{{ $item->model->name }}</span>
                                <span>{{ $item->options->color }}</span>
                                <span>{{ $item->options->size }}</span>
                                <span>{{ $item->qty }}</span>
                            </div>

                        </div>
                        @endforeach

                        <div class="flex-event">
                            <div class="pricing">
                                <span>Subtotal</span>
                                <strong><span>Total</span></strong>
                            </div>

                            <div class="value__pricing">
                                <span>Rp. <span class="value">{{ format_uang(Cart::subtotal()) }}</span></span>
                                <strong><span>Rp. <span class="value">{{ format_uang(Cart::total()) }}</span></span></strong>
                            </div>
                        </div>
                    </div>


                </aside>
            </div>
        </div>
    </section>
</div>

{{-- <script type="text/javascript">
    $('#province').change(function(){
        var sid = $(this).val();
        if(sid){
        $.ajax({
            type:"get",
            url:"/getCities/"+sid,
            success:function(res)
            {       
                if(res)
                {
                    $("#city").empty();
                    $("#city").append('<option>Pilih Kota/Kabupaten</option>');
                    $.each(res,function(key,value){
                        $("#city").append('<option value="'+key+'">'+value+'</option>');
                    });
                }
            }

        });
        }
    }); 
</script> --}}

@endsection