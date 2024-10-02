<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Billing;
use App\Models\Clinic;
use App\Models\Commonsymptoms;
use App\Models\Gallery;
use App\Models\Gastrotreatments;
use App\Models\Livertreatment;
use App\Models\Slide;
use App\Models\Testimonials;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Util\Test;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }
    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('admin.login')->with('status', 'Wrong Password try Again !!');
        }
    }

    public function register()
    {
        return view('admin.register');
    }

    public function registerAccount(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required |email',
            'password' => 'required |confirmed',
        ]);
        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.login')->with('created', 'Your Account is Successfully Created!');;
    }

    public function index()
    {
        return view('admin.index');
    }

    //about controller
    // public function about($id){
    //     $about= About::find($id);
    //     return view('admin.about',compact('about'));
    // }

    // public function about($id) {
    // //    $about = About::find($id);
    // //     return view('admin.about',compact('about'));
    // dd($id);
    // }
    public function abouts($id)
    {
        $about = About::find($id);
        return view('admin.about', compact('about'));
        // dd($id);
    }
    public function aboutadd(Request $request, $id)
    {

        $about = About::find($id);
        $about->name = $request->name;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->title = $request->title;
        $about->shortdescription = $request->shortdescription;
        $about->qualifications = $request->qualifications;
        $about->projectsundertaken = $request->projectsundertaken;
        $about->description = $request->description;
        $about->address = $request->address;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('about'), $imageName);
            $about->image = $imageName;
        }
        $about->save();
        return redirect()->back()->with('status', 'About Us Updated Successfully');
    }

    // sllide controller
    public function slide()
    {
        $slides = Slide::all();
        return view('admin.slide', compact('slides'));
    }
    public function addslide()
    {
        return view('admin.add-slide');
    }
    public function storeslide(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);


        $slide = new Slide();
        $slide->name = $request->name;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('slide'), $imageName);
        $slide->image = $imageName;
        $slide->save();
        return redirect()->route('admin.slide')->with('status', 'Slide Add !!');
    }



    public function slidedelete($id)
    {
        $slide = Slide::find($id);
        if ($slide->image) {
            $imagePath = public_path('slide/' . $slide->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $slide->delete();

        return redirect()->route('admin.slide')->with('status', 'Slide deleted successfully');
    }





    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

    // Gallery  Controller

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('admin.gallery', compact('gallery'));
    }
    public function addgallery()
    {
        return view('admin.addgallery');
    }
    public function storegallery(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);


        $gallery = new Gallery();
        $gallery->name = $request->name;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('gallery'), $imageName);
        $gallery->image = $imageName;
        $gallery->save();
        return redirect()->route('admin.gallery')->with('status', 'Gallery Add Successfully !!');
    }
    public function gallerydelete($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery->image) {
            $imagePath = public_path('gallery/' . $gallery->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $gallery->delete();

        return redirect()->route('admin.gallery')->with('status', 'Gallery deleted successfully!!');
    }

    //Gastro Treatments Controller
    public function gstroTreatments()
    {
        return view('admin.add-gastro-treatments');
    }
    public function addgastro(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'shortdescription' => 'required',

            'image' => 'required',
        ]);
        $gastro = new Gastrotreatments();
        $gastro->name = $request->name;
        $gastro->shortdescription = $request->shortdescription;
        $gastro->description = $request->description;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('gastro'), $imageName);
        $gastro->image = $imageName;
        $gastro->save();
        return redirect()->route('admin.gastrogTreatments')->with('status', 'Gastro Treatments Add Successfully !!');
    }
    public function gastrogTreatments()
    {
        $gastro = Gastrotreatments::all();
        return view('admin.gastrogTreatments', compact('gastro'));
    }
    public function editgastro($id)
    {
        $gastro = Gastrotreatments::find($id);
        return view('admin.edit-gastrogTreatments', compact('gastro'));
    }

    public function updateEditgastro(Request $request, $id)
    {
        $gastro = Gastrotreatments::find($id);
        $gastro->name = $request->name;
        $gastro->shortdescription = $request->shortdescription;
        $gastro->description = $request->description;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gastro'), $imageName);
            $gastro->image = $imageName;
        }

        $gastro->save();
        return redirect()->route('admin.gastrogTreatments')->with('status', 'Gastro Treatments update Successfully');
    }

    public function gastrodelete($id)
    {
        $gastro = Gastrotreatments::find($id);
        if ($gastro->image) {
            $imagePath = public_path('gastro/' . $gastro->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $gastro->delete();

        return redirect()->route('admin.gastrogTreatments')->with('status', 'Gastro Treatments  deleted successfully!!');
    }


    // livertreatments    Controllers

    public function addlivertreatments()
    {
        return view('admin.add-livertreatments');
    }
    public function livertreatments()
    {
        $livertreat = Livertreatment::all();
        return view('admin.livertreatments', compact('livertreat'));
    }
    public function updatelivertreatments(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'shortdescription' => 'required',

            'image' => 'required',
        ]);
        $livertreat = new Livertreatment();
        $livertreat->name = $request->name;

        $livertreat->shortdescription = $request->shortdescription;
        $livertreat->description = $request->description;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('livertreat'), $imageName);
        $livertreat->image = $imageName;
        $livertreat->save();
        return redirect()->route('admin.livertreatments')->with('status', 'Liver Treatment Add Successfully !!');
    }

    public function editlivertreatments($id)
    {
        $livertreat = Livertreatment::find($id);
        return view('admin.edit-livertreatments', compact('livertreat'));
    }

    public function updateEditlivertreatments(Request $request, $id)
    {
        $livertreat = Livertreatment::find($id);
        $livertreat->name = $request->name;
        $livertreat->shortdescription = $request->shortdescription;
        $livertreat->description = $request->description;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('livertreat'), $imageName);
            $livertreat->image = $imageName;
        }

        $livertreat->save();
        return redirect()->route('admin.livertreatments')->with('status', 'Liver Treatment update Successfully');
    }

    public function livertreatmentsdelete($id)
    {
        $livertreat = Livertreatment::find($id);
        if ($livertreat->image) {
            $imagePath = public_path('livertreat/' . $livertreat->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $livertreat->delete();

        return redirect()->route('admin.livertreatments')->with('status', 'Liver Treatment  deleted successfully!!');
    }


    //Clinic Controllers

    public function clinic()
    {
        $clinic = Clinic::all();
        return view('admin.clinic', compact('clinic'));
    }
    public function addclinic()
    {
        return view('admin.add-clinic');
    }

    public function storeclinic(Request $request)
    {
        $request->validate([
            'clinicname' => 'required',
            'consultationtimings' => 'required',
            'clinicaddres' => 'required',
        ]);

        $clinic = new Clinic();
        $clinic->clinicname = $request->clinicname;
        $clinic->phone = $request->phone;
        $clinic->email = $request->email;
        $clinic->link = $request->link;
        $clinic->consultationtimings = $request->consultationtimings;
        $clinic->clinicaddres = $request->clinicaddres;
        $clinic->save();

        return redirect()->route('admin.clinic')->with('status', 'Clinic Added Successfully');
    }
    public function editclinic($id)
    {
        $clinic = Clinic::find($id);
        return view('admin.edit-clinic', compact('clinic'));
    }

    public function updateEditclinic(Request $request, $id)
    {
        $clinic = Clinic::find($id);
        $clinic->clinicname = $request->clinicname;
        $clinic->phone = $request->phone;
        $clinic->email = $request->email;
        $clinic->link = $request->link;
        $clinic->consultationtimings = $request->consultationtimings;
        $clinic->clinicaddres = $request->clinicaddres;
        $clinic->save();

        return redirect()->route('admin.clinic')->with('status', 'Clinic Update Successfully');
    }
    public function clinicdelete($id)
    {
        $clinic = Clinic::find($id);

        $clinic->delete();

        return redirect()->route('admin.clinic')->with('status', 'Clinic deleted successfully!!');
    }


    //testimonials controllers

    public function testimonials()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials', compact('testimonials'));
    }

    public function addTestimonials()
    {
        return view('admin.add-testimonials');
    }
    public function storeTestimonials(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'comment' => 'required',
        ]);
        $testimonials = new Testimonials();
        $testimonials->name = $request->name;
        $testimonials->comment = $request->comment;
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('testimonials'), $imageName);
            $testimonials->image = $imageName;
        }
        $testimonials->save();
        return redirect()->route('admin.testimonials')->with('status', 'Testimonials Add Successfully');
    }
    public function edittestimonials($id)
    {
        $testimonials = Testimonials::find($id);
        return view('admin.edit-testimonials', compact('testimonials'));
    }

    public function updateTestimonials(Request $request, $id)
    {
        $testimonials = Testimonials::find($id);
        $testimonials->name = $request->name;
        $testimonials->comment = $request->comment;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('testimonials'), $imageName);
            $testimonials->image = $imageName;
        }

        $testimonials->save();

        return redirect()->route('admin.testimonials')->with('status', 'Testimonials Update Successfully');
    }

    public function testimonialsdelete($id)
    {
        $testimonials = Testimonials::find($id);
        if ($testimonials->image) {
            $imagePath = public_path('testimonials/' . $testimonials->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $testimonials->delete();

        return redirect()->route('admin.testimonials')->with('status', 'Testimonials deleted successfully!!');
    }


    // video controllers
    public function video()
    {
        $video = Video::all();
        return view('admin.video', compact('video'));
    }
    public function addvideo()
    {
        return view('admin.add-video');
    }
    public function storevideo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'videolink' => 'required'
        ]);
        $video = new Video();
        $video->name = $request->name;
        $video->videolink = $request->videolink;
        $video->save();
        return redirect()->route('admin.video')->with('status', 'Video add successfully');
    }
    public function videosdelete($id)
    {
        $video = Video::find($id);

        $video->delete();

        return redirect()->route('admin.video')->with('status', 'video deleted successfully!!');
    }

    // Common Symptoms  controllers

    public function commonSymptoms()
    {
        $common = Commonsymptoms::all();
        return view('admin.common-symptoms',compact('common'));
    }
    public function addcommonSymptoms()
    {
        return view('admin.add-commonSymptoms');
    }
    public function storecommonSymptoms(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required',
        ]);
        $common = new Commonsymptoms();
        $common->name = $request->name;
        $common->title = $request->title;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('common'), $imageName);
        $common->image = $imageName;
        $common->save();
        return redirect()->route('admin.common.Symptoms')->with('status','Common Symptoms Add Successfully');
    }

    public function editcommonSymptoms($id){
        $common= Commonsymptoms::find($id);
        return view('admin.edit-commonSymptoms',compact('common'));
    }
    public function updatecommonSymptoms(Request $request,$id){
        $common = Commonsymptoms::find($id);
        $common->name = $request->name;
        $common->title = $request->title;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('common'), $imageName);
            $common->image = $imageName;
        }
        $common->save();
        return redirect()->route('admin.common.Symptoms')->with('status', 'Common Symptoms Update Successfully');


    }

    public function commonSymptomsdelete($id)
    {
        $common = Commonsymptoms::find($id);
        if ($common->image) {
            $imagePath = public_path('common/' . $common->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $common->delete();

        return redirect()->route('admin.common.Symptoms')->with('status', 'Common Symptoms deleted successfully!!');
    }

    public function appointments(){
        $billings = Billing::all();
        return view('admin.appointments',compact('billings'));
    }
}
