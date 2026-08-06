<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// function students (Action Controller)
Route::name('students.')->prefix('students')->group(function(){
   
    //daftar(index)
    Route::get('/', [StudentController::class, 'index'])->name('index');
    //detail(show)
    //tambah(create)
    Route::get('/create',[StudentController::class, 'create'])->name('create');
    //edit(edit)
    Route::get('/{id}',[StudentController::class, 'show'])->name('show');//->whereNumber('');
    Route::get('/{id}/edit',[StudentController::class, 'edit'])->name('edit');
    //logika tambah(store)
    Route::post('/',[StudentController::class, 'store'])->name('store');
    //logika edit(update)
    Route::put('/{id}',[StudentController::class, 'update'])->name('update');
    //logika hapus(delete)
    Route::delete('/{id}',[StudentController::class, 'destroy'])->name('destroy');
});


// function teacher (Action Controller)
Route::name('teachers.')->prefix('teachers')->group(function(){
   
    //daftar(index)
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    //detail(show)
    Route::get('/create',[TeacherController::class, 'create'])->name('create');
    Route::get('/{id}',[TeacherController::class, 'show'])->name('show');//->whereNumber('');
    //tambah(create)
    //edit(edit)
    Route::get('/{id}/edit',[TeacherController::class, 'edit'])->name('edit');
    //logika tambah(store)
    Route::post('/',[TeacherController::class, 'store'])->name('store');
    //logika edit(update)
    Route::put('/{id}',[TeacherController::class, 'update'])->name('update');
    //logika hapus(delete)
    Route::delete('/{id}',[TeacherController::class, 'destroy'])->name('destroy');
});


// function classes (Invoke Controller)
Route::name('classes.')->prefix('classes')->group(function(){
   
    //daftar(index)
    Route::get('/', IndexController::class)->name('index');
    //detail(show)
    Route::get('/create',CreateController::class)->name('create');
    Route::get('/{id}',ShowController::class)->name('show');//->whereNumber('');
    //tambah(create)
    //edit(edit)
    Route::get('/{id}/edit',EditController::class)->name('edit');
    //logika tambah(store)
    Route::post('/',StoreController::class)->name('store');
    //logika edit(update)
    Route::put('/{id}',UpdateController::class)->name('update');
    //logika hapus(delete)
    Route::delete('/{id}',DestroyController::class)->name('destroy');
});


// function major (Resource Controller)
Route::resource('majors', MajorController::class);


