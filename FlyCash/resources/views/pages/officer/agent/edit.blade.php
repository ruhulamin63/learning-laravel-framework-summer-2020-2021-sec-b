@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'agentinfo'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="title">{{ __('Edit Agent Information') }}</h4>
                </div>
                <form method="post" autocomplete="off">
                    <div class="card-body">
                            @csrf

                            @include('alerts.success')

                            <div class="form-group">
                                <label>{{ __('Phone Number') }}</label>
                                <input type="text" name="phone" class="form-control" placeholder="{{ __('Phone number') }}" value="{{$user->phone}}">
                                @include('alerts.feedback', ['field' => 'phone'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('NID') }}</label>
                                <input type="text" name="nid" class="form-control" placeholder="{{ __('NID Number') }}" value="{{$user->nid}}">
                                @include('alerts.feedback', ['field' => 'nid'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('DOB') }}</label>
                                <input type="text" name="dob" class="form-control" placeholder="{{ __('Date of Birth') }}" value="{{$user->dob}}">
                                @include('alerts.feedback', ['field' => 'nid'])
                            </div>

                            <div class="form-group">
                                <label>{{ __('Type') }}</label>
                                <input type="text" name="type" class="form-control" placeholder="{{ __('Type') }}" value="{{$user->type}}">
                                @include('alerts.feedback', ['field' => 'nid'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
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
                                <img class="avatar" src="{{ asset('black') }}/img/DP.png" alt="">
                                <h5 class="title">{{ $user->name }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Agent Profile') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, How are you...') }}
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
