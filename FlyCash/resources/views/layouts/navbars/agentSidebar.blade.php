<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <!-- <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a> -->
            <img class="avatar" src="{{ asset('black') }}/img/flycash.png" alt="">
            <a href="#" align="center" class="simple-text logo-normal">{{ __('FlyCash') }}</a>
        </div>
        <ul class="nav">
            <li >
                <a href="{{ route('agent_home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('agent_addmoney') }}">
                    <i class="tim-icons icon-simple-add"></i>
                    <p>{{ __('Add Money') }}</p>
                </a>
            </li>
            <li >
            <a href="{{ route('agent_view') }}">
                    <i class="tim-icons icon-badge"></i>
                    <p>{{ __('View Profile') }}</p>
                </a>
            </li>
            <li >
            <a href="{{ route('profile.edit') }}">
                    <i class="tim-icons icon-pencil"></i>
                    <p>{{ __('Edit Profile') }}</p>
                </a>
            </li>
            <li  >
            <a href="{{ route('profile.edit') }}">
                    <i class="tim-icons icon-image-02"></i>
                    <p>{{ __('Change Profile Picture') }}</p>
                </a>
            </li>
            <li >
            <a href="{{ route('profile.edit') }}">
                    <i class="tim-icons icon-key-25"></i>
                    <p>{{ __('Change Password') }}</p>
                </a>
            </li>
            <li >
                <a href="{{ route('agent_feedback') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Feedback') }}</p>
                </a>
            </li>
            <li  >
                <a href="{{ route('agent_chat') }}">
                    <i class="tim-icons icon-chat-33"></i>
                    <p>{{ __('Chat') }}</p>
                </a>
            </li>
            <li class="  bg-info">
                <a href="{{ route('agent_upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
