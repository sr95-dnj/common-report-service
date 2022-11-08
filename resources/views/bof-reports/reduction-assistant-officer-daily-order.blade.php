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

<?php
$master = $data->master;
$details = $data->details;
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
                @if($master->presentDailyOrder != null)
                <span>{{($Controller::entoBn(optional($master->presentDailyOrder)->orderNumber,'number'))}}</span>
                @endif
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
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <br>
                @if($master->divison != null)
                <strong><u>{{($master->divison)}}</u></strong>
                @endif
            </td>
        </tr>
    </table>

    <!-- subject part -->

    <table width="100%">
        <tr>
            @if($master->subject != null)
            <td><b><u>{{($master->subject)}}</u></b> </td>
            @endif
        </tr>
    </table>
    <!-- subject part -->

    <!-- header part -->

    <table width="100%">
        <tr>
            @if($master->header != null)
            <td>{!! ($master->header) !!}</td>
            @endif
        </tr>
    </table>
    <!-- header part -->


        <table width="100%" style="table-layout: fixed; border-collapse: collapse; border-top: 0.5px solid;">
            <tr style="text-align: center;">
                <td style=" border-collapse: collapse; border: 0.5px solid; width: 8%; text-align: center;">ক্রমিক </td>
                <td style=" border-collapse: collapse; border: 0.5px solid; width: 17%; text-align: center;">ফ্যাক্টরি শপ ও লাইনা</td>
                <td style=" border-collapse: collapse; border: 0.5px solid; width: 25%; text-align: center;">ব্যক্তিগত নম্বর, নাম ও পদবী</td>
                <td style=" border-collapse: collapse; border: 0.5px solid; width: 50%; text-align: center;">কার্যক্রম</td>
            </tr>
        @foreach ($details as $index => $details)
            <tr>
                <td style="width: 5% !important; text-align: center;">{{($Controller::entoBn($index + 1,'number'))}}</td>
                <td style="width: 20% !important;">
                        @if($details->employee->employeeOfficialInformation != null && $details->employee->employeeOfficialInformation->wing != null && $details->employee->employeeOfficialInformation->wing->banglaName != null)
                            {{(optional($details)->employee->employeeOfficialInformation->wing->banglaName)}} &nbsp;
                        @endif
                        @if($details->employee->employeeOfficialInformation != null && $details->employee->employeeOfficialInformation->shop != null && $details->employee->employeeOfficialInformation->shop->banglaName != null)
                            {{(optional($details)->employee->employeeOfficialInformation->shop->banglaName)}} &nbsp;
                        @endif
                        @if($details->employee->employeeOfficialInformation != null && $details->employee->employeeOfficialInformation->line != null && $details->employee->employeeOfficialInformation->line->banglaName != null)
                            {{(optional($details)->employee->employeeOfficialInformation->line->banglaName)}}
                        @endif
                </td>s
                <td style="width: 25% !important;">
                    {{($Controller::entoBn($details->employee->code,'number'))}}, &nbsp;
                    {{(optional($details)->employee->employeeOfficialInformation->designation->banglaName)}},<br>
                    {{(optional($details)->employee->employeeNameBangla)}}
                </td>
                <td style="width: 50% !important;">{!! (optional($details)->description) !!}</td>

            </tr>
        @endforeach
    </table>
    <table width="100%">
        <tr>
            @if($data->details != null)
                <td>মোট প্রকাশনা সংখ্যা ({{$Controller::enToBnConveter(count($data->details),'number')}}) মাত্র</td>
            @endif
        </tr>

    </table>

    <br>

    <!-- body part -->


    <table width="100%">
        <tr>
            @if($master->body != null)
            <td>{!! ($master->body) !!}</td>
            @endif
        </tr>

    </table>

    <br>

    <!-- body part -->
    <table width="100%" style="text-align: center;">
        <tr>
            @if($data->master->referenceNo !=null)
                <td><u>{{$Controller::enToBnConveter(optional($data->master)->referenceNo)}}</u></td>
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
                    @if($data->master->manager != null &&
                    $data->master->manager->employeeNameBangla != null)
                        <span>{{ optional($data->master->manager)->employeeNameBangla }}</span>
                    @endif
                    <br>

                    @if($data->master->manager != null &&
                    $data->master->manager->employeeOfficialInformation !=
                    null && $data->master->manager->employeeOfficialInformation->designation != null
                    && $data->master->manager->employeeOfficialInformation->designation->banglaName != null
                    )
                        <span>{{ optional($data->master->manager->employeeOfficialInformation->designation)->banglaName }}</span>
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
            <td>{!! (optional($data->master)->footer) !!}</td>
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