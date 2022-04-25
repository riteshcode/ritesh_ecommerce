<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Models\User;

if (!function_exists('showStatus')) {
    function showStatus($status)
    {
        if($status == 1){
            return 'Active';
        }
        return 'Inactive';
    }
}

// Set/ Get cache for seting 
if (!function_exists('cacheSetting')) {
    function cacheSetting()
    {
        $value = Cache::remember('settings',10000, function () {
            $sett = [];
            $setting =  App\Models\WebsiteSetting::where('group_id',1)->get();
            if(!empty($setting)){
                foreach($setting as $setting){
                   $sett[$setting->setting_key] = $setting->setting_value;
                }
            }
            return $sett; 
        });
        return $value; 
    }
}

/*
    get Setting valur from cache
*/
 if (!function_exists('getSetting')) {
    function getSetting($param)
    {
        $setting = Cache::get('settings');   
        return array_key_exists($param,$setting) ? $setting[$param] : '' ; 
    }
}

/* 
    format amount with currency
*/
if (!function_exists('currencyFormat')) {
    function currencyFormat($amount)
    {
        $formatAmount = getSetting('default_currency').number_format($amount, 2);
        return $formatAmount;
    }
}

/* 
    Sort name for product with ...
*/
if (!function_exists('sortStringName')) {
    function sortStringName($param)
    {
        $len = strlen($param);
        if($len > 24 ){
            return substr($param, 0, 22).'..';
        }else{
            return $param;
        }

    }
}



// calculate micro time for execution time test of any code
if (!function_exists('microtime_float')) {
    function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
}

/* 
    calculate generate or get session token for guest user
*/
if (!function_exists('generateSessionToken')) {
    function generateSessionToken()
    {
        $token = md5(rand(10000,10000000000000));
        session()->put('SessionToken',$token);
        return '';
    }
}

if (!function_exists('SessionToken')) {
    function SessionToken()
    {
        return session()->get('SessionToken');
    }
}

/*
    type: numeric,alphabet,alpha_numeric,token
*/

if (!function_exists('generate_random_token')) {
    function generate_random_token($type, $size){

        $token = '';

        $alphabet = range("A","Z");
        $numeric = range("1","100");

        switch ($type) {
            case 'numeric':
                shuffle($numeric);
                $res = array_chunk($numeric, $size, true);
                $token = substr(implode('', $res[0]),0,$size);
            break;
            case 'alphabet':
                shuffle($alphabet);
                $res = array_chunk($alphabet, $size, true);
                $token = substr(implode('', $res[0]),0,$size);
            break;
            case 'alpha_numeric':
                $alphabet_num = array_merge($alphabet,$numeric);
                shuffle($alphabet_num);
                $res = array_chunk($alphabet_num, $size, true);
                $token = substr(implode('', $res[0]),0,$size);
            break;
            case 'token':
                $alphabet_num = array_merge($alphabet,$numeric);
                shuffle($alphabet_num);
                $res = array_chunk($alphabet_num, $size, true);
                $token = substr(implode('', $res[0]),0,$size);
            break;

            default:

            break;
        }

        return $token;

    }
}

/*
    Find RoleName By User Column Name
*/

if (!function_exists('findRoleByColumn')) {
    function findRoleByColumn($column, $value)
    {
        $user = User::where($column, $value)->first();
        if(!empty($user->role)){
            return $user->role[0]->roles_name;
        }
        return '';
    }
}


/*
    type: category, product, etc..
    data : array | object

*/

if (!function_exists('getNameAndDesc')) {
    function getNameAndDesc($type, $data)
    {
        $language = 1;

        switch ($type) {

            case 'product':

                if(is_array($data)){
                    $product = $data->map(function($data) use ($language)  {
                        $cate = $data->description()->where('languages_id', $language)->first();
                        $data->products_name = ($cate == null) ? '' : $cate->products_name;
                        $data->products_description = ($cate == null) ? '' : $cate->products_description;
                        return $data;
                    });
                    return $product;

                }else{

                    $pr = $data->description()->where('languages_id', $language)->first();
                    $data->products_name = ($pr == null) ? '' : $pr->products_name;
                    $data->products_description = ($pr == null) ? '' : $pr->products_description;
                    return $data;

                }

                break;
                
            case 'category':

                // if(is_array($data)){
                    $category = $data->map(function($CAT) use ($language)  {
                        $cate = $CAT->description()->where('languages_id', $language)->first();
                        $CAT->category_name = ($cate == null) ? '' : $cate->categories_name;
                        $CAT->category_description = ($cate == null) ? '' : $cate->categories_description;
                        return $CAT;
                    });
                    return $category;

                // }else{

                //     $cat = $data->description()->where('languages_id', $language)->first();
                //     $data->category_name = ($cat == null) ? '' : $cat->categories_name;
                //     $data->category_description = ($cat == null) ? '' : $cat->categories_description;
                //     return $data;

                // }

                break;
                
            
            default:
                # code...
                break;
        }

    }
}




