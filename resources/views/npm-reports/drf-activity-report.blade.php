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
        'title'=>'DRF Activity',
        'planName'=> 'Plan Name',
        'nationalPriority'=> 'National Priority',
        'outCome'=> 'Out Come',  
        'Year'=> 'Year', 
        'sl'=>'SL',

        'performance_indicator'=> 'Performance Indicators',
        'data_sources'=> 'Data Sources (Institutions & Reports)',
        'ministry_division'=> 'Lead Ministry / Division',
        'base_line'=> 'BaseLine (Year)',
        'target'=>'Target',
        'achiement'=>'Achiement',
        'sdg'=>'SDG' ,  

        'national_priority'=> 'National Priority', 
        'outcome_statement'=> 'Outcome Statement', 
        'planCategory'=> 'Plan Category Name', 
        'planCategoryName'=> 'DRF Indicators',
        'planCreationName'=> 'DRF Indicators',
        'drfChildIndicator'=> 'Performance Indicator', 
        'baseLineEntry'=> 'Base Line Entry',       
        'Performance Indicator'=> 'Performance Indicator',   


        'year1'=> 'First Year',
        'year2'=> 'Second Year',
        'year3'=> 'Third Year',
        'year4'=> 'Fourth Year',
        'year5'=> 'Fifth Year',
        'fy'=> 'FY ',        
        
    ];

    $bn = [
        'title'=>'ডিআরএফ কার্যকলাপ', 
        'planName'=> 'পরিকল্পনার নাম',
        'nationalPriority'=> 'জাতীয় অগ্রাধিকার নাম',
        'outCome'=> 'ফলাফল',
        'Year'=>'বছর',  
        'sl'=>'ক্রমিক নম্বর',

        'performance_indicator'=> 'কর্মসম্পাদক',
        'data_sources'=> 'তথ্য উত্স (প্রতিষ্ঠান এবং প্রতিবেদন)',
        'ministry_division'=> 'নেতৃত্ব মন্ত্রণালয়/বিভাগ',
        'base_line'=> 'বেসলাইন (বছর)',
        'target'=>'টার্গেট',
        'achiement'=>'অর্জন',
        'sdg'=>'এসডিজি' ,               



        'planCategory'=> 'পরিকল্পনার ধরন',   
        'drfIndicators'=> 'ডিআরএফ সূচক',
        'drfChildIndicator'=> 'কর্মক্ষমতা সূচক',
        'dataSources'=> 'তথ্য সূত্র',
        'ministryDivision'=> 'মন্ত্রণালয়/বিভাগ',
        'baseLineEntry'=> 'বেস লাইন প্রবেশ', 

        'year1'=> 'প্রথম বছর',
        'year2'=> 'দ্বিতীয় বছর',
        'year3'=> 'তৃতীয় বছর',
        'year4'=> 'চতুর্থ বর্ষ',
        'year5'=> 'পঞ্চম বর্ষ',
        'fy' => 'অর্থবছর', 
    ];

    $L = ${$lng};
    $data = json_decode($val['data']);
    $drfModel = json_decode($val['drfModel']);
    $fiscalYear = json_decode($val['fiscalYear']);

    //dd($drfModel);
    //dd($fiscalYear);
    //echo $lng;
    //print_r($L['sl']);
    //$lng == 'bn'
    //dd($data);
    //exit(); 
    
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

        {{-- <tr style="vertical-align: top;">
            <td style="width: 25%; vertical-align: top;" class="pt-5">{{$L['planName']}}</td>
            <td style="width: 1.5%; vertical-align: top;" class="pt-5">:</td>
            <td style="vertical-align: top;" class="pt-5">
                @if($lng == 'en')
                    {{$drfModel->planCategoryObj->name}}
                @else
                     {{$drfModel->planCategoryObj->nameBn}}
                @endif
            </td>
        </tr> --}}

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
        <tr>
            <td>{{$L['sl']}}</td>
            <td colspan="2">{{$L['performance_indicator']}}</td>
            <td>{{$L['data_sources']}}</td>
            <td>{{$L['ministry_division']}}</td>
            <td>{{$L['base_line']}}</td>

            @php
                $i=1;
            @endphp

            @foreach ($fiscalYear as $index=>$year)
                @if ($year==$drfModel->year)
                    <td>{{$L['fy']}} {{$Controller::entoBn($year, 'number', $lng) }}</td>
                @endif
            @endforeach

            <td>{{$L['achiement']}}</td>
            <td>{{$L['sdg']}}</td>
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

                    @if ($cValue->indicatorId==$cValue->drfIndicator->drfChildIndicatorid)
                        <td rowspan="{{count($value)}}" style="vertical-align: top;">
                            @if (isset($cValue->drfIndicator->dataSourcesStr))
                                <?php echo $cValue->drfIndicator->dataSourcesStr ?>
                            @endif
                        </td>
                    @endif

                    @if ($cValue->indicatorId==$cValue->drfIndicator->drfChildIndicatorid)
                        <td rowspan="{{count($value)}}" style="vertical-align: top;">
                            @if (isset($cValue->drfIndicator->ministryDivisionsStr))
                                <?php echo $cValue->drfIndicator->ministryDivisionsStr ?>
                            @endif
                        </td>
                    @endif

                    <td>
                        @if (isset($cValue->drfIndicator->baseLineEntry))
                            {{$cValue->drfIndicator->baseLineEntry}}
                        @endif
                    </td>

                    @foreach ($fiscalYear as $index=>$year)
                        @if ($year==$drfModel->year)
                            <td>{{$cValue->target}}</td>
                        @endif
                    @endforeach

                    <td>{{$cValue->achiement}}</td>

                    @if ($cValue->indicatorId==$cValue->drfIndicator->drfChildIndicatorid)
                        <td rowspan="{{count($value)}}" style="vertical-align: top;">
                            @if (isset($cValue->drfIndicator->sdg))
                                <?php echo $cValue->drfIndicator->sdg ?>
                            @endif
                        </td>
                    @endif
                </tr>

            @endforeach
        @endforeach


        </tbody>
    </table>
</div>

</body>

</html>