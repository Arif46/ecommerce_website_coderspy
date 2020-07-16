<?php

use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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


Route::get('/getProductImages/{id}', 'ShopController@ProductImages')->name('getProductImages');
Route::get('/ajaxLiveSearchBrand', 'ShopController@ajaxLiveSearchBrand')->name('ajaxLiveSearchBrand');
Route::get('/rengeSlider', 'ShopController@rengeSlider');

// New Login page
Route::get('login1', 'ShopController@login1')->name('login1');



Route::get('/change-lang/{lang}', 'ShopController@changeLang')->name('lang');

Route::get('/', 'ShopController@websiteindex')->name('home');
Route::get('/myblend', 'ShopController@myblend')->name('myblend');
Route::any('myblend-search', 'LiveSearchControllercompare-list@myblendSearch');
Route::get('myblend_search', 'LiveSearchControllercompare-list@myblendSearch');
Route::get('myblend-product-add/{proId}', 'ShopController@myblendAdd');
Route::post('/myblend/remove', 'WishlistController@myBlendRemove')->name('myblend.remove');
Route::get('/subscription', 'ShopController@subscription')->name('subscription');
Route::post('/mail-subscription', 'ShopController@mailSubscription');
Route::get('/notes', 'ShopController@notes')->name('notes');
Route::get('/searchProduct', 'ShopController@searchProduct')->name('searchProduct');

//Route::get('/live_search', 'LiveSearchController@index');
//Route::get('/live_search/action', 'LiveSearchController@action')->name('live_search.action');
Route::get('/live_search', 'LiveSearchController@index');
Route::any('/notes_search', 'LiveSearchController@search')->name('notes_search');

Route::get('/perfume_search', 'LiveSearchController@perfume');
Route::any('/perfume_search', 'LiveSearchController@perfumeSearch')->name('perfume_search');
Route::any('/brand_search', 'LiveSearchController@brandSearch')->name('brand_search');


Route::get('/notes-details/{name}/{id}', 'ShopController@notesProducts')->name('notesProducts');
Route::get('/perfumers', 'ShopController@perfumers')->name('perfumers');
Route::get('/colors', 'ShopController@colors')->name('colors');
Route::get('/samples', 'ShopController@samples')->name('samples');
Route::get('/astrology', 'ShopController@astrology')->name('astrology');
Route::get('/barcode', 'ShopController@barcode')->name('barcode');
//Route::get('/accessories', 'ShopController@accessories')->name('accessories');
Route::get('/compare-list', 'ShopController@CompareList');
Route::get('/compare-list-desc/{id}', 'LiveSearchController@getDescription');
Route::get('/product-list', 'ShopController@productList');
Route::get('/blogs', 'ShopController@blogs')->name('blogs');
Route::get('/single-blog/{slug}', 'ShopController@singleBlog')->name('single_blog');
Route::resource('/blog-comments', 'BlogCommentController');

Route::get('/productDetail/{slug}', 'ShopController@productDetail')->name('productDetail');
Route::get('products-view/{id}', 'ShopController@productDetail')->name('productViews');
//Route::get('/perfumer/{id}/{slug}', 'ShopController@perfumerDetail')->name('perfumerDetail');
Route::get('/perfumer/{id}', 'ShopController@perfumerDetail')->name('perfumerDetail');
Route::get('/brand/{id}/{slug}', 'ShopController@perfumerDetail')->name('brand');


Route::get('/searchByColor', 'ShopController@searchByColor')->name('searchByColor');
Route::post('/searchByCode', 'ShopController@searchByCode')->name('searchByCode');

//Route::get('/brandProducts/{id}', 'ShopController@brandProducts')->name('brandProducts');

Route::get('all-brands', 'ShopController@brands')->name('all-brands');
Route::get('/brand/{id}/{slug}', 'ShopController@brandProducts')->name('brandProducts');

Route::get('/categoryProduct/{id}/{slug}', 'ShopController@categoryProduct')->name('categoryProduct');
Route::get('/categoryProduct/{id}/{accesories}', 'ShopController@categoryProduct')->name('accesoriesProduct');
Route::get('/productByColors/', 'ShopController@productByColors')->name('productByColors');
Route::get('/addToCompare/{id}', 'ShopController@addToCompare')->name('addToCompare');
Route::get('/addToCompareList/{id}', 'CompareController@addCompareList')->name('addToCompareList');
Route::post('/comparelist/remove', 'CompareController@remove')->name('comparelist.remove');
Route::get('/sortProduct/{current}/{value}', 'ShopController@sortProduct')->name('sortProduct');

