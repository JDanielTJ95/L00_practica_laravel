<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::get('/test-db', function () {
    try {
        
        $tablas = DB::select('SHOW TABLES');
        
        return response()->json([
            'status' => 'Conexión exitosa',
            'database' => DB::connection()->getDatabaseName(),
            'total_tablas' => count($tablas),
            'tablas' => $tablas
        ]);

    } catch (\Exception $e) {

        return response()->json([
            'status' => 'Error de conexión',
            'mensaje' => $e->getMessage()
        ], 500);
        
    }
});
