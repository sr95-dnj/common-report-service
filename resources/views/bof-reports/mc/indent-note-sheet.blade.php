<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>

    @page {
        size: auto;
        margin-top: 15%;
        header: html_myHeader;
        footer: html_myFooter;
    }

    .main-content {
        margin-top: 100px;
    }

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

    <htmlpageheader name="myHeader" style="display:none;">
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
                    @if($data->materialIndentFinalMaster != null && $data->materialIndentFinalMaster->indentNo != null)
                        <span>নথি নং : <u>{{optional($data)->materialIndentFinalMaster->indentNo}}</u></span>
                    @endif
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
    </htmlpageheader>

    <div class="main-content" style="font-size: 24px; ">
        <!--main start-->

        <div style="text-align: center;">
            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <thead>
                <tr>
                    <td style="width: 10%; padding: 2px; ">ক্রঃ নং </td>
                    <td style="width: 20%; padding: 2px; ">দ্রব্যের বিবরণ </td>
                    <td style="width: 10%; padding: 2px; ">দ্রব্যের একক </td>
                    <td style="width: 10%; padding: 2px; ">ইনডেন্ট বর্ণিত পরিমান</td>
                    <td style="width: 15%; padding: 2px; ">একক মূলো টাকা</td>
                    <td style="width: 15%; padding: 2px; ">মোট মূলো টাকা </td>
                    <td style="width: 20%; padding: 2px; ">মন্তব্য</td>

                </tr>

                <tr>
                    <td style="width: 10%; padding: 2px; ">ক</td>
                    <td style="width: 20%; padding: 2px; ">খ</td>
                    <td style="width: 10%; padding: 2px; ">গ</td>
                    <td style="width: 10%; padding: 2px; ">ঘ</td>
                    <td style="width: 15%; padding: 2px; ">ঙ</td>
                    <td style="width: 15%; padding: 2px; ">চ</td>
                    <td style="width: 20%; padding: 2px; ">ছ</td>
                </tr>

                </thead>
                <tbody>
                @foreach ($data->details as $index => $list)
                    <tr>
                        <td style="width: 10%; padding: 2px; ">{{$Controller::entoBn($index+1,'number')}} |</td>
                        <td style="text-align: left; width: 20%; padding: 2px;">
                            @if($list->itemName != null)
                                <span>{{optional($list)->itemName}}</span>
                            @endif
                            <br>
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
        </div>
        <div style="width: 100%; font-size: 12px; margin-top: 8px;">
            <div style="width: 30%; float: left;">মোট প্রকাশনা সংখ্যা: ({{$Controller::entoBn(count($data->details),'number')}}) মাত্র</div>
            <div style="width: 70%; float: right; text-align: right;">ইন্ডেন্টের মোট মূল্য = <b><u> {{optional($data)->totalIndentValue}} </u></b></div>
        </div>

        <br>

        <!-- body part -->

        <table width="100%">
            <tr>
                <td>{!! (optional($data)->body) !!}</td>
            </tr>
        </table>

        <br>

        <table width="100%">
            <tbody>
            @foreach ($data->approvalHistoryList as $index => $list)
                <tr>
                    <td style="text-align: left; width: 20%; padding: 2px;">

                        @if($list->fromUserId != null && $list->fromUserId->name != null)
                            <u><span>{{optional($list)->fromUserId->name}}</span></u>
                        @endif
                        <br>
                        <br>
                        @if($list->comment != null)
                            <span>{{optional($list)->comment}}</span>
                        @endif
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- body part -->


    </div>

    <htmlpagefooter name="myFooter" style="display:none">
        <table width="100%">
            <tr>
                <td width="33%">
                 <!--<span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span>-->
                </td>
                <td width="33%" align="center" style="font-weight: bold; font-style: italic;">
                    {PAGENO}/{nbpg}
                </td>
                <td width="33%" style="text-align: right;">
                </td>
            </tr>
        </table>
    </htmlpagefooter>

</body>