Route::get('/sortProductBrand/', 'ShopController@sortProductBrand')->name('sortProduct');
Route::get('/sortProductCategory', 'ShopController@sortProductCategory')->name('sortProductCategory');
Route::get('/productCategory', 'ShopController@productCategory')->name('productCategory');

// country region
Route::get('country-region', 'ShopController@CountryRegion')->name('CountryRegion');
Route::get('ajaxCountryList', 'ShopController@ajaxCountryList')->name('ajaxCountryList');


// modified by rashed
Route::get('about', 'ShopController@about')->name('about');
Route::get('For-Press', 'ShopController@ForPress')->name('ForPress');
Route::get('price-match', 'ShopController@PriceMatch')->name('Price_Match');
Route::get('Charitable-Giving', 'ShopController@CharitableGiving')->name('CharitableGiving');
Route::get('Online-Community', 'ShopController@OnlineCommunity')->name('OnlineCommunity');
Route::get('authentication', 'ShopController@Authentication')->name('100_authentication');
Route::get('reward-points', 'ShopController@RewardPoints')->name('reward_point');
Route::get('accessibility', 'ShopController@Accessibility')->name('access');
Route::get('user-agreement', 'ShopController@Agreement')->name('agreement');

Route::get('for-business', 'ShopController@forBusiness')->name('forBusiness');
Route::get('blogger-program', 'ShopController@bloggerProgram')->name('bloggerProgram');
Route::get('submit-your-idea', 'ShopController@submitYourIdea')->name('submitYourIdea');
Route::get('personal-request', 'ShopController@personalRequest')->name('personalRequest');
Route::get('request-fragrance', 'ShopController@requestFragrance')->name('requestFragrance');
Route::get('subscription-agreement', 'ShopController@subscriptionAgreement')->name('subscriptionAgreement');
Route::get('supplier', 'ShopController@supplier')->name('supplier');
Route::get('your-feedback', 'ShopController@yourFeedback')->name('yourFeedback');



Route::get('learn-more', 'ShopController@LearnMore')->name('learn_more');

// added by Rayhan
Route::post('for-business', 'FooterController@ContactInfoStore')->name('contact_info_submit');
Route::post('blogger-program', 'FooterController@BloggerStore')->name('blogger_info_submit');
Route::post('supplier', 'FooterController@SupplierStore')->name('supplier_submit');
Route::post('submit-your-idea', 'FooterController@IdeaStore')->name('idea_submit');
Route::post('submit-personal-request', 'FooterController@PersonalRequestStore')->name('personal_request_submit');
Route::post('submit-feedback', 'FooterController@FeedbackStore')->name('feedback_submit');
Route::post('request-fragrance', 'FooterController@RequestFragrance')->name('request_freagrance_submit');
Route::post('For-Press', 'FooterController@ForPressStore')->name('press_contact_submit');

// End Rayhan


Route::get('customer-login', 'ShopController@customersLogin')->name('customersLogin');
Route::get('customer-register', 'ShopController@customersRegister')->name('customersRegister');


Route::get('online-shopping', 'ShopController@onlineShopping')->name('onlineShopping');
Route::get('terms-and-conditions', 'ShopController@termsAndConditions')->name('termsAndConditions');
Route::get('privacy-policy', 'ShopController@privacyPolicy')->name('privacyPolicy');
Route::get('cookies', 'ShopController@cookies');
Route::get('return-refund-policy', 'ShopController@returnRefundPolicy')->name('returnRefundPolicy');
Route::get('shipping-policy', 'ShopController@shippingPolicy')->name('shippingPolicy');
Route::get('how-to-shop', 'ShopController@howToShop')->name('howToShop');
Route::get('faq', 'ShopController@faq')->name('faq');
Route::get('faq-category/{id}', 'ShopController@faqCategory');
Route::get('faq-details/{id}', 'ShopController@faqDetails')->name('faqDetails');
Route::get('faq-helpful-yes/{id}', 'ShopController@HelpfulYes')->name('helpful_yes');
Route::get('faq-helpful-no/{id}', 'ShopController@HelpfulNo')->name('helpful_no'); 



