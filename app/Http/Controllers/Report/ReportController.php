<?php

namespace App\Http\Controllers\Report;

use DB;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rakibhstu\Banglanumber\NumberToBangla;

class ReportController extends Controller
{
    public function __construct()
    {
        ini_set(base64_decode('bWF4X2V4ZWN1dGlvbl90aW1l'), base64_decode('NDAw'));
        ini_set(base64_decode('bWVtb3J5X2xpbWl0'), base64_decode('MTAyNE0='));
        ini_set(base64_decode('cGNyZS5iYWNrdHJhY2tfbGltaXQ='), base64_decode('NTAwMDAwMA=='));
    }
    function index(Request $g10573b873d2f)
    {
        $z3921ddbfa6a3 = $g10573b873d2f->$na982e52e8e90;
        if ($z3921ddbfa6a3 == 1) {
            $jd8d9110da795 = base64_decode('UmVwb3J0UXVlcmllc0NvbnRyb2xsZXI=');
        }
        if ($z3921ddbfa6a3 == 2) {
            $jd8d9110da795 = base64_decode('QXNzZXRSZXBvcnRDb250cm9sbGVy');
        }
        if ($z3921ddbfa6a3 == 3) {
            $jd8d9110da795 = base64_decode('VEFSZXBvcnRRdWVyaWVzQ29udHJvbGxlcg==');
        }
        if ($z3921ddbfa6a3 == 4) {
            $jd8d9110da795 = base64_decode('T25MZW5kaW5nTG9hblJlc2NoZWR1bGVMaXN0Q29udHJvbGxlcg==');
        }
        $h18b5ca8cbd35 = $g10573b873d2f->$uabff655060d7;
        $jd2a57dc1d883 = app();
        $m594c103f2c6e = $jd2a57dc1d883->make(base64_decode('XEFwcFxIdHRwXENvbnRyb2xsZXJzXFJlcG9ydFxc') . $jd8d9110da795);
        $h8d777f385d3d = $m594c103f2c6e->$h18b5ca8cbd35($g10573b873d2f);
        $h8d777f385d3d[base64_decode('dGl0bGU=')] = base64_decode('UmVwb3J0cw==');
        $c5b063e275d50 = $h8d777f385d3d[base64_decode('ZmlsZU5hbWU=')] = @$h8d777f385d3d[base64_decode('ZmlsZU5hbWU=')];
        $bd7f00015145e = $h8d777f385d3d[base64_decode('dmlld1BhZ2U=')];
        if ($g10573b873d2f->$v9cd5e239d1af != 1) {
            return view($bd7f00015145e, $h8d777f385d3d);
        }
        if ($h18b5ca8cbd35 == base64_decode('cHJvY3VyZW1lbnREZXRhaWxzUmVwb3J0')) {
            return view($bd7f00015145e, $h8d777f385d3d);
        }
        $a437175ba4191 = PDF::loadView($bd7f00015145e, $h8d777f385d3d);
        $a437175ba4191->SetProtection([base64_decode('Y29weQ=='), base64_decode('cHJpbnQ='), base64_decode('cHJpbnQtaGlnaHJlcw==')], '', base64_decode('cGFzcw=='));
        return $a437175ba4191->stream($c5b063e275d50 . base64_decode('KA==') . date(base64_decode('ZC1tLVk=')) . base64_decode('KQ==') . base64_decode('LnBkZg=='));
    }
    public static function entoBn($m3a6d0284e743, $yd55669822f1a = '', $d8b8a2268b5d3 = '')
    {
        if ($m3a6d0284e743 == '' || $m3a6d0284e743 == null) return;
        if ($d8b8a2268b5d3 == base64_decode('ZW4=')) {
            return $m3a6d0284e743;
        }
        $ud74002dfff1d = new NumberToBangla();
        if ($yd55669822f1a == base64_decode('bnVtYmVy')) {
            return $ud74002dfff1d->bnNum($m3a6d0284e743);
        }
        if ($yd55669822f1a == base64_decode('d29yZA==')) {
            return $ud74002dfff1d->bnWord($m3a6d0284e743);
        }
        if ($yd55669822f1a == base64_decode('bW9udGg=')) {
            return $ud74002dfff1d->bnMonth($m3a6d0284e743);
        }
        if ($yd55669822f1a == base64_decode('bW9uZXk=')) {
            return $ud74002dfff1d->bnMoney($m3a6d0284e743);
        }
    }
    public function pdfGenerator(Request $g10573b873d2f)
    {
        $h8d777f385d3d[base64_decode('Q29udHJvbGxlcg==')] = base64_decode('QXBwXEh0dHBcQ29udHJvbGxlcnNcUmVwb3J0XFJlcG9ydENvbnRyb2xsZXI=');
        $c5b063e275d50 = $g10573b873d2f[base64_decode('ZmlsZU5hbWU=')] ? $g10573b873d2f[base64_decode('ZmlsZU5hbWU=')] : base64_decode('cm1zLWZpbGU=');
        $p918d83c715c1 = $g10573b873d2f[base64_decode('dGVtcGxhdGVOYW1l')] ? $g10573b873d2f[base64_decode('dGVtcGxhdGVOYW1l')] : '';
        $h8d777f385d3d[base64_decode('bG5n')] = $g10573b873d2f[base64_decode('bG5n')] ? $g10573b873d2f[base64_decode('bG5n')] : base64_decode('ZW4=');
        $h8d777f385d3d[base64_decode('dmFs')] = $g10573b873d2f->all();
        $y1bda80f2be4d = ($g10573b873d2f[base64_decode('dmlldw==')] == 1) ? true : false;
        $k0d6e4e6dc497 = ($g10573b873d2f[base64_decode('cHJpbnRfcg==')] == 1) ? true : false;
        if ($k0d6e4e6dc497 && $y1bda80f2be4d == false) {
            print_r($h8d777f385d3d);
            exit();
        }
        if ($k0d6e4e6dc497 && $y1bda80f2be4d) {
            print_r($h8d777f385d3d);
            return view($p918d83c715c1, $h8d777f385d3d);
        }
        if ($y1bda80f2be4d) {
            return view($p918d83c715c1, $h8d777f385d3d);
        }
        $a437175ba4191 = PDF::loadView($p918d83c715c1, $h8d777f385d3d);
        $a437175ba4191->SetProtection([base64_decode('Y29weQ=='), base64_decode('cHJpbnQ='), base64_decode('cHJpbnQtaGlnaHJlcw==')], '', base64_decode('cGFzcw=='));
        return $a437175ba4191->stream($c5b063e275d50 . base64_decode('KA==') . date(base64_decode('WS1tLWQ=')) . base64_decode('KQ==') . base64_decode('LnBkZg=='));
    }

