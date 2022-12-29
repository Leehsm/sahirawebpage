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

class BackendController extends Controller
{

    public function index(){
        
        $aboutus = AboutUs::latest()->get();
        $blog = Blog::latest()->get();
        $contactus = ContactUs::latest()->get();
        $faq = FAQ::latest()->get();
        $membership = Membership::latest()->get();
        $ourproduct = OurProduct::latest()->get();

        return view('admin.dashboard', compact('aboutus','blog','contactus','faq','membership','ourproduct'));
    }
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
                'image' => $save_url,
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

        $blog = Blog::latest()->get();
        return view('admin.menu.blog.view', compact('blog'));

    }

    Public function BlogAdd(){

        return view('admin.menu.blog.add');

    }

    Public function BlogStore(Request $request){

        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $blog_id = Blog::insertGetId([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $save_url,
            // 'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Blog Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('blog.all')->with($notification);
        
    }

    Public function BlogEdit($id){
        
        $blog = Blog::findOrFail($id);
        return view('admin.menu.blog.edit', compact('blog'));
        
    }

    Public function BlogUpdate(Request $request){
        
        $blog_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            Blog::findOrFail($blog_id)->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('blog.all')->with($notification);

        }else{

            Blog::findOrFail($blog_id)->update([
                'title' => $request->title,
                'date' => $request->date,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Blog Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('blog.all')->with($notification);
        }

    }

    Public function BlogDelete($id){
        
        $blog = Blog::findOrFail($id);
        $img = $blog->image;
        unlink($img);

        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    //Contact Us
    Public function ContactUsView(){

        $contactus = ContactUs::latest()->get();
        return view('admin.menu.contactus.view', compact('contactus'));

    }

    Public function ContactUsAdd(){

        return view('admin.menu.contactus.add');

    }

    Public function ContactUsStore(Request $request){

        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $contactus_id = ContactUs::insertGetId([
            'email' => $request->email,
            'phone_1' => $request->phone1,
            'phone_2' => $request->phone2,
            'image' => $save_url,
            // 'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Contact Us Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('contactus.all')->with($notification);
        
    }

    Public function ContactUsEdit($id){
        
        $contactus = ContactUs::findOrFail($id);
        return view('admin.menu.contactus.edit', compact('contactus'));
        
    }

    Public function ContactUsUpdate(Request $request){
        
        $contactus_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            ContactUs::findOrFail($contactus_id)->update([
                'email' => $request->email,
                'phone_1' => $request->phone1,
                'phone_2' => $request->phone2,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Contact Us Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('contactus.all')->with($notification);

        }else{

            ContactUs::findOrFail($contactus_id)->update([
                'email' => $request->email,
                'phone_1' => $request->phone1,
                'phone_2' => $request->phone2,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Contact Us Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('contactus.all')->with($notification);
        }

    }

    Public function ContactUsDelete($id){
        
        $contactus = ContactUs::findOrFail($id);
        $img = $aboutus->image;
        unlink($img);

        ContactUs::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Contact Us Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    //FAQ
    Public function FAQView(){

        $faq = FAQ::latest()->get();
        return view('admin.menu.faq.view', compact('faq'));

    }

    Public function FAQAdd(){

        return view('admin.menu.faq.add');

    }

    Public function FAQStore(Request $request){

	    $faq_id = FAQ::insertGetId([
            'question' => $request->question,
            'answer' => $request->answer,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'FAQ Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('faq.all')->with($notification);
        
    }

    Public function FAQEdit($id){
        
        $faq = FAQ::findOrFail($id);
        return view('admin.menu.faq.edit', compact('faq'));
        
    }

    Public function FAQUpdate(Request $request){

        $faq_id = $request->id;

        FAQ::findOrFail($faq_id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'FAQ Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('faq.all')->with($notification);

    }

    Public function FAQDelete($id){

        FAQ::findOrFail($id)->delete();

        $notification = array(
            'message' => 'FAQ Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
        
    }

    //Membership
    Public function MembershipView(){

        $membership = Membership::latest()->get();
        return view('admin.menu.membership.view', compact('membership'));

    }

    Public function MembershipAdd(){

        return view('admin.menu.membership.add');

    }

    Public function MembershipStore(Request $request){
        
        $membership_id = Membership::insertGetId([
            'name' => $request->name,
            'birthdate' => $request->dob,
            'phonenum' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Membership Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('membership.all')->with($notification);

    }

    Public function MembershipEdit($id){

        $membership = Membership::findOrFail($id);
        return view('admin.menu.mwmbership.edit', compact('membership'));
        
    }

    Public function MembershipUpdate(Request $request){

        $membership_id = $request->id;

        Membership::findOrFail($membership_id)->update([
            'name' => $request->name,
            'birthdate' => $request->dob,
            'phonenum' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Membership Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('membership.all')->with($notification);
        
    }

    Public function MembershipDelete($id){

        Membership::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Membership Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
        
    }

    //Our Product
    Public function OurProductView(){

        $ourproduct = OurProduct::latest()->get();
        return view('admin.menu.ourproduct.view', compact('ourproduct'));

    }

    Public function OurProductAdd(){

        return view('admin.menu.ourproduct.add');

    }

    Public function OurProductStore(Request $request){

        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $ourproduct_id = OurProduct::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $save_url,
            // 'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Our Product Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('ourproduct.all')->with($notification);        
        
    }

    Public function OurProductEdit($id){
        
        $ourproduct = OurProduct::findOrFail($id);
        return view('admin.menu.ourproduct.edit', compact('ourproduct'));
        
    }

    Public function OurProductUpdate(Request $request){

        $ourproduct_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            OurProduct::findOrFail($ourproduct_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $request->save_url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Our Product Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('ourproduct.all')->with($notification);

        }else{

            OurProduct::findOrFail($ourproduct_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Our Product Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('ourproduct.all')->with($notification);
        }
        
    }

    Public function OurProductDelete($id){
        
        OurProduct::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Our Product Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    }

    //Our Team
    Public function OurTeamView(){

        $ourteam = OurTeam::latest()->get();
        return view('admin.menu.ourteam.view', compact('ourteam'));

    }

    Public function OurTeamAdd(){

        return view('admin.menu.ourteam.add');

    }

    Public function OurTeamStore(Request $request){

        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $ourteam_id = OurTeam::insertGetId([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $save_url,
            // 'created_by' => Auth::id(),
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Our Team Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('ourteam.all')->with($notification);        
        
    }

    Public function OurTeamEdit($id){
        
        $ourteam = OurTeam::findOrFail($id);
        return view('admin.menu.ourteam.edit', compact('ourteam'));
        
    }

    Public function OurTeamUpdate(Request $request){

        $ourteam_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            OurTeam::findOrFail($ourteam_id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'image' => $request->save_url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Our Product Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('ourteam.all')->with($notification);

        }else{

            OurTeam::findOrFail($ourteam_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Our Product Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('ourteam.all')->with($notification);
        }
        
    }

    Public function OurTeamDelete($id){
        
        OurTeam::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Our Team Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    }

}