            @extends('admin.admin_master')
            @section('admin')  
            {{-- Add the ajax jquery  CDN link as --}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            {{-- Edit Profile Page Start --}}
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                <!-- Content Header (Page header) Start -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h3 class="page-title">Edit Profile</h3>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">Edit</li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                            <form method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-12">	
                                    <div class="row">
                                            {{-- Col-md6 Start --}}
                                        <div class="col-md-6">                                 
                                        <div class="form-group">
                                            <h5>User Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" value="{{$editUser->name}}" > 
                                            </div>
                                        </div>                          
                                        </div>
                                            {{-- Col-md6 End --}}
                                            {{-- Col-md6 Start --}}
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>User Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required="" value="{{$editUser->email}}" > 
                                            </div>
                                        </div>    
                                        </div>
                                            {{-- Col-md6 End --}}

                                    </div>                           
                                    <div class="row">
                                            {{-- Col-md6 Start --}}
                                        <div class="col-md-6">                                 
                                            <div class="form-group">
                                                <h5>User Gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="gender" required="" class="form-control">
                                                            <option value="">Select User Gender</option>
                                                            <option value="Male" {{$editUser->gender == "Male" ? "selected" : ""}}>Male</option>
                                                            <option value="Female"{{$editUser->gender == "Female" ? "selected" : ""}}>Female</option>
                                                            <option value="Others"{{$editUser->gender == "Others" ? "selected" : ""}}>Others</option>
                                                        </select>                                        
                                                    </div>
                                                </div> 
                                                                
                                        </div>
                                            {{-- Col-md6 End --}}
                                            {{-- Col-md6 Start --}}
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>User Mobile <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="number" name="mobile" class="form-control" required="" value="{{$editUser->mobile}}" > 
                                            </div>
                                        </div>    
                                        </div>
                                            {{-- Col-md6 End --}}

                                    </div>                           
                                    <div class="row">
                                            {{-- Col-md6 Start --}}
                                        <div class="col-md-6">                                 
                                        <div class="form-group">
                                            <h5>User Address <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" required="" value="{{$editUser->address}}" > 
                                            </div>
                                        </div>                          
                                        </div>
                                            {{-- Col-md6 End --}}
                                            {{-- Col-md6 Start --}}
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Profile Image <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="image" class="form-control" id="image"> 
                                            </div>
                                        </div>   
                                        {{-- Preview image --}}
                                        <div class="form-group">
                                            <div class="controls">
                                                <img id="showImage" src="{{(!empty($userData->image))? url('upload/user_image/'.$userData->image):url('upload/no_image.jpg')}}" alt="" style="width: 150px; height:150px;border:2px solid yellow ;border-radius:50%;padding:3px;background-color:yellow" >
                                            </div>
                                        </div>    
                                        </div>
                                            {{-- Col-md6 End --}}

                                    </div>                           
                                
                                </div>
                                
                                </div>
                                
                                
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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
            {{-- Edit Profile Page End --}}

            {{-- Start Stript with Ajax for Profile review --}}
            <script type="text/javascript">
            $(document).ready(function() {
               $("#image").change(function(e){
                   var reader=new FileReader();
                   reader.onload = function(e){
                       $("#showImage").attr("src",e.target.result);
                   }
                   reader.readAsDataURL(e.target.files['0']);
               }); 
            });

            </script>
            {{-- End Stript with Ajax for Profile review --}}
            @endsection