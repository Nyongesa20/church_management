<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\PrayerController;
use App\Http\Controllers\Admin\MinistryController;
use App\Http\Controllers\Admin\FinanceController; // Ensure this is imported
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SermonController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\VersionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login'); // Changed to load the login view directly
});

// User Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index'); // Added route
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/services', ServiceController::class);
    Route::resource('/attendance', AttendanceController::class);
    Route::resource('/prayer', PrayerController::class);
    Route::resource('/ministries', MinistryController::class);
    Route::resource('/finances', FinanceController::class); // Ensure this route is defined
    Route::resource('/expenses', ExpenseController::class);
    Route::resource('/reports', ReportController::class);
    Route::resource('/sermons', SermonController::class);
    Route::resource('/announcements', AnnouncementController::class);
    Route::resource('/blogs', BlogController::class);
    Route::resource('/newsletters', NewsletterController::class);
    Route::resource('/settings', SettingsController::class);
    Route::resource('/backups', BackupController::class);
    Route::resource('/notifications', NotificationController::class);
    Route::resource('/themes', ThemeController::class);
    Route::resource('/support', SupportController::class);
    Route::resource('/versions', VersionController::class);
});

require __DIR__.'/auth.php';
