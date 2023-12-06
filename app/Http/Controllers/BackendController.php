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
use App\Models\BGImage;
use App\Models\Membership;
use App\Models\MembershipFE;
use App\Models\Promo;
use App\Models\Coupon;

use Image;
use Auth;
use Carbon\Carbon;


use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreCustomerRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\MembershipMail;
use App\Mail\PromoMail;
use App\Mail\PromoMail2;

class BackendController extends Controller
{

    public function index(){
        
        $aboutus = AboutUs::latest()->get();
        $blog = Blog::latest()->get();
        $contactus = ContactUs::latest()->get();
        $faq = FAQ::latest()->get();
        $membership = Membership::latest()->get();
        $membershipFE = MembershipFE::latest()->get();
        $ourproduct = OurProduct::latest()->get();
        $ourteam = OurTeam::latest()->get();

        return view('admin.dashboard', compact('aboutus','blog','contactus','faq','membership', 'membershipFE','ourproduct', 'ourteam'));
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

        if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            $contactus_id = ContactUs::insertGetId([
                'name' => $request->name,
                'desc_link' => $request->detail,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        }
        else{

            $contactus_id = ContactUs::insertGetId([
                'name' => $request->name,
                'desc_link' => $request->detail,
                'created_at' => Carbon::now(),
            ]);

        }

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
                'name' => $request->name,
                'desc_link' => $request->detail,
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
                'name' => $request->name,
                'desc_link' => $request->detail,
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
        $img = $contactus->image;
        if(!Empty($img)){

            unlink($img);
            ContactUs::findOrFail($id)->delete();

        }else{

            ContactUs::findOrFail($id)->delete();

        }

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

    //MembershipFE
    Public function MembershipFEView(){

        $membershipFE = MembershipFE::latest()->get();
        return view('admin.menu.membershipFE.view', compact('membershipFE'));

    }

    Public function MembershipFEAdd(){

        return view('admin.menu.membershipFE.add');

    }

    Public function MembershipFEStore(Request $request){
        
        if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            $contactus_id = MembershipFE::insertGetId([
                'desc' => $request->desc,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        }
        else{

            $contactus_id = MembershipFE::insertGetId([
                'desc' => $request->desc,
                'created_at' => Carbon::now(),
            ]);

        }

	    $notification = array(
			'message' => 'Membership Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('membershipFE.all')->with($notification);

    }

    Public function MembershipFEEdit($id){

        $membershipFE = MembershipFE::findOrFail($id);
        return view('admin.menu.membershipFE.edit', compact('membershipFE'));
        
    }

    Public function MembershipFEUpdate(Request $request){

        $membershipFE_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            MembershipFE::findOrFail($membershipFE_id)->update([
                'desc' => $request->desc,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
            
        }else{

            MembershipFE::findOrFail($membershipFE_id)->update([
                'desc' => $request->desc,
                'updated_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Membership Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('membershipFE.all')->with($notification);
        
    }

    Public function MembershipFEDelete($id){

        MembershipFE::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Membership Deleted Successfully',
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
        return view('admin.menu.membership.edit', compact('membership'));
        
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
                'image' => $save_url,
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

    //BG
    Public function BGView(){

        $bg = BGImage::latest()->get();
        return view('admin.menu.bg.view', compact('bg'));

    }

    Public function BGAdd(){

        return view('admin.menu.bg.add');

    }

    Public function BGStore(Request $request){

        $image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/'.$name_gen);
    	$save_url = 'upload/'.$name_gen;

	    $ourteam_id = BGImage::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $save_url,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'BG Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('bg.all')->with($notification);        
        
    }

    Public function BGEdit($id){
        
        $bg = BGImage::findOrFail($id);
        return view('admin.menu.bg.edit', compact('bg'));
        
    }

    Public function BGUpdate(Request $request){

        $bg_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('image')){
        
            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            BGImage::findOrFail($bg_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'BG Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('bg.all')->with($notification);

        }else{

            BGImage::findOrFail($bg_id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'updated_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'BG Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->route('bg.all')->with($notification);
        }
        
    }

    Public function BGDelete($id){
        
        BGImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'BG Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    }

    //Promo
    Public function PromoView(){

        $promo = Coupon::latest()->get();
        return view('admin.menu.promo.view', compact('promo'));

    }

    Public function PromoAdd(){

        return view('admin.menu.promo.add');

    }

    Public function PromoStore(Request $request){
        
        $promo_id = Coupon::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'Promo Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('promo.all')->with($notification);

    }

    Public function PromoEdit($id){

        $promo = Coupon::findOrFail($id);
        return view('admin.menu.promo.edit', compact('promo'));
        
    }

    Public function PromoUpdate(Request $request){

        $promo_id = $request->id;

        Coupon::findOrFail($promo_id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Promo Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('promo.all')->with($notification);
        
    }

    Public function PromoDelete($id){

        Coupon::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Promo Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
        
    }

    Public function PromoSend(Request $request){

        $customerDetail = Promo::get();
        $promoDetail = coupon::where('id',$request->id)->get();
        $data = [
            'name' => Coupon::where('id',$request->id)->get('name'),
            'description' => Coupon::where('id',$request->id)->get('description'),
        ];

        foreach ($customerDetail as $row) {
            // dd($row['email']);
            Mail::to($row['email'])->send(new PromoMail($promoDetail));
        }

        $notification = array(
            'message' => 'Coupon/Promo Successfully Send',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    Public function CustView(){

        $customerDetail = Promo::latest()->get();
        return view('admin.menu.custDB.viewCustomer', compact('customerDetail'))->with('no', 1);

    }

    public function getCustData()
    {
        return Excel::download(new CustomerExport, 'customers.xlsx');
    }

}