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
        'planName'=> 'Plan Name',
        'nationalPriority'=> 'National Priority',

        
        'outCome'=> 'Out Come',        
        'planCategoryName'=> 'DRF Indicators',
        'planCreationName'=> 'DRF Indicators',
        'drfChildIndicator'=> 'Performance Indicator',        
               
        'baseLineEntry'=> 'Base Line Entry',
        
        'searchTitle'=> 'DRF Target Entry List',
        'Performance Indicator'=> 'Performance Indicator',
        'Not_found'=> 'Not Found !',
        'Select_Plan_Category'=> 'Select Plan Category',
        'Select_Plan_Name'=> 'Select Plan Name',
        'Select_National_Priority'=> 'Select NationalPriority',
        'back'=> 'Back',
        'Plan_Category_Name_req'=> 'Plan category name is required!.',
        'Plan_Name_req'=> 'Plan name is required!.',
        'National_Priority_req'=> 'National priority is required!.',
        'year_is_req'=> 'Year is required!.',
        'year1'=> 'First Year',
        'year2'=> 'Second Year',
        'year3'=> 'Third Year',
        'year4'=> 'Fourth Year',
        'year5'=> 'Fifth Year',
        'fy'=> 'FY ',        
        'Year'=> 'Year', 
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
        'searchTitle'=> 'ডিআরএফ কার্যকলাপ তালিকা',
        'Not_found'=> 'পাওয়া যায়নি !',
        'Select_Plan_Category'=> 'পরিকল্পনা বিভাগ নির্বাচন করুন',
        'Select_Plan_Name'=> 'প্ল্যানের নাম নির্বাচন করুন',
        'Select_National_Priority'=> 'জাতীয় অগ্রাধিকার নির্বাচন করুন',
        'back'=> 'পেছনে',
        'Plan_Category_Name_req'=> 'পরিকল্পনা বিভাগের নাম প্রয়োজন!',
        'Plan_Name_req'=> 'পরিকল্পনার নাম প্রয়োজন!',
        'National_Priority_req'=> 'জাতীয় অগ্রাধিকার প্রয়োজন!',
        'year_is_req'=> 'বছর প্রয়োজন!',

        'year1'=> 'প্রথম বছর',
        'year2'=> 'দ্বিতীয় বছর',
        'year3'=> 'তৃতীয় বছর',
        'year4'=> 'চতুর্থ বর্ষ',
        'year5'=> 'পঞ্চম বর্ষ',
        'fy' => 'অর্থবছর',
        'achiement'=>'অর্জন',
        'Year'=>'বছর',
        

    ];
    $L = ${$lng};
    $data = json_decode($val['data']);
    $drfModel = json_decode($val['drfModel']);
    $fiscalYear = json_decode($val['fiscalYear']);

    //dd($drfModel);
    //dd($fiscalYear);

    // echo $lng;
    // print_r($L['sl']);
    // $lng == 'bn'
     //  dd($data);
     //exit();

   // $progressVerificationModel = json_decode($val['progressVerificationModel']);

    // $totalBudgetAmount = $val['totalBudgetAmount'];


    // print_r($trainers);

    ?>

<div class="landscapePage">
    <h1>hi </h1>
    <table class="tbBorder" style="width=> 100%;">
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
                    <td>{{$year}}</td>
                @endif
            @endforeach

            <td>{{$L['achiement']}}</td>
            <td>{{$L['sdg']}}</td>
        </tr>

        {{-- <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td colspan="7"></td>
        </tr>

        <tr>
            <td></td>
            <td colspan="7"></td>
        </tr> --}}

        @php
            $i=1;
        @endphp

        @foreach ($data as $key=>$value)
            @foreach ($value as $key1=>$cValue)
                <tr>
                    @if ($key1==0)
                        <td rowspan="{{count($value)}}" style="vertical-align: top;">
                            {{$i++}}
                        </td>
                    @endif

                    @if ($cValue->indicatorId==$cValue->drfIndicator->drfChildIndicatorid)
                        <td rowspan="{{count($value)}}" colspan="{{(count($value)==1)? 2:0}}"
                            style="vertical-align: top;"> {{$cValue->drfIndicator->parentIndicatorName}} </td>
                    @endif

                    @if (count($value)>1)
                        <td style="height: 53px !important;">
                            @if ($cValue->indicatorId !=$cValue->drfIndicator->drfChildIndicatorid)
                                @if (isset($cValue->drfIndicator->childIndicatorNameEn))
                                    {{$cValue->drfIndicator->childIndicatorNameEn }}
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