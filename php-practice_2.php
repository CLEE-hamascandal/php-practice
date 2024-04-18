<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        $answer = 'tic-tac';
    } elseif ($i % 4 === 0) {
        $answer = 'tic';
    } elseif ($i % 5 === 0) {
        $answer = 'tac';
    } else {
        $answer = $i;
    }

    echo "$answer \n";
}


// Q2 多次元連想配列
//Q2-1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";
//Q2-2
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

foreach ($personalInfos as $index_num => $person) {
    echo $index_num + 1 . "番目の" . $person['name'] . "さんのメールアドレスは" . $person['mail'] . "で、電話番号は" . $person['tel'] . "です。\n";
}
//Q2-3
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

$ageList = [25, 30, 18];

foreach ($personalInfos as $indexNum => $contents) {
    $contents["age"] = $ageList[$indexNum];
    $personalInfos[$indexNum] = $contents;
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(30, "濱崎");
var_dump($student);

echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($course)
    {
        echo $this->studentName . "は" . $course . "の授業に参加しました。学籍番号:" . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//Q5-1
date_default_timezone_set("Asia/Tokyo");
$date = new DateTime();
echo $date->modify('-1 months')->format("Y-m-d");


//Q5-2
date_default_timezone_set('Asia/Tokyo');
$today = new DateTime('now');
$thatDay = new DateTime('1992-4-25');
echo $diff = $today->diff($thatDay)->format('あの日から%a日経過しました。');


?>