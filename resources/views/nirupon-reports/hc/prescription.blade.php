<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
        @page {
            margin-top: 5px; !important;
        }

        @page {
            size: landscape;
            orientation: landscape;
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
    </style>

</head>

{{-- style="font-size: 24px;" --}}
<body class="landscapePage">
<?php
$data = json_decode($val['data']);
?>


        <!--    master page-->
<div style="font-size: 24px; width: 100%">
    <div style="height: 100px; width: 100%">
        <img src="images/nirupon-banar.jpg" alt="">
    </div>
    <div>
        <div class="row" style="border-bottom: 1px solid; border-top: 1px solid; ">
            <div style="line-height: 1.5; float: left; width: 92%; font-size: 13px;">
                <span><strong>Prescription No:</strong>&nbsp;{{$data->prescriptionNo}}</span><br>
                <span><strong>Patient Name:</strong>&nbsp;<span>{{$data->patientMaster->name}}</span></span>&nbsp;
                @if($data->patientMaster->gender != null)
                <strong>G:</strong>
                    {{$data->patientMaster->gender}}
                @endif
                @if($data->patientMaster->dob != null)
                    <strong>Age:</strong>
                    {{\Carbon\Carbon::parse($data->patientMaster->dob)->diff(\Carbon\Carbon::now())->format('%y Years, %m Months')}}
                    {{--{{\Carbon\Carbon::parse($data->patientMaster->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}--}}
                @endif

                @if($data->patientMaster->registrationNo != null)
                    <strong>Reg:</strong>
                    {{$data->patientMaster->registrationNo}}
                @endif
                <br>
                @if($data->doctorMaster->name != null)
                    <strong>Doctor Name:</strong>
                    {{$data->doctorMaster->name}}
                @endif
            </div>
            <div style="float: right; width: 8%; justify-content: right;">
                <div style=" margin-top: 3px; margin-bottom: 3px; border: 1px solid">
                    <img style="height: 50px; width: 50px;" src="data:image/png;base64,{{ $data->qrCode }}" alt="Prescription No">
                </div>
            </div>
        </div>
        <table width="100%" style="border-collapse: collapse; line-height: 1.5">
            <tr>
                <td style="width: 30%; border-right: 1px solid; vertical-align: top; ">
                    <div>
                        <div>
                            @if(count($data->chiefComplainList) > 0)
                            <span style="font-size: 12px; font-weight: bold;">Cheif Complain</span>
                                <div>
                                    @foreach($data->chiefComplainList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            @if(count($data->comorbidList) > 0)
                                <br>
                            <span style="font-size: 12px; font-weight: bold;">Co-Morbid Illness</span>
                                <div>
                                    @foreach($data->comorbidList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            @if(count($data->onExaminationList) > 0)
                                <br>
                            <span style="font-size: 12px; font-weight: bold;">On Examination</span>
                                <div>
                                    @foreach($data->onExaminationList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            @if(count($data->investigationList) > 0)
                                <br>
                            <span style="font-size: 12px; font-weight: bold;">Investigations</span>
                                <div>
                                    @foreach($data->investigationList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            @if(count($data->investigationHighlightList) > 0)
                                <br>
                            <span style="font-size: 12px; font-weight: bold;">Investigation Highlight</span>
                                <div>
                                    @foreach($data->investigationHighlightList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            @if(count($data->diagonosisList) > 0)
                                <br>
                            <span style="font-size: 12px; font-weight: bold;">Diagonosis</span>
                                <div>
                                    @foreach($data->diagonosisList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 70%; border-left: 1px solid; vertical-align: top;">
                    <div style="padding-left: 4px !important;">
                        <div>
                            @if(count($data->medicationList) > 0)
                                &nbsp;<span style="font-size: 12px; font-weight: bold;">Rx.</span>
                                <div>
                                    @foreach($data->medicationList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @if($item->timeString != null)
                                            <span>{{$item->timeString}}</span>
                                        @endif
                                        <span>--</span>
                                        @if($item->duration != null)
                                            <span>{{$item->duration}}</span>
                                        @endif
                                        @if($item->durationUnit != null)
                                            <span>{{$item->durationUnit}}</span>
                                        @endif
                                        <br>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div>
                            @if(count($data->adviceList) > 0)
                                <br>
                                &nbsp; <span style="font-size: 12px; font-weight: bold;">Advice</span>
                                <div>
                                    @foreach($data->adviceList as $index => $item)
                                        <span> &nbsp;&nbsp;&nbsp;&nbsp;{{$index + 1}}. {{$item->name}}</span><br>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <br>
                        <div>
                            &nbsp;<span style="font-size: 12px; font-weight: bold;">Next Followup</span>
                            <div>
                                @if($data->followUpDate != null)
                                    &nbsp;{{($Controller::dateFormatter($data->followUpDate))}}
                                @endif
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>


</div>


</body>
