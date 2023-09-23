<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 5%;
        }

        /* table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        } */

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 5px;
        }
    </style>

</head>


<body>
<?php
$en = [];
$bn = [];
$data = json_decode($val['data']);
?>

<div style="font-size: 24px; ">
    <table width="100%">
        <tr>
            <td style="width: 25%"></td>
            <td style="width: 50%; text-align: center;">
                BANGLADESH ORDNANCE FACTORY (BOF) <br>
                GAZIPUR CANTONMENT, GAZIPUR-1703
                web: www.bof.gov.bd, email: <br>
                <u>man.pur.admin@bof.gov.bd</u>
            </td>
            <td style="width: 25%; text-align: center;">
            </td>
        </tr>
    </table>


    <br>

    <!--main start-->

    <div style="text-align: center;">
        <table class="center tbBorder" style="text-align: center; padding: 5px;">
            <thead>
            <tr>
                <td style="width: 10%; padding: 2px; ">ক্রমিক</td>
                <td style="width: 40%; padding: 2px; ">বিষয়</td>
                <td style="width: 50%; padding: 2px; ">বিবরণ</td>
            </tr>

            </thead>

            <tbody>
            <tr>
                <td>১</td>

                <td style="text-align: center;">
                    <span>চাহিদাপত্র নম্বর ও তারিখ</span>
                </td>

                <td style="text-align: center;">
                    <span>
                     @if($data->tenderPreparation  != null && $data->tenderPreparation ->tenderNo != null)
                            <span>{{($data->tenderPreparation->tenderNo)}}</span>
                        @endif
                    </span>
                </td>
            </tr>


            <tr>
                <td>২</td>

                <td style="text-align: center;">
                    <span>চাহিদাপত্রে এসিসিডিএফ(বিওএফ ) কর্তৃক আর্থিক স্বীকৃতি </span>
                </td>

                <td style="text-align: center;">
                    <span>
                     @if($data->tenderPreparation  != null && $data->tenderPreparation ->prepareDate != null)
                            <span>{{$Controller::dateFormatter(optional($data)->tenderPreparation->prepareDate)}}</span>
                        @endif
                   </span>
                </td>
            </tr>


            <tr>
                <td>৩</td>

                <td style="text-align: center;">
                    <span>চাহিদাপত্রে পণ্যের নাম , পরিমান ও সংখ্যা </span>
                </td>

                <td style="text-align: center;">
                </td>
            </tr>


            <tr>
                <td>৪</td>

                <td style="text-align: center;">
                    <span>চাহিদাপত্র প্রাপ্তির  তারিখ </span>
                </td>

                <td style="text-align: center;">
                </td>
            </tr>


            <tr>
                <td>৫</td>

                <td style="text-align: center;">
                    <span>দরপত্র নম্বর ও তারিখ </span>
                </td>

                <td style="text-align: center;">
                </td>
            </tr>

            <tr>
                <td>৬</td>

                <td style="text-align: center;">
                    <span>বিওএফ এর ওয়েব সাইডে বিজ্ঞপ্তি প্রকাশের জন্য উপস্থাপন </span>
                </td>

                <td style="text-align: center;">
                </td>
            </tr>

            <tr>
                <td> ৭</td>

                <td style="text-align: center;">
                    <span>মন্তব্য </span>
                </td>

                <td style="text-align: center;">
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <br>


    <table width="100%">
        <tr>
            <td>
                <span>De...</span>
            </td>

            <td style="width: 30%">
            </td>

            <td>
                <span>APO...</span>
            </td>

            <
            <td style="width: 30%">
            </td>

            <td>
                <span>PO...</span>
            </td>
        </tr>
    </table>
</div>

</body>
