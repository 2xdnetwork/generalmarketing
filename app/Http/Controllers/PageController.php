<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function home(Request $request){
        $path = $request->get('api_path').'/pages/home';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function about(Request $request){
        $path = $request->get('api_path').'/pages/about';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function paid_advertising(Request $request){
        $path = $request->get('api_path').'/pages/paid_advertising';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function social_media_management(Request $request){
        $path = $request->get('api_path').'/pages/social_media_management';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

  
    public function website_development(Request $request){
        $path = $request->get('api_path').'/pages/website_development';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  


    public function search_engine_optimization(Request $request){
        $path = $request->get('api_path').'/pages/search_engine_optimization';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  

    public function brand_strategy(Request $request){
        $path = $request->get('api_path').'/pages/brand_strategy';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  

    public function email_marketing(Request $request){
        $path = $request->get('api_path').'/pages/email_marketing';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  

    public function contact(Request $request){
        $path = $request->get('api_path').'/pages/contact';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  

    public function privacy_policy(Request $request){
        $path = $request->get('api_path').'/pages/privacy_policy';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  


    public function terms_and_conditions(Request $request){
        $path = $request->get('api_path').'/pages/terms_and_conditions';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }  


    public function sitemap(Request $request){    
        $path = $request->get('api_path').'/pages/sitemap';
        if (view()->exists($path)) {
            return response()->view($path)->withHeaders([
                'Content-Type' => 'text/xml'
            ]);
        } else {
            //abort('404'); 
        return('XML Does Not Exist');
        }
    }

}
