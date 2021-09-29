<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">  
        <img src="{{ asset('black') }}/img/flycash.png" alt="">
            <a href="#" class="simple-text logo-normal">{{ __('Flycash Dashboard') }}</a>
        </div>
        <ul class="nav">
             
             <li>
                <a href="{{ route('customer_home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Transactions') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li >
                            <a href="{{ route('customer_addmoney') }}">
                                <i class="tim-icons icon-coins"></i>
                                
                                <p>{{ __('Add Money') }}</p>
                            </a>
                        </li>
                        <li >
                        <a href="{{ route('customer_sendmoney') }}">
                                <i class="tim-icons icon-send"></i>
                                <p>{{ __('Send Money') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('customer_cashout') }}">
                                <i class="tim-icons icon-money-coins"></i>
                                <p>{{ __('Cash out') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('customer_paybill') }}">
                                <i class="tim-icons icon-credit-card"></i>
                                <p>{{ __('Bill pay') }}</p>
                            </a>
                        </li>
                       
                        <li >
                            <a href="{{ route('customer_recharge') }}">
                                <i class="tim-icons icon-mobile"></i>
                                <p>{{ __('Mobile Recharge') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('customer_transfermoney') }}">
                                <i class="tim-icons icon-bank"></i>
                                <p>{{ __('Transfer Money') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="#">
                                <i class="tim-icons icon-bus-front-12"></i>
                                <p>{{ __('buy tickets') }}</p>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li >
                            <a href="{{ route('customer_profile_edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
            
            <li>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li >
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
            <li>
                <a href="{{ route('pages.transactionlist') }}">
                    <i class="tim-icons icon-notes"></i>
                    <p>{{ __('Transaction List') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            
            <li class=" ">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
