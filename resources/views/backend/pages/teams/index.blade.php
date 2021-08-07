@extends('backend.master.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Teams</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Teams</li>
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
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Address</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $key => $team)
                            <tr>
                                <td>{{++$key}}</td>
                                <td><img src="{{'images/teams/'.$team->img}}" alt="" style="height:90px; width:90px" responsive></td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->position}}</td>
                                <td>{{$team->contact}}</td>
                                <td>{{$team->facebook}}</td>
                                <td>{{$team->address}}</td>

                                <td>
                                    <a href="{{url('/teams/'.$team->id.'/edit')}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                    <form action="{{ url('/teams',$team->id)}}" method="post">
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
