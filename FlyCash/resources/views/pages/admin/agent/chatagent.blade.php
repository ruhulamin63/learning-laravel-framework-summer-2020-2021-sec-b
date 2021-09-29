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
                                <img class="avatar" src="{{ asset('black') }}/img/admin/chat.png" alt="chat">
                                </a>
                                <h3>Chat with Agent</h3>
                        </div>
                    </p>
                    <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b></b></p>
            </div>
            <div id="chatbox"></div>
 
            <form name="message" action="">
            
            <input type="text" name="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" placeholder="{{ __('enter account number') }}">
            <input type="text" name="number"  placeholder="{{ __('enter your text') }}">

                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
        </div>
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Exit Chat') }}</button>
                    </div>
                </div>
            </div>
    </div>
@endsection