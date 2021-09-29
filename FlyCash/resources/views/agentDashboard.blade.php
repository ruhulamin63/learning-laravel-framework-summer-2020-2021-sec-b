@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">DASHBOARD</h2>
                            <h4 class="card-title">Balance :{{session('balance')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <div class="card card-chart">
        <div class="card-header ">
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="{{ route('agent_cashin') }}">
                        <img src="{{ asset('black') }}/img/takain.png">
                        <div class="picname">
                        <h4>Cash In</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_cashout') }}">
                    <img src="{{ asset('black') }}/img/takaout.png" alt="{{ __('Profile Photo') }}">
                        <h4>Cash Out</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_adduser') }}">
                        <img src="{{ asset('black') }}/img/adduser.png" alt="{{ __('Profile Photo') }}">
                        <h4>Add User</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_requestmoney') }}">
                    <img src="{{ asset('black') }}/img/reqMoney.png" alt="{{ __('Profile Photo') }}">
                        <h4>Request Money</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_paybill') }}">
                    <img src="{{ asset('black') }}/img/paybill.png" alt="{{ __('Profile Photo') }}">
                        <h4>Pay Bill</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="{{ route('agent_transactionlist') }}">
                        <img src="{{ asset('black') }}/img/transaction.png" alt="{{ __('Profile Photo') }}">
                        <h4>Transaction List</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('agent_recharge') }}">
                    <img src="{{ asset('black') }}/img/recharge.png" alt="{{ __('Profile Photo') }}">
                        <h4>Mobile Recharge</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="#"><img src="{{ asset('black') }}/img/comingsoon.png" alt="{{ __('Profile Photo') }}">
                        <h4>Upcoming Feature</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="#"><img src="{{ asset('black') }}/img/comingsoon.png" alt="{{ __('Profile Photo') }}">
                        <h4>Upcoming Feature</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="#"><img src="{{ asset('black') }}/img/comingsoon.png" alt="{{ __('Profile Photo') }}">
                        <h4>Upcoming Feature</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="#"><img src="{{ asset('black') }}/img/comingsoon.png" alt="{{ __('Profile Photo') }}">
                        <h4>Upcoming Feature</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                        <a href="#"><img src="{{ asset('black') }}/img/comingsoon.png" alt="{{ __('Profile Photo') }}">
                        <div class="picname">
                        <h4>Upcoming Feature</h4>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            
            
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
