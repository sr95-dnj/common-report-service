<?php

namespace App\Lib;


class B2U
{
    public $preConversionMap;
    public $conversionMap;
    public $proConversionMap;
    public $postConversionMap;

    public function __construct()
    {
        $this->preConversionMap = array(
            ' +' => ' ',
            'yy' => 'y',
            'vv' => 'v',
            '­­' => '­',
            'y&' => 'y',
            '„&' => '„',
            '‡u' => 'u‡',
            'wu' => 'uw',
            ' ,' => ',',
            ' \\|' => '\\|',
            '\\\\ ' => '',
            ' \\\\' => '',
            '\\\\' => '',
            '\n +' => '\n',
            ' +\n' => '\n',
            '\n\n\n\n\n' => '\n\n',
            '\n\n\n\n' => '\n\n',
            '\n\n\n' => '\n\n'
        );

        $this->conversionMap = array(
            'Av' => 'আ',
            'A' => 'অ',
            'B' => 'ই',
            'C' => 'ঈ',
            'D' => 'উ',
            'E' => 'ঊ',
            'F' => 'ঋ',
            'G' => 'এ',
            'H' => 'ঐ',
            'I' => 'ও',
            'J' => 'ঔ',
            'K' => 'ক',
            'L' => 'খ',
            'M' => 'গ',
            'N' => 'ঘ',
            'O' => 'ঙ',
            'P' => 'চ',
            'Q' => 'ছ',
            'R' => 'জ',
            'S' => 'ঝ',
            'T' => 'ঞ',
            'U' => 'ট',
            'V' => 'ঠ',
            'W' => 'ড',
            'X' => 'ঢ',
            'Y' => 'ণ',
            'Z' => 'ত',
            '_' => 'থ',
            '`' => 'দ',
            'a' => 'ধ',
            'b' => 'ন',
            'c' => 'প',
            'd' => 'ফ',
            'e' => 'ব',
            'f' => 'ভ',
            'g' => 'ম',
            'h' => 'য',
            'i' => 'র',
            'j' => 'ল',
            'k' => 'শ',
            'l' => 'ষ',
            'm' => 'স',
            'n' => 'হ',
            'o' => 'ড়',
            'p' => 'ঢ়',
            'q' => 'য়',
            'r' => 'ৎ',
            's' => 'ং',
            't' => 'ঃ',
            'u' => 'ঁ',
            '0' => '০',
            '1' => '১',
            '2' => '২',
            '3' => '৩',
            '4' => '৪',
            '5' => '৫',
            '6' => '৬',
            '7' => '৭',
            '8' => '৮',
            '9' => '৯',
            '•' => 'ঙ্',
            'v' => 'া',
            'w' => 'ি',
            'x' => 'ী',
            'y' => 'ু',
            'z' => 'ু',
            '“' => 'ু',
            '–' => 'ু',
            '~' => 'ূ',
            'ƒ' => 'ূ',
            '‚' => 'ূ',
            '„„' => 'ৃ',
            '„' => 'ৃ',
            '…' => 'ৃ',
            '†' => 'ে',
            '‡' => 'ে',
            'ˆ' => 'ৈ',
            '‰' => 'ৈ',
            'Š' => 'ৗ',
            '\\|' => '।',
            '\\&' => '্‌',
            '\\^' => '্ব',
            '‘' => '্তু',
            '’' => '্থ',
            '‹' => '্ক',
            'Œ' => '্ক্র',
            '”' => 'চ্',
            '—' => '্ত',
            '˜' => 'দ্',
            '™' => 'দ্',
            'š' => 'ন্',
            '›' => 'ন্',
            'œ' => '্ন',
            'Ÿ' => '্ব',
            '¡' => '্ব',
            '¢' => '্ভ',
            '£' => '্ভ্র',
            '¤' => 'ম্',
            '¥' => '্ম',
            '¦' => '্ব',
            '§' => '্ম',
            '¨' => '্য',
            '©' => 'র্',
            'ª' => '্র',
            '«' => '্র',
            '¬' => '্ল',
            '­' => '্ল',
            '®' => 'ষ্',
            '¯' => 'স্',
            '°' => 'ক্ক',
            '±' => 'ক্ট',
            '²' => 'ক্ষ্ণ',
            '³' => 'ক্ত',
            '´' => 'ক্ম',
            'µ' => 'ক্র',
            '¶' => 'ক্ষ',
            '·' => 'ক্স',
            '¸' => 'গু',
            '¹' => 'জ্ঞ',
            'º' => 'গ্দ',
            '»' => 'গ্ধ',
            '¼' => 'ঙ্ক',
            '½' => 'ঙ্গ',
            '¾' => 'জ্জ',
            '¿' => '্ত্র',
            'À' => 'জ্ঝ',
            'Á' => 'জ্ঞ',
            'Â' => 'ঞ্চ',
            'Ã' => 'ঞ্ছ',
            'Ä' => 'ঞ্জ',
            'Å' => 'ঞ্ঝ',
            'Æ' => 'ট্ট',
            'Ç' => 'ড্ড',
            'È' => 'ণ্ট',
            'É' => 'ণ্ঠ',
            'Ê' => 'ণ্ড',
            'Ë' => 'ত্ত',
            'Ì' => 'ত্থ',
            'Í' => 'ত্ম',
            'Î' => 'ত্র',
            'Ï' => 'দ্দ',
            'Ð' => '-',
            'Ñ' => '-',
            'Ò' => '"',
            'Ó' => '"',
            'Ô' => "'",
            'Õ' => "'",
            'Ö' => '্র',
            '×' => 'দ্ধ',
            'Ø' => 'দ্ব',
            'Ù' => 'দ্ম',
            'Ú' => 'ন্ঠ',
            'Û' => 'ন্ড',
            'Ü' => 'ন্ধ',
            'Ý' => 'ন্স',
            'Þ' => 'প্ট',
            'ß' => 'প্ত',
            'à' => 'প্প',
            'á' => 'প্স',
            'â' => 'ব্জ',
            'ã' => 'ব্দ',
            'ä' => 'ব্ধ',
            'å' => 'ভ্র',
            'æ' => 'ম্ন',
            'ç' => 'ম্ফ',
            'è' => '্ন',
            'é' => 'ল্ক',
            'ê' => 'ল্গ',
            'ë' => 'ল্ট',
            'ì' => 'ল্ড',
            'í' => 'ল্প',
            'î' => 'ল্ফ',
            'ï' => 'শু',
            'ð' => 'শ্চ',
            'ñ' => 'শ্ছ',
            'ò' => 'ষ্ণ',
            'ó' => 'ষ্ট',
            'ô' => 'ষ্ঠ',
            'õ' => 'ষ্ফ',
            'ö' => 'স্খ',
            '÷' => 'স্ট',
            'ø' => 'স্ন',
            'ù' => 'স্ফ',
            'ú' => '্প',
            'û' => 'হু',
            'ü' => 'হৃ',
            'ý' => 'হ্ন',
            'þ' => 'হ্ম'
        );

        $this->proConversionMap = array('্্' => '্');

        $this->postConversionMap = array(
            '০ঃ' => '০:',
            '১ঃ' => '১:',
            '২ঃ' => '২:',
            '৩ঃ' => '৩:',
            '৪ঃ' => '৪:',
            '৫ঃ' => '৫:',
            '৬ঃ' => '৬:',
            '৭ঃ' => '৭:',
            '৮ঃ' => '৮:',
            '৯ঃ' => '৯:',
            ' ঃ' => ' :',
            '\nঃ' => '\n:',
            ']ঃ' => ']:',
            '\\[ঃ' => '\\[:',
            '  ' => ' ',
            'অা' => 'আ',
            '্‌্‌' => '্‌'
        );
    }

