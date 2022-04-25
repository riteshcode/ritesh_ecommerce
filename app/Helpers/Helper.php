<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use App\Models\Images;

// templateTheme :  used for include theme wise in controller file
if (!function_exists('templateTheme')) {
    function templateTheme($page, $data = array())
    {
        $theme = config('app.theme');
        if ($theme) {
            return  view($theme.'.'.$page, $data);
        }
    }

}

// templateFile :  used for include theme wise in blade file
if (!function_exists('templateFile')) {
    function templateFile($page)
    {
        $theme = config('app.theme');
        if ($theme) {
            return  $theme.'.'.$page;
        }
    }

}

// templateFile :  used for include theme wise in blade file
if (!function_exists('LoadAssets')) {
    function LoadAssets($page)
    {
        $theme = config('app.theme');
        if ($theme) {
            return  url($theme.'/'.$page);
        }
    }

}

/* 
    get image url with setting_key:
             like we pass website_log, than this key find in cache for id
             and id will find imageUrl. 
*/
if(!function_exists('getImageUrlWithKey')){
    
    function getImageUrlWithKey($setting_key){
        $image_id = getSetting($setting_key);
        return getFullImageUrl( !empty($image_id) ? $image_id : 0, '');
    }

}

if (!function_exists('getFullImageUrl')) {
    function getFullImageUrl($image_ids, $pageType=''){

        $imageUrl = 'http://e-nnovation.net/support/public/storage';
        $image = '';

        $imageInfo = Images::find($image_ids);
        if(!empty($imageInfo)){

            $imageName = $imageInfo->images_name;            
            $imageName .='.'.$imageInfo->images_ext;
            $fullImagePath = $imageInfo->images_directory.'/'.$imageName;

            $image  =   $imageInfo->images_directory.'/'.
                        $imageInfo->images_name.'.'.$imageInfo->images_ext;

        }

        /* return image url with full name  */
        $fullImageName = $imageUrl.'/'.$image;
        return $fullImageName;

        // return file_exists($fullImageName) ? $fullImageName : $imageUrl.'/no-image.png';
        
       
    }
}



