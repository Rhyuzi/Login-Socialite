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
                        <a href="#" class="btn btn-primary">Edit</a>
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
                        <a href="#" class="btn btn-primary">Edit</a>
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
@endsection
        

            