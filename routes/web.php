<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about-us',[HomeController::class,'aboutus'])->name('home.aboutus');

Route::get('/gallery-image',[HomeController::class,'gallery'])->name('home.gallery');
Route::get('/video',[HomeController::class,'video'])->name('home.video');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
Route::get('/Gastro-Treatments/{id}',[HomeController::class,'gastrotreatments'])->name('home.gastrotreatments');
Route::get('/Liver-Treatments/{id}',[HomeController::class,'livertreatments'])->name('home.livertreatments');
Route::get('/appointment',[HomeController::class,'appointment'])->name('home.appointment');
Route::post('/appointments',[HomeController::class,'appointmentStore'])->name('home.appointmentStore');
Route::get('/billing',[HomeController::class,'billing'])->name('home.billing');
Route::post('/store-billing-info', [HomeController::class, 'storeBillingInfo'])->name('billing.store');




// Admin page

Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'guest'],function(){
        Route::get('/', [AdminController::class, 'login'])->name('admin.login');
        Route::post('/loginCheck', [AdminController::class, 'loginCheck'])->name('admin.loginCheck');
        Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
        Route::post('/registerAccount', [AdminController::class, 'registerAccount'])->name('admin.registerAccount');
    });

    Route::group(['middleware'=>'auth'],function(){
        Route::get('/index', [AdminController::class, 'index'])->name('admin.index');

        // Route::get('/about{id}',[AdminController::class,'about'])->name('admin.about');
        Route::get('/abouts/{id}',[AdminController::class,'abouts'])->name('admin.abouts');
        Route::post('/aboutadd/{id}',[AdminController::class,'aboutadd'])->name('admin.aboutadd');

        // Slide Route
        Route::get('/slide',[AdminController::class,'slide'])->name('admin.slide');
        Route::get('/add-slide',[AdminController::class,'addslide'])->name('admin.addslide');
        Route::post('/storeslide',[AdminController::class,'storeslide'])->name('admin.storeslide');
        Route::get('/slidedelete/{id}',[AdminController::class,'slidedelete'])->name('admin.slidedelete');

        // Route Gallery

        Route::get('/gallery',[AdminController::class,'gallery'])->name('admin.gallery');
        Route::get('/add-gallery',[AdminController::class,'addgallery'])->name('admin.addgallery');
        Route::post('/storegallery',[AdminController::class,'storegallery'])->name('admin.storegallery');
        Route::get('/gallerydelete/{id}',[AdminController::class,'gallerydelete'])->name('admin.gallerydelete');


        // Gastro Treatments Route
        Route::get('/gastro-treatments',[AdminController::class,'gstroTreatments'])->name('admin.addgstroTreatments');
        Route::post('/add-gastro-treatments',[AdminController::class,'addgastro'])->name('admin.add.gastro');
        Route::get('/gastrogTreatments',[AdminController::class,'gastrogTreatments'])->name('admin.gastrogTreatments');
        Route::get('/edit-gastro/{id}',[AdminController::class,'editgastro'])->name('admin.edit.gastro');
        Route::post('/admin/gastro/{id}/update',[AdminController::class,'updateEditgastro'])->name('admin.update.edit.gastro');
        Route::get('/gastrodelete/{id}',[AdminController::class,'gastrodelete'])->name('admin.gastrodelete');

        // livertreatments Route

        Route::get('/livertreatments',[AdminController::class,'livertreatments'])->name('admin.livertreatments');
        Route::post('/update-livertreatments',[AdminController::class,'updatelivertreatments'])->name('admin.update.livertreatments');
        Route::get('/add-livertreatments',[AdminController::class,'addlivertreatments'])->name('admin.add.livertreatments');
        Route::get('/edit-livertreatments/{id}',[AdminController::class,'editlivertreatments'])->name('admin.edit.livertreatments');
        Route::post('/admin/livertreatments/{id}/update',[AdminController::class,'updateEditlivertreatments'])->name('admin.update.edit.livertreatments');
        Route::get('/livertreatmentsdelete/{id}',[AdminController::class,'livertreatmentsdelete'])->name('admin.livertreatmentsdelete');

        //clinic Route

        Route::get('/clinic',[AdminController::class,'clinic'])->name('admin.clinic');
        Route::get('/addclinic',[AdminController::class,'addclinic'])->name('admin.addclinic');
        Route::post('/storeclinic',[AdminController::class,'storeclinic'])->name('admin.storeclinic');
        Route::get('/edit-clinic/{id}',[AdminController::class,'editclinic'])->name('admin.editclinic');
        Route::post('/update-edit-clinic/{id}',[AdminController::class,'updateEditclinic'])->name('admin.update.editclinic');
        Route::get('/clinic-delete/{id}',[AdminController::class,'clinicdelete'])->name('admin.clinicdelete');


        //Testimonials  Route

        Route::get('/testimonials',[AdminController::class,'testimonials'])->name('admin.testimonials');
        Route::get('/add-testimonials',[AdminController::class,'addTestimonials'])->name('admin.add.testimonials');
        Route::post('/store-testimonials',[AdminController::class,'storeTestimonials'])->name('admin.store.testimonials');
        Route::get('/edit-testimonials/{id}',[AdminController::class,'edittestimonials'])->name('admin.edittestimonials');
        Route::post('/update-edit-testimonials/{id}',[AdminController::class,'updateTestimonials'])->name('admin.update.testimonials');
        Route::get('/testimonials-delete/{id}',[AdminController::class,'testimonialsdelete'])->name('admin.testimonialsdelete');

        //video Route
        Route::get('/video',[AdminController::class,'video'])->name('admin.video');
        Route::get('/add-video',[AdminController::class,'addvideo'])->name('admin.add.video');
        Route::post('/store-video',[AdminController::class,'storevideo'])->name('admin.store.video');
        Route::get('/video-delete/{id}',[AdminController::class,'videosdelete'])->name('admin.videodelete');

        //Common Symptoms  Roiute

        Route::get('/common-symptoms',[AdminController::class,'commonSymptoms'])->name('admin.common.Symptoms');
        Route::get('/add-common-symptoms',[AdminController::class,'addcommonSymptoms'])->name('admin.add.common.Symptoms');
        Route::post('/store-common-symptoms',[AdminController::class,'storecommonSymptoms'])->name(name: 'admin.store.common.Symptoms');
        Route::get('/edit-common-symptoms/{id}',[AdminController::class,'editcommonSymptoms'])->name('admin.edit.commonSymptoms');
        Route::post('/update-common-symptoms/{id}',[AdminController::class,'updatecommonSymptoms'])->name('admin.update.commonSymptoms');
        Route::get('/common-symptom-delete/{id}',[AdminController::class,'commonSymptomsdelete'])->name('admin.commonSymptomsdelete');

        Route::get('/appointments',[AdminController::class,'appointments'])->name('admin.appointments');



        Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
    });

});

