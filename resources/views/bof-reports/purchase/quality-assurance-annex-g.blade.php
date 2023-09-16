
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
            .page-break {page-break-after: always;}
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

    <header style="position: fixed; top: 2%; width: 100%; text-align: center">
        <p>
            RESTRICTED
        </p>
    </header>

    <table width="100%">
        <tr>
            <td style="width: 70%"></td>
            <td style="width: 30%; text-align: left;">
                <u>ANNEX - G TO</u> <br>
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
            <td style="text-align: center;"><b><u>QUALITY ASSURANCE CERTIFICATE (QAC)</u></b></td>
        </tr>
    </table>

    <br>

    <br>

    <table width="100%">
        <tr>
            <td style="text-align: left;">1. As per Bangladesh Ordnance Factories (BOF) Contract No .................................................
                Dated .................. for the procurement of items mentioned in paragraph 2 below, the concerned involved from seller are:
            </td>
        </tr>
    </table>

    <br>


    <table width="100%" style="margin-left: 4%; margin-right: 4%" class="tbBorder">
        <tr >
            <td>
                <b>Supplier:</b>
                <br>
                <span>(As mentioned in the contract with address and other contract information including the email address)</span>
            </td>

            <td>
                <b>Quality Control Department of Manufacturer:</b>
                <br>
                <span>(Address and other contract information including the email address)</span>

            </td>
        </tr>


        <tr>
            <td>
                <b>Manufacturer:</b>
                <br>
                <span>(As mentioned in the contract with address and other contract information and stamped seal to be used)</span>
            </td>

            <td>
                <b>Local Agent:</b>
                <br>
                <span>As mentioned in the contract with address and other contract information and stamped seal to be used)</span>

            </td>
        </tr>



    </table>

    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left;">
                2. Stores : (List of stores to be provided for which QAC is submitted as mentioned in the contract including following information,
                separate sheets may be enclosed, if required):
            </td>

        </tr>
    </table>

    <br>

    <table width="100%" style="margin-left: 4%;">
    <tr>
        <td style="text-align: left;">
            a.	Inventory Inspection.
        </td>

    </tr>
    </table>


    <table width="100%" class="center tbBorder" style="margin-left: 4%; margin-right: 4%">
        <thead>
        <tr>
            <th style="padding: 2px; ">Ser</th>
            <th style="padding: 2px; ">Nomenclature/Brand/ Model/Part Number/ Factory Code/Lot Number/Year of Production</th>
            <th style="padding: 2px; ">A/U</th>
            <th style="padding: 2px; ">Quantity</th>
            <th style="padding: 2px; ">Quantities Physically Found During Inspection by the Quality Control Department of OEM</th>
            <th style="padding: 2px; ">Remarks</th>
        </tr>
        <tr>
            <th style="padding: 2px; ">a</th>
            <th style="padding: 2px; ">b</th>
            <th style="padding: 2px; ">c</th>
            <th style="padding: 2px; ">d</th>
            <th style="padding: 2px; ">e</th>
            <th style="padding: 2px; ">f</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="padding: 2px; "> &nbsp; </td>
            <td style="padding: 2px; ">&nbsp; </td>
            <td style="padding: 2px; ">&nbsp; </td>
            <td style="padding: 2px; ">&nbsp; </td>
            <td style="padding: 2px; ">&nbsp; </td>
            <td style="padding: 2px; "> &nbsp;</td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>

    <table width="100%">
        <tr>
            <td style="text-align: left;">
                It is to certify that the equipment/stores are found correct and all the quantity found as per contract.
            </td>

        </tr>
    </table>

    <br>

    <table width="100%" style="margin-left: 4%; margin-right: 4%" class="tbBorder">
        <tr>
            <td>
                <br>
                __________________ <br>
                Sign by Supplier <br>
                Name: <br>
                Designation: <br>
                Address (Including the email address): <br>
                Date:
            </td>

            <td>
                <br>
                __________________ <br>
                Sign by Manufacturer <br>
                Quality Control Department <br>
                Name: <br>
                Designation: <br>
                Address (Including the email address): <br>
                Date:


            </td>
        </tr>
    </table>

    <br>
    <br>


    <div class="page-break"></div>



    <table width="100%">
        <tr>
            <td style="text-align: left;">
                3.	Inspection of Technical Specification (As Per Contract) .
                The Quality Control Department of Manufacturer will check the functionality of the stores as per technical specifications.
                All Technical parameters are to be checked one by one as mentioned in the contract.
                If, for any reason cannot be checked, it will be mentioned in the remarks column as under :
            </td>
        </tr>
    </table>

    <br>

    <table width="100%" class="center tbBorder" style="margin-left: 4%; margin-right: 4%">
        <thead>
        <tr>
            <th style="padding: 2px; ">Ser</th>
            <th style="padding: 2px; ">Description as Per Contract</th>
            <th style="padding: 2px; ">Technical  Specifications as Per Contract</th>
            <th style="padding: 2px; ">Functional Condition Physically Found During Inspection by the Quality Control Department of OEM</th>
            <th style="padding: 2px; ">Remarks</th>
        </tr>
        <tr>
            <th style="padding: 2px; ">a</th>
            <th style="padding: 2px; ">b</th>
            <th style="padding: 2px; ">c</th>
            <th style="padding: 2px; ">d</th>
            <th style="padding: 2px; ">e</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="padding: 2px; "> &nbsp;</td>
            <td style="padding: 2px; "> </td>
            <td style="padding: 2px; "> </td>
            <td style="padding: 2px; "> </td>
            <td style="padding: 2px; "> </td>
        </tr>
        </tbody>
    </table>

    <br>
    <br>


    <table width="100%">
        <tr>
            <td style="text-align: left;">
                <p>4. <u>QAC related Documents/Certificates.</u>
                    <br>
                    <br>
                    Following documents/certificates are to be furnished with the QAC. All test/inspection result/results
                    which was/were conducted by the quality control department of manufacturer are to be furnished including the following: <br> <br>
                    a.	Cetificate of country of origin. <br>
                    b. 	Cetificate of country of manufacture. <br>
                    c. 	Cetificate of year of production. <br>
                    d. 	Cetificate of warranty as specified in the contract. <br>
                    e. 	Cetificate of quality assurance and genuineness. <br>
                    f.	Certificate of after sales service as specified in the contract (if applicable). <br>
                    g.	Functionality test (s) certificate (s) for fulfillment the technical specification as per contract. <br>
                    h.	Laboratory test (s) certificate(s) for fulfillment of  the technical specification as per contract. <br>
                    j.	Any other certificate as mentioned in the contract or deemed necessary. <br>
                </p>
            </td>
        </tr>
    </table>




</div>


<footer style="position: fixed; bottom: 0; width: 100%; text-align: center">
    <p>
        G - 2 <br>
        RESTRICTED

    </p>
</footer>

</body>
