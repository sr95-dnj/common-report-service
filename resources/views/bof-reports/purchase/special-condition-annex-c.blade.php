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
        .envelop{
            width: 50%;
            height: 170px;
            float: left;
            background-size: 100% 100%;
            background-image:linear-gradient(rgba(250, 249, 249, 0.3), rgba(252, 252, 253, 0.3));
            clip-path: polygon(100% 0%, 64% 50%, 100% 100%, 0 99%, 0% 50%, 0 0);
        }
    </style>

</head>


<body>
<?php
$en = [];
$bn = [];
$data = json_decode($val['data']);
?>

<div style="font-size: 24px; ">
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
                <span style="font-size: 12px;">
                    <u>
                        SPECIAL CONDITION FOR OFFERS IN FOREIGN CURRENCY TENDER
                    </u>
                </span>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="font-size: 11px;">
                1. &nbsp;&nbsp;&nbsp;&nbsp; All offers in foreign currency should be submitted in Principal’s Original Proforma Invoice in
                duplicate duly signed by the principal giving name, designation and official seal of signatory. All pages
                of the offer must be numbered initialed by the principal. Enclosed brochures/catalogue, if any, must be
                sealed and initialed by the principal/local agent. Unsigned offer will be rejected.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                2. &nbsp;&nbsp;&nbsp;&nbsp; The invoice should be addressed to “Bangladesh Ordnance Factories, Gazipur Cantonment.”
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                3. &nbsp;&nbsp;&nbsp;&nbsp; The Manufacturer’s names and address must be mentioned in the offer in the Principal/from is a
                Trading House/General Order Supplier.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                4. &nbsp;&nbsp;&nbsp;&nbsp; Certificate of assurance from Original Manufacturer or appointed dealer of Manufacturer (along
                with dealership certificate) for supply of offered stores is to be provided, if the principal is a Trading
                House or General Order Supplier.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                5. &nbsp;&nbsp;&nbsp;&nbsp; Certificate of Authority by the Principal about appointment of local agent to submit the bid and
                signing of contract on his behalf is to be provided.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                6. &nbsp;&nbsp;&nbsp;&nbsp; Name of Equipment/Stores, quantity, unite price and total price are to be mentioned in the offer.
                Use of such word “COMPLIED” or so against Technical Specification will not be accepted. Instead,
                details of the offered is to spelled out against each serial of the Tender Schedule.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                7. &nbsp;&nbsp;&nbsp;&nbsp; Principal’s Banker’s Name, A/C No, Address, Fax, Email. Web Site and Tel. No. are also to be
                mentioned in the offer.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                8. &nbsp;&nbsp;&nbsp;&nbsp; Make/Mode/Brand \/Type of equipment including ISO Code-number, if any, is to be mentioned
                in the offer.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                9. &nbsp;&nbsp;&nbsp;&nbsp; The offer is to be submitted in chronological order as mentioned in the Tender Schedule.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                10. &nbsp;&nbsp; Country of Origin of the offered stores is to be specifically mentioned in the invoice.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                11. &nbsp;&nbsp; Price is to be quoted separately in the following manner.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                <table width="100%">
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">a.</td>
                        <td style="font-size: 11px; width: 90%">FOB value (included of all charges like Packing, Handling, Documentational etc.)</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">b.</td>
                        <td style="font-size: 11px; width: 90%">
                            List of standard accessories, spares and optional and expandable items is to be provided
                            quoting price of each item if those are not offered free of cost.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">c.</td>
                        <td style="font-size: 11px; width: 90%">
                            Freight charge by sea up to Chattogram/Mongla port, or by air up to Hazrat Shahjalal
                            International Airport, Dhaka and by road upto BOF premises is to be mentioned (freight shall
                            always be paid at actual but not exceeding the freight charges mentioned in the offer ). Freight
                            charge must be shown in the Bill of Lading/Air Way issued by the carrier.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">d.</td>
                        <td style="font-size: 11px; width: 90%">
                            Total CFR cost (FOB plus Freight Charges)
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">e.</td>
                        <td style="font-size: 11px; width: 90%">
                            Installation charges (if applicable)
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">f.</td>
                        <td style="font-size: 11px; width: 90%">
                            Cost of training (if applicable)
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                12. &nbsp;&nbsp; Principal must declare in the original proforma invoice the percentage of agency commission for
                local agent. This Percentage is to be calculated on the FOB values. Local agent will get agency
                commission as declared by the principal or as per BOF’s rule whichever is less. If the agency
                commission is included in the FOB value, the included agency commission will be deducted while
                calculating the total value of the stores/ machines which is paid in local currency. Declaration of non
                inclusion of agency commission in the original proforma invoice will automatically disqualify in getting
                any agency commission as per BOF rule.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                13. &nbsp;&nbsp; <b>Offer must remain valid for minimum of 180 days from the date of opening the tender.</b>
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                14. &nbsp;&nbsp; Principal/Local agent is to submit Bid Bona as per BOF’s rule in the form of Bank Guarantee/Pay
                Order/Bank Draft through any schedule Bank of Bangladesh as per BOF rule along with the Proforma
                Invoice. The offer without bid bond will be rejected.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                15. &nbsp;&nbsp; Offered items must be brand new and be produced not earlier than the contracted year.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                16. &nbsp;&nbsp; Relevant, Pamphlet, Catalogue, Technical Publications, Brochure etc. in original in English
                language are to be submitted along with the offer.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                17. &nbsp;&nbsp; An <b>undertaking from the Manufacturer for 12 months warranty/guarantee</b> of the
                stores/equipment from the date of acceptance/commissioning is to be provided with the offer.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                18. &nbsp;&nbsp; While signing of the contract, <b>Performance Guarantee @ 10% of LC value is to be furnished
                    by the Principal in the shape of Bank Guarantee in foreign currency</b> in favour of Commandant,
                Bangladesh Ordnance Factories, Gazipur Cantonment, Gazipur through any scheduled Bank located
                in Bangladesh. The validity of the PG has to be 01 year after the date of satisfactory acceptance of the
                item in the BOF premises. However this may vary depending on the type of equipment / plants /
                projects.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                19. &nbsp;&nbsp; Estimated delivery time of the stores i.e. 180 days to be mentioned in the offer.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                20. &nbsp;&nbsp; Payment Terms: Payment will be made through a confirmed and irrevocable letter of
                credit/Remittance in favour of BOF. Payments will the made as under:
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                <table width="100%">
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">a.</td>
                        <td style="font-size: 11px; width: 75%">
                            80% LC value/Remittance will be paid on production of following documents:
                        </td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 75%">
                            (1) &nbsp;&nbsp;&nbsp; Clean/Original Bill of Lading/Airway Bill (Freight amount must be
                            shown in the Bill of Lading/Airway Bill)
                        </td>
                        <td style="font-size: 11px; width: 5%">-</td>
                        <td style="font-size: 11px; width: 5%">05</td>
                        <td style="font-size: 11px; width: 5%">Sets</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 75%">
                            (2) &nbsp;&nbsp;&nbsp; Supplier’s signed Invoice accompanied by Freight voucher
                        </td>
                        <td style="font-size: 11px; width: 5%">-</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 75%">
                            (3) &nbsp;&nbsp;&nbsp; Packing List as per contract
                        </td>
                        <td style="font-size: 11px; width: 5%">-</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 75%">
                            (4) &nbsp;&nbsp;&nbsp; Certificate of Origin
                        </td>
                        <td style="font-size: 11px; width: 5%">-</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 75%">
                            (5) &nbsp;&nbsp;&nbsp; Inspection and warranty/guarantee certificate
                        </td>
                        <td style="font-size: 11px; width: 5%">-</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%"></td>
                        <td style="font-size: 11px; width: 75%">
                            (5) &nbsp;&nbsp;&nbsp; Pre-Shipment Inspection report with recommendation of shipment
                            signed by representative of BOF and Principal (if applicable)
                        </td>
                        <td style="font-size: 11px; width: 5%">-</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                        <td style="font-size: 11px; width: 5%">,,</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 5%">b.</td>
                        <td colspan="4" style="font-size: 11px; width: 90%">
                            Remaining 20% of LC value/Remittance will be paid after clearance by BOF on satisfactory
                            receipt acceptance of stores/equipment.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                21. &nbsp;&nbsp; All Bank charges in respect of Letter of Credit outside Bangladesh is to be borne by the seller.
                Any amendment/add confirmation requested by the Seller is also to be borne by them.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                22. &nbsp;&nbsp; In case of CFR contracts, all charges including Container/Terminal/Handling, if any, till the stores
                are handed over to the BOF premises will be borne by the Supplier/Local Agent.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                23. &nbsp;&nbsp; <b>The stores will have to be supplied to BOF premises from Chattogram Seaport/Mongla
                    Seaport/ Hazrat Shahjalal International Airport at the cost of the Supplier/ Local Agent.</b>
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                24. &nbsp;&nbsp; Insurance charges of contracted items will be borne by the BOF.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                25. &nbsp;&nbsp; Fax/E-mail offer will not be accepted.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                26. &nbsp;&nbsp; Conditional offer will not be accepted.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                27. &nbsp;&nbsp; Bangladesh Bank Registration Number of the local agent must be mentioned in covering letter of
                the local agent during submission of Principal’s quotation.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                28. &nbsp;&nbsp; <u><b>Double Envelope System</b></u>: In case the tender is invited in Double Envelope System, suppliers
                will act as under:
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                <table width="100%">
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 95%">
                            a. &nbsp;&nbsp;&nbsp;&nbsp; The 1st envelope will contain the Financial Offer which will include quoted rate & agency
                            commission if applicable in original proforma invoice
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 95%">
                            b. &nbsp;&nbsp;&nbsp;&nbsp; The 2nd envelope will contain the Technical Offer which will include all
                            documents/papers including proforma invoice (Showing nomenclature of the items and quantity
                            only) less the financial offer.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 95%">
                            c. &nbsp;&nbsp;&nbsp;&nbsp; The Envelope bearing financial offer will be marked as "FINANCIAL OFFER'" in Block
                            Capital letter. Likewise the envelope bearing tech offer will be marked as "TECHNICAL OFFER".
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 95%">
                            d. &nbsp;&nbsp;&nbsp;&nbsp; Both the envelopes will be put inside a 3rd envelope which will be clearly marked with
                            tender no, date and the office seal of the suppliers.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 95%">
                            e. &nbsp;&nbsp;&nbsp;&nbsp; All the envelopes must be properly closed and sealed.
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;"></td>
                        <td style="font-size: 11px; width: 95%">
                            f. &nbsp;&nbsp;&nbsp;&nbsp; Frontal view of the envelopes will be as follows:
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 11px; width: 5%;">

                        </td>
                        <td style="font-size: 11px; width: 95%;">
                            <img src="{{ asset('images/envelop.png') }}" alt="Image Alt Text">

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                29. &nbsp;&nbsp; Photocopy of letter of Authorization (Issued by the principal) is acceptable if the original copy is
                held with BOF. The Bidder is required to confirm the same while submitting photocopy with offer.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                30. &nbsp;&nbsp; If any principal is found to give more than one offer for the same item through more than one
                local agent then all the offers of that particular principal for that item will be treated as cancelled.
            </td>
        </tr>
        <tr>
            <td style="font-size: 11px;">
                31. &nbsp;&nbsp; The supplier must have the membership of Bangladesh Indenting Agents Association.
            </td>
        </tr>
    </table>

</div>
<footer style="position: fixed; bottom: 0; width: 100%; font-size: 18px; text-align: center">
    <p>
        RESTRICTED
    </p>
</footer>
</body>
