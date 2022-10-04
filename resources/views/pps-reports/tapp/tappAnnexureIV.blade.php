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
   
    $fiscalYearList = json_decode($val['fiscalYearList']);
    $tappWorkPlanList = json_decode($val['tappWorkPlanList']);
    // $v= $tappWorkPlanList->res[0]->taskDetails;
    // dd($tappWorkPlanList->res[0]->taskDetails);

    // dd($tappWorkPlanList);

    //  echo '<pre>',print_r($fiscalYearList);
    //  exit();

    // var_dump($fiscalYearList)

    // echo '<pre>',print_r($tappWorkPlanList),'</pre>';
    ?>

    <div class="landscapePage">
        <div style="text-align: center; font-size: 20px; ">
            <b> Implementation/Work Schedule</b>
        </div>

        <div style="text-align: right; font-size: 20px; ">
            <b> Annexure-IV</b>
        </div>

        <br>
        <div style="text-align: center;">


            <!-- ------------------------------------------------------------------------------------------------------------- -->

            <table class="center tbBorder" style="text-align: center; padding: 5px; width: 100%;">
                <tbody>
                    <tr>
                        <td rowspan="2" style="font-weight: bold;">Sl</td>
                        <td rowspan="2" style="font-weight: bold;  width: 40%; ">Activities</td>

                        <?php foreach ($fiscalYearList as $item) {; ?>
                            <td colspan="4" style="border-right: 2px solid #020202; font-weight: bold;">{{$item->fiscalYear}}</td>
                        <?php } ?>

                    </tr>

                    <tr>
                        <?php foreach ($fiscalYearList as $item) {; ?>
                            <td style="font-weight: bold;">Q1</td>
                            <td style="font-weight: bold;">Q2</td>
                            <td style="font-weight: bold;">Q3</td>
                            <td style="border-right: 2px solid #020202; font-weight: bold;">Q4</td>
                        <?php } ?>
                    </tr>



                    @foreach ($tappWorkPlanList as $index=>$item)
                    <tr>
                        <td>{{$index+1}}</td>

                                <!-- Activities -->
                      
                        <td style="text-align: justify;"><p class="symbol" ></p> {{$item->taskDetails}}</td>
                     
                        <?php foreach ($item->fiscalYearList as $index=>$fiscal) {; ?>
                            <td class="symbol" style="background-color: #E4E4E4;">{{($fiscal->Q1) ? "√" : "-"}}</td>
                       
                            <td class="symbol" >{{($fiscal->Q2) ? "√" : "-"}}</td>
                       
                            <td class="symbol" style="background-color: #E4E4E4;">{{($fiscal->Q3) ? "√" : "-"}}</td>
                      
                            <td class="symbol" style="border-right: 2px solid #020202;">{{($fiscal->Q4) ? "√" : "-"}}</td>
                        <?php } ?>
                    </tr>
                    @endforeach



                </tbody>
            </table>

        </div>
    </div>