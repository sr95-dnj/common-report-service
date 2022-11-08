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

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100% !important;
            padding: 5px;
        }
        @page {
            margin-top: 5px;
        }
        td{
            vertical-align: top !important;
        }
    </style>

</head>


<body>
<?php
$en = [];

$bn = [];
$data = json_decode($val['data']);

?>


<div style="font-size: 24px;">
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                সীমিত <br>
                দৈনিক আদেশনামা প্রথম খন্ড <br>
                মেজর জেনারেল সৈয়দ তারেক হোসেন, এডব্লিউসি, পিএসসি <br>
                কমান্ড্যান্ট, বাংলাদেশ সমরাস্ত্র কারখানা <br>
                কর্তৃক নির্দেশিত
                <br>
                <u>বেসামরিক</u>
            </td>
        </tr>
    </table>

    <table style="width: 100%;" class="tbBorder">
        <tbody>
        <tr>
            <td style="width: 10%; text-align: center;" rowspan="2">ক্রমিক নম্বর</td>
            <td style="width: 10%; text-align: center;" rowspan="2">
                @if($data->presentDailyOrder != null)
                {{($Controller::entoBn($data->presentDailyOrder->orderNumber,'number'))}}
                @endif
            </td>
            <td style="width: 30%; text-align: left;" rowspan="2">স্থান: গাজীপুর সেনানিবাস</td>
            <td style="width: 10%; text-align: center;" rowspan="2">তারিখ:</td>
            <td style="width: 30%; text-align: center;">
                @if($data->presentDailyOrder != null)
                <sapn>{{($data->presentDailyOrder->banglaDate)}}</sapn>
                @endif
            </td>
            <td style="width: 10%; text-align: left;" rowspan="2">রেজি:</td>
        </tr>
        <tr>
            <td style="width: 30%; text-align: center;">
                @if($data->presentDailyOrder != null)
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->presentDailyOrder)->entryDate))}}
                </span>
                @endif
            </td>
        </tr>
        </tbody>
    </table>

    <!-- subject part -->

    <br>
    <table width="100%">
        <tr>
            <td><b><u>{{($data->subject)}}</u></b> </td>
        </tr>
    </table>
    <!-- subject part -->

    <!-- header part -->

    <table width="100%">
        <tr>
            <td>{!! ($data->body) !!}</td>
        </tr>
    </table>

    <!-- body part -->

    <table width="100%" style="text-align: center;">
        <tr>
            @if($data->referenceNo !=null)
                <td><u>{{$Controller::enToBnConveter(optional($data)->referenceNo)}}</u></td>
            @endif
        </tr>

    </table>
    <br>
    <!-- footer part -->

    <table width="100%">
        <tr>
            <td width="50%"></td>
            <td width="20%"></td>
            <td width="30%">
                <div style="float: right;">
                    @if($data->manager != null &&
                    $data->manager->employeeNameBangla != null)
                        <span>{{ optional($data->manager)->employeeNameBangla }}</span>
                    @endif
                    <br>

                    @if($data->manager != null &&
                    $data->manager->employeeOfficialInformation !=
                    null && $data->manager->employeeOfficialInformation->designation != null
                    && $data->manager->employeeOfficialInformation->designation->banglaName != null
                    )
                        <span>{{ optional($data->manager->employeeOfficialInformation->designation)->banglaName }}</span>
                    @endif
                        <br>
                        @if($data->master->onBehalfOf != null)
                            <span>{{ optional($data)->onBehalfOf }}</span>
                        @endif
                </div>
            </td>
        </tr>

    </table>
    <table>
        <tr>
            <td>{!! (optional($data)->footer) !!}</td>
        </tr>

    </table>
    <!-- footer part -->
</div>
<footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
    <p>
        সীমিত
    </p>
</footer>
</body>