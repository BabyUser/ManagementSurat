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
              <h3>{{$users['klsXII']}}</h3>

              <p>Grade 12</p>
            </div>
              <a href="{{ url()->route('admin.ListStudents', ['kelas' => '12']) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          {{-- kelas 11 --}}
          <div class="small-box bg-green">
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <div class="inner">
              <h3>{{$users['klsXI']}}</h3>

              <p>Grade 11</p>
            </div>
            <a href="{{ url()->route('admin.ListStudents', ['kelas' => '11']) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          {{-- kelas 10 --}}
          <div class="small-box bg-yellow">
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <div class="inner">
              <h3>{{$users['klsX']}}</h3>

              <p>Grade 10</p>
            </div>
            <a href="{{ url()->route('admin.ListStudents', ['kelas' => '10']) }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        {{-- /List --}}
        {{-- Diagram data siswa --}}
        <div class="col-xs-9">
          <div class="box box-info ">
            <div class="box-header with-border">
              <span>Diagram Siswa</span>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="diagram" height="150"></canvas>
            </div>
          </div>
        </div>
        {{-- end diagram --}}
        {{-- table LIst --}}
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              <div class="box-tools">
                <form class="" action="{{ url()->route('admin.ListStudents') }}" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="kelas" class="form-control pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <Button type="submit" class="btn btn-default"><i class="fa fa-search"></i></Button>
                      </div>
                  </div>
                </form>
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
                  <th>Action</th>
                </tr>
                @foreach ($users['list'] as $user['sd'])
                  <tr>
                    <td>{{$user['sd']->nis}}</td>
                    <td>{{$user['sd']->name}}</td>
                    <td>{{$user['sd']->grade}}</td>
                    <td>{{$user['sd']->gender}}</td>
                    <td>{{$user['sd']->address}}</td>
                    <td><a href="{{url()->route('admin.destroy', ['nis' => $user['sd']->nis ])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                  </tr>
                @endforeach

              </tbody>
            </table>
            {{ $users['list']->render() }}
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
@section('javascript')
  <script  type="text/javascript">
  var speedCanvas = document.getElementById("diagram");

  var kelas10 = {
    label : "Banyak murid kelas 10",
    data  : [30, 33, 35, 26, 12, 34, 64, 40],
    lineTension: 0.3,
    fill: false,
    borderColor: 'red',
    backgroundColor: 'transparent',
    pointBorderColor: 'red',
    pointBackgroundColor: 'red',
    pointRadius: 5,
    pointHoverRadius: 15,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rect'
  }

  var kelas11 = {
    label : "Banyak murid kelas 11",
    data  : [50, 73, 23, 30, 14, 66, 24, 10],
    lineTension: 0.3,
    fill: false,
    borderColor: '#2ecc71',
    backgroundColor: 'transparent',
    pointBorderColor: '#2ecc71',
    pointBackgroundColor: '#2ecc71',
    pointRadius: 5,
    pointHoverRadius: 15,
    pointHitRadius: 30,
    pointBorderWidth: 1,
    pointStyle: 'rect'
  }

  var kelas12 = {
    label  : "Banyak murid kelas 12",
    data   : [10, 36, 76, 29, 45, 58, 31, 65],
    lineTension: 0.3,
    fill: false,
    borderColor: '#3498db',
    backgroundColor: 'transparent',
    pointBorderColor: '#3498db',
    pointBackgroundColor: '#3498db',
    pointRadius: 5,
    pointHoverRadius: 15,
    pointHitRadius: 30,
    pointBorderWidth: 2,
    pointStyle: 'rect'
  }
  var speedData = {
    labels: ["AK", "APK", "BC", "DKV", "RPL", "PBR", "APH", "TKJ"],
    datasets: [kelas10, kelas11, kelas12],
  };

  var chartOptions = {
    legend: {
      display: false,
      // position: 'top',
      labels: {
        boxWidth: 50,
        fontColor: 'teal'
      }
    }
  };

  var lineChart = new Chart(speedCanvas, {
    type: 'line',
    data: speedData,
    options: chartOptions
  });

  </script>
@endsection
