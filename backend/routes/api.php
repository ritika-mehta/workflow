<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->group(['prefix' => 'v1','middleware' => ['cors'],], function($router){
    /**
     * Group for Authorizations tasks
     */
    $router->group(['namespace' => 'Api\v1\Auth'], function($router){
        $router->post('login', ['uses' => 'AuthController@login']);
        $router->post('signup', ['uses' => 'AuthController@Signup']);
       $router->post('logout', ['uses' => 'AuthController@logOut'])->middleware('authenticate-api');
       $router->post('changePassword', ['uses' => 'AuthController@changePassword'])->middleware('authenticate-api');
       $router->post('updateProfile', ['uses' => 'AuthController@profileUpdate'])->middleware('authenticate-api');
       $router->post('getuserDetails', ['uses' => 'AuthController@getUserDetails'])->middleware('authenticate-api');
       $router->post('boostContent', ['uses' => 'AuthController@contentBoost'])->middleware('authenticate-api');
       $router->post('category', ['uses' => 'AuthController@getCategory'])->middleware('authenticate-api');
       $router->post('addPost', ['uses' => 'AuthController@addPost'])->middleware('authenticate-api');
       $router->post('updatePassword', ['uses' => 'AuthController@UpdatePassword'])->middleware('authenticate-api');
    });
    
    /**
     * Group for Products related tasks
     */
    $router->group(['namespace' => 'Api\v1\Posts_Services'], function($router){
      $router->post('getPostList', ['uses' => 'PostServicesController@postList']);
      $router->get('publishPostList', ['uses' => 'PostServicesController@publishPostList']);
      $router->get('underReviewPost', ['uses' => 'PostServicesController@underReviewPost']);
       $router->post('clickCount', ['uses' => 'PostServicesController@clickCount'])->middleware('authenticate-api');
       $router->get('bannerList', ['uses' => 'PostServicesController@bannerList']);
       $router->post('addBbookmarkPost', ['uses' => 'PostServicesController@AddBookmarkPost']);
       $router->get('bookmarkList', ['uses' => 'PostServicesController@bookmarkList']);
	   $router->post('bannerAddClick/{id}', ['uses' => 'PostServicesController@bannerAddClick']);
	   $router->post('bannerAddView/{id}', ['uses' => 'PostServicesController@bannerAddView']);
     $router->get('topBanner', ['uses' => 'PostServicesController@topBanner']);
	   $router->get('planList', ['uses' => 'PostServicesController@planList']);
      
    });
});
