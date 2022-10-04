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
        'planCategory'=> 'Plan Category Name',
        'planName'=> 'Plan Name',
        'nationalPriority'=> 'National Priority',
        'outCome'=> 'Out Come',
        'planCategoryName'=> 'DRF Indicators',
        'planCreationName'=> 'DRF Indicators',
        'drfChildIndicator'=> 'Performance Indicator',
        'dataSources'=> 'Data Sources',
        'outcome'=> 'Outcome',
        'ministryDivision'=> 'Ministry / Division',
        'baseLineEntry'=> 'Base Line Entry',
        'sdg'=> 'SDG',
        'searchTitle'=> 'Drf Target Entry List',
        'Performance Indicator'=> 'Performance Indicator',
        'Not_found'=> 'Not Found!',
        'Select_Plan_Category'=> 'Select Plan Category',
        'Select_Plan_Name'=> 'Select Plan Name',
        'Select_National_Priority'=> 'Select NationalPriority',
        'back'=> 'Back',
        'Plan_Category_Name_req'=> 'Plan category name is required!.',
        'Plan_Name_req'=> 'Plan name is required!.',
        'National_Priority_req'=> 'National priority is required!.',
        'year1'=> 'First Year',
        'year2'=> 'Second Year',
        'year3'=> 'Third Year',
        'year4'=> 'Fourth Year',
        'year5'=> 'Fifth Year',
        'fy'=> 'FY ',
        'title'=> 'DRF Operation',
        'Year'=> 'Year',
        'sl'=> 'SL',
        'national_priority_'=> 'National Priority',
        'outcome_statement_'=> 'Outcome Statement',
        'performance_indicator'=> 'Performance Indicators',
        'data_sources'=> 'Data Source (Institutions & Reports)',
        'ministry_division'=> 'Lead Ministry/Division',
        'base_line'=> 'BaseLine',
        'year_'=> '(Year)',
        'target'=> 'Target',
        'achiement'=> 'Achiement',
        'remarks'=> 'Remarks',
        'national_priority'=> 'National Priority',
        'outcome_statement'=> 'Outcome Statement',

        'current'=> 'Current',
        'comment'=> 'Comment',

        '1'=> '(i)',
        '2'=> '(ii)',
        '3'=> '(iii)',
        '4'=> '(iv)',
        '5'=> '(v)',
        '6'=> '(vi)',
        '7'=> '(vii)',
        '8'=> '(viii)',
        '9'=> '(ix)',
        '10'=> '(x)',
        '11'=> '(xi)',      
        
    ];

    $bn = [  
        'planCategory'=> 'পরিকল্পনার ধরন',
        'planName'=> 'পরিকল্পনার নাম',
        'nationalPriority'=> 'জাতীয় অগ্রাধিকার নাম',
        'outCome'=> 'ফলাফল',
        'drfIndicators'=> 'ডিআরএফ সূচক',
        'drfChildIndicator'=> 'কর্মক্ষমতা সূচক',
        'dataSources'=> 'তথ্য সূত্র',
        'ministryDivision'=> 'মন্ত্রণালয়/বিভাগ',
        'baseLineEntry'=> 'বেস লাইন প্রবেশ',
        'sdg'=> 'এসডিজি',
        'searchTitle'=> 'ডিআরএফ টার্গেট এন্ট্রি তালিকা',
        'Not_found'=> 'পাওয়া যায়নি!',
        'Select_Plan_Category'=> 'পরিকল্পনা বিভাগ নির্বাচন করুন',
        'Select_Plan_Name'=> 'প্ল্যানের নাম নির্বাচন করুন',
        'Select_National_Priority'=> 'জাতীয় অগ্রাধিকার নির্বাচন করুন',
        'back'=> 'পেছনে',
        'Plan_Category_Name_req'=> 'পরিকল্পনা বিভাগের নাম প্রয়োজন!',
        'Plan_Name_req'=> 'পরিকল্পনার নাম প্রয়োজন!',
        'National_Priority_req'=> 'জাতীয় অগ্রাধিকার প্রয়োজন!',
        'year1'=> 'প্রথম বছর',
        'year2'=> 'দ্বিতীয় বছর',
        'year3'=> 'তৃতীয় বছর',
        'year4'=> 'চতুর্থ বর্ষ',
        'year5'=> 'পঞ্চম বর্ষ',
        'fy'=> 'অর্থবছর',
        'title'=> 'ডিআরএফ অপারেশন',
        'Year'=> 'বছর',
        'sl'=> 'ক্রমিক নম্বর',
        'national_priority_'=> 'জাতীয় অগ্রাধিকার',
        'outcome_statement_'=> 'ফলাফল বিবৃতি',
        'performance_indicator'=> 'কর্মসম্পাদক',
        'data_sources'=> 'তথ্য উত্স (প্রতিষ্ঠান এবং প্রতিবেদন)',
        'ministry_division'=> 'নেতৃত্ব মন্ত্রণালয়/বিভাগ',
        'base_line'=> 'বেসলাইন',
        'year_'=> '(বছর)',
        'target'=> 'টার্গেট',
        'achiement'=> 'অর্জন',
        'remarks'=> 'মন্তব্য',
        'current'=> 'কারেন্ট',
        'comment'=> 'মন্তব্য',
        '1'=> '(১)',
        '2'=> '(২)',
        '3'=> '(৩)',
        '4'=> '(৪)',
        '5'=> '(৫)',
        '6'=> '(৬)',
        '7'=> '(৭)',
        '8'=> '(৮)',
        '9'=> '(৯)',
        '10'=> '(১০)',
        '11'=> '(১১)'
    ];
    

    $L = ${$lng};
    $data = json_decode($val['data']);
    $drfModel = json_decode($val['drfModel']);
    
   // dd($data)
    ?>

