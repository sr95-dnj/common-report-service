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
            <td style="width: 33%"></td>
            <td style="width: 34% !important; text-align: center;">
                সীমিত <br>
                <u>দৈনিক আদেশনামা ২য় খন্ড</u>
                <br>
                <u>বেসামরিক</u>
            </td>
            <td style="width: 33% !important; text-align: center;">
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
                <span>{{($Controller::entoBn(optional($data->presentDailyOrder)->orderNumber,'number'))}}</span>
            </td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3% !important;">:</td>
            <td style="width: 30% !important;">
                @if($data->presentDailyOrder != null && $data->presentDailyOrder->banglaDate != null)
                    <sapn>{{($data->presentDailyOrder->banglaDate)}} &nbsp;/ &nbsp;</sapn>
                @endif

                @if($data->presentDailyOrder != null && $data->presentDailyOrder->entryDate != null)
                    <span>
                         {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->presentDailyOrder)->entryDate))}}
                    </span>
                @endif
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
                    @if($data->previousDailyOrder != null && $data->previousDailyOrder->banglaDate != null)
                        <sapn>{{($data->previousDailyOrder->banglaDate)}} &nbsp;/ &nbsp;</sapn>
                    @endif

                    @if($data->previousDailyOrder != null && $data->previousDailyOrder->entryDate != null)
                        <span>
                         {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->previousDailyOrder)->entryDate))}}
                    </span>
                    @endif
                </td>
            </tr>
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
                            <span>{{ optional($data->master)->onBehalfOf }}</span>
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