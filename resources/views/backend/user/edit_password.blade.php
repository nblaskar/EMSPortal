@extends('admin.admin_master')
@section('admin')  
{{-- Edit Password Page Start --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
    <!-- Content Header (Page header) Start -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Change Password</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Password</li>
                            <li class="breadcrumb-item active" aria-current="page">Change</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Header (Page header) End -->

    <!-- User Adding Fort Start -->
    <section class="content">

        <!-- Basic Forms -->
        <div class="box">
        {{-- <div class="box-header with-border">
            <h4 class="box-title">Form Validation</h4>
        </div> --}}
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
            <div class="col">
                <form method="POST" action="{{route('password.update')}}">
                    @csrf
                    <div class="row">
                    <div class="col-12">	                     
                        <div class="row">
                                {{-- Col-md6 Start --}}
                                <div class="col-md-6">                                 
                                    <div class="form-group">
                                        <h5>Current Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" id="current_password" name="oldpassword" class="form-control"  > 
                                            @error('oldpassword')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <h5>New Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input id="password" type="password" name="password" class="form-control" > 
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>                    
                                    <div class="form-group">
                                        <h5>Confirm Password <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" > 
                                            @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>                    
                                </div>
                                {{-- Col-md6 End --}}
                                {{-- Col-md6 Start --}}
                                <div class="col-md-6">                                   
                                </div>
                                {{-- Col-md6 End --}}

                        </div>                
                    
                    </div>
                    
                    </div>
                    
                    
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                    </div>
                </form>

            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>


    <!-- User Adding Fort End -->
    
    </div>
</div>
<!-- /.content-wrapper -->
{{-- Edit Password Page End --}}
@endsection