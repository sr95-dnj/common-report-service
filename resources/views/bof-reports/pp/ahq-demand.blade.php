<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            size: landscape;
            orientation: landscape;

        }

        @media print {
            .page-break {
                page-break-after: always;
            }
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

        .rootTable {
            border: 1px solid;
            border-collapse: collapse;
        }

        .left-border {
            border-left: 1px solid;
            border-collapse: collapse;
        }

        .right-border {
            border-right: 1px solid;
            border-collapse: collapse;
        }

        .top-border {
            border-top: 1px solid;
            border-collapse: collapse;
        }

        .bottom-border {
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


<body class="landscapePage">
<?php
$data = json_decode($val['data']);
?>

        <!--    master table-->
<div>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: right;">
                বিওএফ নং:
            </td>
        </tr>
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                <span style="font-size: 16px">প্রতিরক্ষা বাহিনীর জন্য প্রয়োজনীয় চাহিদাপত্র </span><br>
                <u> <span>১ম অংশ</span></u>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td>
                @if($data->master != null && $data->master->client != null && $data->master->client->nameEn != null)
                    <span>১| চাহিদাকারি (প্রেরক) : {{optional($data)->master->client->nameEn}}</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>
                @if($data->master != null && $data->master->demandNo != null)
                    <span>২| চাহিদাপত্র নং : {{optional($data)->master->demandNo}}</span>
                @endif
                </td>
        </tr>
        <tr>
            <td>৩| এই চাহিদাপত্র:</td>
        </tr>
        <tr>
            <td>৪| ধ্রুবমূল্য কোন খাতে পরিশোধ্য :</td>
        </tr>
        <tr>
            <td>৫| &nbsp; <span style="padding-left: 20px;">ক| যথা শীঘ্র সম্ভব দ্রব্যাদি সরবরাহ করিতে হবে</span></td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">খ| যদি কিস্তিতে চাওয়া হয় তবে তারিখসহ উহার বিস্তারিত বিবরণ অবশ্যই দিতে হবে</td>
        </tr>
        <tr>
            <td>৬| দ্রব্যাদি কোথায় প্রেরণ করতে হবে :</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">ক| গ্রাহক অফিসারের পদবী</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">খ| রেল স্টেশন / যায়গা</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">গ| ডাকঘরের ঠিকানা</td>
        </tr>
        <tr>
            <td style="padding-left: 20px;">ঘ| তার প্রেরণের ঠিকানা</td>
        </tr>

        <tr>
            <td>৭ চাহিদাপত্রের কোন কোন আইটেমের বিমার প্রয়োজন :</td>
        </tr>
        <tr>
            <td>৮ সর্বশেষ ক্রয়ের তথ্যাদি (চাহিদা কারি পূরণ করবে) যদি থাকে :</td>
        </tr>
        <tr>
            <td> ৯ পরিদর্শকের অফিস হতে এম সি নোট গ্রহণ পূর্বক উহার সাহায্যে দ্রুবাদি মাল গাড়িতে /যাত্রীক গাড়িতে বুক করতে
                হবে :
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>


</div>

<div class="page-break"></div>

<!--main start-->

<div style="text-align: center;">
    <table class="center tbBorder" style="text-align: center; padding: 5px;">
        <thead>
        <tr>
            <th style="width: 10%; padding: 2px; ">ক্রঃ নং</th>
            <th style="width: 10%; padding: 2px; ">দ্রুবাদির বিবরণ</th>
            <th style="width: 10%; padding: 2px; ">হিসাবের একক</th>
            <th style="width: 10%; padding: 2px; ">প্রয়োজনীয় পরিমান </th>
            <th style="width: 10%; padding: 2px; ">প্রতি এককের মূল্য</th>
            <th style="width: 10%; padding: 2px; ">মোট মূল্য</th>
            <th style="width: 10%; padding: 2px; ">দ্রুবাদির বন্টন</th>
            <th style="width: 10%; padding: 2px; ">পরিদর্শকের / ক্রয় অফিসারের মন্তব্য </th>
        </tr>

        <tr>
            <th style="width: 10%; padding: 2px; ">১ </th>
            <th style="width: 10%; padding: 2px; ">২ </th>
            <th style="width: 10%; padding: 2px; ">৩ </th>
            <th style="width: 10%; padding: 2px; ">৪ </th>
            <th style="width: 10%; padding: 2px; ">৫ </th>
            <th style="width: 10%; padding: 2px; ">৬ </th>
            <th style="width: 10%; padding: 2px; ">৭ </th>
            <th style="width: 10%; padding: 2px; ">৮ </th>
        </tr>

        </thead>
        <tbody>
        @foreach ($data->details as $index => $list)
            <tr>
                <td style="width: 10%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}}</td>
                <td style="text-align: left; width: 30%; padding: 2px;">
                    @if($list->product != null)
                        <span>{{optional($list)->product->nameEn}}</span>
                    @endif
                </td>

                <td style="text-align: left; width: 10%; padding: 2px;">
                    @if($list->unit != null && $list->unit->nameEn != null)
                        <span>{{optional($list)->unit->nameEn}}</span>
                    @endif
                </td>

                <td style="text-align: left; width: 10%; padding: 2px;">
                    @if($list->demandQty != null)
                        <span>{{optional($list)->demandQty}}</span>
                    @endif
                </td>

                <td style="text-align: left; width: 10%; padding: 2px;">
                </td>

                <td style="text-align: left; width: 10%; padding: 2px;">
                </td>

                <td style="text-align: left; width: 10%; padding: 2px;">
                </td>

                <td style="text-align: left; width: 10%; padding: 2px;">
                    @if($list->remarks != null)
                        <span>{{optional($list)->remarks}}</span>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td>মোট প্রকাশনা সংখ্যা ({{$Controller::entoBn(count($data->details),'number')}}) মাত্র</td>
        </tr>
    </table>
</div>

</body>
