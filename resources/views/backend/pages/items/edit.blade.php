@extends('backend.master.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Interior Design</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Design</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{url('/items')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$items->name}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company Name</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name" value="{{$items->company}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Fitting Types</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type" value="{{$items->type}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Butta Types</label>
                            <input type="text" class="form-control" id="butta" name="butta" aria-describedby="emailHelp" placeholder="Enter Still Butta Types" value="{{$items->butta}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Machinery</label>
                            <input type="text" class="form-control" id="machinery"  name="machinery" placeholder="Enter Machinery" value="{{$items->macinery}}">
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="details">Item Included In this design</label>
                                <textarea name="details" id="details" class="ckeditor form-control">value="{{$items->details}}"</textarea>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                       <div class="col">
                           <div class="form-group">
                               <label for="image">Image</label>
                               <input type="file" name="image" id="image" value="{{$items->image}}">
                               <p>Old Image <img src="{{asset('images/items/'.$items->image)}}" alt="" style="height:90px; width:90px"></p>
                           </div>
                       </div>
                   </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button> 
                </form>
            </div>
        </section>
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
