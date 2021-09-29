<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">

        <!-- Add image -->
            <img src="/black/img/flycash.png" alt="flycash">

            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('FlyCash Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('officer_home') }}">
                    <i class="tim-icons icon-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
<!-- ======================================================================================= -->
            <li>
                <a data-toggle="collapse" href="#laravel-example" aria-expanded="false">
                    <i class="tim-icons icon-pin" ></i>
                    <span class="nav-link-text" >{{ __('Contract') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-example">
                    <ul class="nav pl-4">
                    
                        <li @if ($pageSlug == 'customerdetails') class="active " @endif>
                            <a href="{{route('customer_show')}}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('See Customer') }}</p>
                            </a>
                        </li>
            
                        <li @if ($pageSlug == 'agentinfo') class="active " @endif>
                            <a href="{{route('agent_index')}}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('See Agent') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<!-- ================================================================================= -->
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-pin" ></i>
                    <span class="nav-link-text" >{{ __('Setting') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{route('profile_edit')}}">
                                <i class="tim-icons icon-pencil"></i>
                                <p>{{ __('Profile') }}</p>
                            </a>
                        </li>
                        <li >
                            <a href="#">
                                <i class="tim-icons icon-app"></i>
                                <p>{{ __('Forward Message List') }}</p>
                            </a>
                            </li>
                        <li  @if ($pageSlug == 'changepass') class="active " @endif>
                            <a href="{{route('pass_edit')}}">
                                <i class="tim-icons icon-key-25"></i>
                                <p>{{ __('Change Password') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<!-- ================================================================================= -->
            <li @if ($pageSlug == 'information') class="active " @endif>
                <a href="{{route('information_index')}}">
                    <i class="tim-icons icon-paper"></i>
                    <p>{{ __('Information') }}</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <i class="tim-icons icon-trash-simple"></i>
                    <p>{{ __('Block List') }}</p>
                </a>
            </li>
            <li >
                <a href="#">
                    <i class="tim-icons icon-link-72"></i>
                    <p>{{ __('Transection') }}</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
