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

<?php
$master = $data->master;
$details = $data->details;
?>


<div style="font-size: 24px;">
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                সীমিত <br>
                দৈনিক আদেশনামা প্রথম খন্ড <br>
                মেজর জেনারেল সৈয়দ তারেক হোসেন, এডব্লিউসি, পিএসসি <br>
                কমান্ড্যান্ট, বাংলাদেশ সমরাস্ত্র কারখানা <br>
                কর্তৃক নির্দেশিত
            </td>
        </tr>
    </table>

    <table style="width: 100%;" class="tbBorder">
        <tbody>
        <tr>
            <td style="width: 10%; text-align: center;" rowspan="2">ক্রমিক নম্বর</td>
            <td style="width: 10%; text-align: center;" rowspan="2">
                @if($master->presentDailyOrder != null)
                <span>
                    {{($Controller::entoBn($master->presentDailyOrder->orderNumber,'number'))}}
                </span>
                @endif
            </td>
            <td style="width: 30%; text-align: left;" rowspan="2">স্থান: গাজীপুর সেনানিবাস</td>
            <td style="width: 10%; text-align: center;" rowspan="2">তারিখ:</td>
            <td style="width: 30%; text-align: center;">
                @if($master->presentDailyOrder != null)
                <sapn>{{($master->presentDailyOrder->banglaDate)}}</sapn>
                @endif
            </td>
            <td style="width: 10%; text-align: left;" rowspan="2">রেজি:</td>
        </tr>
        <tr>
            <td style="width: 30%; text-align: center;">
                @if($master->presentDailyOrder != null)
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($master->presentDailyOrder)->entryDate))}}
                </span>
                @endif
            </td>
        </tr>
        </tbody>
    </table>
    <br>

    <!-- subject part -->

    <table width="100%">
        <tr>
            @if($master->subject != null)
            <td><b><u>{{($master->subject)}}</u></b> </td>
            @endif
        </tr>
    </table>
    <br>


    <table width="100%" style="table-layout: fixed; border-collapse: collapse; border-top: 0.5px solid;">
        <tr style="text-align: center;">
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 8%; text-align: center;">ক্রমিক </td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 15%; text-align: center;">আদেশর ধরণ </td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 25%; text-align: center;">ব্যক্তিগত নম্বর, পদবী, নাম ও শাখা</td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 40%; text-align: center;">কার্যক্রম</td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 12%; text-align: center;">তারিখ </td>
        </tr>
        @if($details != null)
        @foreach ($details as $index => $details)
            <tr>
                <td style="width: 5% !important; text-align: center;">{{($Controller::entoBn($index + 1,'number'))}}</td>
                <td style="width: 15% !important; text-align: center;">{{($details->recruitmentType)}}</td>
                <td style="width: 25% !important;">
                    {{($Controller::entoBn($details->employee->code,'number'))}}, &nbsp;
                    {{($details->employee->employeeOfficialInformation->designation->banglaName)}},<br>
                    {{($details->employee->employeeNameBangla)}},<br>
                    {{($details->employee->employeeOfficialInformation->branch->banglaName)}}
                </td>
                <td style="width: 40% !important;">{!! ($details->description) !!}</td>
                <td style="width: 12% !important; text-align: center">{{$Controller::enToBnConveter($Controller::dateFormatterNBR(optional($details)->recruitmentDate))}}</td>

            </tr>
        @endforeach
        @endif
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