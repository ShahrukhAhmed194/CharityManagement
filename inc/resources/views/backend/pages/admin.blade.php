@extends('backend.layouts.template')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Dashboard</h1>
             <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col-sm-2">Name</th>
                  <th scope="col-sm-2">Email</th>
                  <th scope="col-sm-2">Subject</th>
                  <th scope="col-sm-2">Message</th>
                </tr>
              </thead>
              {{-- {{$infos}} --}}

              <tbody>
                
              @foreach($infos as $info)
              <tr>
                {{-- {{dd($skill)}} --}}
                <td>{{$info->name}}</td>
                <td>{{$info->email}}</td>
                <td>{{$info->subject}}</td>
                <td>{{$info->message}}</td>
              </tr>
              @endforeach
              </tbody>
          </table>
            {{-- @include('frontend.includes.employee') --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection