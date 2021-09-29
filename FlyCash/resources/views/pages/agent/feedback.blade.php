@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="d-flex justify-content-center">
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
                                <img class="avatar" src="{{ asset('black') }}/img/feedback.png" alt="">
                                </a>
                                <h2>Feedback</h2>
                                
                        </div>
                    </p>

                    <label>{{ __('Write A Feedback') }}</label>
                    <input type="text" name="feedback" class="form-control{{ $errors->has('feedback') ? ' is-invalid' : '' }}" placeholder="{{ __('Write Your Feedback Here...') }}">
                    @include('alerts.feedback', ['field' => 'feedback'])
                    
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Send') }}</button>
                    </div>
                </div>
            </div>
    </div>
@endsection