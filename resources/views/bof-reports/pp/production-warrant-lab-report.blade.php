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
            padding: 3px;
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
            <td colspan="3" style="width: 50%">
                শাখার নামঃ &nbsp;
                @if ($data->sectionId != null)
                    <span>{{ $data->sectionId->banglaName }}</span>
                @endif
            </td>
            <td colspan="4" style="width: 50%">
                শাখার নম্বরঃ &nbsp;
                @if ($data->sectionNo != null)
                    {{ $Controller::enToBnConveter($data->sectionNo) }}
                @endif
            </td>
        </tr>
        <tr style="width: 100%">
            <td class="rootTable" colspan="3" style="width: 50%">
                বস্তুর নামঃ &nbsp;
                @if (isset($data->productItem))
                    {{ $data->productItem ? $data->productItem->nameBn : '' }}
                @endif
                @if (isset($data->mcProductComponent))
                    {{ $data->mcProductComponent ? $data->mcProductComponent->nameBn : '' }}
                @endif
                @if(isset($data->shortDescription))
                    {{ isset($data->shortDescription) ? $data->shortDescription : '' }}
                @endif
            </td>
            <td class="rootTable" colspan="4" style="width: 50%">
                প্রয়োজনীয় সংখ্যাঃ &nbsp;
                @if ($data->requiredNbr != null)
                    {{ $Controller::enToBnConveter($data->requiredNbr) }}
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                অংকন নম্বরঃ &nbsp;
                @if (isset($data->extractNo) && $data->extractNo != null)
                    {{ $Controller::enToBnConveter($data->extractNo ? $data->extractNo : '') }}
                @endif
            </td>
            <td colspan="4" style="width: 50%">
                তারিখঃ &nbsp;
                {{--@if ($data->date != null)
                    {{$Controller::enToBnConveter($Controller::dateFormatter($data->date))}}
                @endif--}}
            </td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                সংক্ষিপ্ত ফরমায়েশনামা নম্বরঃ &nbsp;
                @if (isset($data->extractNo) && $data->extractNo != null)
                    {{ $Controller::enToBnConveter($data->extractNo ? $data->extractNo : '') }}
                @endif
            </td>
            <td colspan="4" style="width: 50%">
                সমাপ্তির তারিখঃ &nbsp;
                @if ($data->completionDate != null)
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->completionDate)) }}
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                হুকুমনামা নম্বর ও তারিখঃ &nbsp;
                @if ($data->warrantNo != null)
                    {{ $Controller::enToBnConveter($data->warrantNo) }}
                @endif
                @if(isset($data->warrantDate))
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate)) }}
                @endif
            </td>
            <td colspan="4" style="width: 50%">
                প্রাক্কলিত নম্বরঃ &nbsp;
                @if ($data->estimateNo != null)
                    {{ $Controller::enToBnConveter($data->estimateNo) }}
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                সম্পূরক কার্যাদেশ নম্বরঃ &nbsp;
                @if ($data->supplementaryOrderNo != null)
                    {{ $Controller::enToBnConveter($data->supplementaryOrderNo) }}
                @endif
            </td>
            <td colspan="4" style="width: 50%">
                প্ৰাপকঃ &nbsp;
                @if ($data->recipient != null)
                    @if($data->recipient === 'MAIN STORE')
                        প্রধান দ্রব্যাগার
                    @elseif($data->recipient === 'CTG')
                        সিটিজি
                    @elseif($data->recipient === 'IA&E')
                        আইএএন্ডই
                    @endif
                @endif
            </td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                সরবরাহের সূচীঃ &nbsp;
                @if ($data->scheduleOfSupply != null)
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->scheduleOfSupply)) }}
                @endif
            </td>
            <td colspan="4" style="width: 50%"></td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                সরবরাহের শেষ তারিখঃ &nbsp;
                @if ($data->lastDateOfSupply != null)
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->lastDateOfSupply)) }}
                @endif
            </td>
            <td colspan="4" style="width: 50%"></td>
        </tr>

        <tr>
            <td colspan="3" style="width: 50%">
                মন্তব্যঃ &nbsp;
                @if ($data->specialComments != null)
                    {{ $data->specialComments }}
                @endif
            </td>
            <td colspan="4" style="width: 50%"></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <td rowspan="2" class="rootTable text-center" style="width: 5%">ক্রমিক </td>
            <td rowspan="2" class="rootTable text-center" style="width: 30%">প্রক্রিয়া বিবরণী </td>
            <td rowspan="2" class="rootTable text-center" style="width: 10%">হার</td>
            <td rowspan="2" class="rootTable text-center" style="width: 10%"> একক প্রতি</td>
            <td colspan="3" class="rootTable text-center" style="width: 15%"> খুচরা কাজের বিবরণ</td>
        </tr>
        <tr>
            <td class="rootTable text-center" style="width: 10%">দেয় তারিখ</td>
            <td class="rootTable text-center" style="width: 10%">সংখ্যা </td>
            <td class="rootTable text-center" style="width: 10%">সমাপ্তির তারিখ</td>
        </tr>
        </thead>
        <tbody class="rootTable">
        @foreach ($data->details as $index => $item)
            <tr>
                <td  class="rootTable text-center">
                    <span style="text-align: left !important;">
                        <br>
                        <br>
                        @if(isset($item->processSetupMaster->details) && count($item->processSetupMaster->details)  > 0)
                            @foreach ($item->processSetupMaster->details as $subIndex => $processItem)
                                {{ $Controller::enToBnConveter($subIndex + 1)}} | <br>
                            @endforeach
                        @endif
                    </span>
                </td>
                <td  class="rootTable text-left">
                    <span style="text-align: center !important;">
                         @if ($item->processSetupMaster != null)
                            @if($index == 0)
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                (<u style="text-align: center !important;">প্রতিটি পরীক্ষার জন্য প্রয়োজনীয় শ্রম </u>)
                            @endif
                            <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <u>{{ $item->processSetupMaster ? $item->processSetupMaster->nameBn : '' }}</u>
                        @endif
                    </span><br>
                    <span style="text-align: left !important;">
                        @if(isset($item->processSetupMaster->details) && count($item->processSetupMaster->details)  > 0)
                            @foreach ($item->processSetupMaster->details as $subIndex => $processItem)
                                <span>{{$processItem->employee}}</span>
                                <br>
                            @endforeach
                        @endif
                    </span>
                </td>
                <td class="rootTable text-center">
                    <span style="text-align: left !important;">
                        <br><br>
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
                <td class="rootTable text-center">
                    <span style="text-align: left !important;">
                        <br><br>
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
                <td class="rootTable text-center"></td>
                <td class="rootTable text-center"></td>
                <td class="rootTable text-center"></td>
<!--                <td class="{{ $index + 1 == count($data->details) ? 'bottom-border right-border' : ' rootTable right-border' }}"></td>-->
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
