<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>
{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
{{--<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>--}}
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

];

$bn = [
    'headerTitle' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল',
    'headerSubTitle' => '<span>প্রধান পাতা > বাজেট বরাদ্দ পরিকল্পনা</span>',
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

];

$L = ${$lng};
$budget = json_decode($val['budget']);
$fiscalYear = json_decode($val['fiscalYear']);
$budgetAllocationCurrent = json_decode($val['budgetAllocationCurrent']);
$budgetAllocationConstant = json_decode($val['budgetAllocationConstant']);
//dd($budgetAllocationCurrent);
$totalListCurrent = json_decode($val['totalListCurrent']);
$totalListConstant = json_decode($val['totalListConstant']);
//dd($budgetAllocationConstant);

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
                            <table class="tbl-details w-full font-13">
                                <tr style="vertical-align: top;">
                                    <td style="width: 25%; vertical-align: top;" class="pt-5">{{$L['planName']}}</td>
                                    <td style="width: 1.5%; vertical-align: top;" class="pt-5">:</td>
                                    <td style="vertical-align: top;" class="pt-5">
                                        @if($lng == 'en')
                                            {{$budget->planName->planName}}
                                        @else
                                            {{$budget->planName->planNameBn}}
                                        @endif
                                    </td>
                                </tr>
                                <tr style="vertical-align: top">
                                    <td style="vertical-align: top" class="pt-5">{{$L['sector']}}</td>
                                    <td style="vertical-align: top" class="pt-5">:</td>
                                    <td style="vertical-align: top" class="pt-5">
                                        @if($lng == 'en')
                                            {{$budget->sector->sectorNameEn}}
                                        @else
                                            {{$budget->sector->sectorNameBn}}
                                        @endif
                                    </td>
                                </tr>
                                <tr style="vertical-align: top">
                                    <td style="vertical-align: top" class="pt-5">{{$L['subSector']}}</td>
                                    <td style="vertical-align: top" class="pt-5">:</td>
                                    <td style="vertical-align: top" class="pt-5">
                                        @if(isset($budget->subSector))
                                            @if($lng == 'en')
                                                {{$budget->subSector->subSectorNameEn}}
                                            @else
                                                {{$budget->subSector->subSectorNameBn}}
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                                <tr style="vertical-align: top">
                                    <td style="vertical-align: top" class="pt-5">{{$L['budgetNameEn']}}</td>
                                    <td style="vertical-align: top" class="pt-5">:</td>
                                    <td style="vertical-align: top"
                                        class="pt-5">
                                        @if($lng == 'en')
                                            {{$budget->budgetAllocationNameEn}}
                                        @else
                                            {{$budget->budgetAllocationNameBn}}
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <div style="margin-top: 15px; " class="font-13">
                                <div style="font-weight: bold">
                                    <span>{{$L['budgetDetailsEn']}}</span>
                                    <span>:</span>
                                </div>
                                <div style="font-weight: lighter" class="text-justify">
                                    @if($lng == 'en')
                                        {!!$budget->budgetAllocationDetailsEn!!}
                                    @else
                                        {!!$budget->budgetAllocationDetailsBn!!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($budgetAllocationCurrent as $index => $bc)
                        <tr>
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
                        </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left" class="text-left font-13">{{$L['total']}}</th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListCurrent->fy_1, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListCurrent->fy_1, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListCurrent->fy_2, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListCurrent->fy_2, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListCurrent->fy_3, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListCurrent->fy_3, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListCurrent->fy_4, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListCurrent->fy_4, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListCurrent->fy_5, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListCurrent->fy_5, 2), 'number')}}
                            @endif
                        </th>
                    </tr>
                    </tbody>
                </table>

                <div class="flex flex-col bg-card shadow rounded overflow-hidden">
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($budgetAllocationConstant as $index => $bc)
                        <tr>
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
                        </tr>
                    @endforeach
                    <tr>
                        <th style="text-align: left" class="text-left font-13">{{$L['total']}}</th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListConstant->fy_1, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListConstant->fy_1, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListConstant->fy_2, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListConstant->fy_2, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListConstant->fy_3, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListConstant->fy_3, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListConstant->fy_4, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListConstant->fy_4, 2), 'number')}}
                            @endif
                        </th>
                        <th style="text-align: right; font-weight: normal">
                            @if($lng == 'en')
                                {{round($totalListConstant->fy_5, 2)}}
                            @else
                                {{$Controller::entoBn(round($totalListConstant->fy_5, 2), 'number')}}
                            @endif
                        </th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </mat-card>
    </div>
    <!-- Main End -->
</div>



