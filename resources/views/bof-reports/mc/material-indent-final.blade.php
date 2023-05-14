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
        orientation: landscape;

    }
    @media print {
        .page-break {page-break-after: always;}
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
    .left-border{
        border-left: 1px solid;
        border-collapse: collapse;
    }
    .right-border{
        border-right: 1px solid;
        border-collapse: collapse;
    }
    .top-border{
        border-top: 1px solid;
        border-collapse: collapse;
    }
    .bottom-border{
        border-bottom: 1px solid;
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


<body class="landscapePage" style="font-size: 24px;">
    <?php
    $data = json_decode($val['data']);
    ?>


    <div>
            <div style="width: 100%; margin-top: 50px;">
                <div style="width: 50%; float: left;">
                    <div>
                        <br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <hr>
                                <td>পরিদর্শনকারী : আইএসআই/আইএএন্ডই/গাড়ীর পর্যন</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রবগুলো বীমাকৃত হইবে কিনা : হ্যাঁ/না</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রবগুলো পূর্বে সরবরাহ হইয়া থাকিলে: <br>
                                    দ্রবটি ইতিপূর্বে ক্রয় করা  হয়েছে।</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="95%" class="top-border bottom-border">
                            <tr class="top-border bottom-border">
                                <td class="top-border bottom-border right-border text-center" style="width: 10% !important;">
                                    ক্রমিক
                                </td>
                                <td class="top-border bottom-border right-border text-center" style="width: 60%">
                                    গত ইন্ডেন্টের নং সরবরাহ / চুক্তিপত্র এবং তারিখ
                                </td>
                                <td class="top-border bottom-border text-center" style="width: 30%">
                                    সরবরাহকারী  প্রতিষ্ঠান
                                </td>
                            </tr>
                            <tr class="top-border bottom-border">
                                <td class="top-border bottom-border right-border" style="width: 10% !important;">
                                    <br><br><br><br><br><br><br>

                                </td>
                                <td class="top-border bottom-border right-border" style="width: 60%">


                                </td>
                                <td class="top-border bottom-border" style="width: 30%">



                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>বিশেষ নির্দেশ</td>
                            </tr>
                        </table>
                        <br><br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 20px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রবগুলোর বিশদ বিবরণ আই, এ এন্ড ই /আইএ আই কর্তৃক পরীক্ষিত /অনুমোদিত </td>
                            </tr>
                        </table>
                    </div>



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
                                {!! ($data->subject ? $data->subject : '') !!}
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
                            <td style="width: 20% !important; text-align: left;">
                                ইনডেন্ট নং:
                            </td>
                            <td style="width: 45% !important; text-align: left;">
                                {{($data->indentNo)}}
                            </td>
                            <td style="width: 35% !important; text-align: center;">
                                তারিখ: {{($data->indentDate)}}
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
                                {{$data->totalIndentPrice ? $data->totalIndentPrice : 0}}
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
                            <td style="width: 40% !important; text-align: left;">
                                (গ) বিকল্পনীয় বাজেট খাত:
                            </td>
                            <td style="width: 60%">
                                Financial Code No. {{($data->budgetCode->economicCode)}}
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

                    <table class="top-border bottom-border" style="margin-top: 6px;">
                        <tr class="top-border bottom-border">
                            <td class="top-border bottom-border right-border text-center" style="width: 33% !important;">
                                পরীক্ষিত
                            </td>
                            <td class="top-border bottom-border right-border text-center" style="width: 33%">
                                অনুমোদিত
                            </td>
                            <td class="top-border bottom-border text-center" style="width: 34%">
                                আর্থিক সম্মতিকৃত/সমীক্ষিত
                            </td>
                        </tr>
                        <tr class="top-border bottom-border">
                            <td class="top-border bottom-border right-border" style="width: 33% !important;">
                                <br><br><br><br>
                                সাক্ষর
                                <br> <br> <br>
                                পরিচালক পরিকল্পনা এবং সংরক্ষণ <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।
                            </td>
                            <td class="top-border bottom-border right-border" style="width: 33%">
                                <br><br><br><br>
                                সাক্ষর
                                <br> <br> <br>
                                ডেপুটি কমান্ড্যান্ট <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।
                            </td>
                            <td class="top-border bottom-border" style="width: 34%">
                                <br><br><br><br>
                                সাক্ষর
                                <br> <br> <br>
                                এডিশনাল চিফ কন্ট্রোলার অফ ডিফেন্স ফাইন্যান্স <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="page-break"></div>
    </div>

    <!--    details page-->
    <div>
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: left;">
                    <h2>বাংলাদেশ সমরাস্ত্র কারখানা</h2>
                    <h3>গাজীপুর সেনানিবাস, গাজীপুর।</h3>
                </td>
            </tr>
            <tr>
                <td width="70%">ইনডেন্ট নং: {{($data->indentNo)}}</td>
                <td width="30%">তারিখ: {{($data->indentDate)}}</td>
            </tr>
        </table>
        <table class="rootTable" width="100%">
            <tr class="rootTable">
                <td class="rootTable text-center">SL</td>
                <td class="rootTable text-center">Folio No</td>
                <td class="rootTable text-center">Name of Item and Specification</td>
                <td class="rootTable text-center">Unit</td>
                <td class="rootTable text-center">Indent Qty</td>
                <td class="rootTable text-center">Rate (Tk)</td>
                <td class="rootTable text-center">Total Value</td>
                <td class="rootTable text-center">So No Supplier Name</td>
                <td class="rootTable text-center">User Section</td>
                <td class="rootTable text-center">Present Stock</td>
                <td class="rootTable text-center">Country of Origin</td>
                <td class="rootTable text-center">Appx. Date/Time of Supply</td>
                <td class="rootTable text-center">Remarks</td>
            </tr>
            @foreach ($data->details as $index => $item)
                <tr>
                    <td class="rootTable text-center">{{($index + 1)}}</td>
                    <td class="rootTable text-center">{{($item->folioNo ? $item->folioNo->itemClassRefNo : '')}}</td>
                    <td class="rootTable">
                        <span>{{($item->folioNo ? $item->folioNo->itemNameEn : '')}}</span><br>
                        <span>{{($item->folioNo ? $item->folioNo->itemSpecification : '')}}</span>
                    </td>
                    <td class="rootTable text-center">{{($item->folioNo ? $item->folioNo->mcItemUnit->nameEn : '')}}</td>
                    <td class="rootTable text-center">{{($item->indentQty ? $item->indentQty : '')}}</td>
                    <td class="rootTable text-center">{{($item->unitRate ? $item->unitRate : '')}}</td>
                    <td class="rootTable text-center">{{($item->totalValue ? $item->totalValue : '')}}</td>
                    <td class="rootTable"></td>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center">{{($item->countryOfOrigin ? $item->countryOfOrigin->name : '')}}</td>
                    <td class="rootTable text-center">{{($item->appxDateOfSupply ? $item->appxDateOfSupply : '')}}</td>
                    <td class="rootTable">{{($item->remarks ? $item->remarks : '')}}</td>

                </tr>
            @endforeach
        </table>
    </div>


</body>
