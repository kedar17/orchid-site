<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
	DashboardController,
	ClientController,
	AdminContactController,
	UserController,
	ProjectController,
    ExpenseTrackController,
    FinanceBillingController,
    PaymentSettlementComtroller,
    TaskController
};
use App\Http\Controllers\{
HomeController,AboutController,
ServiceDetailsController,ContactController,
};

Route::middleware(['auth'])->group(function () {
	Route::get('/admin', [DashboardController::class, 'index']);
	Route::post('/dashboard/filter-tasks', [DashboardController::class, 'filterTasks'])->name('filter-tasks');


	Route::get('/clients', [ClientController::class, 'index'])->name('clients');
	Route::post('add-client', [ClientController::class, 'addClient'])->name('add-client');
	Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
	Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

	Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts');
	Route::post('add-contact', [AdminContactController::class, 'addContact'])->name('add-contact');
	Route::put('/contacts/{contact}', [AdminContactController::class, 'update'])->name('contacts.update');
	Route::delete('/contacts/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');

	Route::get('/users', [UserController::class, 'index'])->name('users');
	Route::post('add-user', [UserController::class, 'addUser'])->name('add-user');
	Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
	Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
	

	Route::get('projects', [ProjectController::class, 'index'])->name('projects');
	Route::get('/projects/{id}', [ProjectController::class, 'projectDetails'])->name('projects.details');
	Route::post('add-project', [ProjectController::class, 'addProject'])->name('add-project');
	Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
	Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

	Route::get('task-management', [TaskController::class, 'index'])->name('task-management');
	Route::post('add-task', [TaskController::class, 'addTask'])->name('add-task');
	Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
	Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

	//finance & billing
	Route::get('finance-billing', [FinanceBillingController::class, 'index'])->name('finance-billing');
	Route::post('add-billing', [ExpenseTrackController::class, 'addBilling'])->name('add-billing');
	Route::get('/billing/filter', [ExpenseTrackController::class, 'filterBilling'])->name('filter-billing');
	Route::put('/billing/{billing}', [ExpenseTrackController::class, 'update'])->name('billing.update');
	Route::delete('/billing/{id}', [ExpenseTrackController::class, 'destroy'])->name('billing.destroy');
	
	//kRoute::get('finance-billing', [FinanceBillingController::class, 'index']);

	Route::get('payment-settlement', [PaymentSettlementComtroller::class, 'index']);


	Route::post('/logout', [UserController::class, 'logout'])
		->name('logout')
		->middleware('auth');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/our-services', [ServiceDetailsController::class, 'index'])->name('service');
Route::get('/insights', [ServiceDetailsController::class, 'insight'])->name('insight');
Route::get('/contact-us', [ContactController::class, 'index'])->name('/contact-us');
Route::post('contact-form', [ContactController::class, 'getFormData'])->name('contact-form');