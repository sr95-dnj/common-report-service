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

        @media print {
            .page-break {
                page-break-after: always;
            }
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 5px;
        }
        td{
            font-size: 12px;
        }
    </style>

</head>


<body>
<?php
$en = [];
$bn = [];
$data = json_decode($val['data']);
?>

<div style="font-size: 24px; border: 2px solid">

    <table width="100%" class="tbBorder" style="margin-top: 2%; margin-left: 10%; margin-right: 10%">
        <tr>
            <td style="text-align: left;">
                <b>Indent No: </b>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <img src="images/img_1.png" alt="">
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 25%"></td>
            <td style="width: 50%; text-align: center;">
                BANGLADESH ORDNANCE FACTORY (BOF) <br>
                GAZIPUR CANTONMENT, GAZIPUR-1703 <br>
                Purchase Office
            </td>
            <td style="width: 25%; text-align: center;">
            </td>
        </tr>
    </table>


    <!--main start-->

    <div style="text-align: center;">


        <table width="100%">
            <tr>
                <td style="text-align: center;">
                    <b>TENDER INFORMATION AND INSTRUCTIONS</b>
                </td>

            </tr>
        </table>


        <table width="100%" class="tbBorder" style="margin: 2%">
            <tr>
                <td>
                    <span>
                        <b>Tender No.</b>
                    </span>
                    <span>
                     @if($data->tenderPreparation  != null && $data->tenderPreparation ->tenderNo != null)
                            <span>{{($data->tenderPreparation->tenderNo)}}</span>
                        @endif
                    </span>
                </td>

                <td>
                    <span>
                        <b>Dated.</b>
                    </span>

                    <span>
                     @if($data->tenderPreparation  != null && $data->tenderPreparation ->prepareDate != null)
                            <span>{{$Controller::dateFormatter(optional($data)->tenderPreparation->prepareDate)}}</span>
                        @endif
                    </span>
                </td>
            </tr>
        </table>


        <table width="100%">
            <tr>
                <td style="text-align: left;">
                    <span>

                        M/S .......................................................... <br>
                        .................................................................. <br>
                        ..................................................................
                    </span>
                </td>

            </tr>
        </table>


        <table style="text-align: center; padding: 5px;">
            <tr>
                <td>
                    Dear Sir,
                </td>
            </tr>
        </table>


        <table style="text-align: center; padding: 5px;">
            <tr>
                <td>
                    1. You are invited to quote for delivery of goods as per the details and description of the
                    schedule attached with the tender form. Note that the tender will be regulated by BOF's
                    Procurement Policy 2017, Armed Forces Procurement Policy 2010 (Second Edition) and
                    DP-35 for specific field. On the other hand, the following issues and instructions should be
                    strictly followed in relation to the tender:
                </td>
            </tr>
        </table>


        <table style="padding: 5px;">
            <tr>
                <td>
                    a. Tender Preparation:
                </td>
            </tr>

            <tr>
                <td style="padding: 2%">
                    (1) Price should be given according to the description, size, quantity etc. of the items mentioned
                    in the tender schedule.
                    Alternative price of any non-specified item will not be acceptable under normal circumstances. <br>
                    <br>
                    (2) All tender documents, associated papers (annex, appendix etc.) must be signed by company owner
                    or by a registered active partner or any person legally authorized by the company through affidavit.
                </td>
            </tr>
        </table>

        <table style=" padding: 5px;">
            <tr>
                <td>
                    b. Tender Submission:
                </td>
            </tr>

            <tr>
                <td style="padding: 2%">
                    (1) The filled up tender documents to be inserted into sealed envelope and submit it in BOF tender
                    box. The envelope must be sealed and contain the address of BOF purchase office. <br>
                    (2) Tender has to be submitted within the stipulated date and time. Exceptions will not be accepted.
                    <br>
                    (3) Tender can be submitted by post. But it must arrive at BOF within the stipulated date and time.
                    BOF is not obligated to accept delayed tenders.
                </td>
            </tr>
        </table>

        <table style="padding: 5px;">
            <tr>
                <td>
                    c. Price Quote:
                </td>
            </tr>
            <tr>
                <td style="padding: 2%">
                    (1) Price will have to be offered as per unit as mentioned in the tender schedule and the price will
                    be inclusive of all taxes,
                    packing and delivery costs. If price is tax free and the packet is returnable, it must be mentioned
                    clearly and visibly. <br>

                    (2) The price of each item should be mentioned in Bangladeshi currency ‘taka’ (In numbers and in
                    words) at the designated place in the schedule.
                    However, a separate paper (with company seal and signed) can be used if necessary. <br>

                    (3) In case of purchase in foreign currency, price may be quoted in the currency of the country of
                    manufacturer.
                    In this case, the FOB Cost, Freight and CFR/LC value must be shown separately. <br>
                </td>
            </tr>
        </table>


    </div>

