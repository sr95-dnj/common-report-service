<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>
<body>
<?php
$en = [
    'headerTitle' => 'Sector/Sub-Sector Wise Budget Allocation Plan',
    'headerSubTitle' => '<span>Home > Budget Allocation Plan</span>',
    'formTitle' => 'Budget Allocation Plan',
    'planCategoryName' => 'Plan Category Name',
    'planName' => 'Plan Name',
    'selPlanName' => 'Select Plan Name',
    'sector' => 'Sector ',
    'selSector' => 'Select Sector',
    'subSector' => 'Sub Sector',
    'selSubSector' => 'Select Sub Sector',
    'fileUploadModel' => 'Attachment',
    'attachment' => 'Attachment',
    'uploadedFile' => 'Uploaded File :',
    'budgetName' => 'Budget Allocation Name',
    'budgetDetails' => 'Budget Allocation Details',
    'budgetNameEn' => 'Budget Allocation Name (English)',
    'budgetNameBn' => 'Budget Allocation Name (Bangla)',
    'budgetDetailsEn' => 'Budget Allocation Details (English)',
    'budgetDetailsBn' => 'Budget Allocation Details (Bangla)',
    'ministryDivision' => 'Ministry / Division',
    'action' => 'Action',
    'label1' => 'Enter Budget Allocation (Taka Billion, Current Prices)',
    'label2' => 'Enter Budget Allocation (Taka Billion, Constant Prices)',
    'back' => 'Back',
    'reset' => 'Reset',
    'update' => 'Update',
    'addNew' => 'Add New',
    'save' => 'Save',
    'status' => 'Status',
    'search' => 'Search',
    'sl' => 'Sl',
    'searchTitle' => 'Data Source List',
    'label3' => 'Budget Allocation (Taka Billion, Current Prices)',
    'label4' => 'Budget Allocation (Taka Billion, Constant Prices)',
    'total' => 'Total Allocation',
    'download' => 'Download',
    'previous' => 'Previous',
    'print' => 'Print',
    'select' => 'Select One',
    'fy' => 'FY ',
    'current' => 'Current Price',
    'constant' => 'Constant Price',
    'report' => 'Report',
    'reportSearch' => 'Report Search',
    'reportView' => 'Report View',
    'price' => 'Price Category',
    'totalBudget' => 'Total Budget of FYP',
    'totalFYP' => 'Total FYP',
    'no' => 'No',

];

$bn = [
    'headerTitle' => 'বাজেট বরাদ্দ পরিকল্পনা প্রতিবেদন',
    'headerSubTitle' => '<span>প্রধান পাতা > বাজেট বরাদ্দ পরিকল্পনা প্রতিবেদন</span>',
    'formTitle' => 'বাজেট বরাদ্দ পরিকল্পনা',
    'planCategoryName' => 'পরিকল্পনা বিভাগের নাম',
    'planName' => 'পরিকল্পনা নাম',
    'selPlanName' => 'পরিকল্পনার নাম নির্বাচন করুন',
    'sector' => 'সেক্টর',
    'selSector' => 'সেক্টর নির্বাচন করুন',
    'subSector' => 'সাব সেক্টর',
    'selSubSector' => 'সাব সেক্টর নির্বাচন করুন',
    'attachment' => 'সংযুক্তি',
    'fileUploadModel' => 'সংযুক্তি',
    'uploadedFile' => 'আপলোড করা ফাইল:',
    'action' => 'অ্যাকশন',
    'sl' => 'ক্রমিক নং',
    'search' => 'অনুসন্ধান করুন',
    'back' => 'পিছনে',
    'reset' => 'মুছুন',
    'save' => 'সেভ করুন',
    'update' => 'আপডেট করুন',
    'status' => 'স্টেটাস',
    'searchTitle' => 'তথ্য উৎস তালিকা',
    'budgetName' => 'বাজেট বরাদ্দের নাম',
    'budgetNameEn' => 'বাজেট বরাদ্দের নাম (বাংলা)',
    'budgetNameBn' => 'বাজেট বরাদ্দের নাম (বাংলা)',
    'addNew' => 'যোগ করুন',
    'budgetDetails' => 'বাজেট বরাদ্দ বিবরণ',
    'budgetDetailsEn' => 'বাজেট বরাদ্দ বিবরণ (বাংলা)',
    'budgetDetailsBn' => 'বাজেট বরাদ্দ বিবরণ (বাংলা)',
    'label1' => 'বাজেট বরাদ্দ লিখুন (বিলিয়ন টাকা, বর্তমান মূল্য)',
    'label2' => 'বাজেট বরাদ্দ লিখুন (বিলিয়ন টাকা, ধ্রুবক মূল্য)',
    'label3' => 'বাজেট বরাদ্দ (বিলিয়ন টাকা, বর্তমান মূল্য)',
    'label4' => 'বাজেট বরাদ্দ (বিলিয়ন টাকা, ধ্রুবক মূল্য)',
    'total' => 'মোট বরাদ্দ',
    'download' => 'ডাউনলোড করুন',
    'previous' => 'আগে',
    'print' => 'প্রিন্ট',
    'ministryDivision' => 'মন্ত্রণালয়/বিভাগ',
    'select' => 'নির্বাচন করুন',
    'fy' => 'অর্থবছর ',
    'current' => 'বর্তমান মূল্য',
    'constant' => 'ধ্রুবক মূল্য',
    'report' => 'প্রতিবেদন',
    'reportSearch' => 'প্রতিবেদন অনুসন্ধান',
    'reportView' => 'প্রতিবেদন দেখুন',
    'price' => 'মূল্যের ধরন',
    'totalBudget' => 'পঞ্চবার্ষিক পরিকল্পনার মোট বাজেট',
    'totalFYP' => 'মোট',
    'no' => 'ক্রমিক',

];

