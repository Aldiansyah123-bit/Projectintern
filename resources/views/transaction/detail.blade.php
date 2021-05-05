@extends('layouts.backend')


@section('judul1')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
        <div class="col-sm-6">
        </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <!-- /.card-header -->

                @foreach ($transaction as $item)
                <div class="card-header">
                    <h2 class="card-title">Detail Transaction Number : {{$item->id}}</h2>
                    <div class="card-tools">
                        <a href="/transaction" type="button" class="btn btn-secondary btn-sm btn-flat">
                            <i class="fa fa-undo"></i>Back
                        </a>
                    </div>
                <!-- /.card-tools -->
                </div>

                <div class="card-body">
                    <div class="detail-info">
                        <div class="mt-2">
                            <div class="table-responsive mailbox-messages">
                                <div class="col-sm-4 invoice-col">
                                    <b>Number : {{$item->id}}</b>
                                        <address>
                                            Name            : {{$item->user->name}}<br>
                                            UMKM            : {{$item->umkm->name}}<br>
                                            Bumdes          : {{$item->bumdes->name}}<br>
                                            Invoice Number  : {{$item->invoice_number}}<br>
                                            Address         : {{$item->address}}<br>
                                            Total Proce     : {{$item->total_price}}<br>
                                            Discount        : {{$item->discount}}<br>
                                            Voucher         : {{$item->voucher}}<br>
                                            Noted           : {{$item->noted}}<br>
                                            Status          : {{$item->status}}<br>
                                        </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /.card-body -->
            </div>
         <!-- /.card -->
        </div>
    </div>
</div>
        <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
              });
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
              });
            });
        </script>


@endsection
