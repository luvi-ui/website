<?php

use App\Livewire\Boom;
use App\Livewire\DemoCards;
use App\Livewire\DemoForms\AccountForm;
use App\Livewire\DemoForms\AppearanceForm;
use App\Livewire\DemoForms\NotificationsForm;
use App\Livewire\DemoForms\ProfileForm;
use App\Livewire\DemoMail\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view(// });

Route::get('/', Mail::class);

Route::get('/boom', Boom::class);

Route::get('/examples/cards', DemoCards::class);
Route::get('/examples/forms', ProfileForm::class);
Route::get('/examples/forms/account', AccountForm::class);
Route::get('/examples/forms/appearance', AppearanceForm::class);
Route::get('/examples/forms/notifications', NotificationsForm::class);

Route::get('/examples/mail/{inbox}/{mail:id?}', Mail::class)->name('inbox');
