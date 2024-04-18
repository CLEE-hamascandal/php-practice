<?php
// Q1 変数と文字列
$name = '濱崎';

echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5 * 4;

echo "$num \n";

echo $num / 2;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';


// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 32;

echo ($age < 18) ? '未成年' : '成人' . 'です。';


// Q6 配列
$kanto = ['群馬県', '栃木県', '茨城県', '埼玉県', '千葉県', '東京都', '神奈川県'];

echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefecturalCapital = [
  '群馬県' => '前橋市',
  '栃木県' => '宇都宮市',
  '茨城県' => '水戸市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
];

foreach ($prefecturalCapital as $capital) {
  echo "$capital\n";
}


// Q8 連想配列-2
$prefecturalCapital = [
  '群馬県' => '前橋市',
  '栃木県' => '宇都宮市',
  '茨城県' => '水戸市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
];

foreach ($prefecturalCapital as $prefecture => $capital) {
  if ($prefecture === '埼玉県') {
      echo $prefecture . 'の県庁所在地は、' . $capital . 'です。';
      break;
  }
}


// Q9 連想配列-3
$prefecturalCapital = [
  '群馬県' => '前橋市',
  '栃木県' => '宇都宮市',
  '茨城県' => '水戸市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
];

$prefecturalCapital['長野県'] = '長野市';
$prefecturalCapital['愛知県'] = '名古屋市';

$kanto = ['群馬県', '栃木県', '茨城県', '埼玉県', '千葉県', '東京都', '神奈川県'];

foreach ($prefecturalCapital as $prefecture => $capital) {
  if (in_array($prefecture, $kanto)) {
      echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
  } else {
      echo $prefecture . "は関東地方ではありません。\n";
  }
}


// Q10 関数-1
function hello($name)
{
    return $name . "さん、こんにちは。\n";
}


echo hello('遠藤');
echo hello('中村');


// Q11 関数-2
$price = 1000;

function calcTaxInPrice($taxOutPrice)
{
    return $taxOutPrice * 1.1;
}

$taxInPrice = calcTaxInPrice($price);

echo $price . '円の税込み価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 0) {
        return $num . "は偶数です。\n";
    } else {
        return $num . "は奇数です。\n";
    }
}

echo distinguishNum('11');
echo distinguishNum(214);


// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {
      case 'A':
      case 'B':
          return '合格です。';
      
      case 'C':
          return '合格ですが追加課題があります。';

      case 'D':
          return '不合格です。';
      
      default:
          return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A');
echo evaluateGrade('優');


?>