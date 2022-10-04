<!DOCTYPE html>
<html lang="bn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="{{ asset('style/report-style.css') }}" rel="stylesheet">

    <style>
    /* table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    } */

    table.center {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        padding: 5px;
    }
    </style>

</head>


<body>
    <?php
    $en = [];

    $bn = [];

    $L = ${$lng};
    $projectSummaryList = json_decode($val['projectSummaryList']);
    //dd($fiscalYearList);

    //dd($fiscalYearList);

    // print_r($projectSummaryList);
    // exit();

    // var_dump($projectSummaryList)
    // echo '<pre>',print_r($projectSummaryList),'</pre>';
    ?>

    <div class="landscapePage">
        <div style="text-align: center; font-size: 20px; ">
            <b> Feasibility Study project List</b>
        </div>
        <br>
        <div style="text-align: center;">
            <table class="center tbBorder" style="text-align: center; padding: 5px;">
                <tbody>
                <tbody>
                    <tr>
                        <th style="width: 8%; padding: 5px; ">SL</th>
                        <th style="width: 56%; padding: 5px; ">Project Information</th>
                        <th colspan="5" style="width: 35%; padding: 5px; ">Project Cost (Taka In
                            Lac)</th>
                    </tr>

                    @foreach ($projectSummaryList as $index => $list)
                    <tr>
                        <td rowspan="7">{{$index+1}}</td>
                        <td style="text-align: left;">
                            <span> <b>{{$list->titleEn}} </b></span>
                            <span>({{$list->projectTypeDTO->nameEn}}) </span>
                        </td>
                        <td colspan="5"></td>
                    </tr>

                    <tr>
                        <td style="text-align: left;"> {{$list->agencyDTO->nameEn}}</td>
                        <!-- <td style="width: 7%;">Total</td> -->
                        <td  >Total</td>
                        <td  >GoB <br> (FE)</td>
                        <td  >PA<br> (RPA)</td>
                        <td  >Own Fund<br> (FE) </td>
                        <td  >Other<br> (FE)</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">{{ $list->agencyDTO->ministryDivisionDTO->nameEn }}</td>

                        <!-- $foo = "105";
                        echo number_format((float)$foo, 2, '.', ''); // Outputs -> 105.00 -->

                        <td rowspan="5">
                        {{ number_format($list->annexureAmount ? $list->annexureAmount->totalAmount  : $list->totalAmount, 2) }}
                        </td>
                        <td rowspan="5">   
                        {{number_format($list->annexureAmount ? $list->annexureAmount->gobAmount : $list->gobAmount, 2)}} <br>
                        ({{number_format( $list->annexureAmount ? $list->annexureAmount->gobFeAmount : $list->feGobAmount, 2) }} )
                        </td>
                        <td rowspan="5">
                        {{ number_format($list->annexureAmount ? $list->annexureAmount->paAmount  : $list->paAmount, 2)}} <br>
                        ({{ number_format($list->annexureAmount ? $list->annexureAmount->rpaAmount  : $list->rpaAmount, 2)}}  )
                        </td>
                        <td rowspan="5">
                        {{ number_format($list->annexureAmount ? $list->annexureAmount->ownFundAmount  : $list->ownFundAmount, 2)}} <br>
                        ({{ number_format($list->annexureAmount ? $list->annexureAmount->ownFundFeAmount  : $list->feOwnFundAmount, 2)}}  )
                        </td>
                        <td rowspan="5">
                        {{ number_format($list->annexureAmount ? $list->annexureAmount->otherAmount: $list->otherAmount, 2) }}  <br>
                        ({{ number_format($list->annexureAmount ? $list->annexureAmount->otherFeAmount : $list->feOtherAmount, 2)}}     )
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Sector Division:
                            @foreach ($list->sectorDivisionName as $index => $division)
                            {{ $division }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Create Date: {{ $list->createdDate }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Date of Commencement: {{ $list->commencementDate }} Date of
                            Completion: {{ $list->completionDate }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Status: {{ $list->movementStatus }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <br>
                <br>
                <br>
            </table>
        </div>
    </div>