</div>


<div class="page-break"></div>


<div style="font-size: 24px; border: 2px solid">

    <table style="padding: 2px;">
        <tr>
            <td style="padding: 2%">
                (4) In case of bidding in foreign currency, the offered price must be submitted from main manufacturer
                /foreign principal along with the tender. <br>

                (5) In the case of bidding in foreign currency, the amount of agency commission as declared by principal
                should be mentioned separately in the offer. <br>

                (6) The bidding company will be bound to keep their price offer valid till the time limit specified in
                the tender schedule.
                However, the offer can be kept effective even after the scheduled time with the consent of the bidder.
                <br>

                (7) After opening the tender, any excuse from the supplier for example - price quoted by mistake, exact
                item’s price not quoted, sudden price hike, items not available in market etc. is not acceptable.
                For such excuses appropriate administrative action will be taken against the company in accordance with
                BOF purchase policy. <br>

            </td>
        </tr>
    </table>


    <table style="padding: 2px;">
        <tr>
            <td>
                d. Delivery: According to the tender schedule,
                the bidding company will be bound to supply the items to the prescribed place / affiliated branch of
                BOF. However,
                if there is necessity to change the time for delivery of item, it can be mentioned in the offer.
            </td>
        </tr>
    </table>


    <table style="padding: 2px;">
        <tr>
            <td>
                e. Tender Sample: Tender sample must be submitted along with the tender documents (If asked for).
                Otherwise the offer will be rejected by BOF. <br>
            </td>
        </tr>
    </table>


    <table style="padding: 2px;">
        <tr>
            <td>
                f. Packing: The bidder will be bound to supply the items with appropriate packing as per standard
                practice or as per the description of tender schedule. However, any alternative proposal of the bidder
                may be mentioned in the schedule.
            </td>
        </tr>
    </table>

    <table style="padding: 2px;">
        <tr>
            <td>
                g. Inspection: All the tender sample, advance sample and supplied stores will be inspected by BOF
                inspection authority. The supplier will be bound to co-operate the inspection authority as per BOF
                requirement. Rejected stores must be taken away within 15 days.
                Otherwise the claim of that stores will not be accepted. Beyond that time, the claim will be regarded
                invalid.
            </td>
        </tr>
    </table>


    <table style="padding: 2px;">
        <tr>
            <td>
                h. Bill Payment: On acceptance of stores, partial or full bill of the supplied items will be paid
                through cross cheque by ACCDF (BOF) as directed by the authority.
            </td>
        </tr>
    </table>

    <table style="padding: 2px;">
        <tr>
            <td>
                j. Penalty :
            </td>
        </tr>
        <tr>
            <td style="padding: 2%">
                (1) In case the supplier fails to complete the shipment / delivery within the date stipulated in the
                contract,
                the buyer shall have the right to impose liquidated damage (LD) at the rate of 2% but not less than 1%
                (one) of the value of item per month (Full or partial as applicable) not exceeding 10% of the total
                contract value. However,
                BOF authorities reserve the power to waive or reduce LD if the reason for late delivery is deemed
                reasonable and acceptable. <br>

                (2) In case of failure to supply the contracted items, the decision of BOF authority regarding any
                administrative measurers/penalty against supplier will be considered as final.
            </td>
        </tr>
    </table>

    <table style="padding: 5px;">
        <tr>
            <td>
                k. Warning : By drawing attention to the Official Secrets Acts 1923 Rules 5, it is to be warned that,
                bidder must ensure confidentiality regarding the tender and tender related matters.
                Any description and information about tender and tendered item should not be disclosed to any
                unauthorized person or organization.
                Violation of the above mentioned rule will be subject to administrative action against the concerned
                company.
            </td>
        </tr>
    </table>


    <table style="padding: 5px;">
        <tr>
            <td>
                m. Dispute Mitigation : In case of any dispute with the interpretation of the said rules or if there is
                nothing mentioned in these rules or if any question is raised in the tender,
                the interpretation and decision of the BOF authority will be considered as final
            </td>
        </tr>
    </table>

    <table style="padding: 5px;">
        <tr>
            <td>
                n. Reserved Rights : Commandant BOF upholds the authority to deny the lowest bid for the reasons of best
                interest of BOF. He also reserves the right to accept or reject any bid in whole or partial and to
                cancel the offer in whole and partial.
            </td>
        </tr>
    </table>


    <table style="padding: 5px;">
        <tr>
            <td>
                2. Therefore, you are requested to submit your offer against the invited tender as per the above
                mentioned rules and instructions.
            </td>
        </tr>
    </table>


    <table style="padding: 5px;">
        <tr>
            <td style="width: 40%; text-align: left">
                Place : Gazipur Cantonment
            </td>

            <td style="width: 20%;">

            </td>

            <td style="width: 40%; text-align: right">
                On Behalf of
            </td>

        </tr>
    </table>


    <table style="padding: 5px;">
        <tr>
            <td style="width: 40%; text-align: left">
                Date :
            </td>

            <td style="width: 20%;">

            </td>

            <td style="width: 40%; text-align: right">
                Bangladesh Ordnance Factories
            </td>
        </tr>
    </table>


