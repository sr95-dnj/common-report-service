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
    $rtappAnnualPhasingCost = json_decode($val['rtappAnnualPhasingCost']);
    $fiscalYearWiseCost = json_decode($val['fiscalYearWiseCost']);
    // dd($fiscalYearWiseCost);

    //dd($fiscalYearList);
    // print_r($rtappAnnualPhasingCost);

    // var_dump($rtappAnnualPhasingCost);
    // exit();

    // echo '<pre>',print_r($fiscalYearWiseCost),'</pre>';


    ?>


    <div class="landscapePage">


        <div>
           
        </div>
        <div>
        <h3 style="text-align: center;">Cumulative Progress and Year Wise Breakdown</h3>
            <p style="text-align: right;"> (Taka in Lac)</p>
        </div>


        @foreach($fiscalYearWiseCost  as $index => $fy)
        <div>
            <table class="tbBorder" style="width: 100%;">

                <thead class=" ">
                    <tr class=" ">
                        <td class=" " rowspan="5">Economic Code</td>
                        <td rowspan="5">Economic Sub-Code</td>
                        <td rowspan="5">Sub-Code wise Compt. Description</td>
                        <td colspan="8">Cumulative progress up to .... </td>
                        <td colspan="8">To be incurred</td>
                    </tr>
                    <tr>
                        <td colspan="8" > </td>
                        <td colspan="8">{{$fy->fiscalYear}}</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Unit</td>
                        <td rowspan="3">Qty</td>
                        <td colspan="6">Cost</td>
                        <td rowspan="3">Unit</td>
                        <td rowspan="3">Qty</td>
                        <td colspan="6">Cost</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Total</td>
                        <td rowspan="2">GoB <br> (FE) </td>
                        <td colspan="2">PA</td>
                        <td rowspan="2">Own <br> Fund</td>
                        <td rowspan="2">Others</td>
                        <td rowspan="2">Total</td>
                        <td rowspan="2">GoB</td>
                        <td colspan="2">PA</td>
                        <td rowspan="2">Own</td>
                        <td rowspan="2">Others</td>
                    </tr>
                    <tr>
                        <td>RPA</td>
                        <td>DPA</td>
                        <td>RPA</td>
                        <td>DPA</td>
                    </tr>

                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td colspan="19">(a) Revenue</td>
                    </tr>

                    @foreach($rtappAnnualPhasingCost->revenue->estimatedCostTabDetailsDTOS  as $index => $rData)
                    <tr>
                    <td>{{$rData->economicCode->economicCode}}</td>
                    <td>{{$rData->subEconomicCode->subEconomicCode}}</td>
                    <td>{{$rData->description}}</td>
                    <td>{{$rData->unitType->unitTypeNameEng}}</td>
                    <td>{{$rData->qty}}</td>
                    <td>{{$rData->totalAmount}}</td>
                    <td>{{$rData->gobAmount}} <br> ({{$rData->gobFeAmount}})</td>
                    <td>{{$rData->thruPdAmount}}</td>
                    <td>{{$rData->thruDpAmount}}</td>
                    <td>{{$rData->ownFundAmount}}  </td>
                    <td>{{$rData->otherAmount}}  </td>
                   
                        <td></td>
                        <td></td>
                     

                        <td>{{$fy->tappAnnualPhasingCostTotal->totalAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->gobAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->thruPdAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->thruDpAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->ownFundAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->otherAmount}}</td>
                       
                       
                    </tr>
                    @endforeach

                    @foreach($fy->values  as $index => $vFy)
                    <tr>
                        <td colspan="3">Sub-total (Revenue)</td>
                        <td></td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->qty}}</td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->totalAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->gobAmount}} <br>
                            {{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->gobFeAmount}}
                        </td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->thruPdAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->thruDpAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->ownFundAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->revenue->dppAnnualPhasingCostTotal->otherAmount}}</td>
                        
                        <td></td>
                        <td></td>

                        <td> {{$vFy->totalAmount}}</td>
                        <td>{{$vFy->gobAmount}}</td>
                        <td>{{$vFy->thruPdAmount}}</td>
                        <td>{{$vFy->thruDpAmount}}</td>
                        <td>{{$vFy->ownFundAmount}}</td>
                        <td>{{$vFy->otherAmount}}</td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="19">(b) Capital</td>
                    </tr>
                    @foreach($rtappAnnualPhasingCost->capital->estimatedCostTabDetailsDTOS  as $index => $cData)
                    <tr>
                    <td>{{$cData->economicCode->economicCode}}</td>
                    <td>{{$cData->subEconomicCode->subEconomicCode}}</td>
                    <td>{{$cData->description}}</td>
                    <td>{{$cData->unitType->unitTypeNameEng}}</td>
                    <td>{{$cData->qty}}</td>
                    <td>{{$cData->totalAmount}}</td>
                    <td>{{$cData->gobAmount}} <br> ({{$cData->gobFeAmount}})</td>
                    <td>{{$cData->thruPdAmount}}</td>
                    <td>{{$cData->thruDpAmount}}</td>
                    <td>{{$cData->ownFundAmount}}  </td>
                    <td>{{$cData->otherAmount}}  </td>
                   
                        <td></td>
                        <td></td>
                     

                        <td>{{$fy->tappAnnualPhasingCostTotal->totalAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->gobAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->thruPdAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->thruDpAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->ownFundAmount}}</td>
                        <td>{{$fy->tappAnnualPhasingCostTotal->otherAmount}}</td>
                    </tr>
                    @endforeach

                    @foreach($fy->values  as $index => $vFy)
                    <tr>
                        <td colspan="3">Sub-total (Capital) </td>
                        <td></td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->qty}}</td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->totalAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->gobAmount}} <br>
                            {{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->gobFeAmount}}
                        </td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->thruPdAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->thruDpAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->ownFundAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->capital->dppAnnualPhasingCostTotal->otherAmount}}</td>
                        
                        <td></td>
                        <td></td>

                        <td> {{$vFy->totalAmount}}</td>
                        <td>{{$vFy->gobAmount}}</td>
                        <td>{{$vFy->thruPdAmount}}</td>
                        <td>{{$vFy->thruDpAmount}}</td>
                        <td>{{$vFy->ownFundAmount}}</td>
                        <td>{{$vFy->otherAmount}}</td>
                    </tr>
                    @endforeach


                    @foreach($fy->values  as $index => $vFy)
                    <tr>
                        <td colspan="3">(c) Physical Contingency </td>
                        <td></td>
                        <td></td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[0]->totalAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[0]->gobAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[0]->thruPdAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[0]->thruDpAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[0]->ownFundAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[0]->otherAmount}}</td>

                        <td></td>
                        <td></td>

                        <td> {{$vFy->totalAmount}}</td>
                        <td>{{$vFy->gobAmount}}</td>
                        <td>{{$vFy->thruPdAmount}}</td>
                        <td>{{$vFy->thruDpAmount}}</td>
                        <td>{{$vFy->ownFundAmount}}</td>
                        <td>{{$vFy->otherAmount}}</td>

                        
                     
                    </tr>
                    @endforeach

                    @foreach($fy->values  as $index => $vFy)
                    <tr>
                        <td colspan="3">(d) Price Contingency</td>
                        <td></td>
                        <td></td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[1]->totalAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[1]->gobAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[1]->thruPdAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[1]->thruDpAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[1]->ownFundAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->contingency->estimatedCostTabDetailsDTOS[1]->otherAmount}}</td>

                        <td></td>
                        <td></td>
                         <td> {{$vFy->totalAmount}}</td>
                        <td>{{$vFy->gobAmount}}</td>
                        <td>{{$vFy->thruPdAmount}}</td>
                        <td>{{$vFy->thruDpAmount}}</td>
                        <td>{{$vFy->ownFundAmount}}</td>
                        <td>{{$vFy->otherAmount}}</td>
                     
                        
                    </tr>
                    @endforeach

                    @foreach($fy->values  as $index => $vFy)
                    <tr>
                        <td colspan="3">Grand Total (a+b+c+d)</td>
                        <td></td>
                        <td></td>
                        <td>{{$rtappAnnualPhasingCost->grandTotalResponses->totalAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->grandTotalResponses->gobAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->grandTotalResponses->thruPdAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->grandTotalResponses->thruDpAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->grandTotalResponses->ownFundAmount}}</td>
                        <td>{{$rtappAnnualPhasingCost->grandTotalResponses->otherAmount}}</td>

                        <td></td>
                        <td></td>
                        <td> {{$vFy->totalAmount}}</td>
                        <td>{{$vFy->gobAmount}}</td>
                        <td>{{$vFy->thruPdAmount}}</td>
                        <td>{{$vFy->thruDpAmount}}</td>
                        <td>{{$vFy->ownFundAmount}}</td>
                        <td>{{$vFy->otherAmount}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        @endforeach

        <br>


    </div>