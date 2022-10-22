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
                    সীমিত
                    <br>
                    <u>দৈনিক আদেশনামা ২য় খন্ড</u>
                    <br>
                    <u>বেসামরিক</u>

                </td>
                <td style="width: 33%; text-align: center;">
                    <!-- <br>
                বিওএফ নম্বরঃ -->
                </td>
            </tr>
        </table>


        <table width="100%">
            <tr>
                <td style="width: 30%">ইউনিট</td>
                <td style="width: 3%">:</td>
                <td style="width: 20%">বাংলাদেশ সমরাস্ত্র কারখানা</td>
                <td style="width: 5%"></td>
                <td style="width: 10%">স্থান</td>
                <td style="width: 3%;">:</td>
                <td style="width: 30%;">গাজীপুর সেনানিবাস</td>
            </tr>

            <tr>
                <td style="width: 30%">ক্রমিক নম্বর</td>
                <td style="width: 3%">:</td>
                <td style="width: 20%">
                    @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder)->orderNumber !=
                    null)
                    <span>{{$Controller::entoBn(optional($data->master->presentDailyOrder)->orderNumber,'number')}}</span>
                    @endif

                </td>
                <td style="width: 5%"></td>
                <td style="width: 10%">তারিখ</td>
                <td style="width: 3%;">:</td>
                <td style="width: 30%;">
                    @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder)->banglaDate !=
                    null)
                    <span>
                        {{ optional($data->master->presentDailyOrder)->banglaDate}} /
                        {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->presentDailyOrder)->entryDate))}}
                    </span>
                    @endif

                </td>
            </tr>

            <tr>
                <td style="width: 30%">পূর্বে প্রকাশিত দৈনিক আদেশ নামা ২য় খন্ড নম্বর</td>
                <td style="width: 3%">:</td>
                <td style="width: 20%">
                    <span>
                        @if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder)->orderNumber
                        !=
                        null)
                        {{$Controller::entoBn( optional($data->master->previousDailyOrder)->orderNumber,'number')}}
                        @endif
                    </span>
                </td>
                <td style="width: 5%"></td>
                <td style="width: 10%">তারিখ</td>
                <td style="width: 3%;">:</td>
                <td style="width: 30%;">
                    @if($data->master->previousDailyOrder != null && $data->master->previousDailyOrder)->banglaDate !=
                    null)
                    <span> {{ optional($data->master->previousDailyOrder)->banglaDate}} /
                        {{$Controller::enToBnConveter($Controller::dateFormatter(optional($data->master->previousDailyOrder)->entryDate))}}
                    </span>
                    @endif
                </td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td style="text-align: center;">
                    <br>
                    <strong><u>{{ optional($data->master)->divison}}</u></strong>
                </td>
            </tr>
        </table>

        <!-- subject part -->

        <table width="100%">
            <tr>
                <td><b><u>{{ optional($data->master)->subject}}</u></b></td>
            </tr>
        </table>
        <!-- subject part -->

        <!-- header part -->

        <table width="100%">
            <tr>
                <td>{!! ( optional($data->master)->header) !!}</td>
            </tr>
        </table>

        <!-- header part -->


        <br>
        <div style="text-align: center;">
            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <thead>
                    <tr>
                        <th style="width: 10%; padding: 2px; ">ক্রঃ নং </th>
                        <th style="width: 25%; padding: 2px; ">নম্বর /পদবি /নাম </th>
                        <th style="width: 25%; padding: 2px; ">পদোন্নতির পূর্বের বেতন, <br> বেতন স্কেল ও গ্রেড</th>
                        <th style="width: 15%; padding: 2px; ">পদোন্নতির তারিখ</th>
                        <th style="width: 25%; padding: 2px; "> পদোন্নতির বেতন নির্ধারণ, <br> বেতন স্কেল ও গ্রেড</th>
                    </tr>

                </thead>
            </table>


            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <tbody>
                    @foreach ($data->details as $index => $list)
                    <tr>
                        <td style="width: 10%; padding: 2px; ">{{$Controller::enToBnConveter($index+1,'number')}} |</td>
                        <td style="text-align: left; width: 25%; padding: 2px;">
                            @if($list->employee != null && $list->employee)->code !=null)
                            <span>{{$Controller::entoBn(optional($list->employee)->code,'number')}}</span>
                            @endif
                            <br>
                            @if($list->employee->employeeOfficialInformation != null &&
                            $list->employee->employeeOfficialInformation->designation !=null &&
                            $list->employee->employeeOfficialInformation->designation->banglaName !=null)
                            <span>{{ optional($list->employee->employeeOfficialInformation->designation)->banglaName}}</span>
                            @endif
                            <br>
                            @if($list->employee != null && $list->employee->employeeNameBangla)
                            <span>{{ optional($list->employee)->employeeNameBangla}}</span>
                            @endif
                        </td>

                        <td style="width: 25%; padding: 2px;">
                            @if($list->previousMainSalary != null)
                            <span>{{$Controller::enToBnConveter( optional($list)->previousMainSalary,'number')}}
                                /-</span>
                            @endif
                            <br>
                            @if($list->previousScale != null)
                            <span>{{$Controller::enToBnConveter($Controller::minimizeScaleNumber(optional($list)->previousScale))}}</span>
                            @endif
                            <br>
                            @if($list->previousGrade != null && $list->previousGrade->banglaName)
                            <span>{{ optional($list->previousGrade)->banglaName}}</span>
                            @endif
                        </td>

                        <td style="width: 15%; padding: 2px;">
                            @if($list->promotionDate != null)
                            <span>
                                {{$Controller::enToBnConveter($Controller::dateFormatter(optional($list)->promotionDate))}}
                            </span>
                            @endif
                        </td>

                        <td style="width: 25%; padding: 2px;">
                            @if($list->presentSalary != null)
                            <span>{{$Controller::enToBnConveter( optional($list)->presentSalary,'number')}} /-</span>
                            @endif
                            <br>
                            @if($list->presentScale != null)
                            <span>
                                {{$Controller::enToBnConveter($Controller::minimizeScaleNumber(optional($list)->presentScale))}}
                            </span>
                            @endif
                            <br>
                            @if($list->presentGrade != null && $list->presentGrade->banglaName)
                            <span>{{optional($list->presentGrade)->banglaName}}</span>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <br>
                <br>
            </table>

            <table width="100%">
                <tr>
                    <td>মোট প্রকাশনা সংখ্যা ({{$Controller::enToBnConveter(count($data->details),'number')}}) মাত্র</td>
                </tr>

            </table>

            <br>


            <!-- body part -->


            <table width="100%">
                <tr>
                    <td>{!! (optional($data->master)->body) !!}</td>
                </tr>

            </table>

            <br>

            <!-- body part -->

            <table width="100%" style="text-align: center;">
                <tr>
                    @if($data->master->presentDailyOrder !=null
                    && $data->master->presentDailyOrder->referenceNo !=
                    null)
                    <td>{{$Controller::enToBnConveter(optional($data->master->presentDailyOrder)->referenceNo)}}</td>
                </tr>

            </table>

            <br>


            <!-- footer part -->

            <table width="100%">
                <tr>
                    <td width="50%">{!! (optional($data->master)->footer) !!}</td>
                    <td width="20%"></td>
                    <td width="30%">

                        <div style="float: right;">


                            @if($data->master->presentDailyOrder != null && $data->master->presentDailyOrder->manager !=
                            null && $data->master->presentDailyOrder->manager)->employeeNameBangla != null)
                            <span>{{ optional($data->master->presentDailyOrder->manager)->employeeNameBangla }}</span>
                            @endif
                            <br>

                            @if($data->master->presentDailyOrder != null &&
                            $data->master->presentDailyOrder->managerDesignation !=
                            null && $data->master->presentDailyOrder->managerDesignation)->banglaName != null)
                            <span>{{ optional($data->master->presentDailyOrder->managerDesignation)->banglaName }}</span>
                            @endif
                        </div>



                    </td>
                </tr>

            </table>


            <!-- footer part -->




        </div>
    </div>