</div>


<div class="page-break"></div>


<div style="font-size: 24px; border: 2px solid">

    <table width="100%">
        <tr>
            <td style="text-align: center;">
                <span>Tender Schedule</span>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="text-align: left;">
                <span>1   Tender No</span> <br>
            </td>
        </tr>

        <tr>
            <td style="text-align: left;">
                <span>2   Last Date  and Time of Tender Submission</span> <br>
            </td>

        </tr>

        <tr>
            <td style="text-align: left;">
                <span>3  Tender Open Date & Time</span> <br>
            </td>
        </tr>

        <tr>
            <td style="text-align: left;">
                <span>4   Tendered Item Details</span> <br>
            </td>
        </tr>
    </table>

    <br>


    <table class="tbBorder" width="100%" style="margin-left: 4%; margin-right: 4%">
        <thead>
        <tr>
            <th>Ser</th>
            <th>Item Name & Instructions</th>
            <th>Quantity</th>
            <th>Unit</th>
            <th>Unit Price</th>
            <th>Total Price</th>
            <th>Remarks</th>
        </tr>


        </thead>

        <tbody>
        <tr>
            <td></td>
            <td>Annex A, B, C, D , E, F, G & H  </td>
            <td></td>
            <td></td>
            <td>Schedule Price</td>
            <td>5,000/- (Non-Refundable</td>
            <td>Foreign</td>
        </tr>
        </tbody>
    </table>


    <table>
        <tr>
            <td style="text-align: left;">
                <span>5   Terms  & Conditions for Price Quotation :</span>
            </td>
        </tr>

        <tr>
            <td style="padding: 2%">
                a. Only one price is acceptable in favour of one item. <br>  <br>
                b. The price quote will be valid for 180 days from the date of offer submission. <br> <br>
                c. Advance samples should be provided as per the requirement of BOF. <br> <br>
                d. BOF approved samples can be consulted before submission of the offer. <br> <br>
                e. On acceptance of submitted offer the period of supply will be as following :

                <table>
                    <tr>
                        <td style="padding: 2%">
                            <span>
                               i.	In case of purchase in foreign currency, the items must be delivered within 180 days or earlier from the date of signing contract. <br> <br>
                               ii.	In case of purchase in local currency, the goods must be delivered within 90 days for supply from local source and within 180 days for supply from foreign source or earlier.
                            </span>
                        </td>
                    </tr>
                </table>

                <span>f. BOF authority may reduce / increase the quantity of scheduled items as required. </span>  <br> <br>
                <span>g. Conditional price offer will not be accepted; such offer may be rejected by BOF.</span>  <br> <br>
                <span>h. After tender opening, application for increasing the price is not acceptable. </span>  <br> <br>
                <span> j. If any tendered item was supplied within the last 3 years, the bidder has to mention the date and
                number of the said supply order / contract.</span>  <br> <br>
                <span>k. Even if there is no bid proposal, the tender schedule has to be submitted in due time. Otherwise the
                matter can be considered as an offence.</span> <br> <br>
                <span> l. If there is no permanent security deposited in favour of the organization, the security deposit at
                the following rate has to be paid in favor of Commandant,
                Bangladesh Ordnance Factories along with the tender.</span>
                <table>
                    <tr>
                        <td style="padding: 2%">
                            <span>
                               (i) For quoted price  up to 10 lacs = 1% <br>
                               (ii) For quoted price above 10 lacs and up to 25 lacs = 15,000/- <br>
                               (iii) For quoted price above 25 lacs and up to 50 lacs = 25,000/- <br>
                               (iv) For quoted price above 50 lacs and up to 75 lacs = 30,000/- <br>
                               (v) For quoted price above 75 lacs and up to 1 crore = 40,000/- <br>
                               (vi) For value above 01 crore = 50,000/-
                            </span>
                        </td>
                    </tr>
                </table>

                <p>m. On acceptance of the offer, if supplier is not willing to accept the supply order or not willing to execute the contract, the deposited security money can be confiscated.</p>

                <br>
                <br>
                <br>


            </td>

        </tr>
    </table>
</div>


<div class="page-break"></div>

<div style="font-size: 24px; border: 2px solid">

    <br>

    <table>
        <tr>
            <td style="text-align: left;">
                <span>6 To be filled By Bidder: :</span>
            </td>
        </tr>

        <tr>
            <td style="padding: 2%">
                a. The proposed item is similar and according to the requirement of BOF (If not details must be
                specified) <br>
                b. On receipt of supply order, date by which item can be supplied <br>
                c. Type of packing and details of packing <br>
                d. The gross and net weight of the items <br>
                e. Insurance Amount <br>
                f. In case of import, details about imported country <br>
                g. The act under which the company is registered <br>
                h. In not registered, owner’s name and address <br>
            </td>
        </tr>
    </table>


    <table>
        <tr>
            <td style="text-align: left;">
                <span>7 Bidder’s Certificate:	We have quoted / submitted offer after being informed about the tender,
                    terms / conditions of the tender schedule and item name, quality details,
                    specifications and above all the needs and requirements of BOF.
                </span>
            </td>
        </tr>
    </table>


    <br>
    <br>
    <br>


    <table>
        <tr>
            <td style="width: 70%"></td>
            <td style="text-align: left;">
                <span>--------------------------------------------</span> <br>
                <span>On behalf of Commandant</span> <br>
                <span>Bangladesh Ordnance Factories</span> <br>
                <span>Date:</span>
            </td>
        </tr>
    </table>

    <br>
    <br>


    <table>
        <tr>
            <td style="text-align: left;">
                <span>--------------------------------------------</span> <br>
                <span>Bidder’s Signature & Seal</span>
            </td>
        </tr>
    </table>

    <br>
    <br>


</div>

</body>
