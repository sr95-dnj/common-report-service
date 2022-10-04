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
    $en = [];

    $bn = [];

    $L = ${$lng};
    $pmWorkPlanList = json_decode($val['pmWorkPlanList']);
    $fiscalYearList = json_decode($val['fiscalYearList']);
    //dd($fiscalYearList);

    //dd($fiscalYearList);
    ?>


    <div class="landscapePage">


        <div>
            Annexure - II
        </div>
        <div>
            Implementation/Work Schedule
        </div>



        <table style="width: 100%;">

            <tr>
                <td>

                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <td class="table-border ">SL</td>
                                <td class="table-border ">Task Breakdown</td>
                                <td class="table-border ">Start Qtr</td>
                                <td class="table-border ">End Qtr</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pmWorkPlanList as $index => $pmWorkPlanList) {
                            ?>
                                <tr>

                                    <td class="table-border "><?php echo $index + 1 ?></td>
                                    <td class="table-border ">{{$pmWorkPlanList->taskDetails}}</td>
                                    <td class="table-border ">22/09/2021</td>
                                    <td class="table-border ">23/09/2021</td>
                                <?php }
                                ?>
                                </tr>
                        </tbody>

                    </table>

                </td>
                <td>

                    <table class="table-border " style="width: 100%;">
                        <tr>
                            <?php
                            foreach ($fiscalYearList as $index => $yearList) { ?>

                                <td class="table-border ">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="4">
                                                    {{$yearList->fiscalYear}}
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="table-border ">Q1</th>
                                                <th class="table-border ">Q2</th>
                                                <th class="table-border ">Q3</th>
                                                <th class="table-border ">Q4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($yearList->classList as $index2 => $val)
                                            //                    dd($val);
                                            { ?>
                                                <ng-container>
                                                    <tr>
                                                        <td class="{{$val->calssNameOne}}"></td>
                                                        <td class="{{$val->calssNameTwo}}"></td>
                                                        <td class="{{$val->calssNameThree}}"></td>
                                                        <td class="{{$val->calssNameFour}}"></td>
                                                    </tr>
                                                </ng-container>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </td>
                            <?php }
                            ?>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>

    </div>