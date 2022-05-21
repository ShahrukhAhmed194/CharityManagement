@extends('backend.layouts.template')

  @section('content')
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/FoundationLogo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin')}}" class="d-block">Sristry Foundation</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('admin')}}" class="nav-link ">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Comment Box
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('requests')}}" class="nav-link active">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Member Request
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('members')}}" class="nav-link ">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Member List
              </p>
            </a>
          </li>                     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center text-muted display-4 ">Pending Member Requests.</h1>
             <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col-sm-2" class="text-center">Image</th>
                  <th scope="col-sm-2" class="text-center">Name</th>
                  <th scope="col-sm-2" class="text-center">NID</th>
                  <th scope="col-sm-2" class="text-center">Gender</th>
                  <th scope="col-sm-2" class="text-center">Qualification</th>
                  <th scope="col-sm-2" class="text-center">Occupation</th>
                  <th scope="col-sm-2" class="text-center">Action</th>
                </tr>
              </thead>
              

              <tbody>
              
                @foreach($list1 as $key => $value)
                  <tr>
                    
                    <td class="text-center"><img width="111px" src="{{asset('inc/storage/app/public/profile')}}/{{$list1[$key]->image}}" alt="No Image."/></td>
                    <td class="text-center">{{$list1[$key]->nid}}</td>
                    <td class="text-center">{{$list1[$key]->gender}}</td>
                    <td class="text-center">{{$list1[$key]->qualification}}</td>                                     
                    <td class="text-center">{{$list1[$key]->occupation}}</td>                                     
                    <td class="text-center"> 
                      <a type="button" class="btn btn-outline-success btn-sm" href="{{route('accept.request',['nid' =>$list1[$key]->nid ])}}">Accept</a>
                      <a type="button" class="btn btn-outline-danger btn-sm" href="{{route('delete.request',['nid' =>$list1[$key]->nid ])}}">Delete</a>
                    </td>                                     
                  </tr>
                @endforeach
                </tbody>
          </table>
            
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection