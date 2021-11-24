@extends('back-end.sidebar')
@section('content')

<style>
    .card{
        margin-left: 20px;
        display: inline-block;
    }
    .videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.tvideo{
    float: right;
    margin-right: 20px;
}
    
</style>
@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
<div>
<div class="content">
  <div class="container-fluid">
    <div class="row">

              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Video Ads</h4>
                  <p class="category">Adsense Video yang ditampilkan di Login</p>
                  
                </div>
                <div> <a href="{{ route('iklan') }}" class="tvideo btn btn-primary">Tambah Video Ads</a></div>
            @foreach($listIklan as $i)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                   <div class="videoWrapper">
                   {!! $i->link_iklan !!}
                   </div>
                   <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit2{{ $i->id }}">Edit</button>
                        <a href="{{ route('hapus-iklan',$i->id) }}" class="btn btn-danger">Hapus</a>
                      
                    </div>
                    </div>
            @endforeach
            {{ $listIklan->links() }}
              </div>
             </div>


             <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Video Ads</h4>
                  <p class="category">Adsense Video yang tidak ditampilkan di Login</p>
                  
                </div>
                <div> <a href="{{ route('iklan') }}" class="tvideo btn btn-primary">Tambah Video Ads</a></div>
            @foreach($tidakDitampilkan as $i)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                   <div class="videoWrapper">
                   {!! $i->link_iklan !!}
                   </div>
                   <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit{{ $i->id }}">Edit</button>
                        <a href="{{ route('hapus-iklan',$i->id) }}" class="btn btn-danger">Hapus</a>
                      
                    </div>
                    </div>
            @endforeach
            {{ $tidakDitampilkan->links() }}
              </div>
             </div>
             
         </div>
    </div>
</div>

@foreach ($iklan as $i)
  <div class="modal fade" id="modalEdit{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('edit-iklan',$i->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
          <div class="row">
          
           {!! $i->link_iklan !!}
           <input type="text" name="link_iklan" value="{{ $i->link_iklan }}" hidden>
           <input type="text" name="id" value="{{ $i->id }}" hidden>
            <div class="col-sm-8">
              <div class="form-group">
             
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Status</label>
            <div class="col-sm-8">
              <div class="form-group">
                <select class="form-control" name="status" id="status" >
                  <option value="0" >Jangan Tampilkan</option>
                  <option value="1" >Tampilkan</option>
                </select>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success btn-link" type="submit">Submit</button>
          <input type="reset" class="btn btn-danger btn-link">
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

@foreach ($iklan1 as $i)
  <div class="modal fade" id="modalEdit2{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('edit-iklan',$i->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
          <div class="row">
          
           {!! $i->link_iklan !!}
           <input type="text" name="link_iklan" value="{{ $i->link_iklan }}" hidden>
           <input type="text" name="id" value="{{ $i->id }}" hidden>
            <div class="col-sm-8">
              <div class="form-group">
             
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Status</label>
            <div class="col-sm-8">
              <div class="form-group">
                <select class="form-control" name="status" id="status" >
                  <option value="0" >Jangan Tampilkan</option>
                  <option value="1" >Tampilkan</option>
                </select>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success btn-link" type="submit">Submit</button>
          <input type="reset" class="btn btn-danger btn-link">
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach

@endsection
        