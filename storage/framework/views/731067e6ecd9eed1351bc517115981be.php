

<?php $__env->startSection('content'); ?>
<?php
// Provide fallbacks for all chart variables
$assembliesChartData = $assembliesChartData ?? ['labels' => [], 'data' => []];
$membersChartData = $membersChartData ?? ['labels' => [], 'data' => []];
$eventsChartData = $eventsChartData ?? ['labels' => [], 'data' => []];
$offeringsChartData = $offeringsChartData ?? ['labels' => [], 'data' => []];

// Provide fallbacks for all count variables
$assembliesCount = $assembliesCount ?? 0;
$membersCount = $membersCount ?? 0;
$eventsCount = $eventsCount ?? 0;
$offeringsCount = $offeringsCount ?? 0;
?>

<div class="dashboard-container"> <!-- Removed px-1 -->
    <section class="content-header">
        <div class="row align-items-center mb-2"> <!-- Reduced margin -->
            <div class="col-12">
                <h1 class="dashboard-title">Admin Dashboard</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <?php if(session('error')): ?>
            <div class='alert alert-danger alert-dismissible fade show' role="alert">
                <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <div class='alert alert-success alert-dismissible fade show' role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Stat Cards -->
        <div class="row mx-0">
            <div class="col-12 col-md-6 col-lg-3 px-1 mb-2">
                <div class="stat-card bg-primary text-white">
                    <div class="stat-card-inner">
                        <div class="stat-content">
                            <h3 class="stat-number"><?php echo e($assembliesCount); ?></h3>
                            <p class="stat-label">Branches</p>
                        </div>
                        <div class="stat-icon">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                    <a href="#" class="stat-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 px-1 mb-2">
                <div class="stat-card bg-success text-white">
                    <div class="stat-card-inner">
                        <div class="stat-content">
                            <h3 class="stat-number"><?php echo e($membersCount); ?></h3>
                            <p class="stat-label">Members</p>
                        </div>
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <a href="#" class="stat-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 px-1 mb-2">
                <div class="stat-card bg-warning text-white">
                    <div class="stat-card-inner">
                        <div class="stat-content">
                            <h3 class="stat-number"><?php echo e($eventsCount); ?></h3>
                            <p class="stat-label">Events</p>
                        </div>
                        <div class="stat-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                    </div>
                    <a href="#" class="stat-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 px-1 mb-2">
                <div class="stat-card bg-danger text-white">
                    <div class="stat-card-inner">
                        <div class="stat-content">
                            <h3 class="stat-number"><?php echo e($offeringsCount); ?></h3>
                            <p class="stat-label">Offerings</p>
                        </div>
                        <div class="stat-icon">
                            <i class="fas fa-money"></i>
                        </div>
                    </div>
                    <a href="#" class="stat-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row mx-0">
            <div class="col-12 col-lg-6 px-1 mb-2">
                <div class="box box-primary chart-container">
                    <div class="box-header with-border">
                        <h3 class="box-title">Branches Overview</h3>
                    </div>
                    <div class="box-body">
                        <canvas id="assembliesChart" style="height: 200px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-1 mb-2">
                <div class="box box-info chart-container">
                    <div class="box-header with-border">
                        <h3 class="box-title">Members Overview</h3>
                    </div>
                    <div class="box-body">
                        <canvas id="membersChart" style="height: 200px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-1 mb-2">
                <div class="box box-warning chart-container">
                    <div class="box-header with-border">
                        <h3 class="box-title">Events Overview</h3>
                    </div>
                    <div class="box-body">
                        <canvas id="eventsChart" style="height: 200px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-1 mb-2">
                <div class="box box-danger chart-container">
                    <div class="box-header with-border">
                        <h3 class="box-title">Offerings Overview</h3>
                    </div>
                    <div class="box-body">
                        <canvas id="offeringsChart" style="height: 200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .dashboard-container {
        width: 100%;
        max-width: 100vw;
        overflow-x: hidden;
        padding: 0.5rem 0.25rem; /* Reduced horizontal padding */
    }

    .dashboard-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
    }

    .stat-card {
        width: 100%;
        max-width: 100%;
        border-radius: 0.25rem;
        margin-bottom: 0;
        min-width: auto; /* Remove min-width constraint */
    }

    .stat-card:hover {
        transform: translateY(-3px);
    }

    .stat-card-inner {
        padding: 0.5rem 0.25rem;
        min-height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stat-content {
        flex: 1;
        min-width: 0; /* Prevent content from forcing width */
    }

    .stat-number {
        font-size: 1rem;
        font-weight: 600;
        margin: 0;
        line-height: 1;
        white-space: nowrap;
    }

    .stat-label {
        font-size: 0.7rem; /* Smaller font */
        margin: 0;
        white-space: nowrap; /* Prevent text wrapping */
        overflow: hidden;
        text-overflow: ellipsis; /* Add ellipsis for overflow */
    }

    .stat-icon {
        font-size: 1.2rem;
        width: 20px;
        text-align: center;
        margin-left: 0.25rem;
        opacity: 0.8;
    }

    .stat-footer {
        padding: 0.2rem;
        font-size: 0.7rem;
        background: rgba(0, 0, 0, 0.1);
        color: inherit;
        text-decoration: none;
        display: block;
        text-align: center;
    }

    .stat-footer:hover {
        background: rgba(0, 0, 0, 0.15);
        color: inherit;
    }

    /* Chart container styles */
    .chart-container {
        width: 100%;
        margin: 0;
        border-radius: 0.25rem;
    }

    .box {
        height: 100%;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .box-header {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid #eee;
    }

    .box-body {
        padding: 1rem;
        position: relative;
        min-height: 250px;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .stat-number {
            font-size: 1.5rem;
        }

        .stat-icon {
            font-size: 2rem;
        }

        .stat-label {
            font-size: 0.875rem;
        }
    }

    @media (min-width: 768px) {
        .dashboard-container {
            padding: 1rem;
        }

        .stat-card-inner {
            padding: 1rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .stat-label {
            font-size: 1rem;
        }

        .stat-icon {
            font-size: 2rem;
            margin-left: 0.5rem;
        }

        .stat-footer {
            padding: 0.5rem;
            font-size: 0.875rem;
        }

        .box {
            margin-bottom: 1rem;
        }

        .box-header,
        .box-body {
            padding: 1rem;
        }

        .box-title {
            font-size: 1.1rem;
        }

        /* Restore original column sizes for larger screens */
        .col-6 {
            flex: 0 0 25%;
            max-width: 25%;
        }
    }

    /* Adjust chart containers for better mobile display */
    .box {
        margin-bottom: 1rem;
    }

    .box-body {
        padding: 0.75rem;
    }

    @media (min-width: 768px) {
        .box {
            margin-bottom: 1.5rem;
        }

        .box-body {
            padding: 1.5rem;
        }
    }

    /* Container adjustments */
    .row {
        margin-left: -0.25rem;
        margin-right: -0.25rem;
    }

    .col-6 {
        padding-left: 0.25rem;
        padding-right: 0.25rem;
    }

    @media (max-width: 767px) {
        .dashboard-container {
            padding: 0.5rem;
        }

        .col-12 {
            padding: 0 0.5rem;
        }

        .chart-container {
            margin-bottom: 1rem;
        }

        .box-header {
            padding: 0.5rem;
        }

        .box-body {
            padding: 0.5rem;
            min-height: 200px;
        }

        canvas {
            width: 100% !important;
            height: auto !important;
        }
    }

    @media (min-width: 768px) {
        .chart-container {
            margin-bottom: 1.5rem;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(function(){
        var assembliesChartCanvas = $('#assembliesChart').get(0).getContext('2d');
        var assembliesChart = new Chart(assembliesChartCanvas, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($assembliesChartData['labels'], 15, 512) ?>,
                datasets: [{
                    label: 'Assemblies',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    data: <?php echo json_encode($assembliesChartData['data'], 15, 512) ?>
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var membersChartCanvas = $('#membersChart').get(0).getContext('2d');
        var membersChart = new Chart(membersChartCanvas, {
            type: 'pie',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: 'Members',
                    backgroundColor: ['#3b8bba', '#f56954'],
                    data: <?php echo json_encode($membersChartData['data'], 15, 512) ?>
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        var eventsChartCanvas = $('#eventsChart').get(0).getContext('2d');
        var eventsChart = new Chart(eventsChartCanvas, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($eventsChartData['labels'], 15, 512) ?>,
                datasets: [{
                    label: 'Events',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    data: <?php echo json_encode($eventsChartData['data'], 15, 512) ?>
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var offeringsChartCanvas = $('#offeringsChart').get(0).getContext('2d');
        var offeringsChart = new Chart(offeringsChartCanvas, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($offeringsChartData['labels'], 15, 512) ?>,
                datasets: [{
                    label: 'Offerings',
                    backgroundColor: ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    data: <?php echo json_encode($offeringsChartData['data'], 15, 512) ?>
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Meshack\Desktop\church_management\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>