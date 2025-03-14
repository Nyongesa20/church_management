<aside class="main-sidebar sidebar-dark-primary elevation-4" x-data="{ sidebarOpen: window.innerWidth > 768 }" :class="{'collapsed': !sidebarOpen, 'expanded': sidebarOpen}" @resize.window="sidebarOpen = window.innerWidth > 768 ? true : sidebarOpen">
    <!-- Top Section with Menu Toggle Button -->
    <div class="top-section">
        <!-- This button appears only on small screens -->
        <button class="menu-toggle" @click="sidebarOpen = !sidebarOpen">
            <i class="fas" :class="sidebarOpen ? 'fa-times' : 'fa-bars'"></i>
        </button>
    </div>

    <!-- Sidebar Content -->
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="user-avatar mr-3">
                        <img src="https://ui-avatars.com/api/?name=<?php echo e(Auth::user()->name); ?>&background=random" 
                             alt="Profile" 
                             class="profile-image">
                    </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['class' => 'nav-link','href' => route('dashboard'),'active' => request()->routeIs('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'nav-link','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('dashboard')),'active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <span class="menu-text">Dashboard</span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
                </li>
                
                <?php if(Auth::user()->role == 'Admin'): ?>
                <li class="nav-header">Manage</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <span class="menu-text">Branches</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.members')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <span class="menu-text">Members</span>
                    </a>
                </li>

                <li class="nav-header">Reports</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <span class="menu-text">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <span class="menu-text">Sermons</span>
                    </a>
                </li>
                
                <?php elseif(Auth::user()->role == 'Pastor'): ?>
                <li class="nav-header">Pastor</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <span class="menu-text">Pastor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.members')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <span class="menu-text">Pastor</span>
                    </a>
                </li>

                <li class="nav-header">Pastor</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <span class="menu-text">Pastor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <span class="menu-text">Pastor</span>
                    </a>
                </li>
                
                <?php elseif(Auth::user()->role == 'Member'): ?>
                <li class="nav-header">Manage</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <span class="menu-text">Member</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.members')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <span class="menu-text">Member</span>
                    </a>
                </li>

                <li class="nav-header">Reports</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <span class="menu-text">Member</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <span class="menu-text">Member</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>

<style>
    /* Basic Sidebar Styles */
    .main-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 250px;
        transition: all 0.3s ease;
        z-index: 1000;
        background-color: #343a40; /* Dark background for the sidebar */
    }

    .main-sidebar.collapsed {
        width: 70px;
    }

    .main-sidebar.expanded {
        width: 250px;
    }

    /* Top Section with Toggle Button */
    .top-section {
        height: 8vh;
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .menu-toggle {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        display: none; /* Hidden by default on large screens */
    }

    .menu-toggle i {
        color: grey;
    }

    /* User Panel Styling */
    .user-panel {
        padding: 10px 15px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 15px;
    }

    .user-panel .image {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .user-panel .image img {
        width: 100%;
        height: auto;
        border-radius: 50%;
    }

    .user-panel .info a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    /* Navigation Styling */
    .nav-header {
        color: #adb5bd;
        font-size: 0.8rem;
        text-transform: uppercase;
        padding: 12px 15px 5px;
        font-weight: 700;
    }

    .nav-link {
        padding: 10px 15px;
        color: #c2c7d0;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .nav-link i {
        margin-right: 10px;
        font-size: 1.1rem;
        width: 20px;
        text-align: center;
    }

    /* Collapsed State Styling */
    .main-sidebar.collapsed .menu-text,
    .main-sidebar.collapsed .user-panel .info,
    .main-sidebar.collapsed .nav-header {
        display: none;
    }

    .main-sidebar.collapsed .nav-link {
        text-align: center;
        justify-content: center;
        padding: 12px 5px;
    }

    .main-sidebar.collapsed .nav-link i {
        margin-right: 0;
    }

    /* Responsive Behavior */
    @media (max-width: 768px) {
        .main-sidebar {
            width: 50px; /* Default collapsed state on mobile */
        }

        .main-sidebar.expanded {
            width: 200px;
        }

        .menu-toggle {
            display: block; /* Show toggle button on small screens */
        }

        .main-sidebar .menu-text,
        .main-sidebar .user-panel .info,
        .main-sidebar .nav-header {
            display: none; /* Hide by default on small screens */
        }

        .main-sidebar .nav-link {
            justify-content: center;
            padding: 12px 5px;
        }

        .main-sidebar .nav-link i {
            margin-right: 0;
        }

        /* When expanded on mobile */
        .main-sidebar.expanded .menu-text,
        .main-sidebar.expanded .user-panel .info,
        .main-sidebar.expanded .nav-header {
            display: block;
        }

        .main-sidebar.expanded .nav-link {
            justify-content: flex-start;
            padding: 10px 15px;
        }

        .main-sidebar.expanded .nav-link i {
            margin-right: 10px;
        }
    }

    /* Main Content Adjustment */
    .content-wrapper {
        margin-left: 250px;
        transition: margin-left 0.3s ease;
        padding: 20px;
    }

    .main-sidebar.collapsed ~ .content-wrapper {
        margin-left: 70px;
    }

    @media (max-width: 768px) {
        .content-wrapper {
            margin-left: 60px;
        }

        .main-sidebar.expanded ~ .content-wrapper {
            margin-left: 200px;
        }
    }

    /* Utility for Alpine.js */
    [x-cloak] {
        display: none !important;
    }
</style><?php /**PATH C:\Users\Meshack\Desktop\church_management\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>