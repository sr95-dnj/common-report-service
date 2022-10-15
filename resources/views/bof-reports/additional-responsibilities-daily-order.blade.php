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
            </td>
        </tr>
    </table>

    <table style="width: 100%;" class="tbBorder">
        <tbody>
        <tr>
            <td style="width: 10%; text-align: center;" rowspan="2">ক্রমিক নম্বর</td>
            <td style="width: 10%; text-align: center;" rowspan="2">{{($Controller::entoBn($data->presentDailyOrder->orderNumber,'number'))}}</td>
            <td style="width: 30%; text-align: left;" rowspan="2">স্থান: গাজীপুর সেনানিবাস</td>
            <td style="width: 10%; text-align: center;" rowspan="2">তারিখ:</td>
            <td style="width: 30%; text-align: center;">
                <sapn>{{($data->presentDailyOrder->banglaDate)}}</sapn>
            </td>
            <td style="width: 10%; text-align: left;" rowspan="2">রেজি:</td>
        </tr>
        <tr>
            <td style="width: 30%; text-align: center;">
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->presentDailyOrder)->entryDate))}}
                </span>
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
            <td><u>{{$Controller::enToBnConveter(optional($data->presentDailyOrder)->referenceNo)}}</u></td>
        </tr>

    </table>

    <br>

    <table width="100%">
        <tr>
            <td width="50%">{!! ($data->footer) !!}</td>
            <td width="20%"></td>
            <td width="30%">

                <div style="float: right;">

                    <span>
                        <?php
                        $value = ($data->presentDailyOrder->manager)? $data->presentDailyOrder->manager->employeeNameBangla : '';
                        echo $value;
                        ?>
                    </span>
                    <br>

                    <span>  <?php
                            $value = ($data->presentDailyOrder->managerDesignation) ? $data->presentDailyOrder->managerDesignation->banglaName : '';
                            echo $value;
                            ?>
                    </span>
                </div>



            </td>
        </tr>

    </table>
</div>