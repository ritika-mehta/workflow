<?php

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

Route::group(['prefix'=>'','middleware'=>'auth:admin'],function()
{
  
  // Dashbaord
  Route::get('/dashboard','AdminApp\DashboardController@dashboard')->name('admin.dashboard');

  // Roles 
  Route::get('/add_role','AdminApp\RoleController@add_role')->name('admin.role.add')->middleware('permission:manage-role-add');
  Route::post('/add_role','AdminApp\RoleController@add_role')->name('admin.role.add.post')->middleware('permission:manage-role-add');

  Route::get('role/listing','AdminApp\RoleController@role_listing')->name('role.list')->middleware('permission:manage-role-view');
  
  Route::get('role/listing/ajax','AdminApp\RoleController@role_list_ajax')->name('role.list.ajax')->middleware('permission:manage-role-view');

  Route::get('role/edit/{role_id}','AdminApp\RoleController@edit_role')->name('role.edit')->middleware('permission:manage-role-edit');
  Route::post('role/edit/{role_id}','AdminApp\RoleController@edit_role')->name('role.edit.post')->middleware('permission:manage-role-edit');
  
  Route::get('role/delete/{role_id}','AdminApp\RoleController@delete')->name('role.delete')->middleware('permission:manage-role-del');
  Route::get('dashboard/change_status','AdminApp\DashboardController@change_status')->name('dashboard.change.status')->middleware('permission:manage-role-del');
  
  // Users
  Route::get('user/add','AdminApp\UserController@add')->name('user.add')->middleware('permission:manage-administrator-add');
  Route::post('user/add','AdminApp\UserController@add')->name('user.add.post')->middleware('permission:manage-administrator-add');

  Route::get('user/edit/{user_id}','AdminApp\UserController@edit')->name('user.edit')->middleware('permission:manage-administrator-edit');
  Route::post('user/edit/{user_id}','AdminApp\UserController@edit')->name('user.edit.post')->middleware('permission:manage-administrator-edit');
  
  Route::get('user/listing','AdminApp\UserController@listing')->name('user.list')->middleware('permission:manage-administrator-view');
  Route::get('user/listing/ajax','AdminApp\UserController@user_listing_ajax')->name('user.list.ajax')->middleware('permission:manage-administrator-view');
  Route::get('user/delete/{user_id}','AdminApp\UserController@delete')->name('user.delete')->middleware('permission:manage-administrator-del');

  Route::get('user/myprofile/','AdminApp\UserController@my_profile')->name('myprofile');

  Route::post('user/myprofile/','AdminApp\UserController@change_profile_image')->name('myprofile.image.post');
  Route::post('user/info','AdminApp\UserController@update_my_info')->name('user.info.post');
  Route::post('user/change_password','AdminApp\UserController@change_password')->name('user.change.password.post');

  
});

