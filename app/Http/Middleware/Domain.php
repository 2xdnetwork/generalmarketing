<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class Domain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        if(env('APP_ENV') == "local") {
            $hostname = env('API_LAYOUT');           
        }

        if(env('APP_ENV') == "production") {
            $hostname = $request->getHost();
        }

        //Get Domain Setting from api file
        $api_configs = Config::get('api');

        //Prepare an array to add data from api file to request as attributes:
        $domain = null;
        if (array_key_exists($hostname,$api_configs)) {
            $domain = $hostname;
        } else {
            foreach ($api_configs as $key => $site) {
                if (substr_compare($hostname, $key, -strlen($key)) === 0) {
                    $domain = $key;
                    break;
                }
            }
        }
        //Add now data from api file to request as attributes:
        $api_settings = $api_configs[$domain];

        //Build a location links:
        $passsite = $api_settings['shortname'];
 
        //Also add filename at the end with .filename
        $pathToTemplate = 'sites/'. $passsite;
        //To Extend Blades, Add at the end file name .filename in extend
        $pathToExtend = 'sites.'. $passsite;

        //Populate Final Request with VARS
            $request->attributes->add([
            'api_name' => $api_settings['name'],
            'api_shortname' => $api_settings['shortname'],             
            'api_domain' => $api_settings['domain'],
            'api_email' => $api_settings['email'],  
            'api_template' => $api_settings['template'],
            'api_location' => $api_settings['location'],
            'api_phone' => $api_settings['phone'],
            'api_address' => $api_settings['address'],
            'api_path' => $pathToTemplate,
            'api_path_to_extend' => $pathToExtend,
        ]);


                return $next($request);
     }
}
