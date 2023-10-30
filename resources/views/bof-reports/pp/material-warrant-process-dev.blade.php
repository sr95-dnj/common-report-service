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
    ?>
    <htmlpageheader name="myHeader" style="display:none;">
        <div style="text-align: right">
            <span>বিওএফ নং: ২৬৮</span>
        </div>
        <div style="font-size: 20px; text-align: center">
            <span>বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
            <span>গাজীপুর সেনানিবাস</span><br>
            <span><u>দ্রব্যের হুকুমনামা</u></span><br>
        </div>
        <br>
    </htmlpageheader>

    <!--    master table-->
    <div>


        <table class="rootTable" width="100%">
            <tr>
                <td class="rootTable" colspan="2">উন্নয়নমূলক <br>
                    {{ $Controller::enToBnConveter($data->financialYear->financialYear) }} <br>
                    উৎপাদনী শাখা: {{ $data->section ? $data->section->name : '' }}
                </td>
                <td class="rootTable" colspan="2">শাখা: {{ $data->sectionNo ? $data->sectionNo : '' }}</td>
            </tr>
            <tr>
                <td class="rootTable" colspan="2">বস্তুর নাম:
                    {{ $data->itemMaster ? $data->itemMaster->itemNameEn : '' }}</td>
                <td class="rootTable" colspan="2">প্রয়োজনীয় সংখ্যা/সেট :
                    {{ $data->requiredNumber ? $data->requiredNumber : '' }}</td>
            </tr>
            <tr>
                <td class="rootTable" colspan="2">অঙ্কন নম্বর: {{ $data->drawingNo ? $data->drawingNo : '' }}</td>
                <td class="rootTable" colspan="2"></td>
            </tr>
            <tr>
                <td class="rootTable">সংক্ষিপ্ত ফরমায়েশনামা:</td>
                <td class="rootTable"> {{ isset($data->extractNo) ? $data->extractNo : '' }}</td>
                <td class="rootTable">তারিখ:</td>
                <td class="rootTable">{{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate)) }}
                </td>
            </tr>
            <tr>
                <td class="rootTable">হুকুমনামা নম্বর ও তারিখ:</td>
                <td class="rootTable">{{ $data->warrantNo ? $data->warrantNo : '' }},
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate)) }}</td>
                <td class="rootTable">হার তালিকা নম্বর :</td>
                <td class="rootTable"> {{ $data->listNo ? $data->listNo : '' }}</td>
            </tr>
            <tr>
                <td class="rootTable">সম্পূরক কার্যাদেশ নম্বর:</td>
                <td class="rootTable">{{ $data->supplementaryOrderNo ? $data->supplementaryOrderNo : '' }}</td>
                <td class="rootTable">প্রাক্কলন নম্বর:</td>
                <td class="rootTable">{{ $data->estimateNo ? $data->estimateNo : '' }}</td>
            </tr>
            <tr>
                <td class="rootTable">সরবারহের সূচি:</td>
                <td class="rootTable">
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->lastDateOfSupply)) }}</td>
                <td class="rootTable">সমাপ্তির তারিখ:</td>
                <td class="rootTable">
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->completionDate)) }}</td>
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                @if ($data->specialComments != null)
                    <td style="width: 10%"> বিশেষ মন্তব্য : </td>
                    <td style="text-align: left">{!! $data->specialComments !!}</td>
                @endif
            </tr>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: center;">
                    <u> <span style="font-size: 16px;"> ০১ মিলিয়নের জন্য মঞ্জুরকৃত দ্রব্যের বিবরণ </span> </u>
                </td>
            </tr>
        </table>

        <!--    Details Table-->
        <table class="rootTable" width="100%">
            <tr class="rootTable">
                <td class="rootTable text-center">ক্রমিক</td>
                <td class="rootTable text-center">বরাদ্দকৃত </td>
                <td class="rootTable text-center">সঠিক বিবরণ </td>
                <td class="rootTable text-center">একক </td>
                <td class="rootTable text-center">পরিমান/ওজন </td>
                <td class="rootTable text-center">ফলিও নম্বর</td>
            </tr>
            <tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"></td>
                <td class="rootTable text-center" style="height: 400px; vertical-align: middle;"> দ্রব্য প্রয়োজন মত। </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
            </tr>
        </table>

        {{-- <footer style="position: fixed; bottom: 0; width: 100%; font-size: 24px; text-align: center">
            <table width="100%">
                <tr>
                    <td style="width: 30%">প্রস্তুতকারক: </td>
                    <td style="width: 20%">

                    </td>
                    <td style="width: 5%"></td>
                    <td style="width: 20%">
                        @if ($data->manager)
                            {{ $data->manager->employeeNameBangla }}<br>
                        @endif
                        @if ($data->manager)
                            {{ $data->manager->employeeOfficialInformation->designation->banglaName }}<br>
                        @endif
                        <span>পরিকল্পনা</span>
                    </td>
                    <td style="width: 30%;">

                    </td>
                </tr>
                <tr>
                    <td style="width: 30%">তারিখ : </td>
                    <td style="width: 20%">

                    </td>
                    <td style="width: 5%"></td>
                    <td style="width: 20%">{{ $data->onBehalf ? $data->onBehalf : '' }}</td>
                    <td style="width: 30%;">

                    </td>
                </tr>

                <tr>
                    <td style="width: 30%"></td>
                    <td style="width: 20%">

                    </td>
                    <td style="width: 5%"></td>
                    <td style="width: 20%">তারিখ:</td>
                    <td style="width: 30%;">

                    </td>
                </tr>
            </table>

        </footer> --}}




    </div>

    <div class="page-break"></div>
    <div style="font-size: 24px; ">
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: right;">
                    বিওএফ নং: ১০১
                </td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: center;">
                    <u> <span style="font-size: 16px;">তলবী দ্রব্যের বিবরণ </span> </u>
                </td>
            </tr>

        </table>
        <table class="rootTable" width="100%">
            <tr class="rootTable">
                <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ </td>
                <td class="rootTable text-center">একক </td>
                <td class="rootTable text-center">চাহিদার পরিমান বা ওজন </td>
                <td class="rootTable text-center">দেয় পরিমান বা ওজন </td>
                <td class="rootTable text-center">মোট পরিমান বা ওজন </td>
                <td class="rootTable text-center">তলবি নোট নম্বর ও তারিখ </td>
            </tr>
            <tr class="rootTable" style="height: 50px !important; display: block; overflow: auto;">
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"></td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
                <td class="rootTable text-center" style="height: 300px;"> </td>
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
                <td class="rootTable text-center">দ্রব্যের পরিমান ও সঠিক বিবরণ </td>
                <td class="rootTable text-center">একক </td>
                <td class="rootTable text-center">দ্রব্যের পরিমান বা ওজন</td>
                <td class="rootTable text-center">মোট পরিমান বা ওজন </td>
                <td class="rootTable text-center">পুনুরুদ্ধারকৃত নোটের নম্বর ও তারিখ </td>
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

    <htmlpagefooter name="myFooter" style="display:none">
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
