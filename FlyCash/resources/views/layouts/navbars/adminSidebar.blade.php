
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
        <img src="{{ asset('black') }}/img/flycash.png" alt="">
            <a href="#" class="simple-text logo-normal">{{ __('Flycash Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li >
                <a href="{{ route('admin_home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('User') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li >
                        <a href="{{ route('admin_adduser') }}">
                                <i class="tim-icons icon-simple-add"></i>
                                
                                <p>{{ __('Add User') }}</p>
                            </a>
                        </li>
                       
                        <li >
                        <a href="{{ route('admin_edituser') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Edit User') }}</p>
                            </a>
                        </li>
                        <li >
                        <a href="{{ route('admin_discount') }}">
                                <i class="tim-icons icon-credit-card"></i>
                                <p>{{ __('Discount Code') }}</p>
                            </a>
                        </li>
                        <li >
                        <a href="{{ route('admin_blockuser') }}">
                                <i class="tim-icons icon-simple-remove"></i>
                                <p>{{ __('Block User') }}</p>
                            </a>
                        </li>
                        
                        
                    
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Agent') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li >
                        <a href="{{ route('admin_addagent') }}">
                                <i class="tim-icons icon-simple-add"></i>
                                
                                <p>{{ __('Add Agent') }}</p>
                            </a>
                        </li>
                        
                        <li >
                        <a href="{{ route('admin_editagent') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Edit Agent') }}</p>
                            </a>
                        </li>
                        <li >
                        <a href="{{ route('admin_agenttransaction') }}">
                                <i class="tim-icons icon-credit-card"></i>
                                <p>{{ __('Transaction History') }}</p>
                            </a>
                        </li>
                        <li >
                        <a href="{{ route('admin_addagentmoney') }}">
                                <i class="tim-icons icon-coins"></i>
                                <p>{{ __('Add Money') }}</p>
                            </a>
                        </li>

                        <li >
                        <a href="{{ route('admin_chatagent') }}">
                                <i class="tim-icons icon-email-85"></i>
                                <p>{{ __('Chat') }}</p>
                            </a>
                        </li>

                        <li >
                        <a href="{{ route('admin_blockagent') }}">
                                <i class="tim-icons icon-simple-remove

"></i>
                                <p>{{ __('Block Agent') }}</p>
                            </a>
                        </li>
                        
                        
                       
                       
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Communication Officer') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li >
                        <a href="{{ route('admin_addofficer') }}">
                                <i class="tim-icons icon-simple-add"></i>
                                
                                <p>{{ __('Add Officer') }}</p>
                            </a>
                        </li>
                        
                        <li >
                        <a href="{{ route('admin_editofficer') }}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Edit Officer') }}</p>
                            </a>
                        </li>
                        <li >
                        <a href="{{ route('admin_chatofficer') }}">
                                <i class="tim-icons icon-email-85"></i>
                                <p>{{ __('Chat') }}</p>
                            </a>
                        </li>
                
                    </ul>
                </div>
            </li>

            <li >
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
            
                        <li>
            <a href="{{ route('admin_addcampaign') }}">
                    <i class="tim-icons icon-trophy"></i>
                    <p>{{ __('Run Campaign') }}</p>
                </a>
            </li>
            
            <li >
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>

            

            
        </ul>
    </div>
</div>
