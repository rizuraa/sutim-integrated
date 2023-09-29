@extends('bar.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bar Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as a Bar!') }}
                    <br>
                    <b>{{ __('hal yang bisa dilakukan dalam dashboard bar: ') }}</b>
                    <br>
                    {{ __('- membuat request belanja untuk keperluan bar') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
