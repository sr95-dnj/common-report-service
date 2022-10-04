<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">
</head>

<style>
    table, th, td {
        border: 0.5px solid black;
        border-collapse: collapse;
        font-size: 12px;
        line-height: 22px;
    }


    ol, li {
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 0px;
        margin-left: -20px;
    }

    ol {
        list-style-type: none;
    }

    thead.report-header {
        display: table-header-group;
    }
    


</style>

<body>
<?php
$en = [

    'title' => 'DRF Target Entry',
    'planName' => 'Plan Name',
    'nationalPriority' => 'National Priority',
    'outCome' => 'Out Come',
    'Year' => 'Year',
    'sl' => 'SL',

    'national_priority_'=>'National Priority',
    'outcome_statement_'=>'Outcome Statement',
    'performance_indicator' => 'Performance Indicators',
    'data_sources' => 'Data Source (Institutions & Reports)',
    'ministry_division' => 'Lead Ministry/Division',
    'base_line' => 'BaseLine',
    'year_'=>'(Year)',
    'target' => 'Target',
    'achiement' => 'Achiement',
    'sdg' => 'SDG',
    'remarks'=>'Remarks',

    'national_priority' => 'National Priority',
    'outcome_statement' => 'Outcome Statement',
    'planCategory' => 'Plan Category Name',
    'planCategoryName' => 'DRF Indicators',
    'planCreationName' => 'DRF Indicators',
    'drfChildIndicator' => 'Performance Indicator',
    'baseLineEntry' => 'Base Line Entry',
    'Performance Indicator' => 'Performance Indicator',


    'year1' => 'First Year',
    'year2' => 'Second Year',
    'year3' => 'Third Year',
    'year4' => 'Fourth Year',
    'year5' => 'Fifth Year',
    'fy' => 'FY ',
    '1'=>'(i)',
    '2'=>'(ii)',
    '3'=>'(iii)',
    '4'=>'(iv)',
    '5'=>'(v)',
    '6'=>'(vi)',
    '7'=>'(vii)',
    '8'=>'(viii)',
    '9'=>'(ix)',
    '10'=>'(x)',
    '11'=>'(xi)',
];

$bn = [
    'title' => 'ডিআরএফ টার্গেট এন্ট্রি',
    'planName' => 'পরিকল্পনার নাম',
    'nationalPriority' => 'জাতীয় অগ্রাধিকার নাম',
    'outCome' => 'ফলাফল',
    'Year' => 'বছর',
    'sl' => 'ক্রমিক নম্বর',
    'national_priority_'=>'জাতীয় অগ্রাধিকার',
    'outcome_statement_'=>'ফলাফল বিবৃতি',
    'performance_indicator' => 'কর্মসম্পাদক',
    'data_sources' => 'তথ্য উত্স (প্রতিষ্ঠান এবং প্রতিবেদন)',
    'ministry_division' => 'নেতৃত্ব মন্ত্রণালয়/বিভাগ',
    'base_line' => 'বেসলাইন (বছর)',
    'year_'=>'(বছর)',
    'target' => 'টার্গেট',
    'achiement' => 'অর্জন',
    'sdg' => 'এসডিজি',


    'planCategory' => 'পরিকল্পনার ধরন',
    'drfIndicators' => 'ডিআরএফ সূচক',
    'drfChildIndicator' => 'কর্মক্ষমতা সূচক',
    'dataSources' => 'তথ্য সূত্র',
    'ministryDivision' => 'মন্ত্রণালয়/বিভাগ',
    'baseLineEntry' => 'বেস লাইন প্রবেশ',

    'year1' => 'প্রথম বছর',
    'year2' => 'দ্বিতীয় বছর',
    'year3' => 'তৃতীয় বছর',
    'year4' => 'চতুর্থ বর্ষ',
    'year5' => 'পঞ্চম বর্ষ',
    'fy' => 'অর্থবছর',
    'remarks'=>'মন্তব্য',
    '1'=>'(১)',
    '2'=>'(২)',
    '3'=>'(৩)',
    '4'=>'(৪)',
    '5'=>'(৫)',
    '6'=>'(৬)',
    '7'=>'(৭)',
    '8'=>'(৮)',
    '9'=>'(৯)',
    '10'=>'(১০)',
    '11'=>'(১১)',
];

$L = ${$lng};
$data = json_decode($val['data']);
?>

