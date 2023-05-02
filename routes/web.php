<?php

use App\Http\Controllers\ActionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OriginOfficeController;
use App\Http\Controllers\AutoCompleteController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DocRouteController;
use App\Http\Controllers\DocTypeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MeansOfReceivingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\ImagesController;
use App\Models\DocType;
use App\Models\images;
use App\Models\MeansOfReceiving;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Models\DocRoutes;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use mikehaertl\pdftk\Pdf as Pdf2;
use App\Http\Controllers\ActivityLogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\DivisionActionsController;
use App\Http\Controllers\QrController;
use App\Models\User;
use App\Http\Controllers\OfficesController;


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

Route::get('/files', [FilesController::class, 'index'])->name('files.index');
Route::get('/files/add',  [FilesController::class, 'create'])->name('files.create');
Route::post('/files/add',  [FilesController::class, 'store'])->name('files.store');
// ---------------------------------------------------------------------------
Route::get('/qr', [QrController::class, 'index'])->middleware('auth');

Route::get('/', [DocumentsController::class, 'index'])->name('home')->middleware('auth');
Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
	Route::resource('origin-offices', OriginOfficeController::class);
	Route::resource('offices', OfficesController::class);
	Route::resource('divisions', DivisionController::class);
	Route::resource('doctypes', DocTypeController::class);
	Route::resource('mor', MeansOfReceivingController::class);
	Route::resource('statuses', StatusController::class);

	// --------------------------------- PDF ---------------------------------------------------------
	Route::post('doc/store', [ImagesController::class, 'fileStore'])->name('doc.store');
	Route::delete('doc/delete', [ImagesController::class, 'fileDestroy'])->name('doc.delete');



	// Route::get('/fetchall/0', [DocumentController::class, 'index_all'])->name('fetchAll.docGeneral');



	Route::get('/fetchall_origin_offices', [OriginOfficeController::class, 'fetchAll'])->name('fetchAll.origin_offices');
	Route::delete('/origin_offices_delete', [OriginOfficeController::class, 'destroy'])->name('delete.origin_office');
	Route::delete('/offices_delete', [OfficesController::class, 'destroy'])->name('delete.office');



	Route::get('/fetchall_divisions', [DivisionController::class, 'fetchAll'])->name('fetchAll.divisions');
	Route::get('/list_divisions', [DivisionController::class, 'list'])->name('list.divisions');
	Route::get('/fetcDivision', [DivisionController::class, 'fetchToSelect'])->name('fetch.divisionSelect');
	Route::delete('/division_delete', [DivisionController::class, 'destroy'])->name('delete.division');

	Route::get('/fetchall_doctypes', [DocTypeController::class, 'fetchAll'])->name('fetchAll.doctypes');
	Route::delete('/doctype_delete', [DocTypeController::class, 'destroy'])->name('delete.doctype');

	Route::get('/fetchall_mor', [MeansOfReceivingController::class, 'fetchAll'])->name('fetchAll.mor');
	Route::delete('/mor_delete', [MeansOfReceivingController::class, 'destroy'])->name('delete.mor');



	Route::get('/fetcRoles', [RoleController::class, 'fetchAll'])->name('fetcRoles');
	// Route::get('/fetcActions', [ActionController::class, 'fetchAll'])->name('fetcActions');

	Route::get('/fetcActions', [DivisionActionsController::class, 'fetchAll'])->name('fetcActions');
	// Route::get('/fetchEmployeeDivision', [DivisionActionsController::class, 'fetchAll'])->name('fetchEmployeeDivision');

	// Route::get('/fetchEmployeeDivision', [EmployeeController::class, 'fetchAllEmployeeDivision'])->name('fetchEmployeeDivision');
	// Route::get('/fetchRouteRecepient', [User::class, 'fetchRouteRecepient'])->name('fetchRouteRecepient');



});
// ------------------------------------------------------------------------------------------------------------------------
Route::group([
	'prefix' => 'dashboard',
	'middleware' => 'auth'
], function () {
	Route::get('/', [DocumentsController::class, 'index'])->name('home');
	Route::get('/general', [DocumentsController::class, 'index_all'])->name('home.general');
	Route::get('/masterlist', [DashboardController::class, 'masterlist'])->name('masterlist')->middleware(['role:superadmin']);

	// --------------------------- SEARCH ------------------------------------------
	Route::get('/search', [AutoCompleteController::class, 'index'])->name('search');
	Route::get('/autocomplete', [AutoCompleteController::class, 'autocomplete'])->name('autocomplete');
	Route::get('/live-search', [AutoCompleteController::class, 'livesearch'])->name('live-search');
	// ---------------------------// SEARCH ------------------------------------------
});

