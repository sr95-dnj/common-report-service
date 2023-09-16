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
            <td style="width: 33%"></td>
            <td style="width: 34%; text-align: center; vertical-align: top;">
                <span style="font-size: 10px;">RESTRICTED</span>
            </td>
            <td style="width: 33%; text-align: left;">
                <span style="font-size: 10px;">
                    ANNEX-B TO <br>
                TENDER NO: <span></span><br>
                DATED: <span></span>
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 100%; text-align: center;">
                <span style="font-size: 10px;">
                    <u>
                        BANGLADESH ORDNANCE FACTORIES (BOF) GAZIPUR CANTONMENT, GAZIPUR <br>
                        TENDER PRICE SCHEDULE
                        </u>
                </span>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 45%; font-size: 11px;">Tender No...................................................... Dated.............</td>
            <td style="width: 55%; font-size: 11px;">Principal’s Proforma Invoice/ proposal No:................... Dated................</td>
        </tr>
        <tr>
            <td style="width: 45%; font-size: 11px;">Name of Item................................................... Qty...............</td>
            <td style="width: 55%; font-size: 11px;">Local Agent’s Ref. No: ........................................................... Dated................</td>
        </tr>
        <tr>
            <td style="width: 45%; font-size: 11px;">Name of the local Agent : ...................................................</td>
            <td style="width: 55%; font-size: 11px;"></td>
        </tr>
        <tr>
            <td style="width: 45%; font-size: 11px;">Name of Manufacturer and Address : ............................</td>
            <td style="width: 55%; font-size: 11px;"></td>
        </tr>
        <tr>
            <td style="width: 45%; font-size: 11px;">Name of Principal and Address : ......................................</td>
            <td style="width: 55%; font-size: 11px;"></td>
        </tr>
    </table>


    <br>

    <!--main start-->

    <div style="text-align: center;">
        <table class="center tbBorder" style="text-align: center; padding: 5px;">
            <thead>
            <tr style="font-size: 10px;">
                <td style="width: 5%; padding: 2px; vertical-align: top;">Model No</td>
                <td style="width: 5%; padding: 2px; vertical-align: top;">Qty</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Total FOB price of Main Equipment</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Total Standard Accessories & Attachment</td>
                <td style="width: 5%; padding: 2px; vertical-align: top;">Total FOB</td>
                <td style="width: 5%; padding: 2px; vertical-align: top;">Total Freight</td>
                <td style="width: 5%; padding: 2px; vertical-align: top;">Total CFR Price</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Fast Moving Spare Parts for Years</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Slow Moving Spare Parts for Years</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Test Trial Run and Training for ...... working Days at BOF Site</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Foreign Training <br>......... working days of BOF Personnel</td>
                <td style="width: 10%; padding: 2px; vertical-align: top;">Total Price (item)</td>
                <td style="width: 5%; padding: 2px; vertical-align: top;">Optional item (If any)</td>
            </tr>

            </thead>

            <tbody>
                <tr>
                    <td class="text-center">(a)</td>
                    <td class="text-center">(b)</td>
                    <td class="text-center">(c)</td>
                    <td class="text-center">(d)</td>
                    <td class="text-center">(e)</td>
                    <td class="text-center">(f)</td>
                    <td class="text-center">(g)</td>
                    <td class="text-center">(h)</td>
                    <td class="text-center">(i)</td>
                    <td class="text-center">(j)</td>
                    <td class="text-center">(k)</td>
                    <td class="text-center">(l)</td>
                    <td class="text-center">(m)</td>
                </tr>
                <tr>
                    <td class="text-center">&nbsp;</td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
            </tbody>
        </table>

        <table width="100%">
            <tr>
                <td colspan="4">
                    <b style="font-size: 11px"><u><b>N.B</b></u>. &nbsp;&nbsp;  All quoted price mentioned in separately.</b>
                </td>
            </tr>
            <tr>
                <td style="width: 5%; font-size: 11px;">a.</td>
                <td style="width: 45%; font-size: 11px;">Local Agent's Commission :.........................</td>
                <td style="width: 5%; font-size: 11px;">b.</td>
                <td style="width: 45%; font-size: 11px;">Validity of the Offer :.............................</td>
            </tr>
            <tr>
                <td style="width: 5%; font-size: 11px;">c.</td>
                <td style="width: 45%; font-size: 11px;">Delivery :............................................................</td>
                <td style="width: 5%; font-size: 11px;">d.</td>
                <td style="width: 45%; font-size: 11px;">Country of Origin :..................................</td>
            </tr>
            <tr>
                <td style="width: 5%; font-size: 11px;">e.</td>
                <td style="width: 45%; font-size: 11px;">Warranty :.........................................................</td>
                <td style="width: 5%; font-size: 11px;">f.</td>
                <td style="width: 45%; font-size: 11px;">Payment Terms :......................................</td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;"><u><b>Remarks</b></u>:</td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;">
                    1. &nbsp;&nbsp;&nbsp;&nbsp; Technical & Financial offer should be submitted ‘in <b>Original</b>’in <b>Principals official pad</b> duly signed and sealed by a legal executive of the
                    principal / company. 03 Sets (<b>01 set x original and 02 set x copy</b>) of offers (<b>For both Technical and Financial Offer</b>) to be submitted in double
                    Envelop separately.
                </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;">
                    2. &nbsp;&nbsp;&nbsp;&nbsp; In Technical and Financial Offer Foreign Principal should confirm regarding 80% and 20% payment system.
                </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;">
                    3. &nbsp;&nbsp;&nbsp;&nbsp; If the supplied stores do not function properly, the stores has to be replaced by the supplier at their own expenses within 90 days. If the stores
                    are not replaced the supplier will be liable to return the paid 80% FOB/CFR/LC value (As applicable).
                </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;">
                    4. &nbsp;&nbsp;&nbsp;&nbsp; All above information must be in principal’s invoice / Proposal.
                </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;">
                    5. &nbsp;&nbsp;&nbsp;&nbsp; Write in column “NOT APPLICABLE” (NA), if not asked in tenders Conditions and write ÒNOT QUOTED Ó (NQ) if not quoted by the principal.
                </td>
            </tr>
            <tr>
                <td colspan="4" style="font-size: 11px;">
                    6. &nbsp;&nbsp;&nbsp;&nbsp; Each column must be filled in by the local agent.
                </td>
            </tr>
        </table>
    </div>



</div>
<footer style="position: fixed; bottom: 0; width: 100%; font-size: 18px; text-align: center">
    <p>
        RESTRICTED
    </p>
</footer>

</body>
