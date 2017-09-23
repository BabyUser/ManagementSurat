@extends('layouts.template')
@section('content')
    <div class="content-wrapper">
    {{-- Section Kepala content --}}
      <section class="content-header">
        <h1>
          Student's Trash List
          <small>preview delete from students List</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> dashboard</a></li>
          <li><a href="#">Master</a></li>
          <li class="active">Students</li>
        </ol>
      </section>

    {{-- Section Content --}}
      <section class="content">
        {{-- Danger.. --}}
        <div class="callout callout-danger">
          <h4>Danger !!!</h4>

          <p>Data vital..! <br>Harap berhati hati jika hendak mengeditnya..</p>
        </div>
        {{-- /Danger --}}

        {{-- Table --}}
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Bordered Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-bordered table-hover">
              <tbody><tr>
                <th>NIS</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
              @foreach ($trash['list'] as $user['sd'])
                <tr>
                  <td>{{$user['sd']->nis}}</td>
                  <td class="nama">{{$user['sd']->name}}</td>
                  <td>{{$user['sd']->grade}}</td>
                  <td>{{$user['sd']->gender}}</td>
                  <td>{{$user['sd']->address}}</td>
                  <td><button id="btn" value="{{$user['sd']->nis}}" type="button"  data-target="#modal" class="btn btn-danger"><i class="fa fa-trash"></i></button> <a class="btn btn-success"><i class="fa fa-sign-in"></i></a></td>

                </tr>
              @endforeach
            </tbody>
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">

            {{ $trash['list']->render() }}
          </div>
        </div>
      </section>
    </div>
    {{-- Modal --}}
    <div id="modal" class="modal fade modal-danger" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Danger..!</h4>
          </div>
          <div class="modal-body">
            <p>Anda yakin mau menghapus permanen dari penyimpanan anda..?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline">OK</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
@endsection
@section('javascript')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.btn-danger').click(function(){
        var nama = $(this).val();
        // document.getElementById("hasil").innerHTML=nama;
        $('#modal').modal('show');
      });
    });
  </script>
@endsection
