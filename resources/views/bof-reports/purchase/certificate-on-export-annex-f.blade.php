<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 5%;
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
            <td style="width: 60%"></td>
            <td style="width: 40%; text-align: left;">
                <u>ANNEX- F TO</u> <br>
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


    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <span><u style="font-style: italic">(This Certificate should be on Principals official pad)</u></span>
            </td>
        </tr>
    </table>

    <br>

    <!-- subject part -->

    <table width="100%">
        <tr>
            <td style="text-align: center;"><b><u>CERTIFICATE ON EXPORT PERMIT</u></b></td>
        </tr>
    </table>
    <br>


    <br>




    <table width="100%">
        <tr>

            <td style="width: 25%; text-align: left;">
                TO, <br> <br>
                Commandant<br>
                Bangladesh Ordnance Factories (BOF)<br>
                Gazipur Cantonment, Gazipur-1703
            </td>

        </tr>
    </table>

    <br>



    <!--main start-->

    <div>
        <table>
            <tr>
                <td>

                    <span>
                        Dear Sir,
                    </span>

                    <br>
                    <br>
                    <br>

                    <span>
                        We <u>(Principal Name & Address)</u>  have participated in BOF tender number <u>(Tender No & Date)</u>
                        for procurement of <u>(Item Name & Qty)</u>.
                        We would like to assure that we are the Principal/Manufacturer of the item and has appropriate authorization
                        (Export Permit from Concern Ministry or from the appropriate authority) to export the said item to BOF.
                        All liabilities will be reposed on us when offer is accepted but the contact fails to conclude for
                        the sake of non-availability of export permission.
                    </span>

                    <br>
                    <br>
                    <br>
                    <br>
                    <span>
                        On behalf of
                    </span>

                    <br>
                    <br>
                    <span>
                        ....................................................
                        <br>
                        (To be signed by authentic representative of the company)
                    </span>


                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <span>
                        <u style="font-style: italic"> Note: This certificate has to be signed in original. Computerized or digitally edited signature will not be accepted</u>
                    </span>




                </td>

            </tr>

        </table>
    </div>

    <br>


    <table width="100%">

    </table>
</div>

</body>
