@extends('backend.master.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Inquiries</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Description</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $key => $service)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->desc}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection