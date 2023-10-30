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

        @page {}

        @page portrait {
            sheet-size: legal;
        }

        @media print {
            .page-break {
                page-break-after: always;
            }

            .page-margin {
                margin: 5mm 5mm 5mm 5mm;
            }


        }

        body {
            /* writing-mode: tb-rl; */
            margin: 5mm 5mm 5mm 5mm;
        }

        /* .table-margin{
            margin: 5mm 5mm 5mm 5mm;
        } */

        .table-center {
            margin-left: auto;
            margin-right: auto;
            width: 100% !important;
            /* padding: 5px; */
        }

        .rootTable {
            border: 1px solid;
            vertical-align: middle;
            border-collapse: collapse;
        }

        .border-collapse {
            border-collapse: collapse;
        }

        .left-border {
            border-left: 1px solid;
            border-collapse: collapse;
        }

        .right-border {
            border-right: 1px solid;
            border-collapse: collapse;
        }

        .top-border {
            border-top: 1px solid;
            border-collapse: collapse;
        }

        .bottom-border {
            border-bottom: 1px solid;
            border-collapse: collapse;
        }

        td {
            vertical-align: top !important;
        }

        .div-fixed{
            height: 100% !important ;
        }

        .div-fixed2{
            height: 100% !important ;
        }
    </style>
    <?php
    $data = json_decode($val['data']);
//     dd($data);
    ?>

    <?php
    function getMonthYear($date)
    {
        if ($date !== null && $date !== '') {
            return substr($date, 6);
        } else {
            return '';
        }
    }
    ?>

</head>




<body style="font-size: 16px;">
    <div class="div-fixed" style="border: 1px solid black;">
        <div class="div-fixed" style="border-left: 1px solid black; border-right: 1px solid black; margin-left: 30px; margin-right: 30px;">

        <table class="table-center"
            style="width: 100%; font-size: 15px; border-collapse: collapse;">
            <thead>
                <tr>
                    <td class="text-center" colspan="7">
                        সীমিত
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="text-decoration: underline" colspan="7">
                        নোট শীট
                    </td>
                </tr>
                <tr>
                    <td class="text-center" colspan="7">
                        <b>বাংলাদেশ সমরাস্ত্র কারখানা (বিওএফ)</b>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" colspan="7">
                        (আইএসআই)
                    </td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td colspan="7">নথি নং বিওএফ (আইএসআই) {{$Controller::enToBnConveter(isset($data->master->noteSheetNo) ? $data->master->noteSheetNo : "")}}</td>
                </tr>
                <tr>
                    <td colspan="7"> <u><b>{{ $data->master->subject ? $data->master->subject : '' }}</b> </u></td>
                </tr>
                <tr>
                    <td colspan="7">{!! isset($data->master->reference) ? $data->master->reference : '' !!}</td>
                </tr>
                <tr>
                    <td colspan="7" class="text-center" style="text-decoration: underline">১</td>
                </tr>
                <tr>
                    <td colspan="7">১। {!! $data->master->remarks ? $data->master->remarks : '' !!}</td>
                </tr>
            <tr>
                <td colspan="7"><br><br></td>
            </tr>
            </thead>
            <thead>
                <tr>
                    <td style="width: 5%;" class="text-center right-border top-border bottom-border">ক্রঃ</td>
                    <td style="width: 35%;" class="text-center left-border right-border top-border bottom-border">দ্র্যব্যের নাম</td>
                    <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">ইউনিট</td>
                    <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">পরিমাণ</td>
                    <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">গৃহীত</td>
                    <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">প্রত্যাখ্যাত</td>
                    <td style="width: 35%;" class="text-center top-border  bottom-border">মন্তব্য</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($data->details as $index => $list)
                    <tr>
                        <td class="text-center bottom-border">
                            {{ $Controller::enToBnConveter($index + 1, 'number') }}</td>
                        <td class="text-left left-border bottom-border">
                            {!! $list->itemDescription ? $list->itemDescription : '' !!}</td>
                        <td class="text-center left-border bottom-border"> </td>
                        <td class="text-center left-border  bottom-border">
                            {{ $list->receiveQty ? $list->receiveQty : '' }} </td>
                        <td class="text-center left-border  bottom-border">
                            {{ $list->acceptQty ? $list->acceptQty : '' }} </td>
                        <td class="text-center left-border  bottom-border">
                            {{ $list->rejectQty ? $list->rejectQty : '' }} </td>
                        <td class="text-left left-border  bottom-border">{!! $list->remarks ? $list->remarks : '' !!} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            <br>
        <table class="table-center"
            style="width: 100%; font-size: 15px; border-collapse: collapse;">
            <thead>
                <tr>
                    <td colspan="7" style="padding-bottom: 45px;">২। পরিচালক পরিকল্পনা এবং সংরক্ষণ মহোদয়ের সদর অনুমোদনের জন্য উপস্থাপন করা হল ।</td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="3">{{isset($data->master->employee) ? $data->master->employee : "" }}</td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="3">@if($data->master->designation != null){{isset($data->master->designation) ? $data->master->designation : "" }}, {{isset($data->master->section) ? $data->master->section : "" }} @endif</td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="3">@if($data->master->noteSheetDate !=null) {{ getMonthYear($Controller::enToBnConveter($Controller::dateFormatter($data->master ? $data->master->noteSheetDate : ''))) }} @endif</td>
                </tr>
            </thead>
        </table>

        @if(isset($data->approvalHistoryList) && count($data->approvalHistoryList) > 0)
            @foreach($data->approvalHistoryList as $index => $approval)
                <table class="table-center"
                       style="width: 100%; font-size: 15px; border-collapse: collapse;">
                    <thead>
                    <tr>
                        <td colspan="7" style="text-decoration: underline">{{isset($approval->fromUserId->designation) ? $approval->fromUserId->designation : ""}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-center" style="text-decoration: underline"> {{ $Controller::enToBnConveter($index + 2, 'number') }}</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="7">{{ isset($approval->comment) ? $approval->comment : ''}}</td>
                    </tr>
                    </thead>
                </table>
                <br/>
                <br/>
            @endforeach
        @endif


    </div>
    </div>
{{--    {!! $data->master->footerDetails ? $data->master->footerDetails : '' !!}--}}
    <footer style="position: fixed; bottom: 0; width: 100%; font-size: 16px; text-align: center;">
        <p>
            পৃষ্ঠা নম্বর-১
        </p>
        <p>
            সীমিত
        </p>
    </footer>

</body>
