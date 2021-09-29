@extends('layouts.app', ['page' => __('Change Password'), 'pageSlug' => 'changepass'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">{{ __('Change Password') }}</h3>
                </div>
                <form method="post" action="#" autocomplete="off">
                    <div class="card-body">
                        @csrf

                        @if (session()->has('update'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('update') }}
                            </div>  
                        @endif

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Current Password') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('New Password') }}</label>
                            <input type="password" name="new_password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm New Password') }}</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Change password') }}</button>
                        <a href="{{route('officer_home')}}" class="btn btn-success">Back</a>
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
                                <img class="avatar" src="{{ asset('black') }}/img/hi.png" alt="">
                                <h5 class="title">{{ __('Profile') }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Communication Officer') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Hello Everyone, Always Active' )}} <br> {{__('Never Give Up"...') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <a href="https://www.linkedin.com/feed/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
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
