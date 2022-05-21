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
            <a href="{{route('requests')}}" class="nav-link ">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Member Request
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('members')}}" class="nav-link active">
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
              <h1 class="text-center text-muted display-4 ">Approved Member List.</h1>
               <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th class="text-center">Image</th>
                    <th class="text-center" scope="col-sm-2">Name</th>
                    <th class="text-center" scope="col-sm-2">NID</th>
                    <th class="text-center" scope="col-sm-2">Gender</th>
                    <th class="text-center" scope="col-sm-2">Qualification</th>
                    <th class="text-center" scope="col-sm-2">Phone</th>
                    <th class="text-center" scope="col-sm-2" >Action</th>
                  </tr>
                </thead>
                
  
                <tbody>
                
                  @foreach($list1 as $key => $value)
                  <tr>
                    <td class="text-center"><img width="111px" src="{{asset('inc/storage/app/public/profile')}}/{{$list1[$key]->image}}" alt="No Image."/></td>
                    <td class="text-center">{{$list1[$key]->name}}</td>
                    <td class="text-center">{{$list1[$key]->nid}}</td>
                    <td class="text-center">{{$list1[$key]->gender}}</td>
                    <td class="text-center">{{$list1[$key]->qualification}}</td>                                     
                    <td class="text-center">{{$list2[$key]->mobile}}</td>                                     
                    <td class="text-center">  
                      <a type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModalScrollable_{{$list1[$key]->id}}" >Details</a>
                      <a type="button" class="btn btn-outline-danger btn-sm" href="{{route('delete.request',['nid' =>$list1[$key]->nid ])}}">Delete</a>
                    </td>                                     
                  </tr>

                  <div class="modal fade" id="exampleModalScrollable_{{$list1[$key]->id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalScrollableTitle_{{$list1[$key]->id}}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <img class="modal-title text-center" id="exampleModalScrollableTitle_{{$list1[$key]->id}}" src="{{asset('inc/storage/app/public/profile')}}/{{$list1[$key]->image}}" style="height:150px; width:150px; " alt="No Image">
                        </div>
                        <div class="modal-body">
                         <h5><b>Name</b>               : {{$list1[$key]->name}}</h5>
                         <h5><b>NID</b>                : {{$list1[$key]->nid}}</h5>
                         <h5><b>Occupation</b>         : {{$list1[$key]->occupation}}</h5>
                         <h5><b>institute</b>          : {{$list1[$key]->institute}}</h5>
                         <h5><b>Post</b>               : {{$list1[$key]->post}}</h5>
                         <h5><b>Qualification</b>      : {{$list1[$key]->qualification}}</h5>
                         <h5><b>Gender</b>             : {{$list1[$key]->gender}}</h5>
                         <h5><b>Height</b>             : {{$list1[$key]->height}}</h5>
                         <h5><b>Birth Mark</b>         : {{$list1[$key]->birth_mark}}</h5>
                         <h5><b>Father's Name</b>      : {{$list1[$key]->father_name}}</h5>
                         <h5><b>Mother's Name</b>      : {{$list1[$key]->mother_name}}</h5>
                         <h5><b>Mobile No</b>          : {{$list2[$key]->mobile}}</h5>
                         <h5><b>Email</b>              : {{$list2[$key]->email}}</h5>
                         <h5><b>Blood Group</b>        : {{$list2[$key]->blood_group}}</h5>
                         <h5><b>Marital Status</b>     : {{$list2[$key]->marital_status}}</h5>
                         <h5><b>Family Members</b>     : {{$list2[$key]->total_family_members}}</h5>
                         <h5><b>Total Income</b>       : {{$list2[$key]->income}}</h5>
                         <h5><b>Present Address</b>    : {{$list2[$key]->present_address}}</h5>
                         <h5><b>Permanent Address</b>  : {{$list2[$key]->permanent_address}}</h5>
                         <h5><b>Birth Date</b>         : {{$list2[$key]->birth_date}}</h5>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
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