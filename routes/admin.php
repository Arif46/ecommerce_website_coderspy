<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/admin', 'HomeController@admin_dashboard')->name('admin.dashboard')->middleware(['auth', 'admin']);

Route::group(['prefix' =>'admin', 'middleware' => ['auth', 'admin']], function(){


///////////////////////superadmin--- modified by dipa////////////////////////////////////////////////////

////////////////////////////////////////hrm//////////////////////////////


// <<<<<<< HEAD
//     Route::get('/purchase/category','PurchaseController@purchaseCategory')->name('purchase.category');
//     Route::get('/purchase/create','PurchaseController@purchaseCategoryCreate')->name('purchase.create');
//     Route::get('/purchase/subcategory','PurchaseController@purchaseSubCategory')->name('purchase.subcategory');
//     Route::get('/purchase/subcategory/create','PurchaseController@purchaseSubCategoryCreate')->name('purchase.subcategory.create');
//     Route::get('/purchase/unit','PurchaseController@purchaseUnit')->name('purchase.unit');
//     Route::get('/purchase/unit/create','PurchaseController@purchaseUnitCreate')->name('purchase.unit.create');
//     Route::get('/purchase/products','PurchaseController@index')->name('purchase.products');
//     Route::get('/purchase/products-list','PurchaseController@index')->name('purchase.products.list');
//     Route::get('/purchase/index','PurchaseController@index')->name('purchase.index');


// =======
// >>>>>>> 588ee757909f64b31e1e16d40bf2e4f6d9739f20
	Route::get('/supplier/index','SupplierInformationController@index')->name('supplier.index');
    Route::get('/supplier/create','SupplierInformationController@create')->name('supplier.create');
    Route::get('/supplier/edit/{id}','SupplierInformationController@edit')->name('supplier.edit');
	Route::post('/supplier/store','SupplierInformationController@store')->name('supplier.store');
	Route::post('/supplier/search','SupplierInformationController@search')->name('supplier.search');
    Route::post('/supplier/update/{id}','SupplierInformationController@update')->name('supplier.update');
    Route::get('/supplier/destroy/{id}','SupplierInformationController@destroy')->name('supplier.destroy');

    /*Raw materials */
    Route::get('/raw/category/index','RawCategoryController@index')->name('raw.category.index');
    Route::get('/raw/category/create','RawCategoryController@create')->name('raw.category.create');
    Route::post('/raw/category/store','RawCategoryController@store')->name('raw.category.store');
    Route::get('/raw/category/edit/{id}','RawCategoryController@edit')->name('raw.category.edit');
    Route::post('/raw/category/update/{id}','RawCategoryController@update')->name('raw.category.update');
    Route::get('/raw/category/delete/{id}','RawCategoryController@delete')->name('raw.category.delete');


    Route::get('/raw/unit/index','RawUnitController@index')->name('raw.unit.index');
    Route::get('/raw/unit/create','RawUnitController@create')->name('raw.unit.create');
    Route::post('/raw/unit/store','RawUnitController@store')->name('raw.unit.store');
    Route::get('/raw/unit/edit/{id}','RawUnitController@edit')->name('raw.unit.edit');
    Route::post('/raw/unit/update/{id}','RawUnitController@update')->name('raw.unit.update');
    Route::get('/raw/unit/delete/{id}','RawUnitController@delete')->name('raw.unit.delete');

	Route::get('/raw/create','RawController@rawcreate')->name('raw.create');
    Route::get('/raw/manage','RawController@rawindex')->name('raw.index');
    Route::get('/raw/edit/{id}','RawController@rawedit')->name('raw.edit');
    Route::post('/raw/store','RawController@rawstore')->name('raw.store');
    Route::post('/raw/update/{id}','RawController@rawupdate')->name('raw.update');
    Route::get('/raw/destroy/{id}','RawController@rawdestroy')->name('raw.destroy');


	Route::get('/purchase/category','PurchaseController@purchaseCategory')->name('purchase.category');
	Route::get('/purchase/category/create','PurchaseController@purchaseCategoryCreate')->name('purchase.category.create');
	Route::post('/purchase/category/store','PurchaseController@purchaseCategoryStore')->name('purchase.category.store');
	Route::get('/purchase/category/edit/{id}','PurchaseController@purchaseCategoryEdit')->name('purchase.category.edit');
	Route::post('/purchase/category/update/{id}','PurchaseController@purchaseCategoryUpdate')->name('purchase.category.update');
	Route::get('/purchase/category/delete/{id}','PurchaseController@purchaseCategoryDestroy')->name('purchase.category.delete');



	Route::get('/purchase/subcategory','PurchaseController@purchaseSubCategory')->name('purchase.subcategory');
	Route::get('/purchase/subcategory/create','PurchaseController@purchaseSubCategoryCreate')->name('purchase.subcategory.create');
	Route::post('/purchase/subcategory/store','PurchaseController@purchaseSubCategoryStore')->name('purchase.subcategory.store');
	Route::get('/purchase/subcategory/edit/{id}','PurchaseController@purchaseSubCategoryEdit')->name('purchase.subcategory.edit');
	Route::post('/purchase/subcategory/update','PurchaseController@purchaseSubCategoryUpdate')->name('purchase.subcategory.update');
	Route::get('/purchase/subcategory/delete/{id}','PurchaseController@purchaseSubCategoryDestroy')->name('purchase.subcategory.delete');

	
	Route::get('/purchase/unit', 'PurchaseController@purchaseUnit')->name('purchase.unit');
	Route::get('/purchase/unit/create', 'PurchaseController@purchaseUnitCreate')->name('purchase.unit.create');
	Route::post('/purchase/unit/store', 'PurchaseController@purchaseUnitStore')->name('purchase.unit.store');
	Route::get('/purchase/unit/edit/{id}', 'PurchaseController@purchaseUnitEdit')->name('purchase.unit.edit');
	Route::post('/purchase/unit/update/{id}', 'PurchaseController@purchaseUnitUpdate')->name('purchase.unit.update');
	Route::get('/purchase/unit/delete/{id}', 'PurchaseController@purchaseUnitDestroy')->name('purchase.unit.delete');


	Route::get('/purchase/product', 'PurchaseController@purchaseProduct')->name('purchase.products');
	Route::get('/purchase/product/create', 'PurchaseController@purchaseProductCreate')->name('purchase.product.create');
	Route::post('/purchase/product/store', 'PurchaseController@purchaseProductStore')->name('purchase.product.store');
	Route::get('/purchase/product/edit/{id}', 'PurchaseController@purchaseProductEdit')->name('purchase.product.edit');
	Route::post('/purchase/product/update/{id}', 'PurchaseController@purchaseProductUpdate')->name('purchase.product.update');
	Route::get('/purchase/product/delete/{id}', 'PurchaseController@purchaseProductDestroy')->name('purchase.product.delete');
	Route::get('/purchase/product/lists', 'PurchaseController@purchaseProductLists')->name('purchase.products.list');
	

    Route::get('/doc/index','StaffController@docindex')->name('doc.index');
    Route::get('/doc/create','StaffController@doccreate')->name('doc.create');
    Route::get('/doc/edit/{id}','StaffController@docedit')->name('doc.edit');
    Route::post('/doc/store','StaffController@docstore')->name('doc.store');
    Route::post('/doc/update/{id}','StaffController@docupdate')->name('doc.update');
    Route::get('/doc/destroy/{id}','StaffController@docdestroy')->name('doc.destroy');


    Route::get('/department/index','StaffController@departmentindex')->name('department.index');
    Route::get('/department/create','StaffController@departmentcreate')->name('department.create');
    Route::get('/department/edit/{id}','StaffController@departmentedit')->name('department.edit');
    Route::post('/department/store','StaffController@departmentstore')->name('department.store');
    Route::post('/department/update/{id}','StaffController@departmentupdate')->name('department.update');
    Route::get('/department/destroy/{id}','StaffController@departmentdestroy')->name('department.destroy');


    Route::get('/designation/index','StaffController@designationindex')->name('designation.index');
    Route::get('/designation/create','StaffController@designationcreate')->name('designation.create');
    Route::get('/designation/edit/{id}','StaffController@designationedit')->name('designation.edit');
    Route::post('/designation/store','StaffController@designationstore')->name('designation.store');
    Route::post('/designation/update/{id}','StaffController@designationupdate')->name('designation.update');
    Route::get('/designation/destroy/{id}','StaffController@designationdestroy')->name('designation.destroy');


    Route::get('/staff/profile/index','StaffController@profileindex')->name('staff_profile.index');
    Route::get('/staff/profile/create','StaffController@profilecreate')->name('staff_profile.create');
    Route::get('staff/profile/edit/{id}','StaffController@profileedit')->name('staff_profile.edit');
    Route::post('/staff/profile/store','StaffController@profilestore')->name('staff_profile.store');
    Route::post('/staff/profile/update/{id}','StaffController@profileupdate');
    Route::get('/staff/profile/destroy/{id}','StaffController@profiledestroy')->name('staff_profile.destroy');


////////////////////////////tax////////////////////////////////////////////////
    Route::get('/tax/index','TaxController@taxindex')->name('tax.index');
    Route::get('/tax/create','TaxController@taxcreate')->name('tax.create');
    Route::get('/tax/edit/{id}','TaxController@taxedit')->name('tax.edit');
    Route::post('/tax/store','TaxController@taxstore')->name('tax.store');
    Route::post('/tax/update/{id}','TaxController@taxupdate')->name('tax.update');
    Route::get('/tax/destroy/{id}','TaxController@taxdestroy')->name('tax.destroy');
    Route::get('taxExport', 'TaxController@export')->name('taxExport');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {


	///////////////////////superadmin--- modified by dipa////////////////////////////////////////////////////

	////////////////////////////////////////hrm//////////////////////////////


	Route::get('suppliers', 'SupplierInformationController@suppliers')->name('suppliers');
	Route::get('suppliers/category', 'SupplierInformationController@suppliercategory')->name('suppliercategory');


	Route::get('/supplier/index', 'SupplierInformationController@index')->name('supplier.index');
	Route::get('/supplier/create', 'SupplierInformationController@create')->name('supplier.create');
	Route::get('/supplier/edit/{id}', 'SupplierInformationController@edit')->name('supplier.edit');
	Route::post('/supplier/store', 'SupplierInformationController@store')->name('supplier.store');
	Route::post('/supplier/search', 'SupplierInformationController@search')->name('supplier.search');
	Route::post('/supplier/update/{id}', 'SupplierInformationController@update')->name('supplier.update');
	Route::get('/supplier/destroy/{id}', 'SupplierInformationController@destroy')->name('supplier.destroy');

	/*Raw materials */
	Route::get('/raw/category/index', 'RawCategoryController@index')->name('raw.category.index');
	Route::get('/raw/category/create', 'RawCategoryController@create')->name('raw.category.create');
	Route::post('/raw/category/store', 'RawCategoryController@store')->name('raw.category.store');
	Route::get('/raw/category/edit/{id}', 'RawCategoryController@edit')->name('raw.category.edit');
	Route::post('/raw/category/update/{id}', 'RawCategoryController@update')->name('raw.category.update');
	Route::get('/raw/category/delete/{id}', 'RawCategoryController@delete')->name('raw.category.delete');


	Route::get('/raw/unit/index', 'RawUnitController@index')->name('raw.unit.index');
	Route::get('/raw/unit/create', 'RawUnitController@create')->name('raw.unit.create');
	Route::post('/raw/unit/store', 'RawUnitController@store')->name('raw.unit.store');
	Route::get('/raw/unit/edit/{id}', 'RawUnitController@edit')->name('raw.unit.edit');
	Route::post('/raw/unit/update/{id}', 'RawUnitController@update')->name('raw.unit.update');
	Route::get('/raw/unit/delete/{id}', 'RawUnitController@delete')->name('raw.unit.delete');

	Route::get('/raw/index', 'RawController@rawindex')->name('raw.index');
	Route::get('/raw/create', 'RawController@rawcreate')->name('raw.create');
	Route::get('/raw/edit/{id}', 'RawController@rawedit')->name('raw.edit');
	Route::post('/raw/store', 'RawController@rawstore')->name('raw.store');
	Route::post('/raw/update/{id}', 'RawController@rawupdate')->name('raw.update');
	Route::get('/raw/destroy/{id}', 'RawController@rawdestroy')->name('raw.destroy');


	Route::get('/purchase/index', 'PurchaseController@purchaseindex')->name('purchase.index');
	Route::get('/purchase/create', 'PurchaseController@purchasecreate')->name('purchase.create');
	Route::get('/purchase/edit/{id}', 'PurchaseController@purchaseedit')->name('purchase.edit');
	Route::post('/purchase/store', 'PurchaseController@purchasestore')->name('purchase.store');
	Route::post('/purchase/update/{id}', 'PurchaseController@purchaseupdate')->name('purchase.update');
	Route::get('/purchase/destroy/{id}', 'PurchaseController@purchasedestroy')->name('purchase.destroy');


	Route::get('/doc/index', 'StaffController@docindex')->name('doc.index');
	Route::get('/doc/create', 'StaffController@doccreate')->name('doc.create');
	Route::get('/doc/edit/{id}', 'StaffController@docedit')->name('doc.edit');
	Route::post('/doc/store', 'StaffController@docstore')->name('doc.store');
	Route::post('/doc/update/{id}', 'StaffController@docupdate')->name('doc.update');
	Route::get('/doc/destroy/{id}', 'StaffController@docdestroy')->name('doc.destroy');


	Route::get('/department/index', 'StaffController@departmentindex')->name('department.index');
	Route::get('/department/create', 'StaffController@departmentcreate')->name('department.create');
	Route::get('/department/edit/{id}', 'StaffController@departmentedit')->name('department.edit');
	Route::post('/department/store', 'StaffController@departmentstore')->name('department.store');
	Route::post('/department/update/{id}', 'StaffController@departmentupdate')->name('department.update');
	Route::get('/department/destroy/{id}', 'StaffController@departmentdestroy')->name('department.destroy');


	Route::get('/designation/index', 'StaffController@designationindex')->name('designation.index');
	Route::get('/designation/create', 'StaffController@designationcreate')->name('designation.create');
	Route::get('/designation/edit/{id}', 'StaffController@designationedit')->name('designation.edit');
	Route::post('/designation/store', 'StaffController@designationstore')->name('designation.store');
	Route::post('/designation/update/{id}', 'StaffController@designationupdate')->name('designation.update');
	Route::get('/designation/destroy/{id}', 'StaffController@designationdestroy')->name('designation.destroy');


	Route::get('/staff/profile/index', 'StaffController@profileindex')->name('staff_profile.index');
	Route::get('/staff/profile/create', 'StaffController@profilecreate')->name('staff_profile.create');
	Route::get('/staff/profile/edit/{id}', 'StaffController@profileedit')->name('staff_profile.edit');
	Route::post('/staff/profile/store', 'StaffController@profilestore')->name('staff_profile.store');
	Route::post('/staff/profile/update/{id}', 'StaffController@profileupdate')->name('staff_profile.update');
	Route::get('/staff/profile/destroy/{id}', 'StaffController@profiledestroy')->name('staff_profile.destroy');


	////////////////////////////tax////////////////////////////////////////////////
	Route::get('/tax/index', 'TaxController@taxindex')->name('tax.index');
	Route::get('/tax/create', 'TaxController@taxcreate')->name('tax.create');
	Route::get('/tax/edit/{id}', 'TaxController@taxedit')->name('tax.edit');
	Route::post('/tax/store', 'TaxController@taxstore')->name('tax.store');
	Route::post('/tax/update/{id}', 'TaxController@taxupdate')->name('tax.update');
	Route::get('/tax/destroy/{id}', 'TaxController@taxdestroy')->name('tax.destroy');
	Route::get('taxExport', 'TaxController@export')->name('taxExport');

	Route::post('taxImport', 'TaxController@import')->name('taxImport');
	Route::get('incometaxPdf', 'TaxController@incometaxPdf')->name('incometaxPdf');


	////////bank//////////////////////////////////////////////////////////////
	Route::get('/bank/ledger/report', 'BankController@bankledgerreport')->name('bankledger.index');
	Route::get('/bank/index', 'BankController@bankindex')->name('bank.index');
	Route::get('/bank/create', 'BankController@bankcreate')->name('bank.create');
	Route::get('/bank/edit/{id}', 'BankController@bankedit')->name('bank.edit');
	Route::post('/bank/store', 'BankController@bankstore')->name('bank.store');
	Route::post('/bank/update/{id}', 'BankController@bankupdate')->name('bank.update');
	Route::get('/bank/destroy/{id}', 'BankController@bankdestroy')->name('bank.destroy');
	Route::get('get_bank_ledger', 'BankController@getBankLedger')->name('get_bank_ledger');




	Route::get('/bank/transaction/index', 'BankController@banktransactionindex')->name('banktransaction.index');
	Route::get('/bank/transaction/create', 'BankController@banktransactioncreate')->name('banktransaction.create');
	Route::get('/bank/transaction/edit/{id}', 'BankController@banktransactionedit')->name('banktransaction.edit');
	Route::post('/bank/transaction/store', 'BankController@banktransactionstore')->name('banktransaction.store');
	Route::post('/bank/transaction/update/{id}', 'BankController@banktransactionupdate')->name('banktransaction.update');
	Route::get('/bank/transaction/destroy/{id}', 'BankController@banktransactiondestroy')->name('banktransaction.destroy');

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	Route::get('/notecategory/index', 'NoteController@notecategoryindex')->name('notecategory.index');
	Route::get('/notecategory/create', 'NoteController@notecategorycreate')->name('notecategory.create');
	Route::get('/notecategory/edit/{id}', 'NoteController@notecategoryedit')->name('notecategory.edit');
	Route::post('/notecategory/store', 'NoteController@notecategorystore')->name('notecategory.store');
	Route::post('/notecategory/update/{id}', 'NoteController@notecategoryupdate')->name('notecategory.update');
	Route::get('/notecategory/destroy/{id}', 'NoteController@notecategorydestroy')->name('notecategory.destroy');




	Route::get('/topnote/index', 'NoteController@topindex')->name('topnote.index');
	Route::get('/topnote/create', 'NoteController@topcreate')->name('topnote.create');
	Route::get('/topnote/edit/{id}', 'NoteController@topedit')->name('topnote.edit');
	Route::post('/topnote/store', 'NoteController@topstore')->name('topnote.store');
	Route::post('/topnote/update/{id}', 'NoteController@topupdate')->name('topnote.update');
	Route::get('/topnote/destroy/{id}', 'NoteController@topdestroy')->name('topnote.destroy');


	Route::get('/middlenote/index', 'NoteController@middleindex')->name('middlenote.index');
	Route::get('/middlenote/create', 'NoteController@middlecreate')->name('middlenote.create');
	Route::get('/middlenote/edit/{id}', 'NoteController@middleedit')->name('middlenote.edit');
	Route::post('/middlenote/store', 'NoteController@middlestore')->name('middlenote.store');
	Route::post('/middlenote/update/{id}', 'NoteController@middleupdate')->name('middlenote.update');
	Route::get('/middlenote/destroy/{id}', 'NoteController@middledestroy')->name('middlenote.destroy');


	Route::get('/basenote/index', 'NoteController@baseindex')->name('basenote.index');
	Route::get('/basenote/create', 'NoteController@basecreate')->name('basenote.create');
	Route::get('/basenote/edit/{id}', 'NoteController@baseedit')->name('basenote.edit');
	Route::post('/basenote/store', 'NoteController@basestore')->name('basenote.store');
	Route::post('/basenote/update/{id}', 'NoteController@baseupdate')->name('basenote.update');
	Route::get('/basenote/destroy/{id}', 'NoteController@basedestroy')->name('basenote.destroy');




	Route::resource('legal-file-types', 'LegalController');
	Route::resource('legal-file-manager', 'FileManagerController');

	// strat expense menu 
	Route::resource('expense-subcategory', 'ExpenseSubCategoryController');
	Route::resource('expense-category', 'ExpenseCategoryController');

	Route::resource('expense', 'ExpenseController');
	//  Route::get('expense/statement','ExpenseController@expensestatement')->name('expense.statement');

	Route::get('get-expense-subcategory/{id}', 'ExpenseController@getSubSubCategories');
	Route::get('expense-delete/{id}', 'ExpenseController@destroy')->name('expense_delete');

	Route::get('expense-subcategory-delete/{id}', 'ExpenseSubCategoryController@destroy')->name('expense_subcategory_delete');
	Route::get('expense-category-delete/{id}', 'ExpenseCategoryController@destroy')->name('expense_category_delete');

	Route::get('expense_report', 'ExpenseController@expenseReport')->name('expense.statement');
	Route::post('get_expanses', 'ExpenseController@getExpanseReport')->name('get_expanses');

	// end expenses menu

	Route::get('expire-mail-send', 'FileManagerController@expireMailSend')->name('expire_mail');
	Route::get('legal-file/{id}', 'FileManagerController@destroy')->name('legal_file');
	Route::get('legal-file-delete/{id}', 'LegalController@destroy')->name('legal_file_delete');
	Route::resource('packegs', 'PackegController');
	Route::get('packeg-delete/{id}', 'PackegController@destroy')->name('packeg_delete');
	Route::resource('categories', 'CategoryController');
	Route::get('/categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
	Route::post('/categories/featured', 'CategoryController@updateFeatured')->name('categories.featured');

	Route::resource('subcategories', 'SubCategoryController');
	Route::get('/subcategories/destroy/{id}', 'SubCategoryController@destroy')->name('subcategories.destroy');

	Route::resource('subsubcategories', 'SubSubCategoryController');
	Route::get('/subsubcategories/destroy/{id}', 'SubSubCategoryController@destroy')->name('subsubcategories.destroy');

	Route::resource('brands', 'BrandController');

	Route::get('brandExport', 'BrandController@export')->name('brandExport');
	Route::post('brandImport', 'BrandController@import')->name('brandImport');

	Route::resource('perfumes', 'PerfumeController');
	Route::get('perfumesExport', 'PerfumeController@export')->name('perfumesExport');
	Route::post('perfumersImport', 'PerfumeController@import')->name('perfumersImport');
	Route::get('/perfumes/destroy/{id}', 'PerfumeController@destroy')->name('perfumes.destroy');
	Route::get('/brands/destroy/{id}', 'BrandController@destroy')->name('brands.destroy');

	Route::get('/products/admin', 'ProductController@admin_products')->name('products.admin');
	Route::get('/products/seller', 'ProductController@seller_products')->name('products.seller');
	Route::get('/products/create', 'ProductController@create')->name('products.create');
	Route::get('/products/admin/{id}/edit', 'ProductController@admin_product_edit')->name('products.admin.edit');
	Route::get('/products/allImages/{id}', 'ProductController@allImages')->name('allImages');
	Route::get('/products/colorSubmit/{id}', 'ProductController@colorSubmit')->name('colorSubmit');

	Route::get('/products/seller/{id}/edit', 'ProductController@seller_product_edit')->name('products.seller.edit');
	Route::post('/products/todays_deal', 'ProductController@updateTodaysDeal')->name('products.todays_deal');
	Route::post('/products/get_products_by_subsubcategory', 'ProductController@get_products_by_subsubcategory')->name('products.get_products_by_subsubcategory');

	Route::resource('sellers', 'SellerController');
	Route::get('/sellers/destroy/{id}', 'SellerController@destroy')->name('sellers.destroy');
	Route::get('/sellers/view/{id}/verification', 'SellerController@show_verification_request')->name('sellers.show_verification_request');
	Route::get('/sellers/approve/{id}', 'SellerController@approve_seller')->name('sellers.approve');
	Route::get('/sellers/reject/{id}', 'SellerController@reject_seller')->name('sellers.reject');
	Route::post('/sellers/payment_modal', 'SellerController@payment_modal')->name('sellers.payment_modal');
	Route::get('/seller/payments', 'PaymentController@payment_histories')->name('sellers.payment_histories');
	Route::get('/seller/payments/show/{id}', 'PaymentController@show')->name('sellers.payment_history');

	Route::resource('customers', 'CustomerController');
	Route::get('/customers/destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');

	Route::get('/newsletter', 'NewsletterController@index')->name('newsletters.index');
	Route::post('/newsletter/send', 'NewsletterController@send')->name('newsletters.send');

	Route::resource('profile', 'ProfileController');

	Route::post('/business-settings/update', 'BusinessSettingsController@update')->name('business_settings.update');
	Route::post('/business-settings/update/activation', 'BusinessSettingsController@updateActivationSettings')->name('business_settings.update.activation');
	Route::get('/activation', 'BusinessSettingsController@activation')->name('activation.index');
	Route::get('/payment-method', 'BusinessSettingsController@payment_method')->name('payment_method.index');
	Route::get('/social-login', 'BusinessSettingsController@social_login')->name('social_login.index');
	Route::get('/smtp-settings', 'BusinessSettingsController@smtp_settings')->name('smtp_settings.index');
	Route::get('/google-analytics', 'BusinessSettingsController@google_analytics')->name('google_analytics.index');
	Route::get('/facebook-chat', 'BusinessSettingsController@facebook_chat')->name('facebook_chat.index');
	Route::post('/env_key_update', 'BusinessSettingsController@LinkedIn Corporation')->name('env_key_update.update');
	Route::post('/payment_method_update', 'BusinessSettingsController@payment_method_update')->name('payment_method.update');
	Route::post('/google_analytics', 'BusinessSettingsController@google_analytics_update')->name('google_analytics.update');
	Route::post('/facebook_chat', 'BusinessSettingsController@facebook_chat_update')->name('facebook_chat.update');
	Route::post('/facebook_pixel', 'BusinessSettingsController@facebook_pixel_update')->name('facebook_pixel.update');
	Route::get('/currency', 'CurrencyController@currency')->name('currency.index');
	Route::post('/currency/update', 'CurrencyController@updateCurrency')->name('currency.update');
	Route::post('/your-currency/update', 'CurrencyController@updateYourCurrency')->name('your_currency.update');
	Route::get('/currency/create', 'CurrencyController@create')->name('currency.create');
	Route::post('/currency/store', 'CurrencyController@store')->name('currency.store');
	Route::post('/currency/currency_edit', 'CurrencyController@edit')->name('currency.edit');
	Route::post('/currency/update_status', 'CurrencyController@update_status')->name('currency.update_status');
	Route::get('/verification/form', 'BusinessSettingsController@seller_verification_form')->name('seller_verification_form.index');
	Route::post('/verification/form', 'BusinessSettingsController@seller_verification_form_update')->name('seller_verification_form.update');
	Route::get('/vendor_commission', 'BusinessSettingsController@vendor_commission')->name('business_settings.vendor_commission');
	Route::post('/vendor_commission_update', 'BusinessSettingsController@vendor_commission_update')->name('business_settings.vendor_commission.update');

	Route::resource('/languages', 'LanguageController');
	Route::post('/languages/update_rtl_status', 'LanguageController@update_rtl_status')->name('languages.update_rtl_status');
	Route::get('/languages/destroy/{id}', 'LanguageController@destroy')->name('languages.destroy');
	Route::get('/languages/{id}/edit', 'LanguageController@edit')->name('languages.edit');
	Route::post('/languages/{id}/update', 'LanguageController@update')->name('languages.update');
	Route::post('/languages/key_value_store', 'LanguageController@key_value_store')->name('languages.key_value_store');

	Route::get('/frontend_settings/home', 'HomeController@home_settings')->name('home_settings.index');
	Route::post('/frontend_settings/home/top_10', 'HomeController@top_10_settings')->name('top_10_settings.store');
	Route::get('/seller-policy', 'AllPageController@OnlineShopping')->name('online_shopping');
	Route::get('/refund-policy', 'AllPageController@RefundPolicy')->name('refund_policy');
	// Route::get('/supportpolicy/{type}', 'PolicyController@index')->name('supportpolicy.index');
	Route::get('/terms-condition', 'AllPageController@TermsCondition')->name('terms_condition');
	Route::get('/shipping-policy', 'AllPageController@ShippingPolicy')->name('shipping_policy');
	Route::get('/privacy-policy', 'AllPageController@PrivacyPolicy')->name('privacy_policy');
	Route::get('/how-to-shop', 'AllPageController@HowToShop')->name('how_to_shop');
	Route::get('/consumer-rights', 'AllPageController@ConsumerRights')->name('consumer_rights');
	Route::get('/about', 'AllPageController@About')->name('admin.about');
	Route::get('/charitable-giving', 'AllPageController@CharitableGiving')->name('charitable_giving');
	Route::get('/online-community', 'AllPageController@OnlineCommunity')->name('online_community');
	Route::get('/authentication', 'AllPageController@Authentication')->name('authentication');
	Route::get('/price-match', 'AllPageController@PriceMatch')->name('PriceMatch');
	Route::get('/reward-points', 'AllPageController@RewardPoints')->name('reward_points');
	Route::get('/request-fragrance', 'AllPageController@RequestFragrance')->name('request_fragrance');
	Route::get('/subscription-agreement', 'AllPageController@SubscriptionAgreement')->name('subscription_agreement');
	Route::get('/accessibility', 'AllPageController@Accessibility')->name('accessibility');
	Route::get('/user-agreement', 'AllPageController@UserAgreement')->name('user_agreement');
	Route::get('/cookies', 'AllPageController@cookies')->name('cookies');
	Route::post('/cookies-store', 'AllPageController@cookiesUpdate')->name('cookies_update');
	Route::post('/consumer-rights', 'AllPageController@ConsumerRightsUpdate')->name('consumer_right_update');
	Route::get('/career-page', 'AllPageController@Careers')->name('admin_careers');
	Route::post('/careers-page', 'AllPageController@CareerUpdate')->name('career_page_update');



	Route::get('/header-top', 'AllPageController@HeaderTop')->name('header_top');

	// AllPolicy submit route by Rayhan
	Route::post('/policies-store', 'AllPageController@PolicySubmit')->name('policy_submit');
	Route::post('/header-top-store', 'AllPageController@HeaderTopSubmit')->name('header_top_submit');

	Route::post('/about-store', 'AllPageController@AboutSubmit')->name('about_submit');



	//Policy Controller
	Route::post('/policies/store', 'PolicyController@store')->name('policies.store');


	    Route::group(['prefix' => 'frontend_settings'], function(){
		Route::resource('sliders','SliderController');
        Route::get('change-status','SliderController@changeStatus')->name('change.status');
        Route::post('first-slider', 'SliderController@firstSlider')->name('first_slider');
	    Route::get('/sliders/destroy/{id}', 'SliderController@destroy')->name('sliders.destroy');


		Route::resource('home_banners', 'BannerController');
		Route::get('/home_banners/create/{position}', 'BannerController@create')->name('home_banners.create');
		Route::post('/home_banners/update_status', 'BannerController@update_status')->name('home_banners.update_status');
		Route::get('/home_banners/destroy/{id}', 'BannerController@destroy')->name('home_banners.destroy');

		Route::resource('home_categories', 'HomeCategoryController');
		Route::get('/home_categories/destroy/{id}', 'HomeCategoryController@destroy')->name('home_categories.destroy');
		Route::post('/home_categories/update_status', 'HomeCategoryController@update_status')->name('home_categories.update_status');
		Route::post('/home_categories/get_subsubcategories_by_category', 'HomeCategoryController@getSubSubCategories')->name('home_categories.get_subsubcategories_by_category');
	});

	Route::resource('roles', 'RoleController');
	Route::get('/roles/destroy/{id}', 'RoleController@destroy')->name('roles.destroy');

	Route::resource('staffs', 'StaffController');
	Route::get('/staffs/destroy/{id}', 'StaffController@destroy')->name('staffs.destroy');

	Route::resource('flash_deals', 'FlashDealController');
	Route::get('/flash_deals/destroy/{id}', 'FlashDealController@destroy')->name('flash_deals.destroy');
	Route::post('/flash_deals/update_status', 'FlashDealController@update_status')->name('flash_deals.update_status');
	Route::post('/flash_deals/update_featured', 'FlashDealController@update_featured')->name('flash_deals.update_featured');
	Route::post('/flash_deals/product_discount', 'FlashDealController@product_discount')->name('flash_deals.product_discount');
	Route::post('/flash_deals/product_discount_edit', 'FlashDealController@product_discount_edit')->name('flash_deals.product_discount_edit');

	Route::get('/orders', 'OrderController@admin_orders')->name('orders.index.admin');
	Route::get('/orders/{id}/show', 'OrderController@show')->name('orders.show');
	Route::get('/sales/{id}/show', 'OrderController@sales_show')->name('sales.show');
	Route::get('/orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');
	Route::get('/sales', 'OrderController@sales')->name('sales.index');

	Route::resource('links', 'LinkController');
	Route::get('/links/destroy/{id}', 'LinkController@destroy')->name('links.destroy');

	Route::resource('generalsettings', 'GeneralSettingController');
	Route::get('/logo', 'GeneralSettingController@logo')->name('generalsettings.logo');
	Route::post('/logo', 'GeneralSettingController@storeLogo')->name('generalsettings.logo.store');
	Route::get('/color', 'GeneralSettingController@color')->name('generalsettings.color');
	Route::post('/color', 'GeneralSettingController@storeColor')->name('generalsettings.color.store');

	Route::resource('seosetting', 'SEOController');

	Route::post('/pay_to_seller', 'CommissionController@pay_to_seller')->name('commissions.pay_to_seller');

	//Reports
	Route::get('/stock_report', 'ReportController@stock_report')->name('stock_report.index');
	Route::get('/in_house_sale_report', 'ReportController@in_house_sale_report')->name('in_house_sale_report.index');
	Route::get('/seller_report', 'ReportController@seller_report')->name('seller_report.index');
	Route::get('/seller_sale_report', 'ReportController@seller_sale_report')->name('seller_sale_report.index');
	Route::get('/wish_report', 'ReportController@wish_report')->name('wish_report.index');

	//Coupons
	Route::resource('coupon', 'CouponController');
	Route::post('/coupon/get_form', 'CouponController@get_coupon_form')->name('coupon.get_coupon_form');
	Route::post('/coupon/get_form_edit', 'CouponController@get_coupon_form_edit')->name('coupon.get_coupon_form_edit');
	Route::get('/coupon/destroy/{id}', 'CouponController@destroy')->name('coupon.destroy');

	//Reviews
	Route::get('/reviews', 'ReviewController@index')->name('reviews.index');
	Route::post('/reviews/published', 'ReviewController@updatePublished')->name('reviews.published');

	//Support_Ticket
	Route::get('support_ticket/', 'SupportTicketController@admin_index')->name('support_ticket.admin_index');
	Route::get('support_ticket/{id}/show', 'SupportTicketController@admin_show')->name('support_ticket.admin_show');
	Route::post('support_ticket/reply', 'SupportTicketController@admin_store')->name('support_ticket.admin_store');

	//Pickup_Points
	Route::resource('pick_up_points', 'PickupPointController');
	Route::get('/pick_up_points/destroy/{id}', 'PickupPointController@destroy')->name('pick_up_points.destroy');


	Route::get('orders_by_pickup_point', 'OrderController@order_index')->name('pick_up_point.order_index');
	Route::get('/orders_by_pickup_point/{id}/show', 'OrderController@pickup_point_order_sales_show')->name('pick_up_point.order_show');

	Route::get('invoice/admin/{order_id}', 'InvoiceController@admin_invoice_download')->name('admin.invoice.download');

	//conversation of seller customer
	Route::get('conversations', 'ConversationController@admin_index')->name('conversations.admin_index');
	Route::get('conversations/{id}/show', 'ConversationController@admin_show')->name('conversations.admin_show');
	Route::get('/conversations/destroy/{id}', 'ConversationController@destroy')->name('conversations.destroy');


	Route::post('/sellers/profile_modal', 'SellerController@profile_modal')->name('sellers.profile_modal');
	Route::post('/sellers/approved', 'SellerController@updateApproved')->name('sellers.approved');

	Route::resource('attributes', 'AttributeController');
	Route::get('/attributes/destroy/{id}', 'AttributeController@destroy')->name('attributes.destroy');

	Route::resource('addons', 'AddonController');
	Route::post('/addons/activation', 'AddonController@activation')->name('addons.activation');

	Route::get('/customer-bulk-upload/index', 'CustomerBulkUploadController@index')->name('customer_bulk_upload.index');
	Route::post('/bulk-user-upload', 'CustomerBulkUploadController@user_bulk_upload')->name('bulk_user_upload');
	Route::post('/bulk-customer-upload', 'CustomerBulkUploadController@customer_bulk_file')->name('bulk_customer_upload');
	Route::get('/user', 'CustomerBulkUploadController@pdf_download_user')->name('pdf.download_user');


	// Rayhan
	Route::get('bloggers', 'FooterController@BloggerList')->name('blogger.list');
	Route::get('distributors', 'FooterController@DistributorList')->name('distributor.list');
	Route::get('ideas', 'FooterController@IdeaList')->name('idea.list');
	Route::get('contacts', 'FooterController@ContactList')->name('contact.list');
	Route::get('personal-requests', 'FooterController@PersonalRequestsList')->name('personal_requests.list');
	Route::get('feedbacks', 'FooterController@FeedbackList')->name('feedback.list');
	Route::get('press-contacts', 'FooterController@PressContactList')->name('press_contacts.list');
	Route::get('press-setting', 'FooterController@PressSetting')->name('press_setting');
	Route::post('press-setting', 'FooterController@PressSettingUpdate')->name('press_setting_update');
	Route::get('applicants', 'FooterController@Applicants')->name('applicants');

	Route::get('about-menu', 'FooterController@AboutUsMenu')->name('about_menu');
	Route::post('about-menu/{id}', 'FooterController@AboutUsMenuUpdate');
	Route::get('menu-active/{id}', 'FooterController@MenuActive');
	Route::get('menu-deactive/{id}', 'FooterController@MenuDeactive');

	// Press list 
	Route::get('press-list', 'PressController@index')->name('press_list');
	Route::get('press-list-create', 'PressController@create')->name('press_list_create');
	Route::post('press-list-store', 'PressController@store')->name('press_list_store');
	Route::get('press-list-edit/{id}', 'PressController@edit')->name('press_list_edit');
	Route::patch('press-list-update/{id}', 'PressController@update')->name('press_list_update');
	Route::get('press-list-destroy/{id}', 'PressController@destroy')->name('press_list_destroy');

	// FAQ Category list 
	Route::get('faq-category', 'FaqController@index')->name('faq_category');
	Route::get('faq-category-create', 'FaqController@create')->name('faq_category_create');
	Route::post('faq-category-store', 'FaqController@store')->name('faq_category_store');
	Route::get('faq-category-edit/{id}', 'FaqController@edit')->name('faq_category_edit');
	Route::patch('faq-category-update/{id}', 'FaqController@update')->name('faq_category_update');
	Route::get('faq-category-destroy/{id}', 'FaqController@destroy')->name('faq_category_destroy');
	// FAQ list 
	Route::get('faq', 'FaqController@Faqindex')->name('faq');
	Route::get('faq-create', 'FaqController@Faqcreate')->name('faq_create');
	Route::post('faq-store', 'FaqController@Faqstore')->name('faq_store');
	Route::get('faq-edit/{id}', 'FaqController@Faqedit')->name('faq_edit');
	Route::patch('faq-update/{id}', 'FaqController@Faqupdate')->name('faq_update');
	Route::get('faq-destroy/{id}', 'FaqController@Faqdestroy')->name('faq_destroy');

	//MY-BLEND Route
	Route::resource('my-blend-subscription', 'MyblendController');
	Route::resource('events', 'EventController');
	Route::resource('blog-posts', 'BlogController');
	Route::resource('blogs-category', 'BlogCategoryController');
	Route::get('blogs-category-delete/{id}', 'BlogCategoryController@destroy')->name('blogs_category_delete');
	Route::get('blogs-post-delete/{id}', 'BlogController@destroy')->name('blogs_post_delete');
	Route::resource('subscribed', 'SubscriberController');

	// Career Positions 
	Route::get('career-position', 'CareerPositionController@index')->name('career_position');
	Route::get('career-position-create', 'CareerPositionController@create')->name('career_position_create');
	Route::post('career-position-store', 'CareerPositionController@store')->name('career_position_store');
	Route::get('career-position-edit/{id}', 'CareerPositionController@edit')->name('career_position_edit');
	Route::patch('career-position-update/{id}', 'CareerPositionController@update')->name('career_position_update');
	Route::get('career-position-destroy/{id}', 'CareerPositionController@destroy')->name('career_position_destroy');

	// background Image 

	Route::get('/background-image', 'GeneralSettingController@BackgroundImage')->name('background_image');
	Route::post('/background-image', 'GeneralSettingController@BackgroundImageUpdate')->name('background_image_update');

	// Region list 
	Route::get('region', 'RegionController@index')->name('region');
	Route::get('region-create', 'RegionController@create')->name('region_create');
	Route::post('region-store', 'RegionController@store')->name('region_store');
	Route::get('region-edit/{id}', 'RegionController@edit')->name('region_edit');
	Route::patch('region-update/{id}', 'RegionController@update')->name('region_update');
	Route::get('region-destroy/{id}', 'RegionController@destroy')->name('region_destroy');

	// Country list 
	Route::get('country', 'CountryController@index')->name('country');
	Route::get('country-create', 'CountryController@create')->name('country_create');
	Route::post('country-store', 'CountryController@store')->name('country_store');
	Route::get('country-edit/{id}', 'CountryController@edit')->name('country_edit');
	Route::patch('country-update/{id}', 'CountryController@update')->name('country_update');
	Route::get('country-destroy/{id}', 'CountryController@destroy')->name('country_destroy');


	// subscription queue
	Route::get('duration-plan', 'DurationPlanController@index')->name('duration.plan');
	Route::get('duration-add', 'DurationPlanController@addDuration')->name('duration.add');
	Route::post('duration-store', 'DurationPlanController@storeDuration')->name('duration.store');
	Route::get('duration-edit/{id}', 'DurationPlanController@editDuration')->name('duration.edit');
	Route::patch('duration-update/{id}', 'DurationPlanController@updateDuration')->name('duration.update');
	Route::get('duration-destroy/{id}', 'DurationPlanController@destroyDuration')->name('duration.destroy');

	// product plan
	Route::get('product-plan', 'ProductPlanController@index')->name('product.plan');
	Route::get('product-plan-add', 'ProductPlanController@addProductPlan')->name('product.plan.add');
	Route::post('product-plan-store', 'ProductPlanController@storeProductPlan')->name('product.plan.store');
	Route::get('product-plan-edit/{id}', 'ProductPlanController@editProductPlan')->name('product.plan.edit');
	Route::patch('product-plan-update/{id}', 'ProductPlanController@updateProductPlan')->name('product.plan.update');
	Route::get('product-plan-destroy/{id}', 'ProductPlanController@destroyProductPlan')->name('product.plan.destroy');



	// Finance 
	Route::get('manage-forecast', 'FinanceController@manageForecast')->name('manage-forecast');
});
});