$L = ${$lng};
$fiscalYear = json_decode($val['fiscalYear']);
$budgetAllocationCurrent = json_decode($val['budgetAllocationCurrent']);
$budgetAllocationConstant = json_decode($val['budgetAllocationConstant']);
//dd($budgetAllocationCurrent);
$totalListCurrent = json_decode($val['totalListCurrent']);
$totalListConstant = json_decode($val['totalListConstant']);
$plan = json_decode($val['plan']);
$sector = json_decode($val['sector']);
$ministryDivision = json_decode($val['ministryDivision']);
$zero = '০০';
$imageUrl = $val['imageUrl'];
//dd($imageURL);

?>

<div style="width: 100%">
    <!-- Main Start -->
    <div class="flex-auto m-7 body-color">
        <mat-card class="tab-color mt-4">

            <table style="width: 100%; text-align: center; font-size: 20px; margin-bottom: 15px; border-bottom: 1px solid;">
                <tr>
                    <td>
                        {{$L['headerTitle']}}
                    </td>
                </tr>
            </table>

            <!-- Card Body -->
            <div id="print">
                <div class="border3 form-bg-color">
                    <div class="md:flex p-4">
                        <div class="w-full sm:w-auto md:w-full lg:w-full">
                            <table class="tbl-details w-full font-13 fontBold">
                                @if($plan != null)
                                    <tr>
                                        <td style="width: 20%">{{$L['planName']}}</td>
                                        <td style="width: 3%">:</td>
                                        <td style="width: 45%">
                                            {{$lng == 'en' ? $plan->planName : $plan->planNameBn}}
                                        </td>
                                        <td>
                                            <span style="border-bottom: 1px solid; font-weight: bold">{{$L['totalBudget']}}</span>
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    @if($sector == null)
                                        <td colspan="3"></td>
                                    @endif
                                    @if($sector != null)
                                        <td class="pt-3">{{$L['sector']}}</td>
                                        <td class="pt-3">:</td>
                                        <td class="pt-3">
                                            {{$lng == 'en' ? $sector->sectorNameEn : $sector->sectorNameBn}}
                                        </td>
                                    @endif
                                    <td>{{$L['current']}}&nbsp;:
                                        <span>
                                                @if($lng == 'en')
                                                {{number_format($totalListCurrent->total_FYP, 2)}}
                                            @else
                                                {{$Controller::entoBn($totalListCurrent->total_FYP, 'number')}}
                                                .{{$zero}}
                                            @endif
                                                </span>
                                    </td>
                                </tr>

                                <tr>
                                    @if($ministryDivision == null)
                                        <td colspan="3"></td>
                                    @endif
                                    @if($ministryDivision != null)
                                        <td class="pt-3">{{$L['ministryDivision']}}</td>
                                        <td class="pt-3">:</td>
                                        <td class="pt-3">
                                            {{$lng == 'en' ? $ministryDivision->ministryNameEn : $ministryDivision->ministryNameBn}}
                                        </td>
                                    @endif
                                    <td>{{$L['constant']}}&nbsp;:
                                        <span>
                                                @if($lng == 'en')
                                                {{number_format($totalListConstant->total_FYP, 2)}}
                                            @else
                                                {{$Controller::entoBn($totalListConstant->total_FYP, 'number')}}
                                                .{{$zero}}
                                            @endif
                                                </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{$imageUrl}}">
                </div>

                @if(sizeof($budgetAllocationCurrent) > 0)
                    <div class="flex flex-col bg-card shadow rounded overflow-hidden">
                        <div class="heading">
                            <div class="md:flex">
                                <div class="w-full sm:w-auto md:w-50 lg:w-50">
                                    <h3 class="md:mt-2 font-13">{{$L['label3']}}<span> </span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="tbl-details w-full font-13 tbBorder">
                        <thead>
                        <tr>
                            <td style="width: 5%" class="text-center fontBold">{{$L['no']}}</td>
                            <th style="width: 40%" class="w-1/4 font-13">{{$L['ministryDivision']}}</th>
                            @foreach($fiscalYear as $index => $fiscal)
                                <th>
                                    @if($lng == 'en')
                                        {{$L['fy']}}{{$fiscal}}
                                    @else
                                        {{$L['fy']}}{{$Controller::entoBn($fiscal, 'number')}}
                                    @endif
                                </th>
                            @endforeach
                            <th>{{$L['totalFYP']}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($budgetAllocationCurrent as $index => $bc)
                            <tr>
                                <td class="text-center">
                                    {{$lng == 'en' ? $index + 1 : $Controller::entoBn($index + 1, 'number')}}
                                </td>
                                <th style="text-align: left; font-weight: normal">
                                    @if($bc->ministryDivision !== null)
                                        @if($lng == 'en')
                                            {{$bc->ministryDivision->ministryNameEn}}
                                        @else
                                            {{$bc->ministryDivision->ministryNameBn}}
                                        @endif
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_1, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_1, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_2, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_2, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_3, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_3, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_4, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_4, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_5, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_5, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->totalRowC, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->totalRowC, 2), 'number')}}
                                    @endif
                                </th>
                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="2" style="text-align: left; font-weight: bold" class="font-13">{{$L['total']}}</th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListCurrent->fy_1, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListCurrent->fy_1, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListCurrent->fy_2, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListCurrent->fy_2, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListCurrent->fy_3, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListCurrent->fy_3, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListCurrent->fy_4, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListCurrent->fy_4, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListCurrent->fy_5, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListCurrent->fy_5, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListCurrent->fy_5, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListCurrent->total_FYP, 2), 'number')}}
                                @endif
                            </th>
                        </tr>
                        </tbody>
                    </table>
                @endif

                @if(sizeof($budgetAllocationConstant) > 0)
                    <div class="flex flex-col bg-card shadow rounded overflow-hidden pageBreak">
                        <div class="heading">
                            <div class="md:flex">
                                <div class="w-full sm:w-auto md:w-50 lg:w-50">
                                    <h3 class="md:mt-2 font-13">{{$L['label4']}}<span> </span></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="tbl-details w-full font-13 tbBorder">
                        <thead>
                        <tr>
                            <td style="width: 5%" class="text-center fontBold">{{$L['no']}}</td>
                            <th style="width: 40%" class="w-1/4 font-13">{{$L['ministryDivision']}}</th>
                            @foreach($fiscalYear as $index => $fiscal)
                                <th>
                                    @if($lng == 'en')
                                        {{$L['fy']}}{{$fiscal}}
                                    @else
                                        {{$L['fy']}}{{$Controller::entoBn($fiscal, 'number')}}
                                    @endif
                                </th>
                            @endforeach
                            <th>{{$L['totalFYP']}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($budgetAllocationConstant as $index => $bc)
                            <tr>
                                <td class="text-center">
                                    {{$lng == 'en' ? $index + 1 : $Controller::entoBn($index + 1, 'number')}}
                                </td>
                                <th style="text-align: left; font-weight: normal">
                                    @if($bc->ministryDivision !== null)
                                        @if($lng == 'en')
                                            {{$bc->ministryDivision->ministryNameEn}}
                                        @else
                                            {{$bc->ministryDivision->ministryNameBn}}
                                        @endif
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_1, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_1, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_2, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_2, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_3, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_3, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_4, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_4, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->fiscalYear_5, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->fiscalYear_5, 2), 'number')}}
                                    @endif
                                </th>
                                <th style="text-align: right; font-weight: normal">
                                    @if($lng == 'en')
                                        {{round($bc->totalRowB, 2)}}
                                    @else
                                        {{$Controller::entoBn(round($bc->totalRowB, 2), 'number')}}
                                    @endif
                                </th>
                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="2" style="text-align: left" class="text-left font-13">{{$L['total']}}</th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListConstant->fy_1, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListConstant->fy_1, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListConstant->fy_2, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListConstant->fy_2, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListConstant->fy_3, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListConstant->fy_3, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListConstant->fy_4, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListConstant->fy_4, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListConstant->fy_5, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListConstant->fy_5, 2), 'number')}}
                                @endif
                            </th>
                            <th style="text-align: right;">
                                @if($lng == 'en')
                                    {{round($totalListConstant->total_FYP, 2)}}
                                @else
                                    {{$Controller::entoBn(round($totalListConstant->total_FYP, 2), 'number')}}
                                @endif
                            </th>
                        </tr>
                        </tbody>
                    </table>
                @endif
            </div>
        </mat-card>
    </div>
    <!-- Main End -->
</div>



