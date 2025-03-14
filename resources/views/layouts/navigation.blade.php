<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 nav-container">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex logo-container"> <!-- Added logo-container class -->
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <div class="flex items-center cursor-pointer">
                            <div class="user-avatar">
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=random" 
                                     alt="Profile" 
                                     class="profile-image">
                            </div>
                            <span class="ml-2 text-gray-700 text-sm font-medium">{{ Auth::user()->name }}</span>
                        </div>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Mobile menu button -->
            <div class="-me-2 flex items-center sm:hidden">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <div class="user-avatar cursor-pointer">
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=random" 
                                 alt="Profile" 
                                 class="profile-image">
                        </div>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-2">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<style>
    .nav-container {
        margin-left: 0;
        transition: margin-left 0.3s ease;
    }

    .user-avatar {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: transform 0.2s;
    }

    .user-avatar:hover {
        transform: scale(1.05);
    }

    .profile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mobile-menu-button {
        padding: 0.5rem;
        color: #718096;
        border-radius: 0.375rem;
    }

    .mobile-menu-button:hover {
        color: #4a5568;
        background-color: #f7fafc;
    }

    .logo-container {
        margin-left: 50px;
        transition: margin-left 0.3s ease;
    }

    @media (min-width: 768px) {
        .logo-container {
            margin-left: 230px;
        }
    }
</style>
