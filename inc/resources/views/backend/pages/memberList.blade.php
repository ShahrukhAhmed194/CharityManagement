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
          <a href="#" class="d-block">Sristry Foundation</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('admin')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Comment Box
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('requests')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Member Request
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('members')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
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
                    <th scope="col-sm-2">Image</th>
                    <th scope="col-sm-2">Name</th>
                    <th scope="col-sm-2">NID</th>
                    <th scope="col-sm-2">Gender</th>
                    <th scope="col-sm-2">Qualification</th>
                    <th scope="col-sm-2">Phone</th>
                    <th scope="col-sm-2">Action</th>
                  </tr>
                </thead>
                
  
                <tbody>
                
                  @foreach($list1 as $key => $value)
                  <tr>
                    <td><img width="111px" src="{{asset('inc/storage/app/public/profile')}}/{{$list1[$key]->image}}" alt="No Image."/></td>
                    <td>{{$list1[$key]->name}}</td>
                    <td>{{$list1[$key]->nid}}</td>
                    <td>{{$list1[$key]->gender}}</td>
                    <td>{{$list1[$key]->qualification}}</td>                                     
                    <td>{{$list2[$key]->mobile}}</td>                                     
                    <td>  <button type="button" class="btn btn-outline-primary btn-sm mx-4" data-toggle="modal" data-target="#exampleModalScrollable1">
                     Full Details
                    </button>  </td>                                     
                  </tr>
                  @endforeach
                  </tbody>
            </table>
              
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="exampleModalScrollable1" tabindex="1" role="dialog" aria-labelledby="exampleModalScrollable1Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <img class="modal-title" id="exampleModalScrollable1Title" src="{{asset('assets/img/team/team-1.jpeg')}}" style="height:150px; width:150px; float:center" alt="">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <b>সভাপতি, <br>সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন। <br></b><br>
          <b>অন্যান্য পদবী : </b><br>চেয়ারম্যান, সৃষ্টি ট্রেড এন্ড কমার্স লিমিটেড। <br>সহ-সভাপতি, বাংলাদেশ জাতীয় সাংবাদিক ফোরাম।<br>সংবাদদাতা, দৈনিক লাল সবুজের বাংলা।<br><br>
          <b>বাণী : </b><br> দিন বদলের লক্ষ্যে অসহায়ত্বের পাশে আছি আমরা সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন পরিবার।  
          সৃষ্টি ওয়েলফেয়ার ফাউন্ডেশন জেল,থানা  এবং ওয়ার্ড ভিত্তিক ইউনিট গঠন পূর্বক সমগ্র বাংলাদেশে উয়নমূলক কাজ করে যাবো, এটাই আমাদের অঙ্গীকার। আমরাই পারি দেশ ও জাতিকে সমৃদ্ধ করতে।<br><br>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  
  @endsection