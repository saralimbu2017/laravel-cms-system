<?php
  Route::get('/permissions',[App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');

  Route::post('/permissions',[App\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');

?>