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

        $aboutus = AboutUs::latest()->get();
        return view('admin.menu.aboutus.view', compact('aboutus'));

    }

    Public function AboutUsAdd(){

        return view('admin.menu.aboutus.add');

    }

    Public function AboutUsStore(Request $request){
        
        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $aboutus_id = AboutUs::insertGetId([
            'description' => $request->description,
            'image' => $save_url,
            // 'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'About Us Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('aboutus.all')->with($notification);
    }

    Public function AboutUsEdit($id){
        
        $aboutus = AboutUs::findOrFail($id);
        return view('admin.menu.aboutus.edit', compact('aboutus'));
    }

    Public function AboutUsUpdate(Request $request){
        
        $aboutus_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            AboutUs::findOrFail($aboutus_id)->update([
                'description' => $request->description,
                'brand_image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'About Us Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('aboutus.all')->with($notification);

        }else{

            AboutUs::findOrFail($aboutus_id)->update([
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'About Us Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('aboutus.all')->with($notification);
        }
        
    }

    Public function AboutUsDelete($id){
        
        $aboutus = AboutUs::findOrFail($id);
        $img = $aboutus->image;
        unlink($img);

        AboutUs::findOrFail($id)->delete();

        $notification = array(
            'message' => 'About Us Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

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
