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

        @media print {
            .page-break {
                page-break-after: always;
            }
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
                <u>ANNEX - D TO</u> <br>
                <u>TENDER NO: </u> <br>
                <u>DATED:</u>
            </td>
        </tr>
    </table>

    <br>
    <br>

    <!-- subject part -->


    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <img src="/resources/assets/image/img.png" alt="">
            </td>
        </tr>
    </table>


    <table width="100%">
        <tr>
            <td style="text-align: center;"><b><u>PERFORMANCE GUARANTEE (PG)</u></b></td>
        </tr>
    </table>

    <br>
    <br>


    <table class="tbBorder" width="100%" style="margin-left: 4%; margin-right: 4%">
        <tbody>
        <tr>
            <td style="width: 45%">PERFORMANCE GUARANTEE NO. AND ISSUING DATE</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        <tr>
            <td style="width: 45%">AMOUNT OF PG</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%">(Foreign Currency In number & word)</td>
        </tr>
        <tr>
            <td style="width: 45%">BENEFICIARY</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%">Bangladesh Ordnance Factories (BOF)
                Gazipur Cantonment, Gazipur-1703, Bangladesh
            </td>
        </tr>
        <tr>
            <td style="width: 45%">FOREIGN PRINCIPAL</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%">(Principal Name & Address)</td>
        </tr>
        <tr>
            <td style="width: 45%">LOCAL AGENT</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%">(Local Agent Name & Address)</td>
        </tr>
        <tr>
            <td style="width: 45%">TENDER NO. AND DATE</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        <tr>
            <td style="width: 45%">NAME OF ITEM AND QUANTITY</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        <tr>
            <td style="width: 45%">FOREIGN GUARANTOR</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        <tr>
            <td style="width: 45%">SWIFT MASSAGE  NO</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        <tr>
            <td style="width: 45%">LOCAL GUARANTOR</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%">(Local Bank Name & Address)</td>
        </tr>
        <tr>
            <td style="width: 45%">EXPIRY DATE</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left;">
                <p>
                    1. Whereas, Bangladesh Ordnance Factories (BOF), Gazipur Cantonment, Gazipur-1703
                    (Here-in-after called Purchaser) has accepted the offer of <u>(Principal Name & Address)</u> and <u>(Local
                        Agent name & Address)</u>
                    against BOF <u>(Tender No & Date)</u> for supply of <u>(Item Name & Qty) </u>
                    on the terms and conditions governing the contract between the purchaser and supplier and whereas
                    the supplier
                    has requested us to issue a Foreign Currency Performance Guarantee(PG) for an amount <u>(Foreign
                        currency in number & word)</u> .
                </p>
            </td>
        </tr>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <img src="/resources/assets/image/img.png" alt="">
            </td>
        </tr>
    </table>


    <table width="100%">
        <tr>
            <td style="text-align: center;"><b><u>PAGE # 2</u></b></td>
        </tr>
    </table>


    <table class="tbBorder" width="100%" style="margin-left: 4%; margin-right: 4%">
        <tbody>
        <tr>
            <td style="width: 45%">PERFORMANCE GUARANTEE NO. &  ISSUING DATE</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left;">
                <p>
                    2. Our bank stands as guarantor for <u></u> (Principal Name & Address) and for the definite
                    guarantee amount of <u>(Foreign currency in number & word)</u>
                    for which the principal is obliged to provide a Guarantee in order to ensure full performance of the
                    contract which is to be signed and to be exchanged
                    between Bangladesh Ordnance Factories (BOF) and the principal <u>(Principal Name & Address)</u>
                    concerning <u>(Item Name & Qty)</u> we hereby undertake and state,
                    on behalf of the bank and as responsible representatives with full power to affix our signature
                    that,
                    in the event our bank is notified by you in writing that the principal has failed to perform his
                    undertaking completely or partially in accordance with the provisions of the contract,
                    the specification and the relevant law, the Guaranteed amount of <u>(Foreign currency in number &
                        word)</u>
                    will be paid in full, immediately and without any delay to you or to your order, upon your first
                    written request,
                    without need to resort to any legal procedure or to issue a protest or to obtain a court sentence or
                    the principal’s consentand without taking into consideration any conflict
                    and it’s consequences and legal effects between the afore-named and your administration.

                </p>
            </td>
        </tr>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <img src="/resources/assets/image/img.png" alt="">
            </td>
        </tr>
    </table>


    <table width="100%">
        <tr>
            <td style="text-align: center;"><b><u>PAGE # 3</u></b></td>
        </tr>
    </table>


    <table class="tbBorder" width="100%" style="margin-left: 4%; margin-right: 4%">
        <tbody>
        <tr>
            <td style="width: 45%">PERFORMANCE GUARANTEE NO. &  ISSUING DATE</td>
            <td style="width: 10%; text-align: center">:</td>
            <td style="width: 45%"></td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left;">
                <p>
                    3. This guarantee shall be valid until <U>(Date)</U> and will be considered null and void if no
                    written claim for payment is made by you until that date,
                    on which date latest all such claims should have been received by us.

                </p>
            </td>
        </tr>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <p>
                    FOR AND ON BEHALF OF <br>
                    (BANK NAME AND ADDRESS)
                </p>
            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left; width: 33%">
                <hr>
                <p>
                    AUTHORIZED SIGNATURE
                </p>
            </td>

            <td style="width: 33%"></td>

            <td style="text-align: left; width: 33%">
                <hr>
                <p>
                    AUTHORIZED SIGNATURE
                </p>
            </td>
        </tr>
    </table>


</div>


</body>
