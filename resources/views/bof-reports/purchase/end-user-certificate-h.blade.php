
<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 10px;
        }

        /* table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        } */

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 5px;
        }
    </style>

</head>


<body>
<?php
$en = [];
$bn = [];
$data = json_decode($val['data']);
?>

<div>


    <table width="100%">
        <tr>
            <td style="text-align: center;">SECRET</td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 60%"></td>
            <td style="width: 40%; text-align: left;">
                <u>ANNEX - H TO</u> <br>
                <u>TENDER NO: </u>
                <span>
                     @if($data->tenderPreparation  != null && $data->tenderPreparation ->tenderNo != null)
                        <span>{{($data->tenderPreparation->tenderNo)}}</span>
                    @endif
                </span> <br>
                <u>DATED:</u>
                <span>
                     @if($data->tenderPreparation  != null && $data->tenderPreparation ->prepareDate != null)
                        <span>{{$Controller::dateFormatter(optional($data)->tenderPreparation->prepareDate)}}</span>
                    @endif
                </span>
            </td>
        </tr>
    </table>

    <br>
    <br>

    <!-- subject part -->

    <table width="100%">
        <tr>
            <td style="text-align: center;"><b><u>END USER CERTIFICATE (EUC) FORMAT</u></b></td>
        </tr>
    </table>

   <br>


    <table width="100%">
        <tr>
            <td style="width: 50%; text-align: left;">
            </td>

            <td style="width: 50%; text-align: left;">
                <span>'ACCOUNTABLE'</span> <br>
                <span>Copy Number  ......01...of....01..............</span> <br>
                <span>Total page: .........01...............................</span> <br>
                <span>Government of the People's</span> <br>
                <span>Republic of Bangladesh</span> <br>
                <span>Bangladesh Ordnance Factories (BOF)</span> <br>
                <span>Gazipur Cantonment, Gazipur</span> <br>
                <span>Tel: 880-02-224494021</span> <br>
                <span>Fax: 880-02-224494044</span> <br> <br>
                <span>E-mail: comdt@bof.gov.bd</span> <br>
            </td>

        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 50%; text-align: left;">
                <span> 232300.67676.676 </span>
            </td>

            <td style="width: 50%; text-align: left;">
                <span>Dated</span>
            </td>

        </tr>
    </table>

    <br>

    <table width="100%">
        <tr>
            <td style="text-align: center;"><b><u>END USER CERTIFICATE (EUC)</u></b></td>
        </tr>
    </table>

    <br>

    <table width="100%">
        <tr>
            <td style="text-align: left;">1. As per Bangladesh Ordnance Factories (BOF)
                Contract No……………………………………… ………………………………..Dated……………for Supply of …………………………………., Qty……………………
                Nos for the procurement of item mentioned in paragraph 2 below, the parties involved are:
            </td>
        </tr>
    </table>

    <br>


    <table width="100%" class="tbBorder">
        <tr>
            <td>
                <u>Principal Supplier</u>
                <br>
                <br>
                <br>
                <u>Exporter/Manufacturer </u>
                <br>
                <br>
                <br>
                <u>Local Agent</u>
            </td>

            <td>
                <u>Purchaser</u>
                <br>
                <br>
                <br>
                <u>Name of End User</u>
                <br>
                <br>
                <br>
                <u>Address of Consignee</u>

            </td>
        </tr>
    </table>

    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left;">
                2. Goods :
            </td>

        </tr>
    </table>

    <br>

    <table width="100%">
        <tr>
            <td style="text-align: left;">
                3. The total value of contractual Item is USD ………………. (In word).
            </td>
        </tr>

    </table>

    <br>

    <table width="100%">
        <tr>
            <td style="text-align: left;">
                <p>4. It is hereby certified that the above mentioned material will be supplied for the sole use of the People's Republic of Bangladesh and that it will not authorize the re-export, re-sale, re-transfer of possession of the above material without the prior approval of the .............. Government.
                </p>
            </td>
        </tr>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>

            <td style="width: 60%"></td>

            <td style="width: 40%; text-align: left;">
                <span>For and on behalf of the</span> <br>
                <span> Government of the People's</span> <br>
                <span> Republic of Bangladesh</span>
            </td>

        </tr>
    </table>


</div>


<footer style="position: fixed; bottom: 0; width: 100%; text-align: center">
    <p>
        H -1 <br>
        SECRET

    </p>
</footer>

</body>