Route::get('my-acount', 'ShopController@myAcount')->name('myAcount');
Route::get('my-profile', 'ShopController@myProfile')->name('myProfile');
Route::get('my-cart', 'ShopController@myCart')->name('myCart');
Route::get('my-orders', 'ShopController@myOrders')->name('myOrders');
Route::get('my-wish-list', 'ShopController@myWishList')->name('myWishList');
Route::get('my-compare-list', 'ShopController@myCompareList')->name('myCompareList');

// 14th may 

//ajax search route Abid
Route::get('maleProducts/{brandId}', 'LiveSearchController@maleProduct');
Route::get('femaleProducts/{brandId}', 'LiveSearchController@femaleProduct');
Route::get('unisexProducts/{brandId}', 'LiveSearchController@unisexProduct');
Route::get('rengeSearch/{min}/{max}/{id}', 'LiveSearchController@rengeSearch');
Route::get('catRengeSearch/{min}/{max}/{id}', 'LiveSearchController@catRengeSearch');

Route::get('category-maleProducts/{id}', 'LiveSearchController@catmaleProduct');
Route::get('category-femaleProducts/{id}', 'LiveSearchController@catfemaleProduct');
Route::get('category-unisexProducts/{id}', 'LiveSearchController@catunisexProduct');

Auth::routes(['verify' => true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/language', 'LanguageController@changeLanguage')->name('language.change');
Route::post('/currency', 'CurrencyController@changeCurrency')->name('currency.change');

Route::get('/social-login/redirect/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.login');
Route::get('/social-login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');
Route::get('/users/login', 'HomeController@login')->name('user.login');
Route::get('/users/registration', 'HomeController@registration')->name('user.registration');
//Route::post('/users/login', 'HomeController@user_login')->name('user.login.submit');
Route::post('/users/login/cart', 'HomeController@cart_login')->name('cart.login.submit');

Route::post('/subcategories/get_subcategories_by_category', 'SubCategoryController@get_subcategories_by_category')->name('subcategories.get_subcategories_by_category');
Route::post('/subsubcategories/get_subsubcategories_by_subcategory', 'SubSubCategoryController@get_subsubcategories_by_subcategory')->name('subsubcategories.get_subsubcategories_by_subcategory');
Route::post('/subsubcategories/get_brands_by_subsubcategory', 'SubSubCategoryController@get_brands_by_subsubcategory')->name('subsubcategories.get_brands_by_subsubcategory');
Route::post('/subsubcategories/get_attributes_by_subsubcategory', 'SubSubCategoryController@get_attributes_by_subsubcategory')->name('subsubcategories.get_attributes_by_subsubcategory');

//Home Page
//Route::get('/', 'HomeController@index')->name('home');
Route::post('/home/section/featured', 'HomeController@load_featured_section')->name('home.section.featured');
Route::post('/home/section/best_selling', 'HomeController@load_best_selling_section')->name('home.section.best_selling');
Route::post('/home/section/home_categories', 'HomeController@load_home_categories_section')->name('home.section.home_categories');
Route::post('/home/section/best_sellers', 'HomeController@load_best_sellers_section')->name('home.section.best_sellers');
//category dropdown menu ajax call
Route::post('/category/nav-element-list', 'HomeController@get_category_items')->name('category.elements');

//Flash Deal Details Page
Route::get('/flash-deal/{slug}', 'HomeController@flash_deal_details')->name('flash-deal-details');

Route::get('/sitemap.xml', function () {
	return base_path('sitemap.xml');
});



Route::get('/product/{slug}', 'HomeController@product')->name('product');
Route::get('/products', 'HomeController@listing')->name('products');
Route::get('/search?category={category_slug}', 'HomeController@search')->name('products.category');
Route::get('/search?subcategory={subcategory_slug}', 'HomeController@search')->name('products.subcategory');
Route::get('/search?subsubcategory={subsubcategory_slug}', 'HomeController@search')->name('products.subsubcategory');
Route::get('/search?brand={brand_slug}', 'HomeController@search')->name('products.brand');
Route::post('/product/variant_price', 'HomeController@variant_price')->name('products.variant_price');
Route::get('/shops/visit/{slug}', 'HomeController@shop')->name('shop.visit');
Route::get('/shops/visit/{slug}/{type}', 'HomeController@filter_shop')->name('shop.visit.type');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/nav-cart-items', 'CartController@updateNavCart')->name('cart.nav_cart');
Route::post('/cart/show-cart-modal', 'CartController@showCartModal')->name('cart.showCartModal');
Route::get('/cart/show-cart-modal', 'CartController@showCartModal')->name('cart.showCartModal');
Route::post('/cart/addtocart', 'CartController@addToCart')->name('cart.addToCart');
Route::post('/cart/removeFromCart', 'CartController@removeFromCart')->name('cart.removeFromCart');
Route::post('/cart/updateQuantity', 'CartController@updateQuantity')->name('cart.updateQuantity');

//Checkout Routes
Route::group(['middleware' => ['checkout']], function () {
	Route::get('/checkout', 'CheckoutController@get_shipping_info')->name('checkout.shipping_info');
	Route::any('/checkout/delivery_info', 'CheckoutController@store_shipping_info')->name('checkout.store_shipping_infostore');
	Route::post('/checkout/payment_select', 'CheckoutController@store_delivery_info')->name('checkout.store_delivery_info');
});

Route::post('/checkout/payment', 'CheckoutController@checkout')->name('payment.checkout');
Route::post('/get_pick_ip_points', 'HomeController@get_pick_ip_points')->name('shipping_info.get_pick_ip_points');
Route::get('/checkout/payment_select', 'CheckoutController@get_payment_info')->name('checkout.payment_info');
Route::post('/checkout/apply_coupon_code', 'CheckoutController@apply_coupon_code')->name('checkout.apply_coupon_code');
Route::post('/checkout/remove_coupon_code', 'CheckoutController@remove_coupon_code')->name('checkout.remove_coupon_code');

//Paypal START
Route::get('/paypal/payment/done', 'PaypalController@getDone')->name('payment.done');
Route::get('/paypal/payment/cancel', 'PaypalController@getCancel')->name('payment.cancel');
//Paypal END

// SSLCOMMERZ Start
Route::get('/sslcommerz/pay', 'PublicSslCommerzPaymentController@index');
Route::POST('/sslcommerz/success', 'PublicSslCommerzPaymentController@success');
Route::POST('/sslcommerz/fail', 'PublicSslCommerzPaymentController@fail');
Route::POST('/sslcommerz/cancel', 'PublicSslCommerzPaymentController@cancel');
Route::POST('/sslcommerz/ipn', 'PublicSslCommerzPaymentController@ipn');
//SSLCOMMERZ END

//Stipe Start
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
//Stripe END

Route::get('/compare', 'CompareController@index')->name('compare');
Route::get('/compare/reset', 'CompareController@reset')->name('compare.reset');
Route::post('/compare/addToCompare', 'CompareController@addToCompare')->name('compare.addToCompare');

Route::resource('subscribers', 'SubscriberController');

Route::get('/brands', 'HomeController@all_brands')->name('brands.all');
Route::get('/categories', 'HomeController@all_categories')->name('categories.all');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/search?q={search}', 'HomeController@search')->name('suggestion.search');
Route::post('/ajax-search', 'HomeController@ajax_search')->name('search.ajax');
Route::post('/config_content', 'HomeController@product_content')->name('configs.update_status');

Route::get('/sellerpolicy', 'HomeController@sellerpolicy')->name('sellerpolicy');
Route::get('/returnpolicy', 'HomeController@returnpolicy')->name('returnpolicy');
Route::get('/supportpolicy', 'HomeController@supportpolicy')->name('supportpolicy');
Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('/privacypolicy', 'HomeController@privacypolicy')->name('privacypolicy');

Route::group(['middleware' => ['user', 'verified']], function () {


	//Rashed
	Route::get('customer-dashboard', 'HomeController@customerDashboard')->name('customerDashboard');
	Route::get('customer-purchase-history', 'PurchaseHistoryController@CustomerPurchaseHistory');
	Route::get('customer-wishlists', 'WishlistController@CustomerWishlists');
	Route::get('my-blend', 'WishlistController@MyBlend');
	Route::get('my-subscription', 'WishlistController@MySubscription');
	Route::get('my-sample', 'WishlistController@MySample');
	Route::get('my-orders', 'WishlistController@MyOrders');
	Route::get('my-address', 'WishlistController@MyAddress');
	Route::get('recently-viewed', 'ShopController@RecentlyViewed');

	Route::get('customer-conversations', 'ConversationController@CustomerConversations');
	Route::get('customer-profile', 'WishlistController@CustomerProfile');
	Route::get('customer-support-ticket', 'SupportTicketController@customer_support_ticket');


	///////////////////////////////////////////////// OLD //////////////////////////////////////////////////////////////////
	//	Route::get('customer-purchase-history', 'PurchaseHistoryController@CustomerPurchaseHistory');
	//	Route::get('customer-wishlists', 'WishlistController@CustomerWishlists');
	//	Route::get('my-blend', 'WishlistController@MyBlend');
	//	Route::get('my-subscription', 'WishlistController@MySubscription');
	//	Route::get('my-sample', 'WishlistController@MySample');
	//	Route::get('my-orders', 'WishlistController@MyOrders');
	//	Route::get('my-address', 'WishlistController@MyAddress');
	//	Route::get('my-compare-list', 'WishlistController@myCompareList');
	//	Route::get('recently-viewed', 'WishlistController@RecentlyViewed');

	//	Route::get('customer-conversations', 'ConversationController@CustomerConversations');
	//	Route::get('customer-profile', 'HomeController@CustomerProfile');
	//	Route::get('customer-support-ticket', 'SupportTicketController@customer_support_ticket');

	/////////////////////////////////////////////////OLD//////////////////////////////////////////////////////////////////
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
	Route::get('/profile', 'HomeController@profile')->name('profile');
	Route::post('/customer/update-profile', 'HomeController@customer_update_profile')->name('customer.profile.update');
	Route::post('/seller/update-profile', 'HomeController@seller_update_profile')->name('seller.profile.update');

	Route::resource('purchase_history', 'PurchaseHistoryController');

	Route::post('/purchase_history/details', 'PurchaseHistoryController@purchase_history_details')->name('purchase_history.details');
	Route::get('/purchase_history/destroy/{id}', 'PurchaseHistoryController@destroy')->name('purchase_history.destroy');

	Route::resource('wishlists', 'WishlistController');
	Route::post('/wishlists/remove', 'WishlistController@remove')->name('wishlists.remove');

	Route::get('/wallet', 'WalletController@index')->name('wallet.index');
	Route::post('/recharge', 'WalletController@recharge')->name('wallet.recharge');

	Route::resource('support_ticket', 'SupportTicketController');
	Route::post('support_ticket/reply', 'SupportTicketController@seller_store')->name('support_ticket.seller_store');
});

Route::group(['prefix' => 'seller', 'middleware' => ['seller', 'verified']], function () {
	Route::get('/products', 'HomeController@seller_product_list')->name('seller.products');
	Route::get('/product/upload', 'HomeController@show_product_upload_form')->name('seller.products.upload');
	Route::get('/product/{id}/edit', 'HomeController@show_product_edit_form')->name('seller.products.edit');
	Route::resource('payments', 'PaymentController');

	Route::get('/shop/apply_for_verification', 'ShopController@verify_form')->name('shop.verify');
	Route::post('/shop/apply_for_verification', 'ShopController@verify_form_store')->name('shop.verify.store');

	Route::get('/reviews', 'ReviewController@seller_reviews')->name('reviews.seller');
});

Route::group(['middleware' => ['auth']], function () {
	Route::post('/products/store/', 'ProductController@store')->name('products.store');
	Route::post('/products/update/{id}', 'ProductController@update')->name('products.update');
	Route::get('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');
	Route::get('/products/duplicate/{id}', 'ProductController@duplicate')->name('products.duplicate');
	Route::post('/products/sku_combination', 'ProductController@sku_combination')->name('products.sku_combination');
	Route::post('/products/sku_combination_edit', 'ProductController@sku_combination_edit')->name('products.sku_combination_edit');
	Route::post('/products/featured', 'ProductController@updateFeatured')->name('products.featured');
	Route::post('/products/published', 'ProductController@updatePublished')->name('products.published');

	Route::get('invoice/customer/{order_id}', 'InvoiceController@customer_invoice_download')->name('customer.invoice.download');
	Route::get('invoice/seller/{order_id}', 'InvoiceController@seller_invoice_download')->name('seller.invoice.download');

	Route::resource('orders', 'OrderController');
	Route::get('/orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');
	Route::post('/orders/details', 'OrderController@order_details')->name('orders.details');
	Route::post('/orders/update_delivery_status', 'OrderController@update_delivery_status')->name('orders.update_delivery_status');
	Route::post('/orders/update_payment_status', 'OrderController@update_payment_status')->name('orders.update_payment_status');

	Route::resource('/reviews', 'ReviewController');

	Route::resource('/withdraw_requests', 'SellerWithdrawRequestController');
	Route::get('/withdraw_requests_all', 'SellerWithdrawRequestController@request_index')->name('withdraw_requests_all');
	Route::post('/withdraw_request/payment_modal', 'SellerWithdrawRequestController@payment_modal')->name('withdraw_request.payment_modal');
	Route::post('/withdraw_request/message_modal', 'SellerWithdrawRequestController@message_modal')->name('withdraw_request.message_modal');

	Route::resource('conversations', 'ConversationController');
	Route::post('conversations/refresh', 'ConversationController@refresh')->name('conversations.refresh');
	Route::resource('messages', 'MessageController');

	//Product Bulk Upload
	Route::get('/product-bulk-upload/index', 'ProductBulkUploadController@index')->name('product_bulk_upload.index');
	Route::post('/bulk-product-upload', 'ProductBulkUploadController@bulk_upload')->name('bulk_product_upload');
	Route::get('/product-csv-download/{type}', 'ProductBulkUploadController@import_product')->name('product_csv.download');
	Route::get('/vendor-product-csv-download/{id}', 'ProductBulkUploadController@import_vendor_product')->name('import_vendor_product.download');
	Route::group(['prefix' => 'bulk-upload/download'], function () {
		Route::get('/category', 'ProductBulkUploadController@pdf_download_category')->name('pdf.download_category');
		Route::get('/sub_category', 'ProductBulkUploadController@pdf_download_sub_category')->name('pdf.download_sub_category');
		Route::get('/sub_sub_category', 'ProductBulkUploadController@pdf_download_sub_sub_category')->name('pdf.download_sub_sub_category');
		Route::get('/brand', 'ProductBulkUploadController@pdf_download_brand')->name('pdf.download_brand');
		Route::get('/seller', 'ProductBulkUploadController@pdf_download_seller')->name('pdf.download_seller');
	});
});

Route::resource('shops', 'ShopController');
Route::get('/track_your_order', 'HomeController@trackOrder')->name('orders.track');

Route::get('/instamojo/payment/pay-success', 'InstamojoController@success')->name('instamojo.success');

Route::post('rozer/payment/pay-success', 'RazorpayController@payment')->name('payment.rozer');

Route::get('/paystack/payment/callback', 'PaystackController@handleGatewayCallback');


Route::get('/vogue-pay', 'VoguePayController@showForm');
Route::get('/vogue-pay/success/{id}', 'VoguePayController@paymentSuccess');
Route::get('/vogue-pay/failure/{id}', 'VoguePayController@paymentFailure');


//Ask Question Route
Route::get('contact-us', 'ContactusController@index');
Route::post('contact-us', 'ContactusController@sendMail');
Route::resource('ask-question', 'AskQuestionController');
Route::any('choose-perfume/{id}', 'SubscriptionController@choosePerfume')->name('choose_perfume');
Route::any('selected-perfume/{id}/shippingAndReviewOrder', 'SubscriptionController@selectedPerfume')->name('selectedPerfume');
Route::resource('subscription-store', 'SubscriptionController');
Route::get('/send/email', 'SubscriptionController@mailSend');

// modified by rashed 12 June
Route::get('events', 'ShopController@events')->name('events');
Route::get('events/{slug}', 'ShopController@eventSinglePage')->name('eventSinglePage');


// Route::get('careers/apply-now', 				'ShopController@careers')->name('careers');
// Route::get('careers/available-positions', 		'ShopController@availablePositions')->name('availablePositions');
// Route::get('careers/working-with-myfrgranceme', 'ShopController@workingWithMyfrgranceme')->name('workingWithMyfrgranceme');
// Route::get('consumer-rights', 					'ShopController@consumerRights')->name('consumerRights');


Route::get('careers/apply-now/{id}', 'ShopController@careers')->name('careers');
Route::post('applicant-form-submit', 'ShopController@ApplicantFormSubmit')->name('applicant_form_submit');
Route::get('careers/available-positions', 'ShopController@availablePositions')->name('availablePositions');
Route::get('careers/working-with-myfrgranceme', 'ShopController@workingWithMyfrgranceme')->name('workingWithMyfrgranceme');
Route::get('consumer-rights', 'ShopController@consumerRights')->name('consumerRights');




// subscription
Route::get('subscription/order-history', 				'SubscriptionController@subscriptionOrder')->name('subscriptionOrder');
Route::get('subscription/queue', 				'SubscriptionController@subscriptionQueue')->name('subscriptionQueue');
Route::get('subscription/tracking', 			'SubscriptionController@subscriptionTracking')->name('subscriptionTracking');
Route::get('subscription/manage', 				'SubscriptionController@subscriptionManage')->name('subscriptionManage');
Route::get('subscription/billing-and-shipping', 'SubscriptionController@subscriptionBS')->name('subscriptionBS');
Route::post('subscription/card-update', 'SubscriptionController@subscriptionCardUpdate')->name('subscriptionCardUpdate');
Route::post('subscription/ship-update', 'SubscriptionController@subscriptionShipUpdate')->name('subscriptionShipUpdate');
Route::get('subscription/billing-and-shipping', 			'SubscriptionController@subscriptionShipping')->name('subscriptionShipping');
Route::get('subscription/personal-info', 	'SubscriptionController@subscriptionPersonalInfo')->name('subscriptionPersonalInfo');
Route::post('subscription/personal-info', 	'SubscriptionController@userInfoUpdate')->name('userInfoUpdate');
Route::get('subscription/personal-password', 	'SubscriptionController@subscriptionPersonalPassword')->name('subscriptionPersonalPassword');
Route::post('subscription/personal-password', 	'SubscriptionController@changePassword')->name('changePassword');
Route::post('subscription/with/registration', 	'SubscriptionController@subscriptionShippingRegistration')->name('subscriptionWithRegistration');
Route::post('save_subscription_queue', 	'SubscriptionController@saveSubscriptionQueue')->name('save_subscription_queue');
Route::post('save_subscription_plan', 	'SubscriptionController@saveSubscriptionPlan')->name('save_subscription_plan');
Route::post('update_skip_month', 	'SubscriptionController@updateSkipMonth')->name('update_skip_month');
Route::post('update_frequency_month', 	'SubscriptionController@updateFrequencyMonth')->name('update_frequency_month');

// subscription
Route::get('sample/order-history', 				'SampleController@sampleOrder')->name('sampleOrder');
Route::get('sample/queue', 				'SampleController@sampleQueue')->name('sampleQueue');
Route::get('sample/tracking', 			'SampleController@sampleTracking')->name('sampleTracking');
Route::get('sample/manage', 				'SampleController@sampleManage')->name('sampleManage');
Route::get('sample/billing-and-shipping', 'SampleController@sampleBS')->name('sampleBS');
Route::get('sample/shipping', 			'SampleController@sampleShipping')->name('sampleShipping');
Route::get('sample/personal-info', 	'SampleController@samplePersonalInfo')->name('samplePersonalInfo');

Route::get('sample/personal-password', 	'SampleController@samplePersonalPassword');
Route::get('subscription/personal-password', 	'SubscriptionController@subscriptionPersonalPassword')->name('subscriptionPersonalPassword');


//Api Routes Here

Route::group(['prefix' => 'api'], function () {

	Route::post('login', 'API\UserController@login');
	Route::post('register', 'API\UserController@register');
	Route::get('customerByEmail', 'API\UserController@customerByEmail');
	Route::get('updatePofile/{id}', 'API\UserController@updateUserProfile');


	Route::post('user-signup', 'API\UserController@userSignup');
	Route::get('user-login', 'API\UserController@userLogin');

	Route::get('social-signup', 'API\UserController@socialSignup');
	Route::get('social-login', 'API\UserController@socialLogin');



	Route::get('myProfile', 'API\UserController@myProfile');
	Route::get('myWishlist', 'API\UserController@myWishlist');


	Route::get('productBrandSearchNew/{name}', 'ApiController@productBrandSearchNew');
	Route::post('productBrandSearch', 'ApiController@productBrandSearch');
	Route::get('/allPerfumer', 'ApiController@allPerfumer');
	Route::get('/allProduct', 'ApiController@allProduct');
	Route::get('/singleProduct/{id}', 'ApiController@singleProduct');
	Route::get('/allCategory', 'ApiController@allCategory');

	Route::get('/allBaseNote', 'ApiController@allBaseNote');
	Route::get('/allTopNote', 'ApiController@allTopNote');
	Route::get('/allMiddleNote', 'ApiController@allMiddleNote');

	Route::get('/searchProduct/{keyword}', 'ApiController@searchProduct');
	Route::get('/newProduct/', 'ApiController@newProduct');
	Route::get('/allNotes/', 'ApiController@allNotes');
	Route::get('/singleNoteProduct/{slug}', 'ApiController@singleNoteProduct');


	Route::get('/allBrand', 'ApiController@allBrand');
	Route::get('/searchBrand/{keyword}', 'ApiController@searchBrand');
	Route::get('/productByBrandId/{id}', 'ApiController@productByBrandId');



	Route::get('/product-review/{id}', 'ApiController@ProductReview');



	Route::get('/privacy-policy', 'ApiController@PrivacyPolicyApi');
	Route::get('/change-password', 'ApiController@updatePassowrdApi');



	Route::get('communities', 'ApiController@community');
	Route::get('like/{userID}', 'ApiController@like');
	Route::get('dislike/{userID}', 'ApiController@dislike');
	Route::get('myRecentView/{userID}', 'ApiController@myRecentView');
	Route::get('myWishlist/{userID}', 'ApiController@myWishlist');
	Route::get('birthdayProduct/{userID}', 'ApiController@birthdayProduct');


	// My List

	Route::get('myList/{userID}', 'ApiController@myList');
	Route::get('myListProduct/{ListID}', 'ApiController@myListProduct');

	Route::get('suggestionProducts', 'ApiController@suggestionProducts');
	Route::post('createList', 'ApiController@createList');
	//	Route::get('singleProduct/{id}', 'ApiController@singleProductWithNote');
	Route::get('createList/{listId}/{proId}/addToList', 'ApiController@addToList');

	Route::get('getProductByNotes', 'ApiController@getProductByNotes');
	// Route::get('getProductByNotes/{id}/{type}', 'ApiController@myListProduct');


	// get single product
	Route::get('product/{id}', 'ApiController@getProduct');
	Route::get('getProductByNotes/{id}', 'ApiController@singleProductWithNote');


	Route::get('productRatings/{id}', 'ApiController@productRatings');
	Route::get('productRreview/{productId}/{userId}', 'ApiController@productReview');


	// modified by rashed 05 july 2020
	Route::get('terms-and-conditions', 'ApiController@termsAndConditions');
	Route::get('privacy-policy', 'ApiController@privacyPolicy');
	Route::get('return-refund-policy', 'ApiController@returnRefundPolicy');
	Route::get('shipping-policy', 'ApiController@shippingPolicy');



	Route::get('events', 'ApiController@events')->name('events');
	Route::get('events/{slug}', 'ApiController@eventSinglePage');


	// blogs API
	Route::get('blogs', 'ApiController@blogs');
	Route::get('blogs/{id}', 'ApiController@blogDetails');
	Route::get('blog-comments/{id}', 'ApiController@blogComments');

	//Charitable Giving
	Route::get('charitable-giving', 'ApiController@charitableGiving');
	Route::get('counterfeit-education', 'ApiController@CounterfeitEducation');
	Route::get('price-match', 'ApiController@priceMatch');
	Route::get('newsroom', 'ApiController@newsRoom');


	// perfumers
	Route::get('perfumers', 'ApiController@Perfumers');
	Route::get('perfumer-products/{id}', 'ApiController@PerfumersProducts');
	Route::get('single-product/{id}', 'ApiController@SingleProducts');



	Route::get('astrology/user/{id}', 'ApiController@Astrology');
	Route::get('accessories', 'ApiController@accessories');
	Route::get('compare-list/user/{id}', 'ApiController@compareList');
	Route::get('color/code/{code}', 'ApiController@colorCode');
	Route::get('contatcUs', 'ApiController@contactUs');
	Route::get('subscriptioProducts', 'ApiController@subscriptioProducts');
	Route::get('sampleProducts', 'ApiController@sampleProducts');
});
