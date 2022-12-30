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

use Image;
use Auth;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index(){

        $aboutus = AboutUS::latest()->get();
        $ourteam = OurTeam::latest()->get();
        $blog = Blog::latest()->get();
        $contactus = ContactUs::latest()->get();
        $faq = FAQ::latest()->get();
        $ourproduct1 = OurProduct::where('name','Clothing')->get();
        $ourproduct2 = OurProduct::where('name','Handbag')->get();
        $ourproduct3 = OurProduct::where('name','Skincare')->get();
        $membership = Membership::latest()->get();

        return view('frontend.index', compact('aboutus', 'blog', 'contactus', 'faq', 'ourproduct1', 'ourproduct2', 'ourproduct3', 'membership'));

    }

    public function aboutus(){
        
        $ourteam = OurTeam::latest()->get();
        $aboutus = AboutUS::latest()->get();
        return view('frontend.menu.aboutus', compact('ourteam', 'aboutus'));
        
    }
    
    public function skincare(){

        return view('frontend.menu.ourproduct');
        
    }

    public function handbag(){

        return view('frontend.menu.ourproduct');
        
    }

    public function outfit(){

        return view('frontend.menu.ourproduct');
        
    }

    public function contactus(){

        return view('frontend.menu.contactus');
        
    }

    public function membership(){

        return view('frontend.menu.membership');
        
    }

    public function membershipRegister(Request $request){

        $membership_id = Membership::insertGetId([
            'name' => $request->name,
            'birthdate' => $request->dob,
            'phonenum' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Membership Registered Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    }

    public function faq(){

        return view('frontend.menu.faq');
        
    }

    public function blog(){

        return view('frontend.menu.blog');
        
    }
    
    public function readblog(){

        return view('frontend.menu.readblog');
        
    }

}
