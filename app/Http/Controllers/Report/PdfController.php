<?php

namespace App\Http\Controllers\Report;

use DB;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project_info\Development_partner\DevelopmentPartner;
use Rakibhstu\Banglanumber\NumberToBangla;

class PdfController extends Controller
{
    public function __construct()
    {
        ini_set(base64_decode('bWF4X2V4ZWN1dGlvbl90aW1l'), base64_decode('NDAw'));
        ini_set(base64_decode('bWVtb3J5X2xpbWl0'), base64_decode('MTAyNE0='));
        ini_set(base64_decode('cGNyZS5iYWNrdHJhY2tfbGltaXQ='), base64_decode('NTAwMDAwMA=='));
    }
    function index(Request $l10573b873d2f)
    {
        $n3921ddbfa6a3 = $l10573b873d2f->$oa982e52e8e90;
        if ($n3921ddbfa6a3 == 1) {
            $td8d9110da795 = base64_decode('UmVwb3J0UXVlcmllc0NvbnRyb2xsZXI=');
        }
        if ($n3921ddbfa6a3 == 2) {
            $td8d9110da795 = base64_decode('QXNzZXRSZXBvcnRDb250cm9sbGVy');
        }
        if ($n3921ddbfa6a3 == 3) {
            $td8d9110da795 = base64_decode('VEFSZXBvcnRRdWVyaWVzQ29udHJvbGxlcg==');
        }
        if ($n3921ddbfa6a3 == 4) {
            $td8d9110da795 = base64_decode('T25MZW5kaW5nTG9hblJlc2NoZWR1bGVMaXN0Q29udHJvbGxlcg==');
        }
        $u18b5ca8cbd35 = $l10573b873d2f->$zabff655060d7;
        $xd2a57dc1d883 = app();
        $f594c103f2c6e = $xd2a57dc1d883->make(base64_decode('XEFwcFxIdHRwXENvbnRyb2xsZXJzXFJlcG9ydFxc') . $td8d9110da795);
        $p8d777f385d3d = $f594c103f2c6e->$u18b5ca8cbd35($l10573b873d2f);
        $p8d777f385d3d[base64_decode('dGl0bGU=')] = base64_decode('UmVwb3J0cw==');
        $e5b063e275d50 = $p8d777f385d3d[base64_decode('ZmlsZU5hbWU=')] = @$p8d777f385d3d[base64_decode('ZmlsZU5hbWU=')];
        $kd7f00015145e = $p8d777f385d3d[base64_decode('dmlld1BhZ2U=')];
        if ($l10573b873d2f->$i9cd5e239d1af != 1) {
            return view($kd7f00015145e, $p8d777f385d3d);
        }
        if ($u18b5ca8cbd35 == base64_decode('cHJvY3VyZW1lbnREZXRhaWxzUmVwb3J0')) {
            return view($kd7f00015145e, $p8d777f385d3d);
        }
        $e437175ba4191 = PDF::loadView($kd7f00015145e, $p8d777f385d3d);
        $e437175ba4191->SetProtection([base64_decode('Y29weQ=='), base64_decode('cHJpbnQ='), base64_decode('cHJpbnQtaGlnaHJlcw==')], '', base64_decode('cGFzcw=='));
        return $e437175ba4191->stream($e5b063e275d50 . base64_decode('KA==') . date(base64_decode('ZC1tLVk=')) . base64_decode('KQ==') . base64_decode('LnBkZg=='));
    }
    public function pdfGeneratorApi()
    {
        $h572d4e421e5e = base64_decode('aHR0cDovL2xvY2FsaG9zdDo4MDgxL3Jtcy1ycG0vYXBpL3ByZXNlbnRhdGlvbi1ldmFsdWF0b3JzLWZlZWRiYWNrL2ZpbmQtc2VtaW5hci1wcmVzZW50YXRpb24tcmVwb3J0LWJ5LXNlbWluYXItdXVpZC9hNzk2ZmY1Ny03NmEyLTQ1NjYtOThmMy1hZTczODYwYzZiODM=');
        $l62608e08adc2 = new \GuzzleHttp\Client();
        $t9b207167e538 = $l62608e08adc2->get($h572d4e421e5e);
        $t9b207167e538->getStatusCode();
        $obf2a3955e499 = json_decode($t9b207167e538->getBody(), true);
        $p8d777f385d3d[base64_decode('ZmVlZEJhY2s=')] = $obf2a3955e499;
        $p8d777f385d3d[base64_decode('YXBpRGF0YQ==')] = $this->groupByKeyValue($obf2a3955e499[base64_decode('b2Jq')][base64_decode('cHJlc2VudGF0aW9uRXZhbHVhdG9yc0ZlZWRiYWNrTGlzdA==')], base64_decode('bTFSZXNlYXJjaGVyUHJvcG9zYWxJZA=='));
        $p8d777f385d3d[base64_decode('bG5n')] = request()->route()->$w66e10e9ff65e;
        $p8d777f385d3d[base64_decode('Q29udHJvbGxlcg==')] = base64_decode('QXBwXEh0dHBcQ29udHJvbGxlcnNcUmVwb3J0XFBkZkNvbnRyb2xsZXI=');
        $e437175ba4191 = PDF::loadView(base64_decode('cm1zLXJlcG9ydHMvc2VtaW5hci9wcmVzZW50YXRpb25SZXBvcnQ='), $p8d777f385d3d);
        $e437175ba4191->SetProtection([base64_decode('Y29weQ=='), base64_decode('cHJpbnQ='), base64_decode('cHJpbnQtaGlnaHJlcw==')], '', base64_decode('cGFzcw=='));
        return $e437175ba4191->stream(base64_decode('VHJhaW5pbmctT3JnYW5pemVyLURldGFpbHMo') . date(base64_decode('WS1tLWQ=')) . base64_decode('KQ==') . base64_decode('LnBkZg=='));
    }
    function groupByKeyValue($nf1f713c9e000, $s3c6e0b8a9c15)
    {
        $ke70c4df10ef0 = array();
        foreach ($nf1f713c9e000 as $a3a6d0284e743) {
            $ke70c4df10ef0[$a3a6d0284e743[$s3c6e0b8a9c15]][] = $a3a6d0284e743;
        }
        return $ke70c4df10ef0;
    }
    public static function entoBn($a3a6d0284e743, $vd55669822f1a = '')
    {
        $sd74002dfff1d = new NumberToBangla();
        if ($vd55669822f1a == base64_decode('bnVtYmVy')) {
            return $sd74002dfff1d->bnNum($a3a6d0284e743);
        }
        if ($vd55669822f1a == base64_decode('d29yZA==')) {
            return $sd74002dfff1d->bnWord($a3a6d0284e743);
        }
        if ($vd55669822f1a == base64_decode('bW9udGg=')) {
            return $sd74002dfff1d->bnMonth($a3a6d0284e743);
        }
        if ($vd55669822f1a == base64_decode('bW9uZXk=')) {
            return $sd74002dfff1d->bnMoney($a3a6d0284e743);
        }
    }
    public function test2()
    {
        $hba3988db0a31 = file_get_contents(base64_decode('aHR0cDovL2xvY2FsaG9zdDo0MjAwL3Byb3Bvc2FsLWxpc3Qvdmlldy81MTZlM2FlYy03YmUyLTQ4ZjMtOWU4My0yNTA3ZDQ0MTVmNGIvNDc='));
        file_put_contents($b2245023265ae, $hba3988db0a31);
    }
    function test()
    {
        $h572d4e421e5e = base64_decode('aHR0cDovLzIwMi4xNjEuMTkxLjEzMTo5NDA4L3Byb3Bvc2FsLWxpc3Qvdmlldy81MTZlM2FlYy03YmUyLTQ4ZjMtOWU4My0yNTA3ZDQ0MTVmNGIvNDc=');
        $od88fc6edf21e = curl_init();
        curl_setopt($od88fc6edf21e, CURLOPT_URL, $h572d4e421e5e);
        curl_setopt($od88fc6edf21e, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($od88fc6edf21e, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($od88fc6edf21e, CURLOPT_USERAGENT, base64_decode('TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgNS4xOyBydjozMS4wKSBHZWNrby8yMDEwMDEwMSBGaXJlZm94LzMxLjA='));
        $p8d777f385d3d = curl_exec($od88fc6edf21e);
        curl_close($od88fc6edf21e);
        echo $p8d777f385d3d;
    }
    public function htmlView($y1cac881c02f0, $c8c04f2a13751, $y918d83c715c1, $c1bda80f2be4d = 0)
    {
        if ($c8c04f2a13751 != base64_decode('MA==')) {
            $xd6fe1d0be634 = $y1cac881c02f0 . base64_decode('Lw==') . $c8c04f2a13751 . base64_decode('Lw==');
        } else {
            $xd6fe1d0be634 = $y1cac881c02f0 . base64_decode('Lw==');
        }
        if ($c1bda80f2be4d > 0) {
            return view($xd6fe1d0be634 . $y918d83c715c1);
        }
        $e437175ba4191 = PDF::loadView($xd6fe1d0be634 . $y918d83c715c1);
        $e437175ba4191->SetProtection([base64_decode('Y29weQ=='), base64_decode('cHJpbnQ='), base64_decode('cHJpbnQtaGlnaHJlcw==')], '', base64_decode('cGFzcw=='));
        return $e437175ba4191->stream(base64_decode('dGVzdC1wZGYo') . date(base64_decode('WS1tLWQ=')) . base64_decode('KQ==') . base64_decode('LnBkZg=='));
    }
}