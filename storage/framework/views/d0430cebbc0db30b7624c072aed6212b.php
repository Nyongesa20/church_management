


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Menu Toggle Button -->
   

    <!-- Sidebar -->
    <div class="sidebar">
    <button class="menu-toggle" id="menuToggle">
    <i class="fas fa-angle-double-right"></i>
</button>
        <!-- User Panel -->
        <div class="user-panel d-flex">
            <div class="image">
                <img src="<?php echo e(asset('path/to/user.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
            </div>
        </div>
        

        <!-- Navigation Links -->
        <nav>
        <nav class="mt-2">
        <ul class="nav flex-column">
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
                    <i class="fas fa-tachometer-alt"></i>
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
            </ul>
        </nav>
            <ul class="nav flex-column">
                
                <?php if(Auth::user()->role == 'Admin'): ?>
                <li class="nav-header">Manage</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-building"></i>
                        <span class="menu-text">Assemblies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.members')); ?>" class="nav-link">
                        <i class="fas fa-users"></i>
                        <span class="menu-text">Members</span>
                    </a>
                </li>

                <li class="nav-header">Reports</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span class="menu-text">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span class="menu-text">Sermons</span>
                    </a>
                </li>


                <?php elseif(Auth::user()->role == 'Pastor'): ?>
                <li class="nav-header">Manage</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-building"></i>
                        <span class="menu-text">Assemblies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.members')); ?>" class="nav-link">
                        <i class="fas fa-users"></i>
                        <span class="menu-text">Members</span>
                    </a>
                </li>

                <li class="nav-header">Reports</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span class="menu-text">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span class="menu-text">Sermons</span>
                    </a>
                </li>


                <?php elseif(Auth::user()->role == 'Member'): ?>
                <li class="nav-header">Manage</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-building"></i>
                        <span class="menu-text">Assemblies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.members')); ?>" class="nav-link">
                        <i class="fas fa-users"></i>
                        <span class="menu-text">Members</span>
                    </a>
                </li>

                <li class="nav-header">Reports</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <span class="menu-text">Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span class="menu-text">Sermons</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>
<style>
    /* Basic Sidebar Styles */
    .sidebar {
        width: 200px;
        transition: width 0.3s ease;
        background-color:grey;
        height: 100vh;
    }

    .sidebar.collapsed {
        width: 70px;
    }

    /* Hide User Info & Menu Headers on Collapse */
    .sidebar.collapsed .user-panel .info,
    .sidebar.collapsed .user-panel .image,
    .sidebar.collapsed .nav-header {
        display: none;
    }

    .menu-toggle {
    position: fixed; /* Fixed to always stay visible */
    top: 0px;
    left: 10px;
    z-index: 1000; /* Ensure it's above the sidebar */
    background: #007bff;
    border: none;
    color: #fff;
    font-size: 1.5rem;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}


    .menu-text {
        display: inline;
    }

    .sidebar.collapsed .menu-text {
        display: none;
    }

    .sidebar.collapsed .nav-link {
        text-align: center;
    }

    /* Responsive Behavior */
    @media (max-width: 768px) {
        .sidebar {
            width: 50px;
        }

        .sidebar .user-panel .info,
        .sidebar .user-panel .image,
        .nav-header {
            display: none;
        }

        .menu-text {
            display: none;
        }

        .nav-link {
            text-align: center;
        }
    }

    /* Show User Info and Categories on Expand */
    @media (max-width: 768px) {
        .sidebar.expanded {
            width: 140px;
        }

        .sidebar.expanded .user-panel .info,
        .sidebar.expanded .user-panel .image,
        .sidebar.expanded .nav-header {
            display: block;
        }

        .sidebar.expanded .menu-text {
            display: inline;
        }

        .sidebar.expanded .nav-link {
            text-align: left;
        }
    }
</style>

<script>
    const menuToggle = document.getElementById('menuToggle');
const sidebar = document.querySelector('.sidebar');

menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    sidebar.classList.toggle('expanded');

    // Update the button icon
    menuToggle.innerHTML = sidebar.classList.contains('collapsed') 
        ? '<i class="fas fa-angle-double-right"></i>' 
        : '<i class="fas fa-angle-double-left"></i>';
});

</script>
<?php /**PATH C:\Users\Meshack\Desktop\church_management\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>