<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('about', function () {
    return view('common.about');
})->name('common.about');

Route::group(['prefix' => 'patient'], function () {
    Route::get('register', function () {
        return view('patient.register');
    })->name('patient.register');

    Route::post('register', function (\Illuminate\Http\Request $request,
        \Illuminate\Validation\Factory $validator) {

        $validation = $validator->make($request->all(), [
            'username'         => 'required|min:4',
            'password'         => 'required|min:6',
            'confirm-password' => 'same:password',
            'first-name' => 'required'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }

        return "Hello world !"; //  redirect()-> route('staff', ['id' => 1]);

    })->name('patient.register');

    Route::get('update/{id}', function ($id) {
        $patient;
        if ($id == 1) {
            $patient = [
                'username'  => 'Foo',
                'firstName' => 'Alpha',
                'lastName'  => 'Mamadou',
            ];
        } else {
            $patient = [
                'username'  => 'something',
                'firstName' => 'unknown',
                'lastName'  => 'unknown',
            ];
        }

        return view('patient.update', ['patient' => $patient]);
    })->name('patient.update');

    Route::get('/{id}', function ($id) {
        return view('patient.patient');
    })->name('patient');
});

Route::get('staff/{id}', function ($id) {
    return view('medical-staff.medical-staff');
})->name('staff');
