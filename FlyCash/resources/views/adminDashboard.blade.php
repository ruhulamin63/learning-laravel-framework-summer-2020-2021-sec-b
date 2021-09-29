@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Admin</h2>
                            <h4 class="card-title">Profit :</h4>
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
        <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Campaigns</h2>
                        </div>
                    </div>
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_addcampaign') }}">
                        <img src="{{ asset('black') }}/img/admin/campaign.png">
                        <div class="picname">
                        <h4>Add Campaign</h4>
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
                    <a href="{{ route('admin_ongoingcampaign') }}">
<img src="{{ asset('black') }}/img/admin/ongoingCampaign.png" alt="{{ __('Profile Photo') }}">
                        <h4>Ongoing Campaign</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_removecampaign') }}">
<img src="{{ asset('black') }}/img/admin/remove.png" alt="{{ __('Profile Photo') }}">
                        <h4>Remove Campaign</h4>
                        </a>
                    </div>
                </div>
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
        <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">User</h2>
                        </div>
                    </div>
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_adduser') }}">
                        <img src="{{ asset('black') }}/img/admin/addUser.png">
                        <div class="picname">
                        <h4>Add User</h4>
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
                    <a href="{{ route('admin_edituser') }}">
                    <img src="{{ asset('black') }}/img/admin/edit-info.png" alt="{{ __('Profile Photo') }}">
                        <h4>Edit User</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_blockuser') }}">
<img src="{{ asset('black') }}/img/admin/blockUser.png" alt="{{ __('Profile Photo') }}">
                        <h4>Block User</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_discount') }}">
<img src="{{ asset('black') }}/img/admin/discount-code.png" alt="{{ __('Profile Photo') }}">
                        <h4>Discount Code</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_transaction') }}">
<img src="{{ asset('black') }}/img/admin/transaction-history.png" alt="{{ __('Profile Photo') }}">
                        <h4>Transaction List</h4>
                        </a>
                    </div>
                </div>
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
        <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Agent</h2>
                        </div>
                    </div>
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_addagent') }}">
                        <img src="{{ asset('black') }}/img/admin/agent.png">
                        <div class="picname">
                        <h4>Add Agent</h4>
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
                    <a href="{{ route('admin_editagent') }}">
<img src="{{ asset('black') }}/img/admin/edit-info.png" alt="{{ __('Profile Photo') }}">
                        <h4>Edit Agent</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_blockagent') }}">
<img src="{{ asset('black') }}/img/admin/blockUser.png" alt="{{ __('Profile Photo') }}">
                        <h4>Block Agent</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_addagentmoney') }}">
<img src="{{ asset('black') }}/img/admin/addMoney.png" alt="{{ __('Profile Photo') }}">
                        <h4>Add Money</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_agenttransaction') }}">
<img src="{{ asset('black') }}/img/admin/transaction-history.png" alt="{{ __('Profile Photo') }}">
                        <h4>Transaction History</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_chatagent') }}">
<img src="{{ asset('black') }}/img/admin/chat.png" alt="{{ __('Profile Photo') }}">
                        <h4>Chat</h4>
                        </a>
                    </div>
                </div>
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
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Communication Officer</h2>
                        </div>
                    </div>
                </div>
        <div class="card-body all-icons">
        <div class="row">

        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_addofficer') }}">
                        <img src="{{ asset('black') }}/img/admin/officer.png">
                        <div class="picname">
                        <h4>Add Officer</h4>
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
                    <a href="{{ route('admin_editofficer') }}">
<img src="{{ asset('black') }}/img/admin/edit-info.png" alt="{{ __('Profile Photo') }}">
                        <h4>Edit Officer</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
            <div class="font-icon-detail">
                <div class="d-flex justify-content-center">
                    <div class="pic">
                    <a href="{{ route('admin_chatofficer') }}">
<img src="{{ asset('black') }}/img/admin/chat.png" alt="{{ __('Profile Photo') }}">
                        <h4>Chat</h4>
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
