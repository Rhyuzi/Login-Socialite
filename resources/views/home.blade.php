@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div>
              @foreach($iklan as $i)
                {!! $i->link_iklan !!}
              @endforeach
          </div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-header">{{ __('Sms Gateway') }}</div>

                <div class="card-body">
                <form action="/smsgateway" method="post">
                @csrf
                <input type="text" name="pesan" placeholder="Masukan Pesan">
                <button type="submit" class="btn btn-success">Submit</button>
                </form>
                </div>


                <div class="card-header">{{ __('Kirim Email') }}</div>

                <div class="card-body">
                <form action="/kirimemail" method="post">
                @csrf
                <input type="text" name="email" placeholder="Masukan Email Anda">
                <a class="btn btn-success" href="{{ route('kirim-email-request') }}" >Kirim Email</a>
                </form>
                </div>


                <div class="card-header">{{ __('Email Blast') }}</div>

                <div class="card-body">
                <a class="btn btn-success" href="{{ route('email-blast') }}" >Email Blast</a>
                </div>

                <div class="card-header">{{ __('Iklan') }}</div>

                <div class="card-body">
                <a class="btn btn-success" href="{{ route('list-iklan') }}" >Iklan</a>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
