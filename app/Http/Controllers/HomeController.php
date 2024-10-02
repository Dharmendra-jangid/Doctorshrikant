<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Clinic;
use App\Models\Commonsymptoms;
use App\Models\Gallery;
use App\Models\Billing;
use App\Models\Appointment;
use App\Models\Gastrotreatments;
use App\Models\Livertreatment;
use App\Models\Slide;
use App\Models\Testimonials;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $videos = Video::all();
        $about = About::first();
        $commons = Commonsymptoms::first();
        $slidess = Slide::all();
        $clinics = Clinic::all();
        $testimonialss=Testimonials::all();
        $gastros = Gastrotreatments::paginate(4);
        $livertreats = Livertreatment::paginate(4);
        return view('index',compact('slidess','gastros','livertreats','about','clinics','testimonialss','videos','commons'));
    }
    public function aboutus(){
  $about = About::first();
        return view('abouts',compact('about'));
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view('gallery',compact('gallery'));
    }
    public function contact(){
        $clinic = Clinic::all();
        return view('contact',compact('clinic'));
    }
    public function gastrotreatments($id){
        $gastro = Gastrotreatments::find($id);

        return view('gastrotreatments',compact('gastro'));
    }
    public function livertreatments($id){
        $livertreat = Livertreatment::find($id);

        return view('livertreatments',compact('livertreat'));
    }
    public function appointment(){

        return view('appointment');
    }

    // public function appointmentStore(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'date' => 'required|date',
    //         'time' => 'required|string',
    //     ]);

    //     Appointment::create($validatedData);

    //     return response()->json(['message' => 'Appointment booked successfully!']);
    // }

    public function appointmentStore(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'time' => 'required|string',
        ]);

        // Check if appointment already exists
        $existingAppointment = Appointment::where('date', $validatedData['date'])
            ->where('time', $validatedData['time'])
            ->first();

        if ($existingAppointment) {
            return response()->json(['message' => 'This appointment slot is already booked.'], 400);
        }

        // Save the appointment to the database
        $appointment = Appointment::create($validatedData);

        // Store appointment details in session
        session(['appointmentDetails' => [
            'date' => $appointment->date,
            'time' => $appointment->time,
        ]]);

        return response()->json(['message' => 'Appointment booked successfully!']);
    }



public function billing()
{
    $appointmentDetails = session('appointmentDetails'); // Retrieve appointment details
    return view('billing-page', compact('appointmentDetails'));
}

// public function storeBillingInfo(Request $request)
// {
//     // Validate the incoming request
//     $validated = $request->validate([
//         'name' => 'required|string|max:255',
//         'phone' => 'required|string|max:15',
//         'email' => 'required|email',
//         'fee' => 'required|numeric',
//         'info' => 'nullable|string',
//         'payment_id' => 'required|string',
//     ]);

//     // Create a new billing record
//     $billing = new Billing();
//     $billing->name = $validated['name'];
//     $billing->phone = $validated['phone'];
//     $billing->email = $validated['email'];
//     $billing->fee = $validated['fee'];
//     $billing->info = $validated['info'];
//     $billing->payment_id = $validated['payment_id']; // Save the payment ID
//     $billing->status = 'Paid'; // or however you want to track payment status
//     $billing->save();

//     return response()->json(['success' => true]);
// }
public function storeBillingInfo(Request $request)
{
    // Validate incoming request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email',
        'fee' => 'required|numeric',
        'info' => 'nullable|string',
        'payment_id' => 'required|string',
    ]);

    // Retrieve appointment details from session
    $appointmentDetails = session('appointmentDetails');
    if (!$appointmentDetails) {
        return response()->json(['success' => false, 'message' => 'No appointment details found in session.'], 404);
    }

    // Check for an existing appointment based on appointment date and time
    $appointment = Appointment::where('date', $appointmentDetails['date'])
                              ->where('time', $appointmentDetails['time'])
                              ->first();

    if (!$appointment) {
        return response()->json(['success' => false, 'message' => 'No valid appointment found.'], 404);
    }

    // Create a new billing record
    $billing = new Billing();
    $billing->name = $validated['name'];
    $billing->phone = $validated['phone'];
    $billing->email = $validated['email'];
    $billing->fee = $validated['fee'];
    $billing->info = $validated['info'];
    $billing->appointment_date = $appointmentDetails['date'];
    $billing->appointment_time = $appointmentDetails['time'];
    $billing->payment_id = $validated['payment_id'];
    $billing->status = 'Paid';

    // Save the billing record
    $billing->save();

    // Update the appointment with the billing ID
    $appointment->billing_id = $billing->id; // Link billing to appointment
    $appointment->save();

    return response()->json(['success' => true, 'message' => 'Billing information saved successfully!']);
}



    // public function billing(){
    //     return view('billing-page');
    // }

    public function video(){
        $videos = Video::all();

        return view('video',compact('videos'));
    }
}
