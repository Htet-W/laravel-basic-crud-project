@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('User Profile') }}</center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __("Name is") }}  {{Auth::user()->name}}<br>
                    {{ __("Email is") }}  {{Auth::user()->email}}<br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
