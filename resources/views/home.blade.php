@extends('layouts.app')
@section('content')

@if (session()->has('gagal'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong> {{ session()->get('gagal') }}</strong>
				</div>
				@endif
    <div style="background-color: white;">
    Berhasil Masuk!
    </div>

@endsection