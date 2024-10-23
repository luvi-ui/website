<?php

use App\Livewire\DemoCards;
use App\Livewire\DemoForms\AccountForm;
use App\Livewire\DemoForms\AppearanceForm;
use App\Livewire\DemoForms\NotificationsForm;
use App\Livewire\DemoForms\ProfileForm;
use App\Livewire\DemoMail\Mail;
use App\Livewire\Playground;
use Illuminate\Http\Request;
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

Route::get('/imprint', function () {
    return view('imprint');
});

Route::get('/examples/cards', DemoCards::class);
Route::get('/examples/forms', ProfileForm::class);
Route::get('/examples/forms/account', AccountForm::class);
Route::get('/examples/forms/appearance', AppearanceForm::class);
Route::get('/examples/forms/notifications', NotificationsForm::class);

Route::get('/examples/mail/{inbox}/{mail:id?}', Mail::class)->name('inbox');

if (app()->isLocal()) {
    Route::get('/playground', Playground::class);

    Route::post('/playground', function (Request $request) {
        $request->validate([
            'test' => 'required|string|min:8',
        ]);

        return 'Request was validated!';
    });
}
