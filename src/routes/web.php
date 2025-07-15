<?php
use Illuminate\Support\Facades\Route;

Route::get('/paymoney/ping', function () {
    return response()->json(['message' => 'Paymoney package aktif']);
});
