<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
    /* table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    } */

    @page {
        size: landscape;
    }
    body {
        writing-mode: tb-rl;
    }
    table.center {
        margin-left: auto;
        margin-right: auto;
        width: 100% !important;
        padding: 5px;
    }

    .rootTable{
        border: 1px solid;
        border-collapse: collapse;
    }

    @page {
        margin-top: 5px;
    }

    td {
        vertical-align: top !important;
    }
    </style>

</head>


<body style="font-size: 24px;">
    <?php
    $data = json_decode($val['data']);
    ?>


    <div style="width: 100%; margin-top: 50px;">
        <div style="width: 50%; float: left">

        </div>
        <div style="width: 50%; float: right">
            <table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                        <h2>বাংলাদেশ সমরাস্ত্র কারখানা</h2>
                        <h3><u>গাজীপুর সেনানিবাস, গাজীপুর।</u></h3>
                        <span>দ্রব্যের ইনডেন্ট</span>
                    </td>
                </tr>
            </table>

            <table width="100%">
                <tr>
                    <td style="width: 25% !important; text-align: left;">
                        দ্রব্যের শ্রেণী  বিভাগ:
                    </td>
                    <td style="width: 75% !important; text-align: left;">
                        Laptop
                    </td>
                </tr>
            </table>
            <table style="width: 100%; margin-top: 30px;">
                <tr>
                    <td style="width: 15% !important; text-align: left;">
                        প্রতি:
                    </td>
                    <td style="width: 85% !important; text-align: left;">
                        Deputi Director Material
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width: 15% !important; text-align: left;">
                        ইনডেন্ট নং:
                    </td>
                    <td style="width: 45% !important; text-align: left;">
                        12.21.3.23.23.4.34.54.4.2.00
                    </td>
                    <td style="width: 40% !important; text-align: center;">
                        তারিখ: 11 Sep 2023
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        যথোপযুক্ত কর্তৃপক্ষ কর্তৃক আর্থিক সম্মতিক্রমে পাঠানো হইলো।
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width: 60% !important; text-align: left;">
                        (ক) ইনডেন্ট চাহিদাকৃত দ্রব্যের মোট মূল্য:
                    </td>
                    <td style="width: 40%">
                        12000.0
                    </td>
                </tr>
                <tr>
                    <td style="width: 60% !important; text-align: left;">
                        (খ) বর্তমান অর্থ বৎসরে উপস্থাপিত ইনডেন্ট সমূহের মোট মূল্য:
                    </td>
                    <td style="width: 40%">
                        1234000.0
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="width: 50% !important; text-align: left;">
                        (গ) বিকল্পনীয় বাজেট খাত:
                    </td>
                    <td style="width: 50%">
                        Financial Code No. 1212
                    </td>
                </tr>
                <tr style="margin-top: 10px;">
                    <td>&nbsp;</td>
                    <td style="text-align: center;">
                        সহকারী প্রকৌশলী, দ্রব নিয়ন্ত্রণ শাখা <br>
                        বাংলাদেশ সমরাস্ত্র কারখানা
                    </td>
                </tr>
            </table>

            <table class="rootTable">
                <tr class="rootTable">
                    <td class="rootTable text-center" style="width: 33% !important;">
                        পরীক্ষিত
                    </td>
                    <td class="rootTable text-center" style="width: 33%">
                        অনুমোদিত
                    </td>
                    <td class="rootTable text-center" style="width: 34%">
                        আর্থিক সম্মতিকৃত/সমীক্ষিত
                    </td>
                </tr>
                <tr>
                    <td class="rootTable text-center" style="width: 33% !important; height: 200px !important;">
                        <span style="margin-top: 200px !important;">
                            সাক্ষর
                        </span>
                    </td>
                    <td class="rootTable text-center" style="width: 33%; height: 200px !important;">
                        <span>
                            সাক্ষর
                        </span>
                    </td>
                    <td class="rootTable text-center" style="width: 33%; height: 200px !important;">
                        <span style="height: 50px !important;">
                            সাক্ষর
                        </span>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>