<div class="landscapePage">

    <table style="width: 100%; text-align: center; font-size: 20px; margin-bottom: 15px; border-bottom: 1px solid;">
        <tr>
            <td>
                {{$L['title']}}
            </td>
        </tr>
    </table>


    <table class="tbl-details w-full font-13">       

        <tr style="vertical-align: top;">
            <td style="width: 25%; vertical-align: top;" class="pt-5">{{$L['planName']}}</td>
            <td style="width: 1.5%; vertical-align: top;" class="pt-5">:</td>
            <td style="vertical-align: top;" class="pt-5">
                @if($lng == 'en')
                    {{$drfModel->planCreationObj->planName}}
                @else
                    {{$drfModel->planCreationObj->planNameBn}}
                @endif
            </td>
        </tr>

        <tr style="vertical-align: top">
            <td style="vertical-align: top" class="pt-5">{{$L['nationalPriority']}}</td>
            <td style="vertical-align: top" class="pt-5">:</td>
            <td style="vertical-align: top" class="pt-5">
                @if($lng == 'en')
                    {{$drfModel->nationalPriorityObj->priorityName}}
                @else
                    {{$drfModel->nationalPriorityObj->priorityNameBn}}
                @endif
            </td>
        </tr>

        <tr style="vertical-align: top">
            <td style="vertical-align: top" class="pt-5">{{$L['outCome']}}</td>
            <td style="vertical-align: top" class="pt-5">:</td>
            <td style="vertical-align: top" class="pt-5">
                @if($lng == 'en')
                    {{$drfModel->nationalPriorityObj->outcome}}
                @else
                    {{$drfModel->nationalPriorityObj->outcomeBn}}
                @endif

            </td>
        </tr>

        <tr style="vertical-align: top">
            <td style="vertical-align: top" class="pt-5">{{$L['Year']}}</td>
            <td style="vertical-align: top" class="pt-5">:</td>
            <td style="vertical-align: top"
                class="pt-5">
               {{$Controller::entoBn($drfModel->year, 'number', $lng)}}               
            </td>
        </tr>

    </table>

    <table class="tbBorder" style="width:110%; margin-top: 10px;">
        <tbody>

            <tr style="background-color:#c6e0b4; text-align:center; border: 1px solid; ">
                <th>{{$L['sl']}}</th>
                <th style="width:50%" colspan="2">{{$L['performance_indicator']}}</th>
                <th>{{$L['base_line']}} <br>{{$L['year_']}}</th>
                <th>{{$L['target']}} <br> {{$Controller::entoBn($drfModel->year, 'number', $lng)}}</th>
                <th>{{$L['current']}}</th>
                <th style="width:10%">{{$L['dataSources']}}</th>
                <th>{{$L['comment']}}</th>
            </tr>

            <tr style="background-color:#c6e0b4; text-align:center;">
                <th></th>
                <th colspan="2">{{$L['1']}}</th>
                <th>{{$L['2']}}</th>
                <th>{{$L['3']}}</th>
                <th>{{$L['4']}}</th>
                <th>{{$L['5']}}</th>
                <th>{{$L['6']}}</th>
            </tr>  

        @php
            $i=1;
        @endphp

        @foreach ($data as $key=>$value)
            @foreach ($value as $key1=>$cValue)
                <tr>
                    @if ($key1==0)
                        <td rowspan="{{count($value)}}" style="vertical-align: top;">                           
                            {{$Controller::entoBn($i++, 'number', $lng)}}
                        </td>
                    @endif

                    @if ($cValue->indicatorId==$cValue->drfIndicator->drfChildIndicatorid)
                        <td rowspan="{{count($value)}}" colspan="{{(count($value)==1)? 2:0}}"
                            style="vertical-align: top;"> 
                            @if($lng == 'en')
                               {{$cValue->drfIndicator->parentIndicatorName}} 
                            @else
                                {{$cValue->drfIndicator->parentIndicatorNameBn}} 
                            @endif                            
                        </td>
                    @endif

                    @if (count($value)>1)
                        <td style="height: 53px !important;">
                            @if ($cValue->indicatorId !=$cValue->drfIndicator->drfChildIndicatorid)
                                @if (isset($cValue->drfIndicator->childIndicatorNameEn))
                                    @if($lng == 'en')
                                         {{$cValue->drfIndicator->childIndicatorNameEn}}
                                    @else
                                         {{$cValue->drfIndicator->childIndicatorNameBn }}
                                    @endif
                                   
                                @endif
                            @endif
                        </td>
                    @endif

                    <td>
                        @if (isset($cValue->drfIndicator->baseLineEntry))
                            {{$cValue->drfIndicator->baseLineEntry}}
                        @endif
                    </td>

                   
                    <td>
                        @if (isset($cValue->target))
                        {{$cValue->target}}
                        @endif                    
                    </td>

                    <td>
                        @if (isset($cValue->current))
                        {{$cValue->current}}
                        @endif                    
                    </td>                  

                    @if ($cValue->indicatorId==$cValue->drfIndicator->drfChildIndicatorid)
                        <td rowspan="{{count($value)}}" style="vertical-align: top;">
                            @if (isset($cValue->drfIndicator->dataSourcesStr))
                                <?php echo $cValue->drfIndicator->dataSourcesStr ?>
                            @endif
                        </td>
                    @endif                  

                    <td>
                        @if (isset($cValue->comment))
                        {{$cValue->comment}}
                        @endif                    
                    </td> 
                    
                </tr>

            @endforeach
        @endforeach

        </tbody>
    </table>
</div>

</body>

</html>