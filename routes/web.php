<?php

// *****************************Frontend **************************


Route::namespace('Frontend')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    //Give feed back and contact User side
    Route::get('contact', 'IndexController@contact')->name('contact');
    Route::get('feedback', 'IndexController@feedback')->name('feedback');
    Route::post('feedback', 'IndexController@submitFeedback')->name('submit.feedback');
    // Route::get('privacy-policy', 'IndexController@privacyPolicy')->name('privacy.policy');
    // Route::get('terms-and-conditions', 'IndexController@termsAndConditions')->name('terms.and.conditions');

    // Blog
    Route::get('blogs', 'BlogController@blogs')->name('blogs');
    Route::get('blog/{id}-{slug}', 'BlogController@blogSingle')->name('blog.single');
    Route::get('/about', 'AllController@about')->name('about');

    Route::get('/program/{category}', 'AllController@programDifferent')->name('program.different');
    Route::get('/single/{program}-{slug}', 'AllController@programSingle')->name('program.single');
    Route::get('/branches', 'AllController@branches')->name('branches');
    Route::get('/single-branch/{branch}', 'AllController@branchSingle')->name('branch.single');
    Route::get('/teams', 'AllController@teams')->name('teams');
    Route::get('/galleries', 'AllController@galleries')->name('galleries');
    Route::get('/jobs', 'AllController@jobs')->name('jobs');
    Route::get('/notices', 'AllController@notices')->name('notices');
});

// ********************************USER********************************

// Auth::routes();
// Auth::routes(['verify' => true]);

// Ckeditor Image Upload
Route::post('ckeditor/image-upload', 'Common\CKEditorController@imageUpload')->name('ckeditor.image.upload');

Route::prefix('user')->group(function () {
    Route::name('user.')->group(function () {
        Route::namespace('User')->group(function () {
            Route::group(['middleware' => ['auth', 'preventBackHistory']], function () {
                //dashboard
                Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
                //User Profile
                Route::get('change-password', 'ProfileController@changePasswordView')->name('change.password');
                Route::post('change-password', 'ProfileController@changePassword')->name('change.password');
                Route::get('profile', 'ProfileController@profileView')->name('profile.view');
                Route::post('profile', 'ProfileController@profileChange')->name('profile.change');
            });
        });
    });
});






// **************************************************ADMIN************************************************
//admin Login, logout, forget password routes
Route::prefix('rt-admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('login', 'Auth\Admin\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\Admin\LoginController@login');
        Route::post('logout', 'Auth\Admin\LoginController@logout')->name('logout');
        //show the link request form to reset password
        Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        //Send the link - it will use the notification from admin model
        Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        //receive the request from the send email
        Route::get('password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('password.reset');
        //update password
        Route::post('password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('password.update');
    });
});


Route::prefix('rt-admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::group(['middleware' => ['auth:admin', 'preventBackHistory']], function () {

                // Dashboard
                Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
                //change password
                Route::get('change-password', 'AdminController@changePasswordView')->name('change.password');
                Route::post('change-password', 'AdminController@changePassword')->name('change.password');
                // contact and feedback
                Route::get('contacts', 'AdminController@contacts')->name('contacts');
                // Route::get('feedbacks', 'AdminController@feedbacks')->name('feedbacks');

                Route::get('contact-feedback-delete/{contactFeedback}', 'AdminController@contactFeedbackDelete')->name('contact-feedback.delete');
                // User
                // Route::resource('user', 'UserController');
                //blog
                // Route::resource('blog', 'BlogController');
                //team
                Route::resource('team', 'TeamController');
                //team
                Route::resource('testimonial', 'TestimonialController');
                //gallery
                Route::resource('gallery', 'GalleryController');
                //job
                Route::resource('job', 'JobController');
                //branch
                Route::resource('branch', 'BranchController');
                //blog
                Route::resource('program', 'ProgramController');
                Route::get('data-table-values/{category?}', 'ProgramController@dataTableValues')->name('data-table.values');
            });
        });
    });
});
