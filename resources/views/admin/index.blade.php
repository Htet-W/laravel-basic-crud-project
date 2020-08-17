@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('Admin Dashboard') }}</center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as ADMIN!') }}
                <br>
                <a href="/aprofile"> Admin Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
