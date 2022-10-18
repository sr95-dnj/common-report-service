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
                মেজর জেনারেল শেখ পাশা হাবিব উদ্দিন, এসজিপি, বিএএমএস, এএফডব্লিউসি, পিএসসি <br>
                কমান্ড্যান্ট, বাংলাদেশ সমরাস্ত্র কারখানা <br>
                কর্তৃক নির্দেশিত
            </td>
        </tr>
    </table>

    <table style="width: 100%;" class="tbBorder">
        <tbody>
        <tr>
            <td style="width: 10%; text-align: center;" rowspan="2">ক্রমিক নম্বর</td>
            <td style="width: 10%; text-align: center;" rowspan="2">{{($Controller::entoBn($master->presentDailyOrder->orderNumber,'number'))}}</td>
            <td style="width: 30%; text-align: left;" rowspan="2">স্থান: গাজীপুর সেনানিবাস</td>
            <td style="width: 10%; text-align: center;" rowspan="2">তারিখ:</td>
            <td style="width: 30%; text-align: center;">
                <sapn>{{($master->presentDailyOrder->banglaDate)}}</sapn>
            </td>
            <td style="width: 10%; text-align: left;" rowspan="2">রেজি:</td>
        </tr>
        <tr>
            <td style="width: 30%; text-align: center;">
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($master->presentDailyOrder)->entryDate))}}
                </span>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- subject part -->

    <br>
    <table width="100%">
        <tr>
            <td><b><u>{{($master->subject)}}</u></b> </td>
        </tr>
    </table>
    <!-- subject part -->

    <!-- header part -->
    <table width="100%">
        <tr>
            <td>{!! ($master->header) !!}</td>
        </tr>
    </table>
    <!-- header part -->

    <!-- details part -->
    <table width="100%" class="tbBorder" style="table-layout: fixed; border-collapse: collapse; border-top: 0.5px solid;">
        <tr style="text-align: center;">
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 5%; text-align: center;">ক্রমিক </td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 25%; text-align: center;">ব্যক্তিগত নম্বর, শাখাা, পদবী ও নাম </td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 25%; text-align: center;">চাকরিতে নিয়োগ / পদোন্নতির তারিখ</td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 15%; text-align: center;">বর্তমান  পদে পদোন্নতি / যোগদানের তারিখ</td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 15%; text-align: center;">ফিডার পদে চাকরিকাল</td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 15%; text-align: center;">পদোন্নতি বিধি অনুযায়ী ফিডার পদে চাকরি প্রয়োজন</td>
        </tr>
        @foreach ($details as $index => $details)
            <tr>
                <td style="width: 5% !important; text-align: center;">{{$Controller::enToBnConveter($index+1)}}</td>
                <td style="width: 25% !important;">
                    {{$Controller::enToBnConveter(optional($details->employee)->code)}}, &nbsp;
                    {{($details->employee->employeeOfficialInformation->branch->banglaName)}}&nbsp;
                    {{($details->employee->employeeOfficialInformation->designation->banglaName)}},<br>
                    {{($details->employee->employeeNameBangla)}}
                </td>

                <td style="width: 25% !important;">
                    @foreach ($details->promotionInfoList as $index => $promossion)
                        <span style="text-align: left">{{($promossion->previousDesignation->banglaName)}}</span>
                        <span style="text-align: center">&nbsp;:&nbsp;</span>
                        <span style="text-align: right">
                            {{$Controller::enToBnConveter($Controller::dateFormatterNBR(optional($promossion->previousDesignation)->entryDate))}}
                        </span>
                        <br>
                    @endforeach
                </td>
                <td style="width: 15% !important;">
                    {{($details->employee->employeeOfficialInformation->designation->banglaName)}},<br>
                    {{$Controller::enToBnConveter($Controller::dateFormatterNBR(optional($details->employee->employeeOfficialInformation)->designation->entryDate))}}
                </td>

                <td style="width: 15% !important;">{{$details->totalDay}} </td>
                <td style="width: 15% !important;">{{$details->needDay}}</td>

            </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td>{!! ($master->body) !!}</td>
        </tr>
    </table>

    <!-- body part -->

    <table width="100%" style="text-align: center;">
        <tr>
            <td><u>{{$Controller::enToBnConveter(optional($master->presentDailyOrder)->referenceNo)}}</u></td>
        </tr>

    </table>

    <br>

    <table width="100%">
        <tr>
            <td width="50%">{!! ($master->footer) !!}</td>
            <td width="20%"></td>
            <td width="30%">

                <div style="float: right;">

                    <span>
                        <?php
                        $value = ($master->presentDailyOrder->manager)? $master->presentDailyOrder->manager->employeeNameBangla : '';
                        echo $value;
                        ?>
                    </span>
                    <br>

                    <span>  <?php
                            $value = ($master->presentDailyOrder->managerDesignation) ? $master->presentDailyOrder->managerDesignation->banglaName : '';
                            echo $value;
                            ?>
                    </span>
                </div>



            </td>
        </tr>

    </table>
</div>