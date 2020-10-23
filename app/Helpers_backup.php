<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


if (!function_exists('formatDateThai')) {
    function formatDateThai($strDate)
    {
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear $strHour:$strMinute";
    }
}

if (!function_exists('encode_url')) {
    function encode_url($name)
    {
        $re = '/(-\W+)+|( \S{0})/';
        $encode = preg_replace('~[ ,.,|,®,&,/]~', '-', $name);
        $subst = '-';
        $encode = preg_replace($re, $subst, $encode);
        return ($encode);
    }
}


if (!function_exists('decode_url')) {
    function decode_url($name)
    {
        $decode = str_replace("-"," ",$name);
        return $decode;
    }
}

if (!function_exists('breadcrumb')) {
    function breadcrumb($name)
    {
        $explode = explode('/', Request::url());

        switch ($name) {
            case 'brand':
                # code...
                array_pop($explode);
                array_pop($explode);
                break;
            case 'type':
                array_pop($explode);
                # code...
                break;
            case 'product':
                # code...
                break;
            default:
                # code...
                break;
        }

        $implode = implode('/', $explode);
        return $implode;
    }
}

function ikey_breadcrumb(){
    $url = url()->current();
    $url = explode("/",$url);
    return $url[7];
}

function ecom_breadcrumb(){
    $url = url()->current();
    $url = explode("/",$url);
    return $url[6];
}

function explode_index(){
    $url = url()->full();
    $url = explode('/', $url);
    unset($url[3]);
    return $url;
}

function change_color(){
    $url = url()->full();
    $url = explode('/', $url);
        unset($url[0],$url[1],$url[2],$url[3]);
        if($url[4] === "samsung"){
            return $url;
        }
            else if ($url[5] === "bixolon"){
            return $url;
        }
        else if ($url[5] === "ikey"){
            return $url;
        }
        else if ($url[5] === "sam4s"){
            return $url;
        }

}

if (!function_exists('_value')){
    function _value($value=false){
        if ($value == false){
            return false;
        }
        return isset($value) ? $value : '';
    }
}

if (!function_exists('sendMail')){
    function sendMail($email=array(), $url){
        try {
            // Mail::to($emails)->send(new SendMail($url));
        }
        catch (Exception $e) {
            #####
            // return false;
        }
    }
}

if (!function_exists('metaTag')) {
    function metaTag($req=false)
    {
        $file = app_path('Helpers/helper_meta.php');
        require_once($file);
        $url = $_SERVER['REQUEST_URI'];
        $emails = ['khritsanaphong.f@databar.co.th','teerach.m@databar.co.th'];

        // dd('1234');
        if ($req != false){
            if(_value($req->Pmeta_Title) == null || _value($req->Pmeta_Title) == ""){
                // Send Mail
                sendMail($emails, $url);
                $name = $meta['defualt'];
            }
            else{

                $name = array(
                    'title' => _value($req->Pmeta_Title),
                    'description' => _value($req->Pmeta_Descript),
                    'keywords'=> _value($req->Pmeta_Keywords),
                    'url' => _value($req->Pmeta_Url),
                );
            }
        }else{
            $array = array();
            $ex = explode("/", $url);
            $count = count($ex);

            for ($i=0; $i < $count; $i++) {
                # code...
                if($ex[$i]== ""){
                    unset($ex[$i]);
                }
            }
            $ex = array_values($ex);
            $url = '/' . implode("/", $ex);


            if (empty($meta[$url])){

                $check = [
                    'gclid', 'utm_content', 'utm_medium', 'utm_source', 'hss_channel', 's'
                ];

                $numCheck = 0;
                foreach ($check as $key => $value) {
                    isset($_GET[$value]) ? $numCheck = 1 : '';
                }

                if ($numCheck === 0)
                {
                    // Send Mail
                    sendMail($emails, $url);
                }

                // ไม่เจอ Array Meta Tag
                $name = $meta['defualt'];
            }else{
                $name = $meta[$url];
            }
        }
        $meta_itemprop = array();
        if ($name != FALSE)
        {
            if (isset($name['title']) != '')
            {
                $meta_tag []        =  '<meta name="title" content="'.$name['title'].'">';
            }
            if (isset($name['description']) != '')
            {
                $meta_tag []        =  '<meta name="description" content="'.$name['description'].'">';
                $meta_itemprop []   =  '<meta itemprop="description" content="'.$name['description'].'">';

                }
                if (isset($name['keywords']) != '')
                {
                    $meta_tag []        =  '<meta name="keywords" content="'.$name['keywords'].'">';
                    $meta_itemprop []   =  '<meta itemprop="keywords" content="'.$name['keywords'].'">';

                }
                if (isset($name['url']) != '')
                {
                    $meta_tag []        =  '<meta name="url" content="'.$name['url'].'">';
                    $meta_itemprop []   =  '<meta itemprop="url" content="'.$name['url'].'">';
                }

            foreach ($meta_tag as $key => $value) {
                echo $value;
            }
            foreach ($meta_itemprop as $key => $value) {
                echo $value;
            }
        }
    }
}


