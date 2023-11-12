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
    <div style="text-align: right">
        <span>বিওএফ নং: ১০০</span>
    </div>
    <div style="font-size: 20px; text-align: center">
        <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
        <span>গাজীপুর সেনানিবাস</span><br>
        <span><u>উৎপাদনী হুকুমনামা</u></span><br>
    </div>
    <br>
</htmlpageheader>

<div>

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
                        <td class="rootTable text-center" style="width: 10%">ক্রমিক</td>
                        <td class="rootTable text-center" style="width: 50%">প্রক্রিয়ার বিবরণী</td>
                        <td class="rootTable text-center" style="width: 25%">জনবল</td>
                        <td class="rootTable text-center" style="width: 15%">
                            @if ($data->productItem->productType != null && $data->productItem->productType->nameEn == 'Small Arms')
                                <span>ঘন্টা/হাজার/সংখ্যা</span>
                            @elseif ($data->productItem->productType != null && $data->productItem->productType->nameEn == 'Small Arms Ammunition')
                                {{-- @if ($data->productItem->type == 'CARTRIDGE') --}}
                                <span>ঘন্টা/মিলিয়ন</span>
                            @elseif ($data->productItem->productType != null && $data->productItem->productType->nameEn == 'Granade')
                                {{-- @if ($data->productItem->type == 'GRENADE') --}}
                                <span>ঘন্টা/সংখ্যা</span>
                            @else
                                <span>ঘন্টা/সংখ্যা</span>
                            @endif
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->details as $index => $item)
                        <tr>
                            <td class="rootTable text-center">{{ $index + 1 }}</td>
                            <td valign="middle" class="rootTable">
                                @if ($item->processSetupMaster != null)
                                    <span>{{ $item->processSetupMaster ? $item->processSetupMaster->nameBn : '' }}</span><br>
                                    <span>{{ $item->processSetupMaster ? $item->processSetupMaster->remarks : '' }}</span>
                                @endif
                            </td>
                            <td class="rootTable">
                                @if(isset($item->processSetupMaster->details))
                                @foreach ($item->processSetupMaster->details as $process)
                                    <span>{{ $process->employee ? $process->employee : "" }}</span> <br>
                                @endforeach
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if(isset($item->processSetupMaster->details))
                                @foreach ($item->processSetupMaster->details as $index => $process)
                                    <span>{{ isset($process->timeHour) ? $Controller::entoBn(number_format($process->timeHour, 2), 'number') : 0 }}</span> <br>
                                @endforeach
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

<div class="page-break"></div>

<div style="font-size: 24px; ">
    <div class="page-break-inside-avoid">
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: center;">
                    <u> <span style="font-size: 16px;">খুচরা কাজের বিবরণ </span> </u>
                </td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: left;">
                    <span style="font-size: 16px;">আদেশকৃত সংখ্যা :.............................</span>
                </td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: center;">
                    <u> <span style="font-size: 16px;">জমা/খরচের হিসাব </span> </u>
                </td>
            </tr>
        </table>
        <table class="rootTable" width="100%">
            <tr class="rootTable">
                <td class="rootTable text-center">তারিখ </td>
                <td class="rootTable text-center">সংখ্যা/সেট </td>
                <td class="rootTable text-center">গ্রহণকারী/পরিদর্শন </td>
                <td class="rootTable text-center">পরিদর্শন নোটের নম্বর </td>
                <td class="rootTable text-center">তারিখ </td>
                <td class="rootTable text-center">বাকি </td>
                <td class="rootTable text-center">বাতিল </td>
            </tr>
            <tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"></td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
            </tr>
        </table>
    </div>
    <br>
    <div class="page-break-inside-avoid">
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: center;">
                    <u> <span style="font-size: 16px;">সংশোধনী বিবরণী </span> </u>
                </td>
            </tr>
        </table>
        <table class="rootTable" width="100%">
            <tr class="rootTable">
                <td class="rootTable text-center">ক্রমিক </td>
                <td class="rootTable text-center">প্রক্রিয়া বিবরণী </td>
                <td class="rootTable text-center">পরিবর্তিত হার </td>
                <td class="rootTable text-center">একক </td>
                <td class="rootTable text-center">কোন অধিকার বলে </td>
            </tr>
            <tr>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"></td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
            </tr>
        </table>
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