Route::group([
	'prefix' => 'profile',
	'middleware' => 'auth'
], function () {
	Route::get('/', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('/', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Route::group([
	'prefix' => 'activity_logs',
	['role:superadmin']
], function () {
	Route::get('/', [ActivityLogsController::class, 'index'])
		->name('activity_logs.activity_log.index');
	Route::get('/create', [ActivityLogsController::class, 'create'])
		->name('activity_logs.activity_log.create');
	Route::get('/show/{activityLog}', [ActivityLogsController::class, 'show'])
		->name('activity_logs.activity_log.show');
	Route::get('/{activityLog}/edit', [ActivityLogsController::class, 'edit'])
		->name('activity_logs.activity_log.edit');
	Route::post('/', [ActivityLogsController::class, 'store'])
		->name('activity_logs.activity_log.store');
	Route::put('activity_log/{activityLog}', [ActivityLogsController::class, 'update'])
		->name('activity_logs.activity_log.update');
	Route::delete('/activity_log/{activityLog}', [ActivityLogsController::class, 'destroy'])
		->name('activity_logs.activity_log.destroy');

	Route::get('/fetch_all', [ActivityLogsController::class, 'fetchAll'])
		->name('activity_logs.activity_log.all');
});


Route::group([
	'prefix' => 'users',
	'middleware' => ['permission:users-create']
	// 'middleware' => ['role:superadmin']
], function () {
// ['middleware' => ['role:superadmin']]
	Route::get('/', [UsersController::class, 'index'])
		->name('users.user.index');
	Route::get('/create', [UsersController::class, 'create'])
		->name('users.user.create');
	Route::post('/store', [UsersController::class, 'store'])->name('store.user');
	Route::get('/fetchall_users', [UsersController::class, 'fetchAll'])->name('fetchAll.users');
	Route::get('/edit', [UsersController::class, 'edit'])
		->name('users.user.edit');
	Route::put('/update', [UsersController::class, 'update'])->name('update.user');
	Route::delete('/delete', [UsersController::class, 'destroy'])->name('delete.user');
});

Route::group([
	'prefix' => 'employees',
	'middleware' => 'auth'
], function () {
	Route::get('/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll.employees');
	Route::post('/store', [EmployeeController::class, 'store'])->name('employees.store');
	Route::delete('/delete', [EmployeeController::class, 'delete'])->name('employees.delete');
	Route::get('/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
	Route::put('/update', [EmployeeController::class, 'update'])->name('employees.update');
	Route::delete('/employee_delete', [EmployeeController::class, 'destroy'])->name('delete.employee');
});

Route::group([
	'prefix' => 'documents',
	'middleware' => 'auth'
], function () {
	Route::get('/fetchall/{division_id}', [DocumentsController::class, 'fetchAll'])->name('fetchAll.doc');
	Route::get('/fetchallroute/{document_id}', [DocumentsController::class, 'fetchAllRoute'])->name('fetchAllRoute');
	// Route::get('/fetchalloverdue/{division_id}/{due_type}', [DocumentsController::class, 'fetchAllOverdue'])->name('fetchAll.overdue');
	Route::get('/fetchalloverdue', [DocumentsController::class, 'fetchAllOverdue'])->name('fetchAll.overdue');
	Route::get('/', [DocumentsController::class, 'index'])
		->name('documents.document.index');
	Route::get('/create', [DocumentsController::class, 'create'])
		->name('documents.document.create');
	Route::get('/show/{document}', [DocumentsController::class, 'show'])
		->name('documents.show');
	Route::get('/edit', [DocumentsController::class, 'edit'])
		->name('documents.document.edit');
	Route::post('/store_ajax', [DocumentsController::class, 'store_ajax'])->name('storeAjax');
	Route::post('/store-file', [DocumentsController::class, 'storeFile'])->name('document.store_file');
	Route::post('/update-file', [DocumentsController::class, 'storeFileUpdate'])->name('document.update_file');
	Route::delete('/document/{document}', [DocumentsController::class, 'destroy'])
		->name('documents.document.destroy');
	Route::put('/markCompleted', [DocumentsController::class, 'markCompleted'])->name('markCompleted.doc')->middleware(['permission:mark-as-complete']);
	Route::put('/archive', [DocumentsController::class, 'archive'])->name('archive.doc')->middleware(['permission:mark-as-complete']);
	Route::put('/sign', [DocumentsController::class, 'sign'])->name('sign.doc')->middleware(['role:superadmin|administrator']);
	Route::put('/releasing', [DocumentsController::class, 'releasing'])->name('releasing.doc')->middleware(['role:superadmin|administrator']);
	Route::put('/return', [DocumentsController::class, 'returnDoc'])->name('return.doc');
	Route::get('/dues/{type}/{office_id}', [DocumentsController::class, 'dues'])->name('dues');

	Route::get('/archiveList', [DocumentsController::class, 'archiveList'])->name('archiveList')->middleware(['permission:view-archive']);
	Route::get('/archiveList/fetch', [DocumentsController::class, 'fetchArchive'])->name('fetchArchive');
	Route::get('/archiveList/fetch/all', [DocumentsController::class, 'fetchArchive'])->name('fetchArchive');
	Route::put('/update', [DocumentsController::class, 'update'])->name('update.doc');
	Route::put('/attachDoc', [DocumentsController::class, 'attach'])->name('attach.doc');
	Route::delete('/delete', [DocumentsController::class, 'destroy'])->name('delete.doc');
	// Route::post('doc_routes', [DocRouteController::class, 'create'])->name('docroutes.create');

	Route::get('/filter/{operating_uni}/{type}', [DocumentsController::class, 'docFilter'])->name('filter.doc');

	Route::get('/forSignature', [DocumentsController::class, 'forSignature'])->name('forSignature');
	Route::get('/forSignature/fetch', [DocumentsController::class, 'forSignatureFetch'])->name('forSignatureFetch');
});


Route::group([
	'prefix' => 'routes',
	'middleware' => 'auth'
], function () {
	Route::post('/create', [DocRouteController::class, 'create'])->name('docroutes.create');
	Route::get('/edit', [DocRouteController::class, 'edit'])->name('edit.doc_route');
	Route::put('/update', [DocRouteController::class, 'update'])->name('update.doc_route');
	Route::delete('/delete', [DocRouteController::class, 'destroy'])->name('delete.route');
});

Route::group([
	'prefix' => 'mor',
	'middleware' => 'auth'
], function () {
});

Route::group([
	'prefix' => 'pdf',
	'middleware' => 'auth'
], function () {
	Route::get('/show-pdf/{id}', function ($id) {
		syncSigned();
		$file = images::where('image_path', $id)->first();

		$targetPath = storage_path('app/signed/') . $id;
		$memos = array(1); // documents that needs to be generated with memo number
		// if (in_array($file->document->doctype_id, $memos)) {
		// 	if (!pdfIsLock($file->image_path)) {
		// 		$memo_number = date("md").$file->document_id . "-". date("Y");
		// 		attachMemoNumber($file->image_path,$memo_number);
		// 	}
		// }

		return response()->file(storage_path('app/images/') . $file->image_path);
	})->name('show-pdf');

	Route::get('/sync-pdf', function () {
		syncSigned();
	})->name('sync-pdf');

	Route::get('/memo-number-generate', function () {
		attachQr('');
	})->name('generate_memo_number');

	Route::get('/lock-pdf/{id}', function ($id) {
		$files = images::where('document_id', $id)->get();

		$password = Str::random(10);
		$userPassword = $password . 'b';
		foreach ($files as $key => $image) {
			$pdf = new Pdf2;
			$image_path = images::where('id', $image->id)->first();
			$targetPath = storage_path('app/images/') . $image_path->image_path;

			if (pdfIsLock($image_path->image_path)) {
				$result = $pdf->addFile($targetPath, null, $image_path->password)
					->saveAs($targetPath);
			} else {
				$pdf3 = new Pdf2($targetPath);


				$result = $pdf3
					->allow('AllFeatures')
					->setPassword($password)
					->setUserPassword($userPassword)
					->passwordEncryption(128)
					->saveAs($targetPath);
				$image_path->password = $password;
				$image_path->save();
			}
		}
	})->name('lock-pdf');
});

Route::group([
	'prefix' => 'division_actions',
], function () {
	Route::get('/', [DivisionActionsController::class, 'index'])
		->name('division_actions.division_action.index');
	Route::get('/create', [DivisionActionsController::class, 'create'])
		->name('division_actions.division_action.create');
	Route::get('/show/{divisionAction}', [DivisionActionsController::class, 'show'])
		->name('division_actions.division_action.show');
	Route::get('/{divisionAction}/edit', [DivisionActionsController::class, 'edit'])
		->name('division_actions.division_action.edit');
	Route::post('/', [DivisionActionsController::class, 'store'])
		->name('division_actions.division_action.store');
	Route::put('division_action/{divisionAction}', [DivisionActionsController::class, 'update'])
		->name('division_actions.division_action.update');
	Route::delete('/division_action/{divisionAction}', [DivisionActionsController::class, 'destroy'])
		->name('division_actions.division_action.destroy');
});

Route::group([
    'prefix' => 'offices',
], function () {
    Route::get('/', [OfficesController::class, 'index'])
         ->name('offices.office.index');
    Route::get('/create', [OfficesController::class, 'create'])
         ->name('offices.office.create');
    Route::get('/show/{office}',[OfficesController::class, 'show'])
         ->name('offices.office.show');
    Route::get('/{office}/edit',[OfficesController::class, 'edit'])
         ->name('offices.edit');
    Route::post('/', [OfficesController::class, 'store'])
         ->name('offices.store');
    Route::put('office/{office}', [OfficesController::class, 'update'])
         ->name('offices.office.update');
    Route::delete('/office/{office}',[OfficesController::class, 'destroy'])
         ->name('offices.office.destroy');
});


Route::get('/fetchall_offices', [OfficesController::class, 'fetchAll'])->name('fetchAll.offices');
Route::delete('/offices_delete', [OfficesController::class, 'destroy'])->name('delete.office');