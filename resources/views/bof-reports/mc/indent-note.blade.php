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
                <td style="width: 33%"></td>
                <td style="width: 34%; text-align: center;">
                    সীমিত <br>
                    নোট
                </td>
                <td style="width: 33%; text-align: center;">
                </td>
            </tr>
        </table>

        <!-- subject part -->

        <table width="100%">
            <tr>
                <td><b><u>{!! (optional($data)->subject) !!}</u></b></td>
            </tr>
        </table>
        <!-- subject part -->

        <!-- body part -->

        <table width="100%">
            <tr>
                <td>{!! (optional($data)->body) !!}</td>
            </tr>
        </table>

        <!-- body part -->


        <br>

        <!--main start-->

        <div style="text-align: center;">
            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <thead>
                <tr>
                    <th style="width: 10%; padding: 2px; ">ক্রঃ নং </th>
                    <th style="width: 10%; padding: 2px; ">ইনডেন্ট দ্রব্যের নাম </th>
                    <th style="width: 10%; padding: 2px; ">একক </th>
                    <th style="width: 10%; padding: 2px; ">বাৎসরিক চাহিদা</th>
                    <th style="width: 10%; padding: 2px; ">বর্তমান মজুদ</th>
                    <th style="width: 10%; padding: 2px; ">পাইপ লাইন</th>
                    <th style="width: 10%; padding: 2px; ">ঘাটতি</th>
                    <th style="width: 10%; padding: 2px; ">ইনডেন্ট বর্ণিত পরিমান</th>
                    <th style="width: 10%; padding: 2px; ">ব্যবহার </th>
                </tr>

                <tr>
                    <th style="width: 10%; padding: 2px; ">ক</th>
                    <th style="width: 10%; padding: 2px; ">খ</th>
                    <th style="width: 10%; padding: 2px; ">গ</th>
                    <th style="width: 10%; padding: 2px; ">ঘ</th>
                    <th style="width: 10%; padding: 2px; ">ঙ</th>
                    <th style="width: 10%; padding: 2px; ">চ</th>
                    <th style="width: 10%; padding: 2px; ">ছ</th>
                    <th style="width: 10%; padding: 2px; ">জ</th>
                    <th style="width: 10%; padding: 2px; ">ঝ</th>
                </tr>

                </thead>
                <tbody>
                @foreach ($data->details as $index => $list)
                <tr>
                    <td style="width: 10%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |</td>
                    <td style="text-align: left; width: 30%; padding: 2px;">
                        @if($list->itemNameShortSpecification != null)
                        <span>{{optional($list)->itemNameShortSpecification}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->uom != null)
                        <span>{{optional($list)->uom}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->demandQty != null)
                        <span>{{optional($list)->demandQty}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->presentStock != null)
                        <span>{{optional($list)->presentStock}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->pipeLine != null)
                        <span>{{optional($list)->pipeLine}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->shortage != null)
                        <span>{{optional($list)->shortage}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->indentQty != null)
                        <span>{{optional($list)->indentQty}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->purposeOfUse != null)
                        <span>{{optional($list)->purposeOfUse}}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <table width="100%">
                <tr>
                    <td>মোট প্রকাশনা সংখ্যা ({{$Controller::entoBn(count($data->details),'number')}}) মাত্র</td>
                </tr>
            </table>
        </div>


    </div>

    <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
        <p>
            সীমিত
        </p>
    </footer>

</body>