    function IsBanglaDigit($c)
    {
        if ($c >= '০' && $c <= '৯')
            return true;
        return false;
    }

    function IsBanglaPreKar($c)
    {
        if ($c == 'ি' || $c == 'ৈ' || $c == 'ে')
            return true;
        return false;
    }

    function IsBanglaPostKar($c)
    {
        if ($c == 'া' || $c == 'ো' || $c == 'ৌ' || $c == 'ৗ' || $c == 'ু' || $c == 'ূ' || $c == 'ী' || $c == 'ৃ')
            return true;
        return false;
    }

    function IsBanglaKar($c)
    {
        if ($this->IsBanglaPreKar($c) || $this->IsBanglaPostKar($c))
            return true;
        return false;
    }

    function IsBanglaBanjonborno($c)
    {
        if ($c == 'ক' || $c == 'খ' || $c == 'গ' || $c == 'ঘ' || $c == 'ঙ' || $c == 'চ' || $c == 'ছ' || $c == 'জ' || $c == 'ঝ' || $c == 'ঞ' || $c == 'ট' || $c == 'ঠ' || $c == 'ড' || $c == 'ঢ' || $c == 'ণ' || $c == 'ত' || $c == 'থ' || $c == 'দ' || $c == 'ধ' || $c == 'ন' || $c == 'প' || $c == 'ফ' || $c == 'ব' || $c == 'ভ' || $c == 'ম' || $c == 'য' || $c == 'র' || $c == 'ল' || $c == 'শ' || $c == 'ষ' || $c == 'স' || $c == 'হ' || $c == 'ড়' || $c == 'ঢ়' || $c == 'য়' || $c == 'ৎ' || $c == 'ং' || $c == 'ঃ' || $c == 'ঁ')
            return true;
        return false;
    }

