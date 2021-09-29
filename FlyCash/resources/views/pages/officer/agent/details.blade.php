@extends('layouts.app', ['page' => __('Profile Details'), 'pageSlug' => 'agentinfo'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Details Agent Information') }}</h3>
                </div>
                <form method="post" autocomplete="off">
                    <div class="card-body">
                            @csrf
                           <!-- detete method -->

                            @include('alerts.success')
                            
                            <div class="form-group">
                                <label><h4>{{ __('Name => ') }}</h4></label>
                                <label><h4>{{$user->name}}</h4></label>
                            </div>

                            <div class="form-group">
                                <label><h4>{{ __('Email address => ') }}</h4></label>
                                <label><h4>{{$user->email}}</h4></label>
                            </div>

                            <div class="form-group">
                                <label><h4>{{ __('Phone No => ') }}</h4></label>
                                <label><h4>{{$user->phone}}</h4></label>
                            </div>

                            <div class="form-group">
                                <label><h4>{{ __('NID No => ') }}</h4></label>
                                <label><h4>{{$user->nid}}</h4></label>
                            </div>

                            <div class="form-group">
                                <label><h4>{{ __('DOB => ') }}</h4></label>
                                <label><h4>{{$user->dob}}</h4></label>
                            </div>

                            <div class="form-group">
                               <label><h4>{{ __('Type => ') }}</h4></label>
                                <label><h4>{{$user->type}}</h4></label>
                            </div> 

                            <div class="form-group">
                               <label><h4>{{ __('Balance => ') }}</h4></label>
                                <label><h4>{{$user->balance}}</h4></label>
                            </div> 
                    </div>
                    <div class="card-footer">
                        <a href="{{route('agent_index')}}" class="btn btn-success">Back</a>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/anime3.png" alt="">
                                <h5 class="title">{{ $user->name }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Agent Profile') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, Always "Never Give Up"...') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
