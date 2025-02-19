<div class="h-screen w-64 bg-white border-r border-gray-200 fixed">
    <!-- Sidebar Header -->
    <div class="py-4 px-6">
        <h2 class="text-xl font-bold text-gray-800">Church Admin</h2>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-4">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-200">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
            </li>

            @if(auth()->user()->role == 'admin')
            <li>
                <a href="{{ route('users.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-200">
                    <i class="fas fa-users mr-3"></i> Manage Users
                </a>
            </li>
            <li>
                <a href="{{ route('finances.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-200">
                    <i class="fas fa-dollar-sign mr-3"></i> Finances
                </a>
            </li>
            @endif

            @if(auth()->user()->role == 'pastor' || auth()->user()->role == 'admin')
            <li>
                <a href="{{ route('attendance.index') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-200">
                    <i class="fas fa-calendar-check mr-3"></i> Attendance
                </a>
            </li>
            @endif

            <li>
                <a href="{{ route('profile.edit') }}" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-200">
                    <i class="fas fa-user mr-3"></i> Profile
                </a>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="flex items-center px-6 py-3 text-gray-700 hover:bg-gray-200 w-full text-left">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>
