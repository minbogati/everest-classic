@extends('backend.master.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Items</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Items</a></li>
                            <li class="breadcrumb-item active">Add</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{url('/items')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Fitting Types</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Butta Types</label>
                            <input type="text" class="form-control" id="butta" name="butta" aria-describedby="emailHelp" placeholder="Enter Still Butta Types">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Machinery</label>
                            <input type="text" class="form-control" id="machinery"  name="machinery" placeholder="Enter Machinery">
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="details">Detail's</label>
                                <textarea name="details" id="details" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col">
                           <div class="form-group">
                               <label for="image">Image</label>
                               <input type="file" name="image" id="image">
                           </div>
                       </div>
                   </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </section>
    </div>
@endsection
