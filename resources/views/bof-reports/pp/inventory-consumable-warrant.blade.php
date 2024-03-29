<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
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
            margin-top: 5%;
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

    <br>
    <br>

    <!--    master table-->
    <div>
        <table width="100%">
            <tr>
                <td style="width: 100% !important; text-align: right;">
                    বিওএফ নং: ১০১
                </td>
            </tr>
            <tr>
                <td style="width: 100% !important; text-align: center;">
                    <span style="font-size: 18px;">বাংলাদেশ সমরাস্ত্র কারখানা</span><br>
                    <span style="font-size: 16px;">গাজীপুর সেনানিবাস</span><br>
                    <u> <span> ইনভেন্ট্রী/ কনজুমেবল দ্রব্যের হুকুমনামা</span></u>
                </td>
            </tr>
        </table>

        <table width="100%">
            <tr>
                <td>কারিগরী শাখার নাম : {{ $data->section ? $data->section->banglaName : '' }}</td>
                <td class="text-right">শাখা কোড নম্বর: {{ $Controller::enToBnConveter($data->sectionNo ? $data->sectionNo : '') }}</td>
            </tr>
            <tr>
                <td>সংক্ষিপ্ত ফরমায়েশনামা: {{ $Controller::enToBnConveter($data->extractNo ? $data->extractNo : '') }}
                </td>
                <td class="text-right">তারিখ:
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->extractDate ? $data->extractDate : '')) }}
                </td>
            </tr>
            <tr>
                <td>হুকুমনামা নম্বর: {{ $Controller::enToBnConveter($data->warrantNo ? $data->warrantNo : '') }}</td>
                <td class="text-right">তারিখ:
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantDate ? $data->warrantDate : '')) }}
                </td>
            </tr>
            <tr>
                <td colspan="2">হার তালিকা নম্বর:
                    {{ $Controller::enToBnConveter($data->listNo ? $data->listNo : '') }}</td>
            </tr>
            <tr>
                <td colspan="2">সম্পূরক কার্যাদেশ নম্বর :
                    {{ $Controller::enToBnConveter($data->supplementaryOrderNo ? $data->supplementaryOrderNo : '') }}
                </td>
            </tr>
            <tr>
                <td colspan="2">হুকুমনামার কার্যকারিতার মেয়াদ :
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantValidityFrom ? $data->warrantValidityFrom : '')) }}
                    -
                    {{ $Controller::enToBnConveter($Controller::dateFormatter($data->warrantValidityTo ? $data->warrantValidityTo : '')) }}
                </td>
            </tr>
            <tr>
                @if ($data->specialComments != null)
                    <td colspan="2" style="text-align: left"> বিশেষ মন্তব্য : {!! $data->specialComments !!}</td>
                @endif
            </tr>
            <tr>
                <td colspan="2">চাহিদাকৃত দ্রব্যের হুকুমনামা : সংযুক্ত দ্রব্য তালিকা মোতাবেক করা হলো ।</td>
            </tr>
            <tr>
                <td colspan="2">প্রয়োজনীয় দ্রব্যের সংখ্যা/সেট:
                    {{ $Controller::enToBnConveter($data->requiredNumber ? $data->requiredNumber : '') }} দফা </td>
            </tr>
        </table>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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
                    <u> <span style="font-size: 16px;">তলবি দ্রব্যের বিবরণ </span> </u>
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
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"></td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
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
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"></td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
                <td class="rootTable text-center" style="height: 400px;"> </td>
            </tr>
        </table>
    </div>

</body>
