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
    'headerTitle' => 'Sector/Sub-Sector Wise Strategy',
    'headerSubTitle' => '<span>Home > Sector/Sub-Sector Wise Strategy</span>',
    'headerSubTitleSectorView' => '<span>Home > Sector/Sub-Sector Wise Strategy View</span>',
    'headerTitleSectorView' => 'Sector/Sub-Sector Wise Strategy View',
    'sectorView' => 'Sector/Sub-Sector Wise Strategy View',
    'formTitle' => 'Sector/Sub-Sector Wise Strategy',
    'formTitleview' => 'Sector/Sub-Sector Wise Strategy View',
    'back' => 'Back',
    'planCategoryName' => 'Plan Category Name',
    'planName' => 'Plan Name',
    'sector' => 'Sector ',
    'subSector' => 'Sub Sector',
    'strategyName' => 'Strategy Name(English)',
    'strategyDetails' => 'Strategy Details(English)',
    'strategyNameBn' => 'Strategy Name(Bangla)',
    'strategyNamel' => 'Strategy Name',
    'strategyDetailsBn' => 'Strategy Details(Bangla)',
    'strategyDetailsv' => 'Strategy Details',
    'fileUploadModel' => 'Attachment',
    'addNew' => 'Add',
    'documentView' => 'Document View',
    'attachment' => 'Attachment',
    'uploadedFile' => 'Uploaded File :',
    'previous' => 'Previous',
    'download' => 'Download',

    'status' => 'Status',
    'reset' => 'Reset',
    'save' => 'Save',
    'update' => 'Update',
    'search' => 'Search',
    'sl' => 'Sl',
    'action' => 'Action',
    'searchTitle' => 'Sector/Sub-Sector Wise Strategy List',

    'print' => 'Print',

];

$bn = [
    'headerTitle' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল',
    'headerSubTitle' => '<span>প্রধান পাতা> সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল</span>',
    'headerSubTitleSectorView' => '<span>প্রধান পাতা> সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল দেখুন</span>',
    'headerTitleSectorView' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল দেখুন',
    'sectorView' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল দেখুন',
    'formTitle' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল',
    'formTitleview' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল দেখুন',
    'planCategoryName' => 'পরিকল্পনার ধরণ',
    'planName' => 'পরিকল্পনা নাম',
    'sector' => 'সেক্টর',
    'subSector' => 'সাব সেক্টর',
    'strategyName' => 'কৌশলের নাম(ইংরেজি)',
    'strategyNamel' => 'কৌশলের নাম',
    'strategyDetails' => 'কৌশল বিবরণ(ইংরেজি)',
    'strategyNameBn' => 'কৌশলের নাম(বাংলা)',
    'strategyDetailsBn' => 'কৌশল বিবরণ(বাংলা)',
    'strategyDetailsv' => 'কৌশল বিবরণ',
    'back' => 'পেছনে',
    'status' => 'স্টেটাস',
    'reset' => 'মুছুন',
    'save' => 'সেভ করুন',
    'update' => 'আপডেট করুন',
    'search' => 'অনুসন্ধান করুন',
    'attachment' => 'সংযুক্তি',
    'sl' => 'ক্রমিক নং',
    'action' => 'অ্যাকশন',
    'searchTitle' => 'সেক্টর/সাব-সেক্টর ওয়াইজ কৌশল তালিকা',
    'fileUploadModel' => 'সংযুক্তি',
    'addNew' => 'যোগ করুন',
    'documentView' => 'ডকুমেন্ট ভিউ',
    'uploadedFile' => 'আপলোড করা ফাইল:',
    'previous' => 'পেছনে',
    'download' => 'ডাউনলোড করুন',
    'print' => 'প্রিন্ট',

];

$L = ${$lng};
$document = json_decode($val['document']);

//dd($document);

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

                                <tr style="vertical-align: top">
                                    <td class="pt-5" style="width: 18%; vertical-align: top">{{$L['planName']}}</td>
                                    <td class="pt-5" style="width: 2%; vertical-align: top">:</td>
                                    <td class="pt-5" style="width: 80%; vertical-align: top">
                                        @if($lng == 'en')
                                            {{$document->planCreation->planName}}
                                        @else
                                            {{$document->planCreation->planNameBn}}
                                        @endif
                                    </td>
                                </tr>
                                <tr style="vertical-align: top;">
                                    <td style="vertical-align: top" class="pt-5">{{$L['sector']}}</td>
                                    <td style="vertical-align: top" class="pt-5">:</td>
                                    <td style="vertical-align: top" class="pt-5">
                                        @if($lng == 'en')
                                            {{$document->sector->sectorNameEn}}
                                        @else
                                            {{$document->sector->sectorNameBn}}
                                        @endif
                                    </td>
                                </tr>
                                <tr style="vertical-align: top">
                                    <td style="vertical-align: top" class="pt-5">{{$L['subSector']}}</td>
                                    <td style="vertical-align: top" class="pt-5">:</td>
                                    <td style="vertical-align: top" class="pt-5">
                                        @if(isset($document->subSector))
                                            @if($lng == 'en')
                                                {{$document->subSector->subSectorNameEn}}
                                            @else
                                                {{$document->subSector->subSectorNameBn}}
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                                <tr style="vertical-align: top">
                                    <td style="vertical-align: top" class="pt-5">{{$L['strategyNamel']}}</td>
                                    <td style="vertical-align: top" class="pt-5">:</td>
                                    <td style="vertical-align: top" class="pt-5">
                                        @if($lng == 'en')
                                            {{$document->strategyName}}
                                        @else
                                            {{$document->strategyNameBn}}
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <div style="margin-top: 15px; " class="font-13">
                                <div style="font-weight: bold">
                                    <span>{{$L['strategyDetailsv']}}</span>

                                    <span>:</span>
                                </div>

                                <div style="font-weight: lighter" class="text-justify">
                                    @if($lng == 'en')
                                        {!!$document->strategyDetails!!}
                                    @else
                                        {!!$document->strategyDetailsBn!!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </mat-card>

    </div>
    <!-- Main End -->
</div>






