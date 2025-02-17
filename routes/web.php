<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    $alumnos = DB::select("
        SELECT persona.*, carrera.nombre AS carrera 
        FROM persona
        INNER JOIN carrera ON persona.carrera_id = carrera.id
    ");

    return view('index', compact('alumnos'));
});
