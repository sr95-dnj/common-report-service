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
            <td style="width: 20%">
                <span>{{($Controller::entoBn(optional($master->presentDailyOrder)->orderNumber,'number'))}}</span>
            </td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3% !important;">:</td>
            <td style="width: 30% !important;">
                @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->banglaDate != null)
                    <sapn>{{($data->master->presentDailyOrder->banglaDate)}} &nbsp;/ &nbsp;</sapn>
                @endif

                @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->entryDate != null)
                    <span>
                         {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->presentDailyOrder)->entryDate))}}
                    </span>
                @endif
            </td>
        </tr>

        @if($master->previousDailyOrder != null)
            <tr>
                <td style="width: 25%">পূর্বে প্রকাশিত দৈনিক আদেশ নামা ২য় খন্ড নম্বরঃ</td>
                <td style="width: 3%">:</td>
                <td style="width: 20%">
                        <?php
                        $value = ($master->previousDailyOrder)? $Controller::entoBn($master->previousDailyOrder->orderNumber,'number') : '';
                        echo $value;
                        ?>
                </td>
                <td style="width: 5%"></td>
                <td style="width: 10%">তারিখ</td>
                <td style="width: 3% !important;">:</td>
                <td style="width: 35% !important;">
                    @if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder->banglaDate != null)
                        <sapn>{{($data->master->previousDailyOrder->banglaDate)}} &nbsp;/ &nbsp;</sapn>
                    @endif

                    @if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder->entryDate != null)
                        <span>
                         {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->previousDailyOrder)->entryDate))}}
                    </span>
                    @endif
                </td>
            </tr>
        @endif
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <br>
                @if($data->divison != null)
                <strong><u>{{($data->divison)}}</u></strong>
                @endif
            </td>
        </tr>
    </table>

    <!-- subject part -->

    <table width="100%">
        <tr>
            @if($data->subject != null)
            <td><b><u>{{($data->subject)}}</u></b> </td>
            @endif
        </tr>
    </table>
    <!-- subject part -->

    <!-- header part -->

    <table width="100%">
        <tr>
            @if($data->body != null)
            <td>{!! ($data->body) !!}</td>
            @endif
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
            @if($data->presentDailyOrder != null)
            <td><u>{{$Controller::enToBnConveter(optional($data->presentDailyOrder)->referenceNo)}}</u></td>
            @endif

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