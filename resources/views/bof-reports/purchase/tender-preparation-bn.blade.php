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
                    <td style="width: 50% !important; text-align: center;">&nbsp;</td>
                    <td style="width: 50% !important; text-align: left;">
                        <h3>
                            <u>Annexure - A TO</u><br>
                            <u>Tender NO. </u><br>
                            <u>Dated </u><br>
                        </h3>
                    </td>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <td style="width: 100% !important; text-align: center;">
                        <h3><u>DETAILS SPECIFICATION</u></h3>
                    </td>
                </tr>
            </table>
            <table class="rootTable" width="100%">
                <tr class="rootTable">
                    <td style="width: 5%" class="rootTable text-center">Ser</td>
                    <td style="width: 30%" class="rootTable text-center">Name of item & Specification</td>
                    <td style="width: 20%" class="rootTable text-center">Consumption Rate/Thousand</td>
                    <td style="width: 8%" class="rootTable text-center">Unit</td>
                    <td style="width: 7%" class="rootTable text-center">Qty</td>
                    <td style="width: 30%" class="rootTable text-center">Rate(Unit Price)</td>
                </tr>
                <tr>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center"></td>
                    <td class="rootTable text-center"></td>
                </tr>
            </table>
        <table width="100%">
            <tr>
                <td></td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td style="width: 50%">&nbsp;</td>
                <td style="width: 50%; text-align: center;">
                    দরপত্রে অংশ গ্রহণকারীর স্বাক্ষর <br>
                    (বড় অক্ষরের নাম) <br>
                    'সীলমোহর'
                </td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td>
                    স্থানঃ <br>
                    তারিখঃ
                </td>

            </tr>
        </table>


    </div>


</body>
