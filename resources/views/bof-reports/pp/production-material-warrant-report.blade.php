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

        @page {
            size: landscape;
            orientation: landscape;
            header: html_myHeader;
            footer: html_myFooter;

        }

        @media print {
            .page-break {
                page-break-after: always;
            }
        }

        body {
            writing-mode: tb-rl;
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
            width: 100% !important;
            padding: 5px;
        }

        .rootTable {
            border: 1px solid;
            vertical-align: middle;
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

        @page {
            margin-top: 15%;
            margin-bottom: 20%;
        }

        td {
            vertical-align: top !important;
        }
    </style>

</head>


<body class="landscapePage" style="font-size: 16px;">
<?php
$data = json_decode($val['data']);
//    dd($data);

function findObjectById($array, $id)
{

    foreach ($array as $element) {
        if ($id == $element->id) {
            return $element->name;
        }
    }
    return false;
}
?>




        <!-- header part-->
<htmlpageheader name="myHeader" style="display:none;">
    <div style="text-align: right">
        <span>বিওএফ নং: ২৬৮</span>
    </div>
    <div style="font-size: 20px; text-align: center">
        <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
        <span>গাজীপুর সেনানিবাস</span><br>
        <span><u>উৎপাদনী ও দ্রব্যের হুকুমনামা</u></span><br>
    </div>
    <br>
</htmlpageheader>

<!--body part-->
<div>
    <div>
        <div>
            <table style="width: 100%; border: 1px solid; font-size: 15px;">
                <tr>
                    <td style="width: 60%; border-right: 1px solid;">
                        <span>শাখার নামঃ &nbsp;
                            @if ($data->master->sectionId != null)
                                <span>{{ $data->master->sectionId->banglaName }}</span>
                            @endif
                        </span><br>
                        <span>বস্তুর নামঃ &nbsp;
                            @if (isset($data->master->productItem))
                                <span>{{ $data->master->productItem->itemNameBn ? $data->master->productItem->itemNameBn : "" }}</span>
                            @endif
                        </span><br>
                        <span>অংকন নম্বরঃ &nbsp;
                            @if ($data->master->drawingNo != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->drawingNo) }}
                                </span>
                            @endif
                        </span><br>
                        <span>সংক্ষিপ্ত ফরমায়েশনামা নম্বরঃ &nbsp;
                            @if ($data->master->extractNo != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->extractNo) }}
                                </span>
                            @endif
                        </span><br>
                        <span>হুকুমনামা নম্বর ও তারিখঃ &nbsp;
                            @if ($data->master->warrantNo != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->warrantNo) }}
                                </span>
                                <span>
                                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->master->warrantDate)) }}
                                </span>
                            @endif
                        </span><br>
                        <span>সম্পূরক কার্যাদেশ নম্বরঃ &nbsp;
                            @if ($data->master->supplementaryOrderNo != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->supplementaryOrderNo) }}
                                </span>
                            @endif
                        </span><br>
                        <span>সরবরাহের সূচীঃ &nbsp;
                            @if ($data->master->scheduleOfSupply != null)
                                <span>{{ $data->master->scheduleOfSupply }}</span>
                            @endif
                        </span><br>
                        <span>খরচের হারঃ &nbsp;
                            @if ($data->master->completionRate != null)
                                <span>{{ $data->master->completionRate }}</span>
                            @endif
                        </span><br>
                    </td>
                    <td style="width: 40%">
                        <span>শাখার নম্বরঃ &nbsp;
                            @if ($data->master->sectionNo != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->sectionNo) }}
                                </span>
                            @endif
                        </span><br>
                        <span>প্রয়োজনীয় সংখ্যাঃ &nbsp;
                            @if ($data->master->requiredNumber != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->requiredNumber) }}
                                </span>
                            @endif
                        </span><br>
                        <span>তারিখঃ &nbsp;
                            @if ($data->master->warrantDate != null)
                                <span>
                                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->master->warrantDate)) }}
                                </span>
                            @endif
                        </span><br>
                        <span>সমাপ্তির তারিখঃ &nbsp;
                            @if ($data->master->completionDate != null)
                                <span>
                                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->master->completionDate)) }}
                                </span>
                            @endif
                        </span><br>
                        <span>প্রাক্কলিত নম্বরঃ &nbsp;
                            @if ($data->master->estimateNo != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->estimateNo) }}
                                </span>
                            @endif
                        </span><br>
                        <span>প্ৰাপকঃ &nbsp;
                            @if (isset($data->master->recipient))
                                @if($data->master->recipient===1)
                                    মেইন স্টোর
                                @elseif($data->master->recipient===2)
                                    সিটিজি
                                @elseif($data->master->recipient===3)
                                    আইএএন্ডই
                                @endif
                            @endif
                        </span><br>
                        <span>বর্তমান মজুদঃ &nbsp;
                            @if (isset($data->master->productItem))
                                <span>{{ $data->master->productItem->availableStock ?  : 0 }}</span>
                            @endif
                            {{--@if ($data->master->currentStock != null)
                                <span>
                                    {{ $Controller::enToBnConveter($data->master->currentStock) }}
                                </span>
                            @endif--}}
                        </span><br>
                    </td>
                </tr>

            </table>
        </div>
        <br>
        <div>
            <div style="text-align: center">
                <span><u>মঞ্জুরকৃত দ্রব্যের বিবরণ</u></span>
            </div>
            <div>
                <table class="rootTable" width="100%">
                    <thead>
                    <tr>
                        <td class="rootTable text-center" style="width: 10%">ক্রমিক</td>
                        <td class="rootTable text-center" style="width: 45%">বরাদ্দকৃত দ্রব্যের নাম ও বিবরণ</td>
                        <td class="rootTable text-center" style="width: 15%">একক</td>
                        <td class="rootTable text-center" style="width: 15%">পরিমান/ওজন</td>
                        <td class="rootTable text-center" style="width: 15%">ফোলিও নং</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data->subItemDetails as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{ $index + 1 }}</td>
                            <td valign="middle" class="rootTable">
                                @if (isset($item->mcItemMaster))
                                    <span>{{ $item->mcItemMaster ? $item->mcItemMaster->itemNameBn : '' }}</span><br>
                                    <span>{{ $item->mcItemMaster ? $item->mcItemMaster->itemSpecification : '' }}</span>
                                @endif
                            </td>
                            <td valign="middle" class="rootTable text-center">
                                @if ($item->mcItemMaster != null && $item->mcItemMaster->mcItemUnit != null)
                                    <span>{{ $item->mcItemMaster->mcItemUnit->nameBn }}</span>
                                @endif
                            </td>
                            <td valign="middle" class="rootTable text-center">
                                <span>{{ $item->qty }}</span>
                            </td>
                            <td valign="middle" class="rootTable text-center">
                                @if ($item->mcItemMaster != null)
                                    <span>{{ $item->mcItemMaster->itemClassRefNo }}</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div>
            <div style="text-align: center">
                <span><u>মঞ্জুরকৃত শ্রমের বিবরণ</u></span>
            </div>
            <div>
                <table class="rootTable" width="100%">
                    <thead>
                    <tr>
                        <td class="rootTable text-center" style="width: 10%">ক্রমিক</td>
                        <td class="rootTable text-center" style="width: 45%">প্রক্রিয়ার নাম ও বিবরণ</td>
                        <td class="rootTable text-center" style="width: 15%">সংখ্যা</td>
                        <td class="rootTable text-center" style="width: 15%">হার</td>
                        <td class="rootTable text-center" style="width: 15%">
                            <span>ঘন্টা/মিলিয়ন/সংখ্যা</span>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{ $index + 1 }}</td>
                            <td valign="middle" class="rootTable">
                                @if ($item->processSetupMaster != null)
                                    <span>{{ $item->processSetupMaster ? $item->processSetupMaster->nameBn : '' }}</span>
                                    <br>
                                    <span>{{ $item->processSetupMaster ? $item->processSetupMaster->remarks : '' }}</span>
                                @endif
                            </td>
                            <td class="rootTable text-center"></td>
                            <td class="rootTable">
                                @foreach ($item->processSetupMaster->details as $index => $process)
                                    <span>{{ $process->employee }}</span>
                                    <br>
                                @endforeach
                            </td>
                            <td class="rootTable text-center">
                                @foreach ($item->processSetupMaster->details as $index => $process)
                                    <span>{{ $Controller::entoBn($process->timeHour, 'number') }} (প্রতিটি)</span>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--.......next page.......-->
    <div class="page-break"></div>
    <div style="padding-top: 90px !important;">
        <div>
            <span>আদেশকৃত সংখ্যা..................</span>
        </div>
        <div style="text-align: center">
            <span><u>তলবি দ্রব্যের বিবরণ</u></span>
        </div>
        <div>
            <table class="rootTable" width="100%">
                <thead>
                <tr>
                    <td class="rootTable text-center" style="width: 26%">দ্রব্যের পরিমান ও সঠিক বিবরণ</td>
                    <td class="rootTable text-center" style="width: 12%">একক</td>
                    <td class="rootTable text-center" style="width: 12%">চাহিদার পরিমান বা ওজন</td>
                    <td class="rootTable text-center" style="width: 12%">দেয় পরিমান বা ওজন</td>
                    <td class="rootTable text-center" style="width: 12%">মোট পরিমান বা ওজন</td>
                    <td class="rootTable text-center" style="width: 26%">তলবি নোট নম্বর ও তারিখ</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="rootTable">
                        <br><br><br><br><br><br><br><br><br>
                    </td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!--...............................................-->
        <br>
        <div style="text-align: center">
            <span><u>পুনুরুদ্ধারকৃত দ্রব্যের বিবরণ</u></span>
        </div>
        <div>
            <table class="rootTable" width="100%">
                <thead>
                <tr>
                    <td class="rootTable text-center" style="width: 26%">দ্রব্যের পরিমান ও সঠিক বিবরণ</td>
                    <td class="rootTable text-center" style="width: 10%">একক</td>
                    <td class="rootTable text-center" style="width: 15%">চাহিদার পরিমান বা ওজন</td>
                    <td class="rootTable text-center" style="width: 15%">মোট পরিমান বা ওজন</td>
                    <td class="rootTable text-center" style="width: 26%">পুনুরুদ্ধারকৃত নোটের নম্বর ও তারিখ</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="rootTable">
                        <br><br><br><br><br><br><br><br><br>
                    </td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                </tr>
                </tbody>
            </table>
        </div>

        <!--...............................................-->
        <br>
        <div style="text-align: center">
            <span><u>খুচরা কাজের বিবরণ</u></span>
        </div>
        <div>
            <table class="rootTable" width="100%">
                <thead>
                <tr>
                    <td class="rootTable text-center" style="width: 15%">তারিখ</td>
                    <td class="rootTable text-center" style="width: 15%">সংখ্যা /সেট</td>
                    <td class="rootTable text-center" style="width: 20%">গ্রহণকারী / পরিদর্শন</td>
                    <td class="rootTable text-center" style="width: 20%"> পরিদর্শন নোটের নম্বর</td>
                    <td class="rootTable text-center" style="width: 10%"> তারিখ</td>
                    <td class="rootTable text-center" style="width: 10%"> বাকী</td>
                    <td class="rootTable text-center" style="width: 10%">বাতিল</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="rootTable">
                        <br><br><br><br><br><br><br><br><br>
                    </td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                </tr>
                </tbody>
            </table>
        </div>

        <!--...............................................-->
        <br>
        <div style="text-align: center">
            <span><u>সংশোধনের বিবরণী </u></span>
        </div>
        <div>
            <table class="rootTable" width="100%">
                <thead>
                <tr>
                    <td class="rootTable text-center" style="width: 10%">ক্রমিক</td>
                    <td class="rootTable text-center" style="width: 35%">প্রক্রিয়া বিবরণী</td>
                    <td class="rootTable text-center" style="width: 25%">পরিবর্তিত হার</td>
                    <td class="rootTable text-center" style="width: 10%"> একক / প্রতি</td>
                    <td class="rootTable text-center" style="width: 20%"> প্রাধিকার নং</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="rootTable">
                        <br><br><br><br><br><br><br><br><br>
                    </td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                    <td class="rootTable"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--footer part-->
