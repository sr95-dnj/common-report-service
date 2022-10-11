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
            <td style="width: 20%"><span>{{$Controller::entoBn($master->presentDailyOrder->orderNumber,'number')}}</span></td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখ</td>
            <td style="width: 3% !important;">:</td>
            <td style="width: 30% !important;">
                <sapn>{{$data->master->presentDailyOrder->banglaDate}}</sapn>
                &nbsp; / &nbsp;
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->presentDailyOrder)->entryDate))}}
                </span>
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
                <sapn>{{$data->master->previousDailyOrder->banglaDate}}</sapn>
                &nbsp; / &nbsp;
                <span>
                    {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->previousDailyOrder)->entryDate))}}
                </span>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <br>
                <strong><u>{{$master->divison}}</u></strong>
            </td>
        </tr>
    </table>

    <!-- subject part -->

    <table width="100%">
        <tr>
            <td><b><u>{{$master->subject}}</u></b> </td>
        </tr>
    </table>
    <!-- subject part -->

    <!-- header part -->

    <table width="100%">
        <tr>
            <td>{!! $master->header !!}</td>
        </tr>
    </table>
    <!-- header part -->

    <table width="100%" style="table-layout: fixed; border-collapse: collapse; border-top: 0.5px solid;">
        <tr style="text-align: center;">
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 8%; text-align: center;">ক্রমিক </td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 32%; text-align: center;">নম্বর, নাম, পদবি ও শাখাা</td>
            <td style=" border-collapse: collapse; border: 0.5px solid; width: 60%; text-align: center;">ঘটনার প্রকৃতি</td>
        </tr>
        @foreach ($details as $index => $details)
            <tr style="table-layout: fixed;">
                <td style="width: 8% !important; table-layout: fixed; text-align: center;">{{$Controller::entoBn($index + 1,'number')}}</td>
                <td style="width: 32% !important; table-layout: fixed;">
                    {{$Controller::entoBn($details->employee->code,'number')}}, &nbsp;
                    {{$details->employee->employeeNameBangla}}, &nbsp;
                    {{$details->employee->employeeOfficialInformation->designation->banglaName}}, &nbsp;
                    {{$details->employee->employeeOfficialInformation->branch->banglaName}}
                </td>
                <td style="width: 60% !important; table-layout: fixed;">{!! ($details->description) !!}</td>

            </tr>
        @endforeach
    </table>

    <!-- body part -->


    <table width="100%">
        <tr>
            <td>{!! ($master->body) !!}</td>
        </tr>

    </table>

    <br>

    <!-- body part -->

    <table width="100%" style="text-align: center;">
        <tr>
            <td>{{$Controller::enToBnConveter(optional($data->master->presentDailyOrder)->referenceNo)}}</td>
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