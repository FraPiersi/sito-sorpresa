<?php

use Illuminate\Support\Facades\Route;

// 1. Pagina iniziale con il primo countdown
Route::get('/', function () {
    return view('inizio');
});

// 2. Prima pagina con un messaggio
Route::get('/motivo-1', function () {
    $messaggio = "La sincerità e la solarità con cui affronti ogni problema";
    $prossima_rotta = '/motivo-2';
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});

// 3. Seconda pagina con un altro messaggio
Route::get('/motivo-2', function () {
    $messaggio = "Ogni momento con te diventa un qualcosa di indimenticabile.";
    $prossima_rotta = '/motivo-3'; 
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});

Route::get('/motivo-3', function () {
    $messaggio = "Anche nelle giornate più buie basta un tuo sorriso per risollevarmi";
    $prossima_rotta = '/motivo-4'; // L'ultima pagina con messaggio punta alla dedica finale
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});
Route::get('/motivo-4', function () {
    $messaggio = "Una delle certezze che ho è che riuscirai sempre a stupirmi.";
    $prossima_rotta = '/motivo-5'; // L'ultima pagina con messaggio punta alla dedica finale
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});
Route::get('/motivo-5', function () {
    $messaggio = "Con te mi sento al sicuro, so che posso dirti tutto.";
    $prossima_rotta = '/motivo-6'; // L'ultima pagina con messaggio punta alla dedica finale
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});
Route::get('/motivo-6', function () {
    $messaggio = "Mi spingi sempre a credere in me stesso.";
    $prossima_rotta = '/motivo-7'; // L'ultima pagina con messaggio punta alla dedica finale
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});
Route::get('/motivo-7', function () {
    $messaggio = "Nonostante tutti i miei sbagli e i miei errori sei sempre al mio fianco, provando e riprovando...";
    $prossima_rotta = '/motivo-8'; // L'ultima pagina con messaggio punta alla dedica finale
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});
Route::get('/motivo-8', function () {
    $messaggio = "mi rendi felice. Non so dire molto altro, è così e basta.";
    $prossima_rotta = '/finale'; // L'ultima pagina con messaggio punta alla dedica finale
    return view('messaggio', compact('messaggio', 'prossima_rotta'));
});


// 4. Pagina finale con la dedica
Route::get('/finale', function () {
    $dedica = "E questi sono solo alcuni dei mille motivi per cui ti amo. Sei l'unica persona che voglio accanto.
    Sei la persona con cui voglio condividere il resto della mia vita. Sei il mio Angelo. Sei il mio tutto. ❤️";
    return view('finale', compact('dedica'));
});