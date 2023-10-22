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


        @page {}

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


    <div>
        <div style="text-align: right">
            <span>বিওএফ নং: ১০০</span>
        </div>
        <div style="font-size: 18px; text-align: center">
            <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
            <span>গাজীপুর সেনানিবাস</span><br>
            <span><u>উৎপাদনী হুকুমনামা</u></span><br>
        </div>
        <br>
        <div>
            <table style="width: 100%; font-size: 15px; border-collapse: collapse;">
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
                                    <span>{{ $process->employee ? $process->employee : "" }}</span>
                                @endforeach
                                @endif
                            </td>
                            <td class="rootTable text-center">
                                @if(isset($item->processSetupMaster->details))
                                @foreach ($item->processSetupMaster->details as $index => $process)
                                    <span>{{ isset($process->timeHour) ? $Controller::entoBn(number_format($process->timeHour, 2), 'number') : 0 }}</span>
                                @endforeach
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table style="width: 100%; font-size: 15px; border-collapse: collapse; margin-top:40px;">

                <thead>
                    <tr>
                        <td style="width:10%;" class="text-right" style="padding-right: 10px;">প্রস্তুতকারকঃ</td>
                        <td style="width:40%;" class="text-left">
                            @if (isset($data->createBy))
                                {{ $data->createBy->employeeNameBangla ? $data->createBy->employeeNameBangla : '' }}
                            @endif
                        </td>
                        <td style="width:10%;"></td>
                        <td style="width:40%;" class="text-left">
                            @if (isset($data->officer))
                                {{ $data->officer->employeeNameBangla ? $data->officer->employeeNameBangla : '' }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="width:10%;" class="text-right" style="padding-right: 10px;"></td>
                        <td style="width:40%;" class="text-left">
                            @if (isset($data->createBy))
                                {{ $data->createBy ? $data->createBy->employeeOfficialInformation->designation->banglaName : '' }},
                                পরিকল্পনা
                            @endif
                        </td>
                        <td style="width:10%;"></td>
                        <td style="width:40%;" class="text-left">
                            @if (isset($data->officer))
                                {{ $data->officer ? $data->officer->employeeOfficialInformation->designation->banglaName : '' }},
                                পরিকল্পনা
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="width:10%;" class="text-right" style="padding-right: 10px;"></td>
                        <td style="width:40%;" class="text-left">
                        </td>
                        <td style="width:10%;"></td>
                        <td style="width:40%;" class="text-left">
                            {{ isset($data->onBehalf) ? $data->onBehalf : '' }}
                        </td>
                    </tr>
                    <tr>
                        <td style="width:10%;" class="text-right" style="padding-right: 13px;">তারিখঃ</td>
                        <td style="width:40%;" class="text-left">
                        </td>
                        <td style="width:10%;"></td>
                        <td style="width:40%;" class="text-left">
                            তারিখঃ
                        </td>
                    </tr>
                </thead>

            </table>
        </div>

    </div>


</body>
