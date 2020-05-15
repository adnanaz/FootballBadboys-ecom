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
                                <a href="{{ route('admin.export_excel') }}" class="btn btn-outline-info">Excel</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Order Product</th>
                                            <th>Phone/WA</th>
                                            <th>Email</th>
                                            <th>Provinsi</th>
                                            <th>Kota/Kabupaten</th>
                                            <th>Address</th>
                                            <th>Kode Pos</th>
                                            <th>Payment Method</th>
                                            <th>Sub Total</th>
                                            <th>Total Harga</th>
                                            <th>Ordered</th>
                                            <th>Dikirim</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            
                                            <tr class="">
                                                <td>{{ $order->name }}</td>
                                                <td>
                                                    <ul>
                                                        @foreach ($order->products as $item)
                                                        <li>
                                                        <ol style="list-style:number; list-style-type: number;">
                                                            <li style="list-style-type: circle;  list-style-position: inside;" >kode : <span class="font-weight-bold"> {{ $item->kode_product }}</span></li>
                                                            <li style="list-style-type: circle;  list-style-position: inside;" >product: <span class="font-weight-bold"> {{ $item->name }}</span></li>
                                                            <li style="list-style-type: circle;  list-style-position: inside;" >size : <span class="font-weight-bold"> {{ $item->pivot->size }}</span></li>
                                                            <li style="list-style-type: circle;  list-style-position: inside;" >color : <span class="font-weight-bold"> {{ $item->pivot->color }}</span></li>
                                                            <li style="list-style-type: circle;  list-style-position: inside;" >qty : <span class="font-weight-bold"> {{ $item->pivot->quantity }}</span></li>
                                                        </ol>
                                                        <hr style="border: 1px solid #707070;">
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->province }}</td>
                                                <td>{{ $order->city }}</td>
                                                <td>{{ $order->address }}</td>
                                                <td>{{ $order->kodepos }}</td>
                                                <td>{{ $order->payment_method }}</td>
                                                <td>{{ format_uang($order->subtotal) }}</td>
                                                <td>{{ format_uang($order->total_harga) }}</td>
                                                <td>{{$order->created_at->format("F j, Y, g:i a")}}</td>
                                                <td>
                                                    <form action="{{ route('order.dikirim', $order) }}" method="post">
                                                        {{ csrf_field() }}
                                                        <?php if($order->shipped == 0){ echo "<button type='submit' class='btn btn-warning btn-sm'>No</button>"; }else{echo "<button type='submit' class='btn btn-success btn-sm'>Yes</button>";}?>
                                                    </form>
                                                </td>
                                                <td><a href="{{ route('order.delete', $order) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            {{ $orders->links() }}
                            <!-- /.card-body -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

@endsection