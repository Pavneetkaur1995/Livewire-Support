<?php

use App\Livewire\Form;
use App\Livewire\Support;


\Illuminate\Support\Facades\Route::get('form', Form::class);


// User Support section routes start

Route::get('/send-support-request',Support::class);

// User Support section routes ends 
