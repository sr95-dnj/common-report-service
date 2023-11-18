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
            margin-bottom: 20%;
        }

        .page-break-inside-avoid{
            page-break-inside: avoid;
        }

        @media print {
            .page-break {
                page-break-after: always;
            }

            .page-margin {
                margin: 25mm 25mm 25mm 25mm;
            }
        }

        body {
            writing-mode: tb-rl;
            margin: 25mm 25mm 25mm 25mm;
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
        @page {
            margin-top: 15%;
        }

        td {
            vertical-align: top !important;
        }
    </style>
    <?php
    $data = json_decode($val['data']);
//     dd($data);
    ?>
</head>




<body class="landscapePage" style="font-size: 16px;">
<!-- header part-->
<htmlpageheader name="myHeader" style="display:none;">

    <div style="font-size: 17px; text-align: center">
        <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
        <span>গাজীপুর সেনানিবাস</span><br>
        <span><u>উৎপাদনী হুকুমনামা</u></span><br>
    </div>
    <br>
</htmlpageheader>

<div>
    <table  style="width: 100%; font-size: 15px; border-collapse: collapse;">
        <thead>
        <tr>
            <td colspan="2" style="width: 60%;">
                            <span>শাখার নামঃ &nbsp;
                                @if ($data->sectionId != null)
                                    <span>{{ $data->sectionId->banglaName }}</span>
                                @endif
                            </span><br>
                <span>বস্তুর নামঃ &nbsp;
                                @if (isset($data->productItem))
                        <span>{{ $data->productItem ? $data->productItem->nameBn : '' }}</span>
                        @if (isset($data->mcProductComponent))
                            <span>-{{ $data->mcProductComponent ? $data->mcProductComponent->nameBn : '' }}</span>
                        @endif
                        <br><span>{{ isset($data->shortDescription) ? $data->shortDescription : '' }}</span>
                    @endif
                            </span><br>
                <span>অংকন নম্বরঃ &nbsp;

                            </span><br>
                <span>সংক্ষিপ্ত ফরমায়েশনামা নম্বরঃ &nbsp;
                                @if (isset($data->extractNo) && $data->extractNo != null)
                        {{ $Controller::enToBnConveter($data->extractNo ? $data->extractNo : '') }}
                    @endif
                            </span><br>
                <span>হুকুমনামা নম্বর ও তারিখঃ &nbsp;
                                @if ($data->warrantNo != null)
                        <span>
                                        {{ $Controller::enToBnConveter($data->warrantNo) }}
                                    </span>&nbsp;
                        <span>
                                        {{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate)) }}
                                    </span>
                    @endif
                            </span><br>
                <span>সম্পূরক কার্যাদেশ নম্বরঃ &nbsp;
                                @if ($data->supplementaryOrderNo != null)
                        <span>
                                        {{ $Controller::enToBnConveter($data->supplementaryOrderNo) }}
                                    </span>
                    @endif
                            </span><br>
                <span>সরবরাহের সূচীঃ &nbsp;
                                @if ($data->scheduleOfSupply != null)
                        <span>{{ $Controller::enToBnConveter($Controller::dateFormatter($data->scheduleOfSupply)) }}</span>
                    @endif
                            </span><br>
                <span>সরবরাহের শেষ তারিখঃ &nbsp;
                                @if ($data->lastDateOfSupply != null)
                        <span>
                                        {{ $Controller::enToBnConveter($Controller::dateFormatter($data->lastDateOfSupply)) }}
                                    </span>
                    @endif
                            </span><br>
                <span>মন্তব্যঃ &nbsp;
                                @if ($data->specialComments != null)
                        <span>{{ $data->specialComments }}</span><br/><br/>
                    @endif
                            </span><br>
            </td>
            <td colspan="2" style="width: 40%;">
                            <span>শাখার নম্বরঃ &nbsp;
                                @if ($data->sectionNo != null)
                                    <span>
                                        {{ $Controller::enToBnConveter($data->sectionNo) }}
                                    </span>
                                @endif
                            </span><br>
                <span>প্রয়োজনীয় সংখ্যাঃ &nbsp;
                                @if ($data->requiredNbr != null)
                        <span>
                                        {{ $Controller::enToBnConveter($data->requiredNbr) }}
                                    </span>
                    @endif
                            </span><br>
                <span>তারিখঃ &nbsp;
                                {{-- @if ($data->date != null)
                                <span>
                                    {{$Controller::enToBnConveter($Controller::dateFormatter($data->date))}}
                                </span>
                            @endif --}}
                            </span><br>
                <span>সমাপ্তির তারিখঃ &nbsp;
                                @if ($data->completionDate != null)
                        <span>
                                        {{ $Controller::enToBnConveter($Controller::dateFormatter($data->completionDate)) }}
                                    </span>
                    @endif
                            </span><br>
                <span>প্রাক্কলিত নম্বরঃ &nbsp;
                                @if ($data->estimateNo != null)
                        <span>
                                        {{ $Controller::enToBnConveter($data->estimateNo) }}
                                    </span>
                    @endif
                            </span><br>
                <span>প্ৰাপকঃ &nbsp;
                                @if ($data->recipient != null)
                        <span>{{ $data->recipient }}</span>
                    @endif
                            </span><br>
            </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <td rowspan="2" class="rootTable text-center" style="width: 45%">প্রক্রিয়া বিবরণী </td>
            <td rowspan="2" class="rootTable text-center" style="width: 10%">হার</td>
            <td rowspan="2" class="rootTable text-center" style="width: 10%"> একক প্রতি</td>
            <td colspan="3" class="rootTable text-center" style="width: 35%"> খুচরা কাজের বিবরণ</td>
        </tr>
        <tr>
            <td class="rootTable text-center" style="width: 10%">দেয় তারিখ</td>
            <td class="rootTable text-center" style="width: 10%">সংখ্যা </td>
            <td class="rootTable text-center" style="width: 15%">সমাপ্তির তারিখ</td>
        </tr>
        </thead>
        <tbody class="rootTable">
        @foreach ($data->details as $index => $item)
            <tr>
                <td valign="middle" class="rootTable text-left">
                                <span style="text-align: center !important;">
                                    @if ($item->processSetupMaster != null)
                                        (<u>প্রতিটি পরীক্ষার জন্য প্রয়োজনীয় শ্রম </u>)<br>
                                        <u>{{ $item->processSetupMaster ? $item->processSetupMaster->nameBn : '' }}</u>
                                    @endif
                                </span><br>

                    <span style="text-align: left !important;">
                        @if(isset($item->processSetupMaster->details) && count($item->processSetupMaster->details)  > 0)
                            @foreach ($item->processSetupMaster->details as $subIndex => $processItem)
                                {{$subIndex + 1}}. <span>{{$processItem->employee}}</span>
                                <br>
                            @endforeach
                        @endif
                    </span>
                </td>
                <td class="text-center rootTable">
                    <span style="text-align: left !important;">
                        <br>
                        @if(isset($item->processSetupMaster->details) && count($item->processSetupMaster->details)  > 0)
                            @foreach ($item->processSetupMaster->details as $subIndex => $processItem)
                                @if(isset($processItem->timeHour))
                                    <span>{{$processItem->timeHour}}</span>
                                    <br>
                                @else
                                    <br>
                                @endif

                            @endforeach
                        @endif
                    </span>
                </td>
                <td class="text-center rootTable">
                    <span style="text-align: left !important;">
                        <br>
                        @if(isset($item->processSetupMaster->details) && count($item->processSetupMaster->details)  > 0)
                            @foreach ($item->processSetupMaster->details as $subIndex => $processItem)
                                @if(isset($processItem->timeHour))
                                    ঘন্টা
                                    <br>
                                @else
                                    <br>
                                @endif

                            @endforeach
                        @endif
                    </span>
                </td>
                <td class="text-center rootTable"></td>
                <td class="text-center rootTable"></td>
                <td class="text-center rootTable"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