    public static function enToBnConveter($response)
    {
        if ($response == null || $response == '') {
            return '';
        }
        $englDTN = array(
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
            'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
            'Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri',
            'am', 'pm', 'at', 'st', 'nd', 'rd', 'th',
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        );
        $bangDTN = array(
            '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০',
            'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার',
            'শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র',
            'পূর্বাহ্ণ', 'অপরাহ্ণ', '', '', '', '', '',
            'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
            'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'
        );
        $converted = str_replace($englDTN, $bangDTN, $response);
        return $converted;
    }

    public static function dateFormatter($originalDate)
    {
        if ($originalDate == null || $originalDate == '') {
            return '';
        }
        date_default_timezone_set('Asia/Dhaka');
        $newDate = date("d M, Y", strtotime($originalDate));
        return $newDate;
    }

    public static function dateFormatterNBR($originalDate)
    {
        if ($originalDate == null || $originalDate == '') {
            return '';
        }
        date_default_timezone_set('UTC');
        $newDate = date("d-m-Y", strtotime($originalDate));
        return $newDate;
    }

    public static function minimizeScaleNumber($data)
    {
        if ($data == null || $data == '') {
            return 0;
        }
        $arr = explode("-", $data);
        $length = count($arr) - 1;
        //print_r($length);
        return "$arr[0]" . "-" . "$arr[$length]";
    }


