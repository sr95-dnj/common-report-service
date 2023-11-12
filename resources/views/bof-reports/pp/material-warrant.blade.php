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

</head>


<body class="landscapePage">
<?php
$data = json_decode($val['data']);
//     dd($data);
?>

        <!-- header part-->
<htmlpageheader name="myHeader" style="display:none;">
    <div style="text-align: right">
        <span>বিওএফ নং: ১০১</span>
    </div>
    <div style="font-size: 20px; text-align: center">
        <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
        <span>গাজীপুর সেনানিবাস</span><br>
        <span><u>দ্রব্যের হুকুমনামা</u></span><br>
    </div>
    <br>
</htmlpageheader>

<!--main part -->
<div>
    <table style="width: 100%; font-size: 15px; border-collapse: collapse;">
        <thead>
        <tr>
            <td colspan="3" style="width: 50%;">
                <span>
                    {{ $Controller::enToBnConveter($data->master->financialYear->financialYear) }}
                </span>
                <br>

                <span>উৎপাদনী শাখাঃ &nbsp;
                    @if(isset($data->master->sections))
                        @foreach($data->master->sections as $item)
                            {{isset($item->section) ? $item->section->banglaName : ""}}
                        @endforeach
                    @endif
                </span><br>

                <span>বস্তুর নামঃ &nbsp;
                    {{ $data->master->productCode->mcProduct ? $data->master->productCode->mcProduct->nameBn : $data->master->productCode->component->nameBn }}

                    @if (isset($data->master->mcProductComponent))
                        <span>
                            -{{ $data->master->mcProductComponent ? $data->master->mcProductComponent->nameBn : '' }}
                        </span>
                    @endif

                    <span>
                    -{{ isset($data->master->shortDescription) ? $data->master->shortDescription : '' }}
                    </span>
                </span>
                <br>
                <span>অংকন নম্বরঃ &nbsp;
                </span>
                <br>
                <span>
                    সংক্ষিপ্ত ফরমায়েশনামা নম্বরঃ &nbsp;{{ isset($data->master->extractNo) ? $data->master->extractNo : '' }}
                </span>
                <br>
                <span>
                    হুকুমনামা নম্বর ও তারিখঃ &nbsp;
                    {{ $data->master->warrantNo ? $data->master->warrantNo : '' }},
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->master->warrantDate)) }}
                </span>
                <br>
                <span>
                    সম্পূরক কার্যাদেশ নম্বরঃ &nbsp;{{ $data->master->supplementaryOrderNo ? $data->master->supplementaryOrderNo : '' }}
                </span>
                <br>
                <span>
                    সরবরাহের সূচীঃ &nbsp;{{ $Controller::enToBnConveter($Controller::dateFormatter($data->master->lastDateOfSupply)) }}
                </span>
                <br>
                <span>মন্তব্যঃ &nbsp;
                    {!! isset($data->master->specialComments) ? $data->master->specialComments : ''  !!}
                </span>
                <br>
            </td>
            <td colspan="3" style="width: 50%;">

                <span>
                    &nbsp;
                </span>
                <br>
                <span>শাখার নম্বরঃ &nbsp;
                    @if ($data->master->sectionNo != null)
                        <span>
                            {{ $Controller::enToBnConveter($data->master->sectionNo) }}
                        </span>
                    @endif
                </span>
                <br>

                <span>প্রয়োজনীয় সংখ্যা/সেটঃ
                    {{ $data->master->requiredNumber ? $data->master->requiredNumber : '' }}
                </span>
                <br>

                <span>তারিখঃ
                    {{ $Controller::enToBnConveter($Controller::dateFormatter(isset($data->master->extractDate) ? $data->master->extractDate : "")) }}
                </span>

                <br>

                <span>হার তালিকা নম্বরঃ
                    {{ $data->master->listNo ? $data->master->listNo : '' }}
                </span>

                <br>

                <span>সমাপ্তির তারিখঃ &nbsp;
                   {{ $Controller::enToBnConveter($Controller::dateFormatter($data->master->completionDate)) }}
                </span>
                <br>

                <span>প্রাক্কলিত নম্বরঃ &nbsp;
                    {{ $data->master->estimateNo ? $data->master->estimateNo : '' }}
                </span>
                <br>
            </td>
        </tr>
        </thead>

        <thead>
        <tr>
            <td colspan="6" style="text-align: center;">
                <u> <span style="font-size: 16px;"> ০১ মিলিয়নের জন্য মঞ্জুরকৃত দ্রব্যের বিবরণ </span> </u>
            </td>
        </tr>
        </thead>

        <thead>
        <tr class="rootTable">
            <td class="rootTable text-center" style="width: 5%">ক্রমিক</td>
            <td class="rootTable text-center" style="width: 20%">বরাদ্দকৃত</td>
            <td class="rootTable text-center" style="width: 40%">সঠিক বিবরণ</td>
            <td class="rootTable text-center" style="width: 10%">একক</td>
            <td class="rootTable text-center" style="width: 10%">পরিমান/ওজন</td>
            <td class="rootTable text-center" style="width: 15%">ফলিও নম্বর</td>
        </tr>
        </thead>

        <tbody>
        @foreach ($data->details as $index => $item)
            <tr>
                <td class="rootTable text-center">
                    {{ $Controller::entoBn($index + 1, 'number') }} |
                </td>
                <td class="rootTable text-left">{{ $item->itemMaster ? $item->itemMaster->itemNameEn : '' }}</td>
                <td class="rootTable text-center">
                    {!!  $item->itemMaster ? $item->itemMaster->itemSpecification : '' !!}
                </td>
                <td class="rootTable text-center">
                    {{ $item->itemMaster->mcItemUnit ? $item->itemMaster->mcItemUnit->nameBn : '' }}
                </td>
                <td class="rootTable text-center">
                    {{$Controller::enToBnConveter($item->quantity ? $item->quantity : '')}}
                </td>
                <td class="rootTable text-center">
                    {{ $item->itemMaster ? $item->itemMaster->itemClassRefNo : '' }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="page-break"></div>

<div style="font-size: 24px; ">
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <u> <span style="font-size: 16px;">তলবি দ্রব্যের বিবরণ </span> </u>
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ</td>
            <td class="rootTable text-center">একক</td>
            <td class="rootTable text-center">চাহিদার পরিমান বা ওজন</td>
            <td class="rootTable text-center">দেয় পরিমান বা ওজন</td>
            <td class="rootTable text-center">মোট পরিমান বা ওজন</td>
            <td class="rootTable text-center">তলবি নোট নম্বর ও তারিখ</td>
        </tr>
        <tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td style="width: 100% !important; text-align: center;">
                <u> <span style="font-size: 16px;">পুনুরুদ্ধারকৃত দ্রব্যের বিবরণ </span> </u>
            </td>
        </tr>
    </table>
    <table class="rootTable" width="100%">
        <tr class="rootTable">
            <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ</td>
            <td class="rootTable text-center">একক</td>
            <td class="rootTable text-center">দ্রব্যের পরিমান বা ওজন</td>
            <td class="rootTable text-center">মোট পরিমান বা ওজন</td>
            <td class="rootTable text-center">পুনুরুদ্ধারকৃত নোটের নম্বর ও তারিখ</td>
        </tr>
        <tr>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
            <td class="rootTable text-center" style="height: 300px;"></td>
        </tr>
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
