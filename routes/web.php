<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/locale/switch/{locale}', function (Request $request, string $locale) {
    $allowedLocales = ['lv', 'en'];

    if (in_array($locale, $allowedLocales, true)) {
        $request->session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('locale.switch');

Route::get('/home', function () {
    return view('pages.home');
});