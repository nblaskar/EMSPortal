    @extends('admin.admin_master')
    @section('admin')  
    {{-- User View Start --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">All Users Data</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Views</li>
                                <li class="breadcrumb-item active" aria-current="page">Data Views</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                
            



            <div class="col-12">    
                <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">User List</h3>
                    <a href="{{route('users.add')}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add User</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key=>$user )
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{$user->usertype}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('users.delete',$user->id)}}" class="btn btn-warning" id="delete">Delete</a>
                                </td>
                            </tr>                              
                            @endforeach
                        
                        </tbody>				  
                        <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>              
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->          
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
        
        </div>
    </div>
    <!-- /.content-wrapper -->

    {{-- User View End --}}
    @endsection