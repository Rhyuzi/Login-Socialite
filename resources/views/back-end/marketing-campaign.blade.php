@extends('back-end.sidebar')
@section('content')
				@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif

				@if ($message = Session::get('berhasil'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif


<form action="{{ route('kirim-email-request') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Masukan Email">
        <button type="submit">Submit</button>
    </form>

	<a href="{{ route('email-blast') }}" class="btn btn-primary">Email Blast</a>

@endsection 