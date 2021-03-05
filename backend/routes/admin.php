<?php

Route::get('/home',function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    return view('dashboard.dashboard');
})->name('home')->middleware('permission:dashboard-view');

