    @extends('admin.admin_master')
    @section('admin')  
    {{-- Add User Page Start --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) Start -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Add New User</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Add</li>
                                <li class="breadcrumb-item active" aria-current="page">New Users</li>
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
                    <form method="POST" action="{{route('users.store')}}">
                        @csrf
                        <div class="row">
                        <div class="col-12">	
                            <div class="row">
                                    {{-- Col-md6 Start --}}
                                <div class="col-md-6">                                 
                                    <div class="form-group">
                                        <h5>User Role <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="usertype" id="usertype" required="" class="form-control">
                                                    <option value="">Select User Role</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                </select>                                        
                                            </div>
                                        </div>                             
                                </div>
                                    {{-- Col-md6 End --}}
                                    {{-- Col-md6 Start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <h5>User Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" > 
                                            </div>
                                        </div>
                                </div>
                                    {{-- Col-md6 End --}}

                            </div>
                            <div class="row">
                                    {{-- Col-md6 Start --}}
                                    <div class="col-md-6">                                 
                                        <div class="form-group">
                                            <h5>User Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required="" > 
                                            </div>
                                        </div>                      
                                    </div>
                                    {{-- Col-md6 End --}}
                                    {{-- Col-md6 Start --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <h5>User Password <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" name="password" class="form-control" required="" > 
                                                </div>
                                            </div>
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
    {{-- Add User Page End --}}
    @endsection