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


<body style="font-size: 17px;">
    <?php
    $en = [];
    $bn = [];
    $data = json_decode($val['data']);
//     dd($data);
    ?>

    <div style="font-size: 24px; ">
        <table width="100%">
            <tr>
                <td style="width: 33%"></td>
                <td style="width: 34%; text-align: center;">
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
        <table width="100%">
            <tr>
                <td>এল এম <br>
                    {{ $Controller::enToBnConveter($data->master ? $data->master->lmNo : '') }}
                </td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: left;">
                    <u><span style="font-size: 16px;"><b>{{ $data->master ? $data->master->subject : '' }}</b>
                        </span></u>
                </td>
            </tr>
            <tr>
                <td>{!! $Controller::enToBnConveter(optional($data->master)->reference) !!}</td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: left;">

                </td>
            </tr>
        </table>
        <br>
        <div style="text-align: center;">

            <table class="center tbBorder" style="text-align: center; padding: 5px; font-size: 18px !important;">
                <thead>
                    <tr>
                        <td style="width: 5%; padding: 2px; ">ক্রঃ</td>
                        <td style="width: 35%; padding: 2px; ">দ্রব্যের বিবরণ</td>
                        <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">হস্তগত</td>
                        <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">গৃহীত</td>
                        <td style="width: 5%;" class="text-center left-border right-border top-border bottom-border">প্রত্যাখ্যাত</td>
{{--                        <td style="width: 5%; padding: 2px; ">ফলাফল</td>--}}
                        <td style="width: 35%; padding: 2px; ">মন্তব্য</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->details as $index => $list)
                        <tr>
                            <td style="width: 10%; padding: 2px; vertical-align: text-top;">
                                {{ $Controller::enToBnConveter($index + 1, 'number') }}
                                |</td>
                            <td style="text-align: left; vertical-align: text-top;">
                                @if ($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->itemName != null)
                                    <span>{{ optional($list->sampleRegisterDetails)->itemName }}</span><br>
                                    <span style="font-size: 12px;">
                                        @if (isset($list->sampleRegisterDetails))
                                            {!! $list->sampleRegisterDetails ? $list->sampleRegisterDetails->itemSpecification : "" !!}
                                        @endif
                                    </span>
                                @else
                                    <span style="font-size: 12px;">
                                        @if (isset($list->itemSpecification))
                                            {!!  $list->itemSpecification ? $list->itemSpecification : "" !!}
                                        @endif
                                    </span>
                                @endif
                            </td>
                            <td style="vertical-align: text-top;">
                                @if ($list->qty != null)
                                    <span>
                                        {{ $list->qty }}</span>
                                @endif
                            </td>
                            <td style="vertical-align: text-top;">
                                @if (isset($list->acceptQty))
                                    <span>
                                        {{ $list->acceptQty ? $list->acceptQty : "" }}</span>
                                @endif
                            </td>
                            <td style="vertical-align: text-top;">
                                @if (isset($list->rejectQty))
                                    <span>
                                        {{  $list->rejectQty ? $list->rejectQty : "" }}</span>
                                @endif
                            </td>
{{--                            <td style="vertical-align: text-top;">--}}
{{--                                @if ($list->finalResult == 'ACCEPT')--}}
{{--                                    <span>গৃহীত</span>--}}
{{--                                @endif--}}

{{--                                @if ($list->finalResult == 'REJECT')--}}
{{--                                    <span>প্রত্যাখ্যাত</span>--}}
{{--                                @endif--}}

{{--                            </td>--}}
                            <td style="text-align: center; vertical-align: text-top;">
                                @if ($list->remarks != null)
                                    {!! optional($list)->remarks !!}
                                    <span></span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
            </table>
            <div>
                <br>
                {{-- <table width="100%">
                <tr>
                    <td>{!! (optional($data->master)->body) !!}</td>
                </tr>
            </table> --}}

                <table width="100%" style="margin-top: 40px;">
                    <tr>
                        <td width="50%"></td>
                        <td width="20%"></td>
                        <td width="34%">
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
                                    পক্ষে পরিচালক পরিকল্পনা এবং সংরক্ষণ <br>
                                    ফোনঃ ৪২২২
                                </div>
                                @if (isset($data->master->letterDate))
                                    <div>
                                        {{ getMonthYear($Controller::enToBnConveter($Controller::dateFormatter(isset($data->master->letterDate) ? $data->master->letterDate : ''))) }}
                                    </div>
                                @endif

                            </div>
                        </td>
                    </tr>

                </table>

                <table width="100%">
                    <tr>
                        <td>{!! optional($data->master)->footer !!}</td>
                    </tr>

                </table>

            </div>
        </div>

    </div>
    <footer
        style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center;">
        <p>
            সীমিত
        </p>
    </footer>

</body>
