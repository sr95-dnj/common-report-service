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

    @page {
        size: landscape;
        orientation: landscape;

    }
    @media print {
        .page-break {page-break-after: always;}
    }
    body {
        writing-mode: tb-rl;
    }
    table.center {
        margin-left: auto;
        margin-right: auto;
        width: 100% !important;
        padding: 5px;
    }

    .rootTable{
        border: 1px solid;
        border-collapse: collapse;
    }
    .left-border{
        border-left: 1px solid;
        border-collapse: collapse;
    }
    .right-border{
        border-right: 1px solid;
        border-collapse: collapse;
    }
    .top-border{
        border-top: 1px solid;
        border-collapse: collapse;
    }
    .bottom-border{
        border-bottom: 1px solid;
        border-collapse: collapse;
    }

    @page {
        margin-top: 5px;
    }

    td {
        vertical-align: top !important;
    }
    </style>

</head>


<body class="landscapePage" style="font-size: 24px;">
    <?php
    $data = json_decode($val['data']);
    ?>


    <!--    master page-->
    <div style="font-size: 24px; ">
            <table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                      <u> <h2>
                      {{$Controller::enToBnConveter($data->master->targetYear->financialYear)}} অর্থ বছরের উৎপাদন লক্ষ্যমাত্রা নির্ধারণ প্রসঙ্গে </h2> </u>
                    </td>
                </tr>
            </table>
            <table class="rootTable" width="100%">
                <tr class="rootTable">
                    <td class="rootTable text-center">ক্র.</td>
                    <td class="rootTable text-center">উৎপাদিত দ্রব্য</td>
                    <td class="rootTable text-center">লক্ষ্যমাত্রা</td>
                </tr>
                @foreach ($data->details as $index => $item)
                    <tr>
                        <td class="rootTable text-center">
                        {{$Controller::entoBn( $index + 1,'number')}} |</td>
                        <td class="rootTable text-left">{{($item->product ? $item->product->nameBn : '')}}</td>
                        <td class="rootTable text-center">
                        {{$Controller::enToBnConveter($item->targetQty)}}
                        </td>
                    </tr>
                @endforeach

            </table>
    </div>


</body>
