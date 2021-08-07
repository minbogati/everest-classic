@extends('backend.master.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Designs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Designs</li>
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
                @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Image</th>
                            <th scope="col">Design Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Butta</th>
                            <th scope="col">Items</th>
                            <th scope="col">Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key => $item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td><img src="{{'images/items/'.$item->image}}" alt="" style="height:90px; width:90px" responsive></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->company}}</td>
                                <td>{{$item->butta}}</td>
                                <td>{!!$item->details!!}</td>
                                <td>
                                    <a href="{{url('/items/'.$item->id.'/edit')}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                    <form action="{{ url('/items',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" title="Delete" type="submit"
                                    onclick="return confirm('Are you sure! You Want To Delete?')"><i
                                    class="fa fa-trash"></i></button>
                        </form>
                                </td>
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
