@extends('admin.admin_master')
@section('admin')  
{{-- User Profile View Page Start --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">View User Profile</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Views</li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            {{-- Profile View Form Start --}}
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" >
                  <h3 class="widget-user-username">User Name : {{$userData->name}}</h3>
                  <a href="{{route('profile.edit')}}" style="float: right" class="btn btn-rounded btn-success mb-5">Edit Profile</a>
                  <h6 class="widget-user-desc">User Role : {{$userData->usertype}}</h6>
                  <h6 class="widget-user-desc">User Email : {{$userData->email}}</h6>
                 
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{(!empty($userData->image))? url('upload/user_images/'.$userData->image):url('upload/no_image.jpg')}}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Mobile Number</h5>
                        <span class="description-text">{{$userData->mobile}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">Address</h5>
                        <span class="description-text">{{$userData->address}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Gender</h5>
                        <span class="description-text">{{$userData->gender}}</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            
            {{-- Profile View Form End --}}
                 
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->
{{-- User Profile View Page End --}}
@endsection