Route::group(['prefix' => ''], function ()
{
  Route::get('/','AdminAuth\LoginController@showLoginForm');

  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Route::group([
    'prefix' => 'blog_categories', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\BlogCategoriesController@index')
         ->name('blog_categories.blog_category.index')->middleware('permission:category-view');
         
    Route::get('/create','AdminApp\BlogCategoriesController@create')
         ->name('blog_categories.blog_category.create')->middleware('permission:category-add');
         
    Route::get('/show/{blogCategory}','AdminApp\BlogCategoriesController@show')
         ->name('blog_categories.blog_category.show')->where('id', '[0-9]+')->middleware('permission:category-view');
         
    Route::get('/{blogCategory}/edit','AdminApp\BlogCategoriesController@edit')
         ->name('blog_categories.blog_category.edit')->where('id', '[0-9]+')->middleware('permission:category-edit');
         
    Route::post('/', 'AdminApp\BlogCategoriesController@store')
         ->name('blog_categories.blog_category.store')->middleware('permission:category-add');
         
    Route::put('blog_category/{blogCategory}', 'AdminApp\BlogCategoriesController@update')
         ->name('blog_categories.blog_category.update')->where('id', '[0-9]+')->middleware('permission:category-edit');
         
    Route::get('/{blogCategory}/delete','AdminApp\BlogCategoriesController@destroy')
         ->name('blog_categories.blog_category.destroy')->where('id', '[0-9]+')->middleware('permission:category-del');

});

Route::group([
    'prefix' => 'subscription', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\SubscriptionController@index')
         ->name('subscriptions.subscription.index')->middleware('permission:subcription-view');

    Route::get('download_resume/{candidate}', 'AdminApp\SubscriptionController@download_resume')->name('candidates.resume.download')->middleware('permission:subcription-view');

    Route::get('download_cover_letter/{candidate}', 'AdminApp\SubscriptionController@download_cover_letter')->name('candidates.cover_letter.download')->middleware('permission:subcription-view');
         
    Route::get('/create','AdminApp\SubscriptionController@create')
         ->name('subscriptions.subscription.create')->middleware('permission:subcription-add');
         
    Route::get('/show/{subcriptions}','AdminApp\SubscriptionController@show')
         ->name('subscriptions.subscription.show')->where('id', '[0-9]+')->middleware('permission:subcription-view');
         
    Route::get('/{subscription}/edit','AdminApp\SubscriptionController@edit')
         ->name('subscriptions.subscription.edit')->where('id', '[0-9]+')->middleware('permission:subcription-edit');
         
    Route::post('/', 'AdminApp\SubscriptionController@store')
         ->name('subscriptions.subscription.store')->middleware('permission:subcription-add');
         
    Route::put('subscription/{id}', 'AdminApp\SubscriptionController@update')
         ->name('subscriptions.subscription.update')->where('id', '[0-9]+')->middleware('permission:subcription-edit');
         
    Route::get('/{subscription}/delete','AdminApp\SubscriptionController@destroy')
         ->name('subscriptions.subscription.destroy')->where('id', '[0-9]+')->middleware('permission:subcription-del');
     });


Route::group([
    'prefix' => 'transactions', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\TransactionsController@index')
         ->name('transactions.transaction.index')->middleware('permission:subcription-view');

    Route::get('/show/{transactions}','AdminApp\TransactionsController@show')
         ->name('transactions.transactions.show')->where('id', '[0-9]+')->middleware('permission:subcription-view');
         
    Route::post('/', 'AdminApp\TransactionsController@store')
         ->name('subcriptions.subcription.store')->middleware('permission:subcription-add');
         
    Route::get('/{subcriptions}/delete','AdminApp\TransactionsController@destroy')
         ->name('subcriptions.subcription.destroy')->where('id', '[0-9]+')->middleware('permission:subcription-del');
     });


Route::group([
    'prefix' => 'manage_post', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\PostsController@index')
         ->name('manage_posts.manage_post.index')->middleware('permission:subcription-view');

    Route::get('/show/{transactions}','AdminApp\PostsController@show')
         ->name('manage_posts.manage_post.show')->where('id', '[0-9]+')->middleware('permission:subcription-view');
         
    Route::post('/', 'AdminApp\PostsController@store')
         ->name('manage_posts.manage_post.store')->middleware('permission:subcription-add');
         
   Route::get('/chStatus', 'AdminApp\PostsController@chStatus')
         ->name('manage_posts.manage_post.chStatus');
         
    Route::get('/{subcriptions}/delete','AdminApp\PostsController@destroy')
         ->name('manage_posts.manage_post.destroy')->where('id', '[0-9]+')->middleware('permission:subcription-del');

    Route::get('/{manage_users}/edit','AdminApp\PostsController@edit')
         ->name('manage_posts.manage_post.edit')->where('id', '[0-9]+')->middleware('permission:manageusers-edit');
         
    Route::put('manage_users/{id}', 'AdminApp\PostsController@update')
         ->name('manage_posts.manage_post.update')->where('id', '[0-9]+');
     });


/**  route for manage banners **/
Route::group([
    'prefix' => 'manage_banners', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\BannerController@index')
         ->name('manage_banners.manage_banner.index')->middleware('permission:manage-banners-view');
         
    Route::get('/create','AdminApp\BannerController@create')
         ->name('manage_banners.manage_banner.create')->middleware('permission:manage-banners-add');;
         
    Route::get('/show/{manage_banner}','AdminApp\BannerController@show')
         ->name('manage_banners.manage_banner.show')->middleware('permission:manage-banners-view');
         
    Route::get('/{manage_banner}/edit','AdminApp\BannerController@edit')
         ->name('manage_banners.manage_banner.edit')->middleware('permission:manage-banners-edit');
         
    Route::post('/', 'AdminApp\BannerController@store')
         ->name('manage_banners.manage_banner.store')->middleware('permission:manage-banners-add');
         
    Route::put('manage_banner/{manage_banner}', 'AdminApp\BannerController@update')
         ->name('manage_banners.manage_banner.update')->middleware('permission:manage-banners-edit');
         
    Route::get('/{manage_banner}/delete','AdminApp\BannerController@destroy')
         ->name('manage_banners.manage_banner.destroy')->middleware('permission:manage-banners-del');

});
/**  end route for manage banners **/


/**  route for cms pages **/
Route::group([
    'prefix' => 'manage_cms_pages', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\CmsController@index')
         ->name('manage_cms_pages.manage_cms_page.index')->middleware('permission:manage-cms-pages-view');
         
    Route::get('/create','AdminApp\CmsController@create')
         ->name('manage_cms_pages.manage_cms_page.create')->middleware('permission:manage-cms-pages-add');;
         
    Route::get('/show/{manage_cms_page}','AdminApp\CmsController@show')
         ->name('manage_cms_pages.manage_cms_page.show')->middleware('permission:manage-cms-pages-view');
         
    Route::get('/{manage_cms_page}/edit','AdminApp\CmsController@edit')
         ->name('manage_cms_pages.manage_cms_page.edit')->middleware('permission:manage-cms-pages-edit');
         
    Route::post('/', 'AdminApp\CmsController@store')
         ->name('manage_cms_pages.manage_cms_page.store')->middleware('permission:manage-cms-pages-add');
         
    Route::put('manage_cms_page/{manage_cms_page}', 'AdminApp\CmsController@update')
         ->name('manage_cms_pages.manage_cms_page.update')->middleware('permission:manage-cms-pages-edit');
         
    Route::get('/{manage_cms_page}/delete','AdminApp\CmsController@destroy')
         ->name('manage_cms_pages.manage_cms_page.destroy')->middleware('permission:manage-cms-pages-del');

});
/**  end route for cms pages **/


/**  route for settings **/
Route::group([
    'prefix' => 'site_setting', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\SettingController@index')
         ->name('site_setting.setting.index')->middleware('permission:site-setting-view');
         
    Route::get('/create','AdminApp\SettingController@create')
         ->name('site_setting.setting.create')->middleware('permission:site-setting-add');
         
    Route::get('/show/{setting}','AdminApp\SettingController@show')
         ->name('site_setting.setting.show')->middleware('permission:site-setting-view');
         
    Route::get('/{setting}/edit','AdminApp\SettingController@edit')
         ->name('site_setting.setting.edit')->middleware('permission:site-setting-edit');
         
    Route::post('/', 'AdminApp\SettingController@store')
         ->name('site_setting.setting.store')->middleware('permission:site-setting-add');

    Route::post('updateSiteLogo', 'AdminApp\SettingController@updateSiteLogo')
         ->name('site_setting.setting.updateSiteLogo')->middleware('permission:site-setting-add');     

         
    Route::put('setting/{setting}', 'AdminApp\SettingController@update')
         ->name('site_setting.setting.update')->middleware('permission:site-setting-edit');
         
    Route::get('/{setting}/delete','AdminApp\SettingController@destroy')
         ->name('site_setting.setting.destroy')->middleware('permission:site-setting-del');

});
/**  end route for settings **/

/**  route for email templates **/
Route::group([
    'prefix' => 'email_templates', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\EmailTemplateController@index')
         ->name('email_templates.email_template.index')->middleware('permission:email-template-view');
         
    Route::get('/create','AdminApp\EmailTemplateController@create')
         ->name('email_templates.email_template.create')->middleware('permission:email-template-add');
         
    Route::get('/show/{email_template}','AdminApp\EmailTemplateController@show')
         ->name('email_templates.email_template.show')->middleware('permission:email-template-view');
         
    Route::get('/{email_template}/edit','AdminApp\EmailTemplateController@edit')
         ->name('email_templates.email_template.edit')->middleware('permission:email-template-edit');
         
    Route::post('/', 'AdminApp\EmailTemplateController@store')
         ->name('email_templates.email_template.store')->middleware('permission:email-template-add');
         
    Route::put('email_template/{email_template}', 'AdminApp\EmailTemplateController@update')
         ->name('email_templates.email_template.update')->middleware('permission:email-template-edit');
         
    Route::get('/{email_template}/delete','AdminApp\EmailTemplateController@destroy')
         ->name('email_templates.email_template.destroy')->middleware('permission:email-template-del');

});
/**  end route for email templates **/


Route::group([
    'prefix' => 'menues', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\MenuesController@index')
         ->name('menues.menues.index');
         
    Route::get('/create','AdminApp\MenuesController@create')
         ->name('menues.menues.create');
         
    Route::get('/show/{menues}','AdminApp\MenuesController@show')
         ->name('menues.menues.show')->where('id', '[0-9]+');
         
    Route::get('/{menues}/edit','AdminApp\MenuesController@edit')
         ->name('menues.menues.edit')->where('id', '[0-9]+');
         
    Route::post('/', 'AdminApp\MenuesController@store')
         ->name('menues.menues.store');
         
    Route::put('menues/{menues}', 'AdminApp\MenuesController@update')
         ->name('menues.menues.update')->where('id', '[0-9]+');
         
    Route::get('/{menues}/delete','AdminApp\MenuesController@destroy')
         ->name('menues.menues.destroy')->where('id', '[0-9]+');

});

Route::group([
    'prefix' => 'blogs', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\BlogsController@index')
         ->name('blogs.blog.index')->middleware('permission:blogs-view');
         
    Route::get('/create','AdminApp\BlogsController@create')
         ->name('blogs.blog.create')->middleware('permission:blogs-add');;
         
    Route::get('/show/{blog}','AdminApp\BlogsController@show')
         ->name('blogs.blog.show')->middleware('permission:blogs-view');
         
    Route::get('/{blog}/edit','AdminApp\BlogsController@edit')
         ->name('blogs.blog.edit')->middleware('permission:blogs-edit');
         
    Route::post('/', 'AdminApp\BlogsController@store')
         ->name('blogs.blog.store')->middleware('permission:blogs-add');
         
    Route::put('blog/{blog}', 'AdminApp\BlogsController@update')
         ->name('blogs.blog.update')->middleware('permission:blogs-edit');
         
    Route::get('/{blog}/delete','AdminApp\BlogsController@destroy')
         ->name('blogs.blog.destroy')->middleware('permission:blogs-del');

});

;


Route::get('/link', function () {
    Artisan::call('storage:link');
});


Route::group([
    'prefix' => 'job_attribute/timezones', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\TimezonesController@index')
         ->name('timezones.timezone.index')->middleware('permission:timezones-view');
         
    Route::get('/create','AdminApp\TimezonesController@create')
         ->name('timezones.timezone.create')->middleware('permission:timezones-add');
         
    Route::get('/show/{timezone}','AdminApp\TimezonesController@show')
         ->name('timezones.timezone.show')->where('id', '[0-9]+')->middleware('permission:timezones-view');
         
    Route::get('/{timezone}/edit','AdminApp\TimezonesController@edit')
         ->name('timezones.timezone.edit')->where('id', '[0-9]+')->middleware('permission:timezones-edit');
         
    Route::post('/', 'AdminApp\TimezonesController@store')
         ->name('timezones.timezone.store')->middleware('permission:timezones-add');
         
    Route::put('timezone/{timezone}', 'AdminApp\TimezonesController@update')
         ->name('timezones.timezone.update')->where('id', '[0-9]+')->middleware('permission:timezones-edit');
         
    Route::get('/{timezone}/delete','AdminApp\TimezonesController@destroy')
         ->name('timezones.timezone.destroy')->where('id', '[0-9]+')->middleware('permission:timezones-del');

});


Route::group([
    'prefix' => 'manage_users', 'middleware'=>['auth:admin']
], function () {
    Route::get('/', 'AdminApp\ManageUserController@index')
         ->name('manage_users.manage_user.index')->middleware('permission:manageusers-view');

    Route::get('download_resume/{candidate}', 'AdminApp\ManageUserController@download_resume')->name('candidates.resume.download')->middleware('permission:manageusers-view');

    Route::get('download_cover_letter/{candidate}', 'AdminApp\ManageUserController@download_cover_letter')->name('candidates.cover_letter.download')->middleware('permission:manageusers-view');
         
    Route::get('/create','AdminApp\ManageUserController@create')
         ->name('manage_users.manage_user.create')->middleware('permission:manageusers-add');
         
    Route::get('/show/{manage_users}','AdminApp\ManageUserController@show')
         ->name('manage_users.manage_user.show')->where('id', '[0-9]+')->middleware('permission:manageusers-view');
         
    Route::get('/{manage_users}/edit','AdminApp\ManageUserController@edit')
         ->name('manage_users.manage_user.edit')->where('id', '[0-9]+')->middleware('permission:manageusers-edit');
         
    Route::post('/', 'AdminApp\ManageUserController@store')
         ->name('manage_users.manage_user.store')->middleware('permission:manageusers-add');
         
    Route::put('manage_users/{id}', 'AdminApp\ManageUserController@update')
         ->name('manage_users.manage_user.update')->where('id', '[0-9]+')->middleware('permission:manageusers-edit');
         
    Route::get('/{candidate}/delete','AdminApp\ManageUserController@destroy')
         ->name('users.manage_users.destroy')->where('id', '[0-9]+')->middleware('permission:manageusers-del');
     });





