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

</head>


<body style="margin-top: 20px;">
<?php
$en = [];
$bn = [];
$data = json_decode($val['data']);
?>

<div style="font-size: 24px; margin-top: 5px; ">
    <table width="100%">
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
    <table width="100%">
        <tr>
            <td>এল এম <br>
                {{$Controller::enToBnConveter($data->master ? $data->master->lmNo : '')}}
            </td>
        </tr>
        <tr>
            <td style="width: 100% !important; text-align: left;">
                <u><span style="font-size: 16px;">{{($data->master ? $data->master->subject : '')}} </span></u>
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

        <table class="center tbBorder" style="text-align: center; padding: 5px;">
            <thead>
            <tr>
                <th style="width: 5%; padding: 2px; ">ক্রঃ</th>
                <th style="width: 30%; padding: 2px; ">দ্রব্যের বিবরণ</th>
                <th style="width: 10%; padding: 2px; ">পরিমাণ</th>
                <th style="width: 15%; padding: 2px; ">Consumtion Rate/Million</th>

                <th style="width: 30%; padding: 2px; ">
                    @if(!$data->master->chemical)
                        ব্যবহারকরী শাখার নাম
                    @endif
                    @if($data->master->chemical)
                        <span>
							প্রয়োজনীয় পরীক্ষা
                        </span>
                    @endif
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data->details as $index => $list)
                <tr>
                    <td style="width: 10%; padding: 2px; ">{{$Controller::enToBnConveter($index+1,'number')}} </td>
                    <td>
                        @if($list->sampleRegisterDetails != null && $list->sampleRegisterDetails->itemName != null)
                            {{optional($list->sampleRegisterDetails)->itemName}}<br>
                        @endif
                        {{optional($list)->itemSpecification}}
                    </td>
                    <td>
                        @if($list->qty != null)
							{{$Controller::enToBnConveter(optional($list)->qty)}}
                        @endif
                    </td>
                    <td>
                        @if($list->consumptionRate != null)
							{{$Controller::enToBnConveter(optional($list)->consumptionRate)}}
                        @endif
                    </td>
                    <td>
                        @if($data->master->chemical)
							{{$list->remarks}}
                        @endif
                        @if(!$data->master->chemical)
							{{$list->departmentNameList}}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <br>
            <table width="100%">
                <tr>
                    <td>{!! (optional($data->master)->body) !!}</td>
                </tr>
            </table>

            <br>

            <table width="100%">
                <tr>
                    <td width="50%"></td>
                    <td width="20%"></td>
                    <td width="30%">
                        <div style="float: right;">
                            @if($data->master->manager != null &&
                            $data->master->manager->employeeNameBangla != null)
                                <span>{{ optional($data->master->manager)->employeeNameBangla }}</span>
                            @endif
                            <br>

                            @if($data->master->manager != null &&
                            $data->master->manager->employeeOfficialInformation !=
                            null && $data->master->manager->employeeOfficialInformation->designation != null
                            && $data->master->manager->employeeOfficialInformation->designation->banglaName != null
                            )
                                <span>{{ optional($data->master->manager->employeeOfficialInformation->designation)->banglaName }} আইএসআই </span>
                            @endif

                            <div>
                                পক্ষে পরিচালক পরিকল্পনা ও সংরক্ষণ <br>
                                ফোনঃ ৪২২২
                            </div>


                        </div>
                    </td>
                </tr>

            </table>

            <table width="100%">
                <tr>
                    <td>{!! (optional($data->master)->footer) !!}</td>
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