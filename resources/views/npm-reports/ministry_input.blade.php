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
        'headerTitle'=> 'Ministry Input Entry',
        'headerSubTitle'=> '<span>Home >Ministry Input Entry</span>',
        'formTitle'=>'Ministry Input Entry',
        'name'=>'Name',
        'nameBn'=>'Name (Bangla)',
        'shortName'=> 'Short Name',
        'planName'=> 'Plan Name',
        'formName'=> 'Form Name',
        'question'=> 'Question-',
        'answer'=> 'Answer-',
        'fileUploadModel'=> 'File Upload',
        'uploadedFile'=> 'Uploaded File=> ',
        'uploadedFile2'=> 'Uploaded File=> ',

        'status'=>'Status',
        'reset'=>'Reset',
        'save'=>'Save',
        'update'=>'Update',
        'search'=>'Search',
        'sl'=>'Sl',
        'action'=>'Action',
        'searchTitle'=> 'Ministry Input Entry List',
        'info'=> 'Information',
        'msg'=> 'Sorry No Active Form found for the Ministry Input Entry.',
        'questionnaire'=> 'Questionnaire',
        'answer2'=> 'Answer',
        'attachment'=> 'Attachment',
        'previous'=> 'Previous',
        'download'=> 'Download',
        'print'=> 'Print',
        'add'=> 'Add New',
        'back'=> 'Previous',
        'remarks'=> 'Remarks/GED Comment',
        'ministryStatusType'=> 'Status',
        'version'=> 'Version',
        'ministryUser'=>'User Group'
    ];

    $bn = [
        'headerTitle'=> 'মন্ত্রণালয় ইনপুট এন্ট্রি',
        'headerSubTitle'=> '<span>প্রধান পাতা > মন্ত্রণালয় ইনপুট এন্ট্রি</span>',
        'formTitle'=> 'মন্ত্রণালয় ইনপুট এন্ট্রি',
        'planName'=> 'পরিকল্পনার নাম',
        'formName'=> 'ফর্মের নাম',
        'question'=> 'প্রশ্ন-',
        'answer'=> 'উত্তর-',
        'fileUploadModel'=> 'ফাইল আপলোড',
        'uploadedFile'=> 'আপলোড করা ফাইল=> ',

        'name'=> 'নাম',
        'nameBn'=>'নাম (বাংলা)',
        'shortName'=> 'সংক্ষিপ্ত নাম',
        'status'=> 'স্টেটাস',
        'reset'=> 'মুছুন',
        'save'=> 'সেভ করুন',
        'update'=> 'আপডেট করুন',
        'search'=> 'অনুসন্ধান করুন',
        'sl'=> 'ক্রমিক নং',
        'action'=> 'অ্যাকশন',
        'searchTitle'=> 'মন্ত্রণালয় ইনপুট এন্ট্রি তালিকা',
        'info'=> 'তথ্য',
        'msg'=> 'দুঃখিত মন্ত্রণালয় ইনপুট এন্ট্রি জন্য কোন সক্রিয় ফর্ম পাওয়া যায়নি |',
        'questionnaire'=> 'প্রশ্নপত্র',
        'answer2'=> 'উত্তর',
        'attachment'=> 'সংযুক্তি',
        'previous'=> 'আগে',
        'download'=> 'ডাউনলোড করুন',
        'print'=> 'ছাপা',
        'add'=> 'নতুন যোগ করুন',
        'back'=> 'আগে',
        'remarks'=> 'মন্তব্য/জিইডি মন্তব্য',
        'ministryStatusType'=> 'স্ট্যাটাস',
        'version'=> 'সংস্করণ',
        'ministryUser'=>'ব্যবহারকারী দল'

    ];

    $L = ${$lng};
    $questionAnswer = json_decode($val['questionAnswer']);
    $remarks = json_decode($val['remarks']);
 

    //dd($ministry);

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
                                <div style="margin-top:20px">

                                    <table class="tbl-details w-full font-13 tbBorder" style="font-weight:normal !important;">


                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>{{$L['sl']}}</th>
                                                <th>{{$L['questionnaire' ]}}</th>
                                                <th>{{$L['answer2']}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($questionAnswer as $index => $bc)


                                            <tr>

                                                <td>
                                                    @if($lng == 'en')
                                                    {{$index+1}}
                                                    @else
                                                    {{$Controller::entoBn($index+1, 'number')}}
                                                    @endif
                                                </td>

                                                <td>
                                            {{$bc->ques}}
                                        </td>

                                        <td>
                                            {!!$bc->ans!!}
                                        </td>

                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>


                                <div style="font-weight: bold ;margin-top: 20px;" class="text-justify">
                                    {{$L['remarks']}}
                                </div>
                                <div style="font-weight: lighter ;font-size:14;" class="text-justify">

                                    {!!$remarks!!}
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </mat-card>

        </div>
        <!-- Main End -->
    </div>