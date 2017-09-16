@extends('layouts.template')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Student's List
        <small>preview of students SMKN 1 SBY</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
        <li><a href="#">Master</a></li>
        <li class="active">Students</li>
      </ol>
    </section>

    <section class='content'>
      {{-- Danger.. --}}
      <div class="callout callout-danger">
        <h4>Danger !!!</h4>

        <p>Data vital..! <br>Harap berhati hati jika hendak mengeditnya..</p>
      </div>
      {{-- /Danger --}}

      {{-- Row --}}
      <div class="row">
        {{-- /List Count --}}
        <div class="col-xs-3">
          {{-- kelas 12 --}}
          <div class="small-box bg-teal">
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <div class="inner">
              <h3>44</h3>

              <p>Grade 12</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          {{-- kelas 11 --}}
          <div class="small-box bg-green">
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <div class="inner">
              <h3>44</h3>

              <p>Grade 11</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          {{-- kelas 10 --}}
          <div class="small-box bg-yellow">
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <div class="inner">
              <h3>44</h3>

              <p>Grade 10</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        {{-- /List --}}
        {{-- table LIst --}}
        <div class="col-xs-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>NIS</th>
                  <th>Name</th>
                  <th>Grade</th>
                  <th>Gender</th>
                  <th>Address</th>
                </tr>
                @foreach ($users as $user)
                  <tr>
                    <td>{{$user->nis}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->grade}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->address}}</td>
                  </tr>
                @endforeach

              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        {{-- end table --}}
      </div>
      {{-- End Row --}}
    </section>
  </div>
@endsection
