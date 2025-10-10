<?php
Route::group(['namespace' => 'Front'], function () {
    Route::get('/','FrontController@homePage')->name('front.home-page');
    Route::get('/ve-chung-toi.html','FrontController@about_page')->name('front.about-us');
    Route::get('/rooms/','FrontController@getListRooms')->name('front.getListRooms');
    Route::get('/room/{slug}','FrontController@getRoom')->name('front.getRoom');
    Route::get('/dich-vu/{slug?}.html','FrontController@services')->name('front.services');
    Route::get('/chi-tiet-dich-vu/{slug}.html','FrontController@getServiceDetail')->name('front.getServiceDetail');
    Route::get('/danh-sach-tin-tuc.html','FrontController@blogs')->name('front.blogs');
    Route::get('/chi-tiet-tin-tuc/{slug}.html','FrontController@blogDetail')->name('front.blogDetail');
    Route::get('/lien-he.html','FrontController@contact')->name('front.contact');
    Route::post('/postContact','FrontController@postContact')->name('front.submitContact');



    // love list
    Route::post('/{roomId}/add-room-to-wishlist','WishListController@addItem')->name('love.add.item');
    Route::get('/remove-room-to-wishlist','WishListController@removeFromWishlist')->name('love.remove.item');
    Route::get('/clear-wishlist','WishListController@removeAll')->name('love.remove.allItem');
    Route::get('/gio-hang','WishListController@index')->name('love.index');
    Route::post('/update-cart','WishListController@updateItem')->name('love.update.item');
    Route::get('/thanh-toan','WishListController@checkout')->name('love.checkout');
    Route::post('/checkout','WishListController@checkoutSubmit')->name('love.post.checkout');
    Route::get('/dat-hang-thanh-cong/','WishListController@checkoutSuccess')->name('love.checkout.success');


    Route::get('/chi-tiet-san-pham/{slug}','FrontController@getProductDetail')->name('front.get-product-detail');
    Route::get('/kien-thuc/{slug?}','FrontController@knowledge')->name('front.knowledge');
    Route::get('/chi-tiet-bai-viet-kien-thuc/{slug}','FrontController@getKnowledgeDetail')->name('front.getKnowledgeDetail');

    Route::get('/du-an/{slug?}.html','FrontController@projects')->name('front.projects');
    Route::get('/chi-tiet-du-an/{slug}.html','FrontController@getProjectDetail')->name('front.getProjectDetail');
    Route::get('/tim-kiem','FrontController@searchProducts')->name('front.search');



    Route::get('onlyme/clear', 'FrontController@clearData')->name('front.clearData');

    Route::get('/{any}', function () {
        // Laravel tự load view errors/404.blade.php khi abort(404)
        abort(404);
    })
        ->where('any', '.*');

});