<div class="landscapePage">
    <h4> Development Results Framework (DRF) of the 
            @if (isset($data) && !empty($data))
              @if (isset($data[0]->planCreationObj) && !empty($data[0]->planCreationObj))                 
                @if($lng == 'en')
                    {{$data[0]->planCreationObj->planName}}
                @else
                    {{$data[0]->planCreationObj->planNameBn}}
                @endif
              @endif
            @endif
     </h2>

        <table style="width:100%;">

            <thead>
            <tr style="background-color:#c6e0b4; text-align:center;">
                <th>SL</th>
                <th style="width:25%">{{$L['performance_indicator']}}</th>
                <th>{{$L['data_sources']}}</th>
                <th>{{$L['ministry_division']}}</th>
                <th>{{$L['base_line']}} <br>{{$L['year_']}}</th>

                @if (isset($data) && !empty($data))
                    @if (isset($data[0]->fiscalYear) && !empty($data[0]->fiscalYear))  
                        @foreach ($data[0]->fiscalYear as $index=>$year)  
                            <th>{{$L['target']}} <br> {{$Controller::entoBn($year, 'number', $lng) }}</th> 
                        @endforeach 
                    @endif
                @endif

                <th>{{$L['sdg']}}</th>
                <th>{{$L['remarks']}}</th>
            </tr>
            <tr style="background-color:#c6e0b4; text-align:center;">
                <th></th>
                <th>{{$L['1']}}</th>
                <th>{{$L['2']}}</th>
                <th>{{$L['3']}}</th>
                <th>{{$L['4']}}</th>
                 @if (isset($data) && !empty($data))
                    @if (isset($data[0]->fiscalYear) && !empty($data[0]->fiscalYear))
                <th>{{$L['5']}}</th>
                <th>{{$L['6']}}</th>
                <th>{{$L['7']}}</th>
                <th>{{$L['8']}}</th>
                <th>{{$L['9']}}</th>
                  @endif
                @endif

                <th>{{$L['10']}}</th>
                <th>{{$L['11']}}</th>
            </tr>
            </thead>

            @if (isset($data) && !empty($data))  
            <?php $num = 1; ?>
            @foreach ($data as $index=>$item)
                <tr>
                    <td></td>
                    <td style="font-weight:bold;" colspan="11">
                         {{$L['national_priority_']}} : 
                        @if($lng == 'en')
                            {{$item->nationalPriorityObj->priorityName}}
                        @else
                            {{$item->nationalPriorityObj->priorityNameBn}}
                        @endif</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-weight:bold;" colspan="11">
                       {{$L['outcome_statement_']}} : 
                        @if($lng == 'en')
                            {{$item->nationalPriorityObj->outcome}}
                        @else
                            {{$item->nationalPriorityObj->outcomeBn}}
                        @endif
                    </td>
                </tr>
            
            @foreach ($item->groupData as $key=>$value)  
              <?php $count = 0; ?>              
                @foreach ($value as $key2=>$value2)
                 <?php if($count == 1) break; ?>                                    
                   @if (isset($value2[0]->priorityAreaId))                    
                    <tr>
                        <td></td>
                        <td style="font-weight:bold; font-style: italic;">
                          @if($lng == 'en')
                           {{$value2[0]->priorityAreaNameEn}}
                           @else
                            {{$value2[0]->priorityAreaNameBn}}
                          @endif
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>          
                    @endif  
                  <?php $count++; ?>                                   
                @endforeach

                    @foreach ($value as $key2=>$value2)
                        <tr>
                            <td style="text-align: center !important; vertical-align: top;" >{{$Controller::entoBn($num++, 'number', $lng)}}</td>
                            <td style="vertical-align: top;">
                                @foreach ($value2 as $i=>$indicator)
                                    @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                        <span> @if($lng == 'en')
                                                {{$indicator->indicatorNameEn}}
                                            @else
                                                {{$indicator->indicatorNameBn}}
                                            @endif 
                                            </span>
                                    @endif
                                @endforeach

                                <ol>
                                    @foreach ($value2 as $i=>$indicator)
                                        @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                            @if (isset($indicator->indicatorNameEn))
                                                @if($lng == 'en')
                                                    <li> {{$indicator->indicatorNameEn}}</li>
                                                @else
                                                    <li> {{$indicator->indicatorNameBn }}</li>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </ol>
                            </td>

                            <td style="vertical-align: top;">
                                @foreach ($value2 as $i=>$indicator)
                                    @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                        <span> 
                          @if (isset($indicator->dataSourcesStr))
                                                <?php echo $indicator->dataSourcesStr ?>
                                            @endif 
                       </span>
                                    @endif
                                @endforeach
                            </td>

                            <td style="vertical-align: top;">
                                @foreach ($value2 as $i=>$indicator)
                                    @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                        <span> 
                          @if (isset($indicator->ministryDivisionsStr))
                                                <?php echo $indicator->ministryDivisionsStr ?>
                                            @endif 
                       </span>
                                    @endif
                                @endforeach
                            </td>

                            <td style="vertical-align: top;">

                                @foreach ($value2 as $i=>$indicator)
                                    @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                        @if (isset($indicator->baseLineEntry))
                                            <span> 
                     {{$indicator->baseLineEntry}}
                 </span>
                                        @endif
                                    @endif
                                @endforeach
                                <ol>
                                    @foreach ($value2 as $i=>$indicator)
                                        @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                            @if (isset($indicator->baseLineEntry))
                                                <li>
                                                    {{$indicator->baseLineEntry}}
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ol>
                            </td>

                            @foreach ($item->fiscalYear as $index=>$year)
                                <td style="vertical-align: top;">
                                    @if ($index==0)

                                        @foreach ($value2 as $i=>$indicator)
                                            @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                                @if (isset($indicator->year1))
                                                    <span> 
                     {{$indicator->year1}}
                 </span>
                                                @endif
                                            @endif
                                        @endforeach

                                        <ol>
                                            @foreach ($value2 as $i=>$indicator)
                                                @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                                    @if (isset($indicator->year1))
                                                        <li>
                                                            {{$indicator->year1}}
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ol>

                                    @endif
                                    @if ($index==1)
                                        @foreach ($value2 as $i=>$indicator)
                                            @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                                @if (isset($indicator->year2))
                                                    <span> 
                     {{$indicator->year2}}
                 </span>
                                                @endif
                                            @endif
                                        @endforeach

                                        <ol>
                                            @foreach ($value2 as $i=>$indicator)
                                                @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                                    @if (isset($indicator->year2))
                                                        <li>
                                                            {{$indicator->year2}}
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ol>
                                    @endif
                                    @if ($index==2)
                                        @foreach ($value2 as $i=>$indicator)
                                            @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                                @if (isset($indicator->year3))
                                                    <span> 
                     {{$indicator->year3}}
                 </span>
                                                @endif
                                            @endif
                                        @endforeach

                                        <ol>
                                            @foreach ($value2 as $i=>$indicator)
                                                @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                                    @if (isset($indicator->year3))
                                                        <li>
                                                            {{$indicator->year3}}
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ol>
                                    @endif
                                    @if ($index==3)
                                        @foreach ($value2 as $i=>$indicator)
                                            @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                                @if (isset($indicator->year4))
                                                    <span> 
                     {{$indicator->year4}}
                 </span>
                                                @endif
                                            @endif
                                        @endforeach

                                        <ol>
                                            @foreach ($value2 as $i=>$indicator)
                                                @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                                    @if (isset($indicator->year4))
                                                        <li>
                                                            {{$indicator->year4}}
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ol>
                                    @endif
                                    @if ($index==4)
                                        @foreach ($value2 as $i=>$indicator)
                                            @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                                @if (isset($indicator->year5))
                                                    <span> 
                     {{$indicator->year5}}
                 </span>
                                                @endif
                                            @endif
                                        @endforeach

                                        <ol>
                                            @foreach ($value2 as $i=>$indicator)
                                                @if ($indicator->indicatorId!=$indicator->drfChildIndicatorid)
                                                    @if (isset($indicator->year5))
                                                        <li>
                                                            {{$indicator->year5}}
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ol>
                                    @endif
                                </td>
                            @endforeach

                            <td style="vertical-align: top;">
                             @foreach ($value2 as $i=>$indicator)
                                    @if ($indicator->indicatorId==$indicator->drfChildIndicatorid)
                                        @if (isset($indicator->sdg))
                                            <span> 
                     {{$indicator->sdg}}
                 </span>
                                        @endif
                                    @endif
                                @endforeach
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                @endforeach

            @endforeach
             @endif

        </table>
</div>

</body>

</html>