<htmlpagefooter name="myFooter" style="display:none">
    <table style="width: 100%; font-size: 15px; border-collapse: collapse; margin-top:40px;">
        <thead>
        <tr>
            <td style="width:10%; padding-right: 10px;" class="text-right" ></td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->firstEmployee->employeeInfo->signatureURL))
                    <img style="width: 100px; height: 60px;"
                         src="{{$data->firstEmployee->employeeInfo->signatureURL}}" alt="">
                @endif
            </td>
            <td style="width:10%;"></td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->lastEmployee->employeeInfo->signatureURL))
                    <img style="width: 100px; height: 60px;"
                         src="{{$data->lastEmployee->employeeInfo->signatureURL}}" alt="">
                @endif
            </td>
        </tr>


        <tr>
            <td style="width:10%; padding-right: 10px;" class="text-right" >প্রস্তুতকারকঃ</td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->firstEmployee->employeeInfo->employeeNameBangla))
                    {{$data->firstEmployee->employeeInfo->employeeNameBangla}}
                @endif
            </td>
            <td style="width:10%;"></td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->lastEmployee->employeeInfo->employeeNameBangla))
                    {{$data->lastEmployee->employeeInfo->employeeNameBangla}}
                @endif
            </td>
        </tr>



        <tr>
            <td style="width:10%; padding-right: 10px;" class="text-right"></td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->firstEmployee->employeeInfo->employeeOfficialInformation->designation->banglaName))
                    {{$data->firstEmployee->employeeInfo->employeeOfficialInformation->designation->banglaName}}
                @endif
            </td>
            <td style="width:10%;"></td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->lastEmployee->employeeInfo->employeeOfficialInformation->designation->banglaName))
                    {{$data->lastEmployee->employeeInfo->employeeOfficialInformation->designation->banglaName}}
                @endif
            </td>
        </tr>


        <tr>
            <td style="width:10%; padding-right: 10px;" class="text-right"></td>
            <td style="width:40%;" class="text-left"></td>
            <td style="width:10%;"></td>
            <td style="width:40%;" class="text-left">
                @if (isset($data->onBehalf))
                    {{ $data->onBehalf}}
                @endif
            </td>
        </tr>


        <tr>
            <td style="width:10%; padding-right: 13px;" class="text-right">তারিখঃ</td>
            <td style="width:40%;" class="text-left">
                @if(isset($data->firstEmployee->employeeInfo->entryDate))
                    {{$Controller::enToBnConveter($Controller::dateFormatter($data->firstEmployee->employeeInfo->entryDate))}}
                @endif
            </td>
            <td style="width:10%;">
            </td>
            <td style="width:40%;" class="text-left">
                তারিখঃ @if(isset($data->lastEmployee->employeeInfo->entryDate))
                    {{$Controller::enToBnConveter($Controller::dateFormatter($data->lastEmployee->employeeInfo->entryDate))}}
                @endif
            </td>
        </tr>
        </thead>

    </table>
</htmlpagefooter>


</body>

</html>