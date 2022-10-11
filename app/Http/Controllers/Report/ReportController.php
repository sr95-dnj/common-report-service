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
            return 'কোন তথ্য পাওয়া যায়নি';
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
        date_default_timezone_set('UTC');
        $newDate = date("d M, Y", strtotime($originalDate));
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
}