    function IsBanglaSoroborno($c)
    {
        if ($c == 'অ' || $c == 'আ' || $c == 'ই' || $c == 'ঈ' || $c == 'উ' || $c == 'ঊ' || $c == 'ঋ' || $c == 'ঌ' || $c == 'এ' || $c == 'ঐ' || $c == 'ও' || $c == 'ঔ')
            return true;
        return false;
    }

    function IsBanglaNukta($c)
    {
        if ($c == 'ঁ')
            return true;
        return false;
    }

    function IsBanglaHalant($c)
    {
        if ($c == '্')
            return true;
        return false;
    }

    function IsSpace($c)
    {
        if ($c == ' ' || $c == '\t' || $c == '\n' || $c == '\r')
            return true;
        return false;
    }

    function reArrangeUnicodeConvertedText($str)
    {

        mb_internal_encoding("UTF-8");

        $proConversionMap = $this->proConversionMap;

        for ($i = 0; $i < mb_strlen($str); ++$i) {

            if ($i < (mb_strlen($str) - 1) && $this->mbCharAt($str, $i) == 'র' && $this->IsBanglaHalant($this->mbCharAt($str, $i + 1)) && !$this->IsBanglaHalant($this->mbCharAt($str, $i - 1))) {
                $j = 1;
                while (true) {
                    if ($i - $j < 0) {
                        break;
                    }
                    if ($this->IsBanglaBanjonborno($this->mbCharAt($str, $i - $j)) && $this->IsBanglaHalant($this->mbCharAt($str, $i - $j - 1))) {
                        $j += 2;
                    } else if ($j == 1 && $this->IsBanglaKar($this->mbCharAt($str, $i - $j))) {
                        $j++;
                    } else {
                        break;
                    }
                }
                $temp = $this->subString($str, 0, $i - $j);
                $temp .= $this->mbCharAt($str, $i);
                $temp .= $this->mbCharAt($str, $i + 1);
                $temp .= $this->subString($str, $i - $j, $i);
                $temp .= $this->subString($str, $i + 2, mb_strlen($str));
                $str = $temp;
                $i += 1;
                continue;
            }

        }

        $str = $this->doCharMap($str, $proConversionMap);

        for ($i = 0; $i < mb_strlen($str); ++$i) {

            if ($i < mb_strlen($str) - 1 && $this->mbCharAt($str, $i) == 'র' && $this->IsBanglaHalant($this->mbCharAt($str, $i + 1)) && !$this->IsBanglaHalant($this->mbCharAt($str, $i - 1)) && $this->IsBanglaHalant($this->mbCharAt($str, $i + 2))) {
                $j = 1;
                while (true) {
                    if ($i - $j < 0) {
                        break;
                    }
                    if ($this->IsBanglaBanjonborno($this->mbCharAt($str, $i - $j)) && $this->IsBanglaHalant($this->mbCharAt($str, $i - $j - 1))) {
                        $j += 2;
                    } else if ($j == 1 && $this->IsBanglaKar($this->mbCharAt($str, $i - $j))) {
                        $j++;
                    } else {
                        break;
                    }
                }
                $temp = $this->subString($str, 0, $i - $j);
                $temp .= $this->mbCharAt($str, $i);
                $temp .= $this->mbCharAt($str, $i + 1);
                $temp .= $this->subString($str, $i - $j, $i);
                $temp .= $this->subString($str, $i + 2, mb_strlen($str));
                $str = $temp;
                $i += 1;
                continue;
            }

            if ($i > 0 && $this->mbCharAt($str, $i) == '\u09CD' && ($this->IsBanglaKar($this->mbCharAt($str, $i - 1)) || $this->IsBanglaNukta($this->mbCharAt($str, $i - 1))) && $i < mb_strlen($str) - 1) {
                $temp = $this->subString($str, 0, $i - 1);
                $temp .= $this->mbCharAt($str, $i);
                $temp .= $this->mbCharAt($str, $i + 1);
                $temp .= $this->mbCharAt($str, $i - 1);
                $temp .= $this->subString($str, $i + 2, mb_strlen($str));
                $str = $temp;
            }

            if ($i > 0 && $i < mb_strlen($str) - 1 && $this->mbCharAt($str, $i) == '\u09CD' && $this->mbCharAt($str, $i - 1) == '\u09B0' && $this->mbCharAt($str, $i - 2) != '\u09CD' && $this->IsBanglaKar($this->mbCharAt($str, $i + 1))) {
                $temp = $this->subString($str, 0, $i - 1);
                $temp .= $this->mbCharAt($str, $i + 1);
                $temp .= $this->mbCharAt($str, $i - 1);
                $temp .= $this->mbCharAt($str, $i);
                $temp .= $this->subString($str, $i + 2, mb_strlen($str));
                $str = $temp;
            }

            if ($i < mb_strlen($str) - 1 && $this->IsBanglaPreKar($this->mbCharAt($str, $i)) && $this->IsSpace($this->mbCharAt($str, $i + 1)) == false) {
                $temp = $this->subString($str, 0, $i);
                $j = 1;
                while (($i + $j) < mb_strlen($str) - 1 && $this->IsBanglaBanjonborno($this->mbCharAt($str, $i + $j))) {
                    if (($i + $j) < mb_strlen($str) && $this->IsBanglaHalant($this->mbCharAt($str, $i + $j + 1))) {
                        $j += 2;
                    } else {
                        break;
                    }
                }
                $temp .= $this->subString($str, $i + 1, $i + $j + 1);
                $l = 0;
                if ($this->mbCharAt($str, $i) == 'ে' && $this->mbCharAt($str, $i + $j + 1) == 'া') {
                    $temp .= "ো";
                    $l = 1;
                } else if ($this->mbCharAt($str, $i) == 'ে' && $this->mbCharAt($str, $i + $j + 1) == "ৗ") {
                    $temp .= "ৌ";
                    $l = 1;
                } else {
                    $temp .= $this->mbCharAt($str, $i);
                }
                $temp .= $this->subString($str, $i + $j + $l + 1, mb_strlen($str));
                $str = $temp;
                $i += $j;
            }

            if ($i < mb_strlen($str) - 1 && $this->IsBanglaNukta($this->mbCharAt($str, $i)) && $this->IsBanglaPostKar($this->mbCharAt($str, $i + 1))) {
                $temp = $this->subString($str, 0, $i);
                $temp .= $this->mbCharAt($str, $i + 1);
                $temp .= $this->mbCharAt($str, $i);
                $temp .= $this->subString($str, $i + 2, mb_strlen($str));
                $str = $temp;
            }

        }

        return $str;
    }

    function convertBijoyToUnicode($srcString)
    {
        $preConversionMap = $this->preConversionMap;
        $conversionMap = $this->conversionMap;
        $postConversionMap = $this->postConversionMap;

        $srcString = $this->doCharMap($srcString, $preConversionMap);
        $srcString = $this->doCharMap($srcString, $conversionMap);
        $srcString = $this->reArrangeUnicodeConvertedText($srcString);
        $srcString = $this->doCharMap($srcString, $postConversionMap);
        return $srcString;
    }

    function doCharMap($text, $charMap)
    {
        foreach ($charMap as $srcKey => $keyVal) {
            $format = "@$srcKey@";
            $text = preg_replace($format, $keyVal, $text);
        }
        return $text;
    }

    function mbCharAt($str, $i)
    {
        return mb_substr($str, $i, 1);
    }

    function subString($string, $from, $to)
    {
        return mb_substr($string, $from, $to - $from);
    }
}