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

        @font-face {
            font-family: 'Times-New-Roman';
            src: url('/public/style/Times_New_Roman.ttf');
        }

        @font-face {
            font-family: 'SutonnyMJ';
            src: url('/public/style/SUTOM.woff');
        }

        body{
            font-family: "nikosh", Arial, Helvetica, sans-serif, "Times-New-Roman", "SutonnyMJ" !important;
        }



        .borderTable {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            padding: 5px;
        }

    </style>

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


<body style="margin-top: 20px; font-size: 17px;" >
    <?php
    $en = [];
    $bn = [];
    $data = json_decode($val['data']);
//     dd($data);
    ?>

    <div style="font-size: 26px !important; margin-top: 5px; ">
        <table style="width: 100%;">
            <tr>
                <td style="width: 33%"></td>
                <td style="width: 34%; text-align: center;">
                    <br><br>
                    সীমিত
                    <br>
                    <u>বাংলাদেশ সমরাস্ত্র কারখানা (বি ও এফ)</u>
                    <br>
                    (আই এস আই শাখা)

                </td>
                <td style="width: 33%; text-align: center;">
                    <!-- <br>
            বিওএফ নম্বরঃ -->
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td>এল এম <br>
                    {{ $Controller::enToBnConveter($data->master ? $data->master->lmNo : '') }}
                </td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: left;">
                    <u><span style="font-size: 16px;"><b>{{ $data->master ? $data->master->subject : '' }}
                            </b></span></u>
                </td>
            </tr>
            <tr>
                <td>{!! $Controller::enToBnConveter(optional($data->master)->reference) !!}</td>
            </tr>
{{--            <tr>--}}
{{--                <td style="width: 100% !important; text-align: left;">--}}

{{--                </td>--}}
{{--            </tr>--}}
        </table>

        {{-- <br> --}}
        <div style="text-align: center;">

            <table class="center tbBorder" style="text-align: center; padding: 5px; font-size: 17px;">
                <thead>
                    <tr>
                        <td style="width: 5%; padding: 2px; ">ক্রঃ</td>
                        <td style="width: 30%; padding: 2px; ">দ্রব্যের বিবরণ</td>
                        <td style="width: 10%; padding: 2px; ">পরিমাণ</td>
                        @if (isset($data->master->tools))
                            @if ($data->master->tools === true)
                                <th style="width: 15%; padding: 2px; ">Consumtion Rate/Million</th>
                            @endif
                        @endif
                        <td style="width: 30%; padding: 2px; ">
                            @if (!$data->master->chemical)
                            ব্যবহারকারী শাখার নাম
                            @endif
                            @if ($data->master->chemical)
                                <span>
                                    প্রয়োজনীয় পরীক্ষা
                                </span>
                            @endif
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->details as $index => $list)
                        <tr>
                            <td style="width: 10%; padding: 2px; vertical-align: text-top;">
                                {{ $Controller::enToBnConveter($index + 1, 'number') }}
                            </td>
                            <td style="vertical-align: text-top; text-align: left;">
                                @if ($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->itemName != null)
                                    {{ $list->sampleRegisterDetails ? $list->sampleRegisterDetails->itemName : "" }}<br>
                                        @if (isset($list->itemSpecification))
                                            {!!  $list->itemSpecification ? $list->itemSpecification : '' !!}
                                        @endif
                                @else
                                        @if (isset($list->itemSpecification))
                                            {!! $list->itemSpecification ? $list->itemSpecification : '' !!}
                                        @endif
                                @endif
                            </td>
                            <td style="vertical-align: text-top; font-size: 12px;">
                                @if ($list->qty != null)
                                    {{ $list->qty }}
                                @endif
                                @if (isset($list->uom))
                                    {{ $list->uom ? $list->uom : '' }}
                                @endif
                            </td>
                            @if (isset($data->master->tools))
                                @if ($data->master->tools === true)
                                    <td style="font-size: 12px;">
                                        @if (isset($list->consumptionRate))
{{--                                            {{ $Controller::enToBnConveter(optional($list)->consumptionRate) }}--}}
                                            {{ $list->consumptionRate ? $list->consumptionRate : '' }}
                                        @endif
                                    </td>
                                @endif
                            @endif
                            <td style="vertical-align: text-top; font-size: 12px;">
                                @if ($data->master->chemical)
                                    {{ $list->remarks }}
                                @endif
                                @if (!$data->master->chemical)
                                    {{ $list->departmentNameList }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
            </table>
            <div>
                <br>
                <table style="width: 100%;">
                    <tr>
                        <td>{!! optional($data->master)->body !!}</td>
                    </tr>
                </table>

                <br>

                <table style="width: 100%;">
                    <tr>
                        <td style="width: 50%;"></td>
                        <td style="width: 20%;"></td>
                        <td style="width: 30%">
                            <div style="float: right;">
                                @if ($data->master->manager != null && $data->master->manager->employeeNameBangla != null)
                                    <span>{{ optional($data->master->manager)->employeeNameBangla }}</span>
                                @endif
                                <br>

                                @if (
                                    $data->master->manager != null &&
                                        $data->master->manager->employeeOfficialInformation != null &&
                                        $data->master->manager->employeeOfficialInformation->designation != null &&
                                        $data->master->manager->employeeOfficialInformation->designation->banglaName != null)
                                    <span>{{ optional($data->master->manager->employeeOfficialInformation->designation)->banglaName }}
                                        আইএসআই </span>
                                @endif

                                <div>
                                    পক্ষে পরিচালক পরিকল্পনা ও সংরক্ষণ <br>
                                    ফোনঃ ৪২২২
                                </div>
                                @if (isset($data->master->letterDate))
                                    <div>
                                      {{ getMonthYear($Controller::enToBnConveter($Controller::dateFormatter($data->master ? $data->master->letterDate : ''))) }}
                                    </div>
                                @endif

                            </div>
                        </td>
                    </tr>

                </table>

                <table style="width: 100%;">
                    <tr>
                        <td>{!! optional($data->master)->footer !!}</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>
    <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
        <p>
            সীমিত
        </p>
    </footer>

</body>
