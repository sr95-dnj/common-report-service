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
                    নোট শীট
                </td>
                <td style="width: 33%; text-align: center;">
                </td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td style="text-align: left;">
                    নথি নং : <u>{!! (optional($data)->materialFinalIndentNo) !!}</u>
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

        <!--main start-->

        <div style="text-align: center;">
            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <thead>
                <tr>
                    <th style="width: 10%; padding: 2px; ">ক্রঃ নং </th>
                    <th style="width: 20%; padding: 2px; ">দ্রব্যের বিবরণ </th>
                    <th style="width: 10%; padding: 2px; ">দ্রব্যের একক </th>
                    <th style="width: 10%; padding: 2px; ">ইনডেন্ট বর্ণিত পরিমান</th>
                    <th style="width: 15%; padding: 2px; ">একক মূলো টাকা</th>
                    <th style="width: 15%; padding: 2px; ">মোট মূলো টাকা </th>
                    <th style="width: 20%; padding: 2px; ">মন্তব্য</th>

                </tr>

                <tr>
                    <th style="width: 10%; padding: 2px; ">ক</th>
                    <th style="width: 20%; padding: 2px; ">খ</th>
                    <th style="width: 10%; padding: 2px; ">গ</th>
                    <th style="width: 10%; padding: 2px; ">ঘ</th>
                    <th style="width: 15%; padding: 2px; ">ঙ</th>
                    <th style="width: 15%; padding: 2px; ">চ</th>
                    <th style="width: 20%; padding: 2px; ">ছ</th>
                </tr>

                </thead>
                <tbody>
                @foreach ($data->details as $index => $list)
                <tr>
                    <td style="width: 10%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |</td>
                    <td style="text-align: left; width: 20%; padding: 2px;">
                        @if($list->itemNameShortSpecification != null)
                        <span>{{optional($list)->itemNameShortSpecification}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 10%; padding: 2px;">
                        @if($list->uom != null)
                        <span>{{optional($list)->uom}}</span>
                        @endif
                    </td>

                    <td style="text-align: right; width: 10%; padding: 2px;">
                        @if($list->indentQty != null)
                        <span>{{optional($list)->indentQty}}</span>
                        @endif
                    </td>

                    <td style="text-align: right; width: 15%; padding: 2px;">
                        @if($list->unitPrice != null)
                        <span>{{optional($list)->unitPrice}}</span>
                        @endif
                    </td>

                    <td style="text-align: right; width: 15%; padding: 2px;">
                        @if($list->totalPrice != null)
                        <span>{{optional($list)->totalPrice}}</span>
                        @endif
                    </td>

                    <td style="text-align: left; width: 20%; padding: 2px;">
                        @if($list->remarks != null)
                        <span>{{optional($list)->remarks}}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <table width="100%">
                <tr>
                    <td style="text-align: left; width: 10%; padding: 2px;"></td>
                    <td style="text-align: left; width: 20%; padding: 2px;"></td>
                    <td style="text-align: left; width: 10%; padding: 2px;"></td>
                    <td style="text-align: left; width: 10%; padding: 2px;"></td>
                    <td style="text-align: left; width: 15%; padding: 2px;">ইন্ডেন্টের মোট মূল্য = </td>
                    <td style="text-align: right; width: 15%; padding: 2px;">
                        <b><u> {{optional($data)->totalIndentValue}} </u></b>
                    </td>
                    <td style="text-align: left; width: 20%; padding: 2px;"></td>
                </tr>
            </table>

            <br>
            <table width="100%">
                <tr>
                    <td>মোট প্রকাশনা সংখ্যা ({{$Controller::entoBn(count($data->details),'number')}}) মাত্র</td>
                </tr>
            </table>
        </div>

        <!-- body part -->

        <table width="100%">
            <tr>
                <td>{!! (optional($data)->body) !!}</td>
            </tr>
        </table>

        <!-- body part -->


    </div>

    <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
        <p>
            সীমিত
        </p>
    </footer>

</body>