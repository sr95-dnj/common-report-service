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
$data = json_decode($val['data']);

?>

<div style="font-size: 24px;">
    <table width="100%">
        <tr>
            <td style="width: 33%"></td>
            <td style="width: 34%; text-align: center;">
                সীমিত <br>
                দৈনিক আদেশনামা ২য় খন্ড
            </td>
            <td style="width: 33%; text-align: center;">
                <br>
                বিওএফ নম্বরঃ
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 25%">ইউনিট</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%">বাংলাদেশ সমরাস্ত্র কারখানা</td>
            <td style="width: 5%"></td>
            <td style="width: 10%">স্থান</td>
            <td style="width: 3%;">:</td>
            <td style="width: 35%;">গাজীপুর সেনানিবাস</td>
        </tr>

        <tr>
            <td style="width: 25%">ক্রমিক নম্বরঃ</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%"></td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখঃ</td>
            <td style="width: 3%;">:</td>
            <td style="width: 35%;">কার্তিক ১৪২৮ / নভেম্বর ২০২১</td>
        </tr>

        <tr>
            <td style="width: 25%">পূর্বে প্রকাশিত দৈনিক আদেশ নামা ২য় খন্ড নম্বরঃ</td>
            <td style="width: 3%">:</td>
            <td style="width: 20%"></td>
            <td style="width: 5%"></td>
            <td style="width: 10%">তারিখঃ</td>
            <td style="width: 3%;">:</td>
            <td style="width: 35%;">কার্তিক ১৪২৮ / নভেম্বর ২০২১</td>
        </tr>
    </table>

    <table width="100%">
        <tr>
            <td style="width: 50%"><b><u>জরিমানা কারিগর</u></b></td>
            <td style="width: 50%;">
                <br>
                <strong>দ্বিতীয় বিভাগ</strong>
            </td>
        </tr>
    </table>

    <table width="100%">
        <tr style="text-align: center;">
            <td style="width: 5%; text-align: center;">ক্রমিক </td>
            <td style="width: 20%; text-align: center;">শাখা</td>
            <td style="width: 25%; text-align: center;">ব্যক্তিগত নম্বর, পদবী ও নাম</td>
            <td style="width: 50%; text-align: center;">কার্যক্রম</td>
        </tr>
    </table>

    <br>
    <div style="text-align: center;">

    </div>
</div>