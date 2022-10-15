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
            <td style="width: 33%"></td>
            <td style="width: 34% !important; text-align: center;">
                সীমিত <br>
                দৈনিক আদেশনামা ২য় খন্ড
            </td>
            <td style="width: 33% !important; text-align: center;">
                <br>
                বিওএফ নম্বরঃ
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 25%">ইউনিট</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%">বাংলাদেশ সমরাস্ত্র কারখানা</td>
            <td style="width: 5%"></td>
            <td style="width: 10%">স্থান</td>
            <td style="width: 3% !important;">:</td>
            <td style="width: 35% !important;">গাজীপুর সেনানিবাস</td>
        </tr>

        <tr>
            <td style="width: 30%">ক্রমিক নম্বর</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%"><span>{{($Controller::entoBn($data->presentDailyOrder->orderNumber,'number'))}}</span></td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3% !important;">:</td>
            <td style="width: 30% !important;">
                <sapn>{{($data->presentDailyOrder->banglaDate)}}</sapn>
                &nbsp;/ &nbsp;
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->presentDailyOrder)->entryDate))}}
                </span>
            </td>
        </tr>

        <tr>
            <td style="width: 25%">পূর্বে প্রকাশিত দৈনিক আদেশ নামা ২য় খন্ড নম্বরঃ</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%">
                <?php
                $value = ($data->previousDailyOrder)? $Controller::entoBn($data->previousDailyOrder->orderNumber,'number') : '';
                echo $value;
                ?>
            </td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3% !important;">:</td>
            <td style="width: 35% !important;">
                <sapn>{{($data->previousDailyOrder->banglaDate)}}</sapn>
                &nbsp;/ &nbsp;
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->previousDailyOrder)->entryDate))}}
                </span>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <br>
                <strong><u>{{($data->divison)}}</u></strong>
            </td>
        </tr>
    </table>

    <!-- subject part -->

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
    <!-- header part -->

    <br>

    <table width="100%">
        <tr>
            <td><u>মোট প্রকাশনা সংখ্যা  ১ (এক ) মাত্র।</u></td>
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