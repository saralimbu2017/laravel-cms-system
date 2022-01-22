<?php
  Route::get('/roles',[App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');

  Route::post('/roles',[App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');

  Route::post('/roles/{role}/destroy',[App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');

?>