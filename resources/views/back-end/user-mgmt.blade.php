@extends('back-end.sidebar')
@section('content')
<style>
    
</style>
<div class="content">
  <div class="container-fluid">
      <div class="card">
    <div class="row">
    <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th class="disabled-sorting text-right"></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th class="text-right"></th>
                </tr>
              </tfoot>
              <tbody>
              @php $no = 1; @endphp
              @foreach($user as $u)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td class="text-right">
                      <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">mode_edit</i></a>
                      <button class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#deletePopup">
                        <i class="material-icons">delete</i>
                      </button>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection