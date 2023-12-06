<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\FAQ;
use App\Models\OurProduct;
use App\Models\OurTeam;
use App\Models\Membership;
use App\Models\MembershipFE;
use App\Models\BGImage;
use App\Models\Promo;
use App\Models\Coupon;

use Image;
use Auth;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;
use App\Mail\MembershipMail;
use App\Mail\PromoMail;

class FrontendController extends Controller
{
    public function index(){

        $aboutus = AboutUS::latest()->get();
        $blog = Blog::latest()->get();
        $contactus = ContactUs::where('name','menu')->get();
        $faq = FAQ::latest()->get();
        $ourproduct1 = OurProduct::where('name','Clothing')->get();
        $ourproduct2 = OurProduct::where('name','Handbag')->get();
        $ourproduct3 = OurProduct::where('name','Skincare')->get();
        $membership = MembershipFE::latest()->get();

        return view('frontend.index', compact('aboutus', 'blog', 'contactus', 'faq', 'ourproduct1', 'ourproduct2', 'ourproduct3', 'membership'));

    }

    public function aboutus(){
        
        $ourteam = OurTeam::orderBy('id','ASC')->get();
        $aboutus = AboutUS::latest()->get();
        $bg = BGImage::where('name', 'about us')->get();
        return view('frontend.menu.aboutus', compact('ourteam', 'aboutus', 'bg'));
        
    }
    
    public function skincare(){

        $clothing = OurProduct::where('name','clothing')->get();
        $handbag = OurProduct::where('name','handbag')->get();
        $skincare = OurProduct::where('name','skincare')->get();
        
        $bgclothing = BGImage::where('name', 'clothing')->get();
        $bghandbag = BGImage::where('name', 'handbag')->get();
        $bgskincare = BGImage::where('name', 'skincare')->get();

        return view('frontend.menu.ourproduct', compact('clothing', 'handbag', 'skincare', 'bgclothing', 'bghandbag', 'bgskincare'));
    }

    public function handbag(){

        $clothing = OurProduct::where('name','clothing')->get();
        $handbag = OurProduct::where('name','handbag')->get();
        $skincare = OurProduct::where('name','skincare')->get();
        
        $bgclothing = BGImage::where('name', 'clothing')->get();
        $bghandbag = BGImage::where('name', 'handbag')->get();
        $bgskincare = BGImage::where('name', 'skincare')->get();

        return view('frontend.menu.ourproduct', compact('clothing', 'handbag', 'skincare', 'bgclothing', 'bghandbag', 'bgskincare'));
        
    }

    public function outfit(){

        $clothing = OurProduct::where('name','clothing')->get();
        $handbag = OurProduct::where('name','handbag')->get();
        $skincare = OurProduct::where('name','skincare')->get();
        
        $bgclothing = BGImage::where('name', 'clothing')->get();
        $bghandbag = BGImage::where('name', 'handbag')->get();
        $bgskincare = BGImage::where('name', 'skincare')->get();

        return view('frontend.menu.ourproduct', compact('clothing', 'handbag', 'skincare', 'bgclothing', 'bghandbag', 'bgskincare'));
        
    }

    public function contactus(){

        $location = ContactUs::where('name', 'location')->get();
        $contact = ContactUs::where('name', 'contact')->get();
        $social = ContactUs::where('name', 'social')->get();
        $operationhour = contactUs::where('name', 'operation hour')->get();
        $menu = contactUs::where('name', 'menu')->get();
        $bg = BGImage::where('name', 'contact us')->get();
        return view('frontend.menu.contactus', compact('location', 'contact', 'social', 'operationhour', 'menu', 'bg'));
        
    }

    public function membership(){

        $membership = MembershipFE::latest()->get();        
        $bg = BGImage::where('name', 'membership')->get();
        return view('frontend.menu.membership', compact('membership', 'bg'));
        
    }

    public function membershipRegister(Request $request){

        $phone = Membership::where('phonenum', $request->phone)->pluck('phonenum');
        $phoneNum = $request->phone;

        // dd($phone);

        if (Membership::where('phonenum', '===', $request->phone)->exists() && Membership::where('email', '===', $request->email)->exists()){
            //dd('1');
            $notification = array(
                'message' => 'Email and phone number already exist',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);

        }elseif(Membership::where('phonenum', '==', $request->phone)->exists() || Membership::where('email', '==', $request->email)->exists()){
            //dd('2');
            $notification = array(
                'message' => 'Email or phone number already exist',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        
        }else{
            //dd('3');
            $membership_id = Membership::insertGetId([
                'name' => $request->name,
                // 'birthdate' => $request->dob,
                'phonenum' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'created_at' => Carbon::now(),
            ]);
    
            $data = [
                'name' => $request->name,
                'birthdate' => $request->dob,
                'phonenum' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'created_at' => Carbon::now(),
            ];
            
            //send Email
            Mail::to($request->email)->send(new MembershipMail($data));
    
            $notification = array(
                'message' => 'Membership Registered Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

        }     
    }

    public function faq(){

        $faq = FAQ::latest()->get();
        $bg = BGImage::where('name', 'faq')->get();
        return view('frontend.menu.faq', compact('faq', 'bg'));
        
    }

    public function blog(){

        $blog = Blog::latest()->get();
        $bg = BGImage::where('name', 'blog')->get();

        return view('frontend.menu.blog', compact('blog', 'bg'));
        
    }
    
    public function readblog($id){

        $blogs = Blog::findOrFail($id);

        $image = $blogs->image;
        $title = $blogs->title;
        $date = $blogs->date;
        $description = $blogs->description;

        return view('frontend.menu.readblog', compact('blogs','image','title','date','description'));
        
    }

    Public function promo(){

        return view('frontend.menu.promo');

    }

    Public function promoStore(Request $request){

        if (Promo::where('phone', '=', $request->phone)->exists() && Promo::where('email', '=', $request->email)->exists()){
            
            $notification = array(
                'message' => 'Email and phone number already exist',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);

        }elseif(Promo::where('phone', '=', $request->phone)->exists() || Promo::where('email', '=', $request->email)->exists()){
        
            $notification = array(
                'message' => 'Email or phone number already exist',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        
        }else{
            // dd($request->phone,Promo::where('phone', '=', $request->phone)->get(),Promo::where('email', '=', $request->email)->get());
            $membership_id = Promo::insertGetId([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'created_at' => Carbon::now(),
            ]);
    
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'created_at' => Carbon::now(),
            ];
            
            $promoDetail = coupon::where('id','1')->get();

            //send Email
            Mail::to($request->email)->send(new PromoMail($promoDetail));
    
            $notification = array(
                'message' => 'Promo Successfully sent to your email',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
        }

    }
}
