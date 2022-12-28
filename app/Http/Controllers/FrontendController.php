<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\FAQ;
use App\Models\OurProduct;
use App\Models\Membership;

use Image;
use Auth;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index(){

        $aboutus = AboutUS::latest()->get();
        $blog = Blog::latest()->get();
        $contactus = ContactUs::latest()->get();
        $faq = FAQ::latest()->get();
        $ourproduct = OurProduct::latest()->get();
        $membership = Membership::latest()->get();

        return view('frontend.index', compact('aboutus', 'blog', 'contactus', 'faq', 'ourproduct', 'membership'));

    }

    public function aboutus(){

        return view('frontend.menu.aboutus');
        
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

    public function faq(){

        return view('frontend.menu.faq');
        
    }

    public function blog(){

        return view('frontend.menu.blog');
        
    }

}
