<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
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
        font-size: 10px;
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

    td th {
        vertical-align: middle !important;
        padding-left: 7px !important;
        padding-right: 7px !important;
    }
    </style>

</head>


<body>
    <?php
    $data = json_decode($val['data']);
    ?>


    <div class="landscapePage" style="margin-top: 40px;">
        <br>
            <div style="width: 100%; margin-top: 40px;">
                <div style="text-align: right; font-size: 12px;">BOF NO: 199</div>
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
                                <td>ইন্ডেন্টের দ্রব্যগুলো বীমাকৃত হইবে কিনা : হ্যাঁ/না</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 50px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রব্যগুলো পূর্বে সরবরাহ হইয়া থাকিলে: <br>
                                    <span>
                                        @if($data->preSupplied != null)
                                            {!! ($data->preSupplied) !!}
                                        @endif
                                    </span>

                                </td>
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
                        <br><br>
                        <table width="90%" style="border-top: 1px solid;  padding-right: 20px;">
                            <tr>
                                <td>ইন্ডেন্টের দ্রব্যগুলোর বিশদ বিবরণ আই, এ এন্ড ই /আইএ আই কর্তৃক পরীক্ষিত /অনুমোদিত </td>
                            </tr>
                        </table>
                        <br><br>

                        <table>
                            <tr>
                                <td style="width: 60%">&nbsp;</td>
                                <td style="width: 40%">
                                    <span>স্বাক্ষর</span><br>
                                    <span>প্রধান পরিদর্শক/সহকারী প্রকৌশলী</span><br>
                                    <span>আইএন্ডই/আইএসআই</span>
                                </td>
                            </tr>
                        </table>
                    </div>



                </div>
                <div style="width: 50%; float: right">
                    <table width="100%">
                        <tr>
                            <td style="width: 100% !important; text-align: center;">
                                <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                                <span style="font-size: 16px;"><u>গাজীপুর সেনানিবাস, গাজীপুর।</u></span><br>
                                <span>দ্রব্যের ইনডেন্ট</span>
                            </td>
                        </tr>
                    </table>

                    <table width="100%">
                        <tr>
                            <td style="width: 20% !important; text-align: left;">
                                দ্রব্যের শ্রেণী  বিভাগ:
                            </td>
                            <td style="width: 80% !important; text-align: left;">

                                @if($data->subject != null)
                                    Purchase of  {!! ($data->subject) !!}
                                @endif
                            </td>
                        </tr>
                    </table>
                    <table style="width: 100%; margin-top: 15px;">
                        <tr>
                            <td valign="top" style="width: 10% !important; text-align: left;">
                                প্রতি:
                            </td>
                            <td style="width: 94% !important; text-align: left;">
                                <span>Deputy Director Material</span><br>
                                <span>Bangladesh Ordnance Factories</span><br>
                                <span>Gazipur Cantt. Gazipur</span>
                            </td>

                        </tr>
                    </table>
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 65% !important; text-align: left;">
                                ইনডেন্ট নং: <span>
                                    @if($data->indentNo != null)
                                        {{($data->indentNo)}}
                                    @endif
                                </span>
                            </td>
                            <td style="width: 35% !important; text-align: center;">
                                <span>
                                    তারিখ:
                                @if($data->indentDate != null)
                                        {{($Controller::dateFormatter($data->indentDate))}}
                                    @endif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 65% !important;"></td>
                            <td style="width: 35%; text-align: right"><span>যথোপযুক্ত কর্তৃপক্ষ কর্তৃক</span></td>
                        </tr>
                        <tr>
                            <td style="width: 65% !important;">
                                <span>আর্থিক সম্মতিক্রমে পাঠানো হইলো।</span>
                            </td>
                            <td style="width: 35% !important;"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 65% !important; text-align: left;">
                                (ক) ইনডেন্ট চাহিদাকৃত দ্রব্যের মোট মূল্য:
                            </td>
                            <td style="width: 35%">
                                Tk. {{($data->totalIndentPrice ? $data->totalIndentPrice : 0)}}
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 65% !important; text-align: left;">
                                (খ) বর্তমান অর্থ বৎসরে উপস্থাপিত ইনডেন্ট <br> সমূহের সর্বমোট মূল্য:
                            </td>
                            <td style="width: 35%">
                                <br>
                                @if($data->totalSum != null)
                                    Tk. {{($data->totalSum ? $data->totalSum : 0)}}
                                @endif

                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="width: 69% !important; text-align: left;">
                                (গ) বিকল্পনীয় বাজেট খাত:
                            </td>
                            <td style="width: 31%">
                                <br>
                                সহকারী প্রকৌশলী, দ্রব্য নিয়ন্ত্রণ শাখা <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr style="margin-top: 10px;">
                            <td style="width: 69%">&nbsp;</td>
                            <td style="text-align: left; width: 31%">

                            </td>
                        </tr>
                    </table>

                    <table class="top-border bottom-border" style="margin-top: 13px;">
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
                            <td class="top-border bottom-border right-border" style="width: 33% !important; padding-left: 10px;">
                                <br><br><br>
                                স্বাক্ষর
                                <br> <br> <br>
                                পরিচালক পরিকল্পনা এবং সংরক্ষণ <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।
                            </td>
                            <td class="top-border bottom-border right-border" style="width: 33%; padding-left: 10px;">
                                <br><br><br>
                                স্বাক্ষর
                                <br> <br> <br>
                                ডেপুটি কমান্ড্যান্ট <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।
                            </td>
                            <td class="top-border bottom-border" style="width: 34%; padding-left: 10px;">
                                <br><br><br>
                                স্বাক্ষর
                                <br> <br> <br>
                                এডিশনাল চিফ কন্ট্রোলার অফ ডিফেন্স ফাইন্যান্স <br>
                                বাংলাদেশ সমরাস্ত্র কারখানা <br>
                                গাজীপুর সেনানিবাস, গাজীপুর।

                            </td>
                        </tr>
                    </table>
                </div>
            </div>

    </div>
    <div class="page-break"></div>
    <!--    details page-->
    <div>
        <br><br>
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: left;">
                    <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                    <span style="font-size: 16px;">গাজীপুর সেনানিবাস, গাজীপুর।</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>
                        ইনডেন্ট নং:
                    @if($data->indentNo != null)
                            {{$Controller::enToBnConveter($data->indentNo)}}
                        @endif
                    </span>&nbsp;&nbsp;
                    <span>
                        তারিখ:
                    @if($data->indentDate != null)
                            {{$Controller::enToBnConveter($Controller::dateFormatter($data->indentDate))}}
                        @endif
                    </span>
                </td>
            </tr>
        </table>
        <table class="rootTable" width="100%">
            <tr class="rootTable">
                <td class="rootTable text-center" style="width: 5%">SL</td>
                <td class="rootTable text-center" style="width: 5%">Folio No</td>
                <td class="rootTable text-center" style="width: 14%">Name of Item and Specification</td>
                <td class="rootTable text-center" style="width: 5%">Unit</td>
                <td class="rootTable text-center" style="width: 5%">Indent Qty</td>
                <td class="rootTable text-center" style="width: 5%">Rate (Tk)</td>
                <td class="rootTable text-center" style="width: 5%">Total Value</td>
                <td class="rootTable text-center" style="width: 9%">SO No Supplier Name and Date</td>
                <td class="rootTable text-center" style="width: 5%">User Section</td>
                <td class="rootTable text-center" style="width: 5%">Present Stock</td>
                <td class="rootTable text-center" style="width: 7%">Country of Origin</td>
                <td class="rootTable text-center" style="width: 20%">Remarks</td>
            </tr>
            @foreach ($data->details as $index => $item)
                <tr>
                    <td class="rootTable text-center">{{($index + 1)}}</td>
                    <td class="rootTable text-center">
                        @if($item->folioNo != null)
                            {{($item->folioNo->itemClassRefNo)}}
                        @endif
                    </td>
                    <td class="rootTable">
                        @if($item->folioNo != null)
                            <span>{{($item->folioNo->itemNameEn)}}</span><br>
                        <span>{!! ($item->folioNo->itemSpecification) !!}</span>
                        @endif

                    </td>
                    <td class="rootTable text-center">
                        @if($item->folioNo != null && $item->folioNo->mcItemUnit != null)
                            {{($item->folioNo->mcItemUnit->nameEn)}}
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->indentQty)
                            {{($item->indentQty)}}
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->unitRate)
                            {{($item->unitRate)}}
                        @endif
                    </td>
                    <td class="rootTable text-center">
                        @if($item->totalValue)
                            {{($item->totalValue)}}
                        @endif
                    </td>
                    <td class="rootTable">
                        @if($item->previousSupplier !=null)
                            {{($item->previousSupplier)}}
                        @endif
                    </td>
                    <td class="rootTable text-center">

                    </td>
                    <td class="rootTable text-center">

                    </td>
                    <td class="rootTable text-left">
                        @if($item->countryOfOrigin)
                            {{($item->countryOfOrigin)}}
                        @endif
                    </td>
                    <td class="rootTable">
                        @if($item->remarks)
                            {{($item->remarks)}}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        <div style="width: 100%; margin-top: 8px;">
            <div style="width: 30%; float: left;">Total Item = {{count($data->details)}} Items</div>
            <div style="width: 70%; float: right; text-align: right">Total Tk: {{($data->totalIndentPrice ? $data->totalIndentPrice : 0)}}</div>
        </div>
    </div>


</body>
