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
.bannerIklan{
  object-fit: cover;
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
                   @if($i->nama_video != null )
                   <video width="200" height="100" controls>
                        <source src="{{ asset('/iklan/video/'.$i->nama_video)}}" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                         Your browser does not support the video tag.
                    </video>
                    @endif
                   </div>
                   
                   <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit2{{ $i->id }}">Edit</button>
                        <a href="{{ route('hapus-iklan',$i->id) }}" class="btn btn-danger">Hapus</a>
                      
                    </div>
                    </div>
            @endforeach
            {{ $listIklan->links('vendor.pagination.bootstrap-4') }}
              </div>
             </div>


             <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Video Ads</h4>
                  <p class="category">Adsense Video yang tidak ditampilkan di Login</p>
                  
                </div>
                <div></div>
            @foreach($tidakDitampilkan as $i)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                   <div class="videoWrapper">
                   {!! $i->link_iklan !!}
                   @if($i->nama_video != null)
                   <video width="200" height="100" controls>
                        <source src="{{ asset('/iklan/video/'.$i->nama_video)}}" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                         Your browser does not support the video tag.
                    </video>
                  @endif
                   </div>
                
                   <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit{{ $i->id }}">Edit</button>
                        <a href="{{ route('hapus-iklan',$i->id) }}" class="btn btn-danger">Hapus</a>
                      
                    </div>
                    </div>
            @endforeach
            {{ $tidakDitampilkan->links('vendor.pagination.bootstrap-4') }}
              </div>
             </div>


             
             <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Banner Ads</h4>
                  <p class="category">Banner ads yang ditampilkan!</p>
                  
                </div>
                <div> <button class="tvideo btn btn-primary" data-toggle="modal" data-target="#tambahBanner">Tambah Banner Ads</button></div>
                @foreach($bannerPaginate1 as $i)
                <div class="card" style="width: 27rem;">
                    <div class="card-body">
                   <div class="videoWrapper">
                   {!! $i->link_iklan !!}
                   <img class="bannerIklan" src="{{ asset('/iklan/gambar/'.$i->gambar_iklan)}}" width="300" height="200">

                   </div>
                   
                   <button class="btn btn-primary" data-toggle="modal" data-target="#bannerIklanEdit{{ $i->id }}">Edit</button>
                        <a href="{{ route('hapus-banner-iklan',$i->id) }}" class="btn btn-danger">Hapus</a>
                      
                    </div>
                    </div>
              @endforeach
               {{ $bannerPaginate1->links('vendor.pagination.bootstrap-4') }}
              </div>
             </div>

             
         </div>
    </div>
</div>


<div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Banner Ads</h4>
                  <p class="category">Banner ads yang tidak ditampilkan!</p>
                  
                </div>
                <div></div>
                @foreach($bannerIklan0 as $i)
                <div class="card" style="width: 27rem;">
                    <div class="card-body">
                   <div class="videoWrapper">
                   {!! $i->link_iklan !!}
                   <img src="{{ asset('iklan/gambar/'.$i->gambar_iklan)}}" width="200" height="200">

                   </div>
                   
                   <button class="btn btn-primary" data-toggle="modal" data-target="#bannerIklanEdit0{{ $i->id }}">Edit</button>
                        <a href="{{ route('hapus-banner-iklan',$i->id) }}" class="btn btn-danger">Hapus</a>
                      
                    </div>
                    </div>
              @endforeach
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

<div class="modal fade" id="tambahBanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Iklan Banner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{route('post-banner-iklan')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="modal-body">
          
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" name="id" class="form-control" value="{{Session::get('id')}}" hidden>
                <span class="bmd-help">Errors message goes here</span>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Link Iklan</label>
            <div class="col-sm-8">
              <div class="form-group">
                <textarea type="text" name="link_iklan" class="form-control"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-4 col-form-label">Gambar</label>
            <div class="col-sm-8">
              
                <input type="file" name="gambar" class="form-control">
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success btn-link">
          <input type="reset" class="btn btn-danger btn-link">
        </div>
      </form>
    </div>
  </div>
</div>

@foreach ($bannerIklan1 as $i)
  <div class="modal fade" id="bannerIklanEdit{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('edit-banner-iklan',$i->id) }}" method="post" enctype="multipart/form-data">
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


@foreach ($bannerIklan0 as $i)
  <div class="modal fade" id="bannerIklanEdit0{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Gambar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form action="{{ route('edit-banner-iklan',$i->id) }}" method="post" enctype="multipart/form-data">
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
        