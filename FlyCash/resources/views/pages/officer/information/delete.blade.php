@extends('layouts.app', ['page' => __('Profile Delete'), 'pageSlug' => 'information'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Profile Delete') }}</h3>
                </div>
                
                <form method="post"  autocomplete="off">
                    <div class="card-body">
                        @csrf

                        @if (session()->has('delete'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('delete') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label><h4>{{ __('Email address : ') }}</h4></label>
                            <label><h4>{{$user->email}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Phone No : ') }}</h4></label>
                            <label><h4>{{$user->phone}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Trans Type : ') }}</h4></label>
                            <label><h4>{{$user->transaction_type}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Amount : ') }}</h4></label>
                            <label><h4>{{$user->amount}}</h4></label>
                        </div>

                        <div class="form-group">
                            <label><h4>{{ __('Balance : ') }}</h4></label>
                            <label><h4>{{$user->balance}}</h4></label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Delete') }}</button>
                        <a href="{{route('information_index')}}" class="btn btn-success">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
