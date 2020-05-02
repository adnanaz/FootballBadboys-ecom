@extends('layout.admin')

@section('title','Order')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <span class="msg">Order Page</span>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Order</a></li>
                                <li class="breadcrumb-item active">Data Order</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title">Halo Admin, ini hasil penjualanmu</span>
                            </div>

                            <div class="print">
                                <button class="btn btn-outline-info">Copy</button>
                                <button class="btn btn-outline-info">CSV</button>
                                <button class="btn btn-outline-info">Excell</button>
                                <button class="btn btn-outline-info">PDF</button>
                                <button class="btn btn-outline-info">Print</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Order Product</th>
                                            <th>Price</th>
                                            <th>Address</th>
                                            <th>City</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">120000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Adnan Aziz D</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl Kadisobo Trimulyo Sleman</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>
                                        <tr>
                                            <td>Arfian Dimas A P</td>
                                            <td>
                                                <ul>
                                                    <li>T-Shirt</li>
                                                    <li>Hoodie</li>
                                                    <li>Jacket Man</li>
                                                </ul>
                                            </td>
                                            <td>
                                                Rp. <span class="Value">150000</span>
                                            </td>
                                            <td>Jl adoh omahe Kulon Progo</td>
                                            <td>Yogyakarta Ina</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Order Product</th>
                                            <th>Price</th>
                                            <th>Address</th>
                                            <th>City</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

@endsection