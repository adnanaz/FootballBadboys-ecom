@extends('layout.admin')

@section('title','Add Product')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- teks bebas -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inventory</a></li>
                                <li class="breadcrumb-item"><a href="#">All Product</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <form action="{{ route('addproduct.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <!-- formnya -->
                            <div class="col-6 pr-5">
                                <div class="form-group">
                                    <label for="kode_product">Kode Produk</label>
                                    <input type="text" class="form-control" name="kode_product" id="kode_product" aria-describedby="id Help">
                                    <small id="idHelp" class="form-text text-muted">Merupakan kode produk barang
                                        pastikan unik dan sama..</small>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="id Help">
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Kategori</label>
                                    <select id="inputState" class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="size form-group">
                                    <span class="jdl">Size</span>

                                    <ul class="size__ul">
                                        @foreach ($sizes as $size)
                                            <li class="size__li">
                                                <input type="checkbox" name="size[]" class="size__radio" for="{{ $size->name }}" value="{{ $size->id }}">
                                                <label class="" for="{{ $size->name }}">
                                                    {{ $size->name }}
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" id="price"
                                        aria-describedby="price Help">
                                </div>

                                <div class="form-group">
                                    <label for="price_discount">Price Discount</label>
                                    <input type="number" class="form-control" name="price_discount" id="price_discount"
                                        aria-describedby="diskon Help">
                                    <small id="diskonHelp" class="form-text text-muted">Isi apabila anda ingin product ini
                                        diskon.</small>
                                </div>


                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control" aria-label="With textarea"
                                        aria-describedby="desc_help"></textarea>
                                    <small id="desc_help" class="form-text text-muted">Isi Deskripsi produk..</small>
                                </div>

                                <div class="form-group">
                                    <label for="material">Material</label>
                                    <textarea id="material" name="material" class="form-control" aria-label="With textarea"
                                        aria-describedby="mat_help"></textarea>
                                    <small id="mat_help" class="form-text text-muted">Isi Deskripsi material..</small>
                                </div>

                                <div class="form-group">
                                    <label for="link_video">Link Video</label>
                                    <input type="text" class="form-control" name="link_video" id="link_video" aria-describedby="id Help">
                                    <small id="idHelp" class="form-text text-muted">Merupakan link vedeo product...</small>
                                </div>

                                <div class="size__form form-group">
                                    <span class="jdl">Pilih Warna</span>
                                    <hr>
                                    <ul class="size__ul">

                                        @foreach ($colors as $color)
                                            <li class="size__li">
                                                <input type="checkbox" name="color[]" class="size__radio2" id="input1" for="{{ $color->name }}"
                                                    value="{{ $color->id }}">
                                                <label class="btn btn-outline-dark warna" for="{{ $color->name }}" style="background-color: {{ $color->name_html }}">
                                                </label>
                                            </li>
                                        @endforeach

                                        <span id="tombol_form">warna : <span id="hasil"></span> </span>
                                    </ul>
                                </div>
                                <!-- end formnya -->

                            </div>


                            <div class="col-6">
                                <input type="file" id="uploadFile" name="uploadFile[]" multiple/>

                                <br/>
                                <div id="image_preview"></div>
                                <button type="submit" class="btn btn-primary w-100">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    <script>
        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'material' );
        // uplaod image function
        function readURL() {
            var $input = $(this);
            var $newinput = $(this).parent().parent().parent().find('.portimg ');
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    reset($newinput.next('.delbtn'), true);
                    $newinput.attr('src', e.target.result).show();
                    $newinput.after('<input type="button" class="delbtn removebtn" value="remove">');
                }
                reader.readAsDataURL(this.files[0]);
            }
        }
        $(".fileUpload").change(readURL);
        $("form").on('click', '.delbtn', function (e) {
            reset($(this));
        });

        function reset(elm, prserveFileName) {
            if (elm && elm.length > 0) {
                var $input = elm;
                $input.prev('.portimg').attr('src', '').hide();
                if (!prserveFileName) {
                    $($input).parent().parent().parent().find('input.fileUpload ').val("");
                    //input.fileUpload and input#uploadre both need to empty values for particular div
                }
                elm.remove();
            }
        }



        $("#uploadFile").change(function(){
        $('#image_preview').html("");
        var total_file=document.getElementById("uploadFile").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<img style='max-width:400px;' src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
            }
        });

        $('form').ajaxForm(function() 
        {
            alert("Uploaded SuccessFully");
        }); 
    </script>

@endsection