    var $eng_to_bn = array('1'=>'১', '2'=>'২', '3'=>'৩', '4'=>'৪', '5'=>'৫','6'=>'৬', '7'=>'৭', '8'=>'৮', '9'=>'৯', '0'=>'০');
    var $num_to_bd = array('1'=>'এক','2'=>'দুই','3'=>'তিন','4'=>'চার','5'=>'পাঁচ','6'=>'ছয়','7'=>'সাত','8'=>'আট', '9'=>'নয়','10'=>'দশ','11'=>'এগার','12'=>'বার','13'=>'তের','14'=>'চৌদ্দ','15'=>'পনের','16'=>'ষোল','17'=>'সতের','18'=>'আঠার','19'=>'ঊনিশ','20'=>'বিশ','21'=>'একুশ','22'=>'বাইশ','23'=>'তেইশ','24'=>'চব্বিশ','25'=>'পঁচিশ','26'=>'ছাব্বিশ','27'=>'সাতাশ','28'=>'আঠাশ','29'=>'ঊনত্রিশ','30'=>'ত্রিশ','31'=>'একত্রিশ','32'=>'বত্রিশ','33'=>'তেত্রিশ','34'=>'চৌত্রিশ','35'=>'পঁয়ত্রিশ','36'=>'ছত্রিশ','37'=>'সাঁইত্রিশ','38'=>'আটত্রিশ','39'=>'ঊনচল্লিশ','40'=>'চল্লিশ','41'=>'একচল্লিশ','42'=>'বিয়াল্লিশ','43'=>'তেতাল্লিশ','44'=>'চুয়াল্লিশ','45'=>'পঁয়তাল্লিশ','46'=>'ছেচল্লিশ','47'=>'সাতচল্লিশ','48'=>'আটচল্লিশ','49'=>'ঊনপঞ্চাশ','50'=>'পঞ্চাশ','51'=>'একান্ন','52'=>'বায়ান্ন','53'=>'তিপ্পান্ন','54'=>'চুয়ান্ন','55'=>'পঞ্চান্ন','56'=>'ছাপ্পান্ন','57'=>'সাতান্ন','58'=>'আটান্ন','59'=>'ঊনষাট','60'=>'ষাট','61'=>'একষট্টি','62'=>'বাষট্টি','63'=>'তেষট্টি','64'=>'চৌষট্টি','65'=>'পঁয়ষট্টি','66'=>'ছেষট্টি','67'=>'সাতষট্টি','68'=>'আটষট্টি','69'=>'ঊনসত্তর','70'=>'সত্তর','71'=>'একাত্তর','72'=>'বাহাত্তর','73'=>'তিয়াত্তর','74'=>'চুয়াত্তর','75'=>'পঁচাত্তর','76'=>'ছিয়াত্তর','77'=>'সাতাত্তর','78'=>'আটাত্তর','79'=>'ঊনআশি','80'=>'আশি','81'=>'একাশি','82'=>'বিরাশি','83'=>'তিরাশি','84'=>'চুরাশি','85'=>'পঁচাশি','86'=>'ছিয়াশি','87'=>'সাতাশি','88'=>'আটাশি','89'=>'ঊননব্বই','90'=>'নব্বই','91'=>'একানব্বই','92'=>'বিরানব্বই','93'=>'তিরানব্বই','94'=>'চুরানব্বই','95'=>'পঁচানব্বই','96'=>'ছিয়ানব্বই','97'=>'সাতানব্বই','98'=>'আটানব্বই','99'=>'নিরানব্বই');
    var $num_to_bn_decimal = array('0'=>'শূন্য ','1'=>'এক ','2'=>'দুই ','3'=>'তিন ','4'=>'চার ','5'=>'পাঁচ ','6'=>'ছয় ','7'=>'সাত ','8'=>'আট ', '9'=>'নয় ');
    var $hundred = 'শত';
    var $thousand = 'হাজার';
    var $lakh = 'লক্ষ';
    var $crore = 'কোটি';

    public function engToBn($number){
        $bn_number = strtr($number,$this->eng_to_bn);
        return $bn_number;
    }

    public function numToWord($number){
        if (!is_numeric($number) ) return 'Not a Number';

        if(is_float($number)){
            $dot = explode(".", $number);
            return $this->numberSelector($dot[0]).' দশমিক '.$this->numToBnDecimal($dot[1]);
        }else{
            return $this->numberSelector($number);
        }

    }
    public function numToBn($number){
        $word = strtr($number,$this->num_to_bd);
        return $word;
    }
    public function numToBnDecimal($number){
        $word = strtr($number,$this->num_to_bn_decimal);
        return $word;
    }

    public function numberSelector($number){
        if($number > 9999999){
            return $this->crore($number);
        }elseif($number > 99999){
            return $this->lakh($number);
        }elseif($number > 999){
            return $this->thousand($number);
        }elseif($number > 99){
            return $this->hundred($number);
        }else{
            return $this->underHundred($number);
        }
    }

    public function underHundred($number){
        $number = ($number == 0)?'': $this->numToBn($number);
        return $number;
    }

    public function hundred($number){
        $a = (int)($number/100);
        $b = $number%100;
        $hundred = ($a == 0)?'': $this->numToBn($a).' '.$this->hundred;
        return $hundred.' '.$this->underHundred($b);
    }

    public function thousand($number){
        $a = (int)($number/1000);
        $b = $number%1000;
        $thousand = ($a == 0)?'': $this->numToBn($a).' '.$this->thousand;
        return $thousand.' '.$this->hundred($b);
    }

    public function lakh($number){
        $a = (int)($number/100000);
        $b = $number%100000;
        $lakh = ($a == 0)?'': $this->numToBn($a).' '.$this->lakh;
        return $lakh.' '.$this->thousand($b);
    }

    public function crore($number){
        $a = (int)($number/10000000);
        $b = $number%10000000;
        $more_than_core = ($a>99)?$this->lakh($a):$this->numToBn($a);
        return $more_than_core.' '.$this->crore.' '.$this->lakh($b);
    }
}