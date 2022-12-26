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

class BackendController extends Controller
{
    //About Us
    Public function AboutUsView(){

        return view('admin.menu.aboutus.view');

    }

    Public function AboutUsAdd(){

        return view('admin.menu.aboutus.add');

    }

    Public function AboutUsStore(){
        
    }

    Public function AboutUsEdit(){
        
        return view('admin.menu.aboutus.view');
        
    }

    Public function AboutUsUpdate(){
        
    }

    Public function AboutUsDelete(){
        
    }
 
    //Blog
    Public function BlogView(){

        return view('admin.menu.blog.view');

    }

    Public function BlogAdd(){

        return view('admin.menu.blog.add');

    }

    Public function BlogStore(){
        
    }

    Public function BlogEdit(){
        
        return view('admin.menu.blog.view');
        
    }

    Public function BlogUpdate(){
        
    }

    Public function BlogDelete(){
        
    }

    //Contact Us
    Public function ContactUsView(){

        return view('admin.menu.contactus.view');

    }

    Public function ContactUsAdd(){

        return view('admin.menu.contactus.add');

    }

    Public function ContactUsStore(){
        
    }

    Public function ContactUsEdit(){
        
        return view('admin.menu.contactus.view');
        
    }

    Public function ContactUsUpdate(){
        
    }

    Public function ContactUsDelete(){
        
    }

    //FAQ
    Public function FAQView(){

        return view('admin.menu.faq.view');

    }

    Public function FAQAdd(){

        return view('admin.menu.faq.add');

    }

    Public function FAQStore(){
        
    }

    Public function FAQEdit(){
        
        return view('admin.menu.faq.view');
        
    }

    Public function FAQUpdate(){
        
    }

    Public function FAQDelete(){
        
    }

    //Membership
    Public function MembershipView(){

        return view('admin.menu.membership.view');

    }

    Public function MembershipAdd(){

        return view('admin.menu.membership.add');

    }

    Public function MembershipStore(){
        
    }

    Public function MembershipEdit(){
        
        return view('admin.menu.mwmbership.view');
        
    }

    Public function MembershipUpdate(){
        
    }

    Public function MembershipDelete(){
        
    }

    //Our Product
    Public function OurProductView(){

        return view('admin.menu.ourproduct.view');

    }

    Public function OurProductAdd(){

        return view('admin.menu.ourproduct.add');

    }

    Public function OurProductStore(){
        
    }

    Public function OurProductEdit(){
        
        return view('admin.menu.ourproduct.view');
        
    }

    Public function OurProductUpdate(){
        
    }

    Public function OurProductDelete(){
        
    }
}
