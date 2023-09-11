<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
    @page {
        margin-top: 5px;
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

    <div style="font-size: 24px; ">
        <table width="100%">
            <tr>
                <td style="width: 25%"></td>
                <td style="width: 50%; text-align: center;">
                    BANGLADESH ORDNANCE FACTORY (BOF) <br>
                    GAZIPUR CANTONMENT, GAZIPUR-1703
                    web: www.bof.gov.bd, email: <br>
                    <u>man.pur.admin@bof.gov.bd</u>
                </td>
                <td style="width: 25%; text-align: center;">
                </td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td style="width: 25%"></td>
                <td style="width: 50%; text-align: center; font-size: 18px; margin-top: 2%">
                    Tender/Re-Tender Notice
                </td>
                <td style="width: 25%; text-align: center;">
                </td>
            </tr>
        </table>


        <br>

        <!--main start-->

        <div style="text-align: center;">
            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <thead>
                <tr>
                    <td style="width: 10%; padding: 2px; ">Serial</td>
                    <td style="width: 10%; padding: 2px; ">Tender No. & Date</td>
                    <td style="width: 10%; padding: 2px; ">Name Of items & QTY</td>
                    <td style="width: 10%; padding: 2px; ">Last Date of Selling</td>
                    <td style="width: 10%; padding: 2px; ">Date of opening</td>
                    <td style="width: 10%; padding: 2px; ">Currency</td>
                    <td style="width: 10%; padding: 2px; ">Price of tender form (Non Refundable)</td>
                    <td style="width: 10%; padding: 2px; ">Country</td>
                </tr>

                </thead>
                <tbody>
                @foreach ($data->details as $index => $list)
                <tr>
                    <td colspan="8" style="text-align: center; border: none; padding-top: 15px; padding-bottom:15px">
                        @if($list->itemHeading != null)
                            <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="width: 10%; padding: 2px; ">{{$index+1}}.</td>
                    <td style="text-align: left; width: 30%; padding: 2px;">
                        @if($list->tenderPreparation != null)
                        <span>{{optional($list)->tenderPreparation->tenderNo}}</span>
                        @endif
                        @if($list->tenderPreparation != null)
                         <span>{{optional($list)->tenderPreparation->publishDate}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->itemHeading != null)
                        <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->itemHeading != null)
                        <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->itemHeading != null)
                        <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->itemHeading != null)
                        <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->itemHeading != null)
                        <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->itemHeading != null)
                        <span>{{optional($list)->itemHeading}}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <br>

        <!-- subject part -->

        <table width="100%">
            <tr>
                <td><b><u>{!! (optional($data)->remarks) !!}</u></b></td>
            </tr>
        </table>
        <!-- subject part -->


    </div>

    <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
        <p>
            সীমিত
        </p>
    </footer>

</body>
