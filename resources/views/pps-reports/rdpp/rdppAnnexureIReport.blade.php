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
    'AnnexureILocationWiseCostBreakdown' => 'Location wise cost breakdown',
    'HomeAnnexureILocationWiseCostBreakdown' => 'Home>Annexure-I=> Location wise cost breakdown',
    'ProjectMainPage' => 'Project Main Page',
    'LocationWiseCostBreakdown' => 'Location wise cost breakdown',
    'SlNo' => 'SI No.',
    'Division' => 'Division',
    'Zilla' => 'District',
    'UpazilaCityCorporationPourosave' => 'Upazila / City Corporation / Pourosave',
    'MajorItems' => 'Major Items',
    'ComponentWithQuantity' => 'Component with Quantity',
    'EstimatedCost' => 'Estimated Cost',
    'InLakhTaka' => 'In Lakh Taka',
    'Comments' => 'Comments',
    'Save' => 'Save',
    'Update' => 'Update',
    'Close' => 'Close',
];

$bn = [
    'AnnexureILocationWiseCostBreakdown' => 'প্রকল্প এলাকা ভিত্তিতে সংশোধিত ব্যয় বিভাজন',
    'HomeAnnexureILocationWiseCostBreakdown' => 'হোম > সংযোজনী-১',
    'ProjectMainPage' => 'প্রকল্পের প্রধান পাতা',
    'LocationWiseCostBreakdown' => 'এলাকা ভিত্তিক ব্যয় বিভাজন',
    'SlNo' => 'ক্রমিক',
    'Division' => 'বিভাগ',
    'Zilla' => 'জেলা',
    'UpazilaCityCorporationPourosave' => 'উপজেলা/সিটি কর্পোরেশন/পৌরসভা',
    'MajorItems' => 'প্রকল্পের প্রধান আইটেমসমূহ/অঙ্গ',
    'ComponentWithQuantity' => 'পরিমাণসহ',
    'EstimatedCost' => 'প্রাক্কলিত ব্যয়',
    'InLakhTaka' => 'লক্ষ টাকায়',
    'Comments' => 'মন্তব্য',
    'Save' => 'সংরক্ষণ করুন',
    'Update' => 'পরিবর্তন করুন',
    'Close' => 'বন্ধ করুন',
];

$L = ${$lng};
$currentUpazilas = json_decode($val['currentUpazilas']);
?>

<table style="width: 100%; margin-bottom: 20px">
    <tr class="textCenter font-17 fontBold">
        <td>
            {{$L['AnnexureILocationWiseCostBreakdown']}}
        </td>
    </tr>
</table>
<table class="tbBorder">
    <thead>
    <tr class="textCenter fontBold">
        <td rowspan="2">{{$L['SlNo']}}</td>
        <td rowspan="2">{{$L['Division']}}</td>
        <td rowspan="2">{{$L['Zilla']}}</td>
        <td rowspan="2">{{$L['UpazilaCityCorporationPourosave']}}</td>
        <td rowspan="2">
            {{$L['MajorItems']}}
            <br>
            ({{$L['ComponentWithQuantity']}})
        </td>
        <td colspan="2">
            {{$L['EstimatedCost']}}
            <br>
            ({{$L['InLakhTaka']}})
        </td>
        <td rowspan="2">{{$L['Comments']}}</td>
    </tr>
    <tr>
        <td>Original</td>
        <td>Revised</td>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 1;
    foreach ($currentUpazilas as $index => $rows) {
    ?>
    <tr class="font-13 textCenter">
        @if ($rows->dSpan !==0)
        <td rowspan="{{$rows->dSpan}}">
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($i, 'number') : $i;
            echo $value;
            $i++
            ?>
        </td>
        @endif

    @if ($rows->dSpan !==0)
            <td rowspan="{{$rows->dSpan}}">
                <?php
                $value = ($lng === 'bn') ? $rows->upazila->zilla->division->nameBn : $rows->upazila->zilla->division->nameEn;
                echo $value;
                ?>
            </td>
        @endif
        @if ($rows->zSpan !==0)
            <td rowspan="{{$rows->zSpan}}">
                <?php
                $value = ($lng === 'bn') ? $rows->upazila->zilla->nameBn : $rows->upazila->zilla->nameEn;
                echo $value;
                ?>
            </td>
        @endif
        <td>
            <?php
            $value = ($lng === 'bn') ? $rows->upazila->nameBn : $rows->upazila->nameEn;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($rows->location->quantity, 'number') : $rows->location->quantity;
            echo $value;
            ?>
        </td>
        <td>
            <?php
            $value = ($lng === 'bn') ? $Controller::entoBn($rows->location->estimatedCost, 'number') : $rows->location->estimatedCost;
            echo $value;
            ?>
        </td>
        <td></td>
        <td>
            {{$rows->location->comment}}
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>