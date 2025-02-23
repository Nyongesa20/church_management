<div class="w-64 h-screen bg-white shadow-lg fixed top-0 right-0">
    <div class="p-4">
        <h2 class="text-2xl font-semibold text-gray-800">Admin Panel</h2>
    </div>
    <ul class="mt-6 space-y-2">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-tachometer-alt w-6"></i>
                <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('services.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-hand-holding-heart w-6"></i>
                <span class="ml-3">Services</span>
            </a>
        </li>
        <li>
            <a href="{{ route('attendance.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-calendar-check w-6"></i>
                <span class="ml-3">Attendance</span>
            </a>
        </li>
        <li>
            <a href="{{ route('finances.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-coins w-6"></i>
                <span class="ml-3">Finance</span>
            </a>
        </li>
        <li>
            <a href="{{ route('ministries.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-sitemap w-6"></i>
                <span class="ml-3">Departments</span>
            </a>
        </li>
        <li>
            <a href="{{ route('prayer.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-praying-hands w-6"></i>
                <span class="ml-3">Prayer Requests</span>
            </a>
        </li>
        <li>
            <a href="{{ route('announcements.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-bullhorn w-6"></i>
                <span class="ml-3">Announcements</span>
            </a>
        </li>
        <li>
            <a href="{{ route('profile.index') }}" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-user-circle w-6"></i>
                <span class="ml-3">Profile</span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="flex items-center p-3 text-red-600 hover:bg-red-100">
                <i class="fas fa-sign-out-alt w-6"></i>
                <span class="ml-3">Logout</span>
            </a>
        </li>
        <li>
            <a href="/members" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-users w-6"></i>
                <span class="ml-3">Members</span>
            </a>
        </li>
        <li>
            <a href="/events" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-calendar-alt w-6"></i>
                <span class="ml-3">Events</span>
            </a>
        </li>
        <li>
            <a href="/donations" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-donate w-6"></i>
                <span class="ml-3">Donations</span>
            </a>
        </li>
        <li>
            <a href="/settings" class="flex items-center p-3 text-gray-800 hover:bg-blue-100 hover:text-blue-600">
                <i class="fas fa-cogs w-6"></i>
                <span class="ml-3">Settings</span>
            </a>
        </li>
    </ul>
</div>
