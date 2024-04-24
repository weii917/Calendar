<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style>
    /*請在這裹撰寫你的CSS*/
    * {
      margin: 0;
      padding: 0;
      font-weight: bolder;
      box-sizing: border-box;
      font-size: 24px;
      color: #fcf7f8;
      /* color: rgb(88, 129, 87); */
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

    }

    body {
      background-image: url('./images/back-1.jpg');
      background-size: cover;
      position: relative;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .container {
      padding-top: 15vh;
      width: 75%;
      margin: auto;


    }

    /* 上一年下一年 */
    .last-year {
      /* background-color: #a31621; */
      /* margin-left: 50px;
      margin-right: 50px; */
      padding-top: 15vh;
      width: auto;
      position: relative;
      animation-name: lastYearMove;
      animation-duration: 2s;
      animation-iteration-count: infinite;
      animation-timing-function: ease-in-out;

    }

    .next-year {
      /* background-color: #a31621; */
      /* margin-left: 50px;
      margin-right: 50px; */
      padding-top: 15vh;
      width: auto;
      position: relative;
      animation-name: nextYearMove;
      animation-duration: 3s;
      animation-timing-function: ease-in;
      animation-iteration-count: infinite;
    }

    /* 動態箭頭 */
    @keyframes lastYearMove {

      from {
        left: 20px;
      }

      to {
        left: 0px;
      }
    }

    @keyframes nextYearMove {

      /* 定義每個階段的變化  */
      from {

        right: 20px;
      }

      to {
        right: 0px;
      }
    }

    .last-year>a,
    .next-year>a {
      backdrop-filter: blur(30px);
      opacity: 0.7;
      text-decoration: none;
      font-size: 72px;
      text-align: center;
      text-shadow: 2px 2px 10px black;
    }

    .last-year>a:hover,
    .next-year>a:hover {
      cursor: pointer;
      opacity: 1;
      text-decoration: none;
      font-size: 72px;
      text-align: center;
      text-shadow: 20px 20px 15px black;
    }

    /* 查詢年月 */
    .nav {
      display: flex;
      justify-content: space-around;
      align-items: center;
      width: 100%;
      height: 7vh;
      opacity: 0.8;
      background-color: white;
      border-radius: 25px 25px 0 0;
      backdrop-filter: blur(30px);
    }

    .select-top {
      margin-left: 15px;
      width: 40%;
      text-align: left;
      /* background-color: blue; */
      height: 5vh;


    }

    /* 顯示詞語 */
    .text-top {
      width: 60%;
      height: 5vh;
      /* padding: 8px; */
      /* background-color: #284b63; */
      text-align: right;
    }

    .text-top>h2 {
      /* border: 2px solid #588157; */
      border-radius: 50px;
      padding: 5px 15px;
      font-size: 24px;
      color: darkred;
      /* color: hsl(140, 30%, 60%); */
      font-family: monospace, Courier, monospace;
      font-weight: bolder;
      font-style: italic;
    }

    /* 選擇年月 */

    label {
      color: #588157;
      padding: 5px;

    }

    select,
    option,
    input[type='submit'] {
      cursor: pointer;
      border: none;
      border-radius: 50px 50px;
      padding: 10px;
      color: #588157;
      background-color: #fff;
      /* border: 1px solid #588157; */
      /* transition: 0.5s ease-in; */
      /* box-shadow: 3px 5px 5px black; */
    }

    input[type='submit'] {
      background-color: #fff;
      color: #588157;
      border: 2px solid #588157;
      padding: 5px 10px;
      border-radius: 50px 50px;
      box-shadow: 3px 6px 3px #284b63;
    }

    input[type='submit']:hover {
      background-color: #588157;
      padding: 8px 12px;
      color: #fff;

    }

    select:hover,
    option:hover {
      cursor: pointer;
      color: #fff;
      box-shadow: 3px 3px 5px black inset;
      background-color: #588157;
    }


    select:focus {
      border: 2px solid #588157;
      outline: none;
    }

    select option:checked {
      background-color: #588157;
      /* 選項中顏色*/
      color: #fff;

    }

    /* 上個月、今天、下個月 */
    .top {
      /* background-color: red; */
      /* backdrop-filter: blur(30px); */
      width: 100%;
      height: 10vh;
      display: flex;
      margin: auto;
      align-items: center;
      justify-content: space-between;
      background-color: rgb(38, 70, 83, 0.6);

    }

    .top>a {
      font-size: 40px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      margin: 6px 10px;
      padding: 8px 15px;
      border: 1px solid rgb(38, 70, 83);
      border-radius: 50px;
      box-shadow: -3px 6px 3px black;
    }

    .top>a:hover {
      cursor: pointer;
      font-size: 40px;
      /* border: 2px solid #588157; */
      /* background-color: #588157; */
      border-radius: 50px;
      padding: 8px 15px;
      animation-name: circle;
      animation-duration: 2s;
      animation-iteration-count: infinite;
      box-shadow: 5px 6px 10px black inset;

    }

    @keyframes circle {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    .container-1 {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 60vh;
      border-radius: 0 0 25px 25px;
    }


    /* 西元年月 */
    .bg-title {
      text-shadow: none;
      opacity: 0.8;
      background-color: white;
      vertical-align: middle;
    }

    .bg-title:hover {
      box-shadow: 2px 2px 6px black inset;
    }

    .bg-title>p {
      font-size: 32px;
      color: rgb(88, 129, 87);
      animation-name: title;
      animation-duration: 2s;
      animation-iteration-count: 1;
      animation-timing-function: ease-in-out;
    }

    .bg-title>p:hover {
      font-size: 32px;
      color: hsl(140, 30%, 60%);
    }


    @keyframes title {
      from {
        opacity: 0;
        transform: rotateX(180deg);
      }

      to {
        font-size: 40px;
        transform: rotateX(0deg);
      }
    }


    /* 星期title */
    .bg-week {
      opacity: 0.9;
      height: 6vh;
      color: white;
      background-color: #588157;
      vertical-align: middle;

    }


    /* 左圖 */
    .left {
      /* background-color: #a31621; */
      width: 50%;
      height: 60vh;

    }

    .left>img {
      /* margin-top: 10vh; */
      width: 100%;
      height: 100%;
      border-radius: 0 0 25px 25px;
    }

    .right {
      /* background-color: blue; */
      width: 55%;
      height: 60vh;

    }

    /* 右表格月曆 */
    table {
      /* background-color: lightsteelblue; */
      width: 100%;
      height: 100%;
      border-collapse: collapse;
      /* border: 3px solid #999; */
      /* margin-top: 10vh; */
      backdrop-filter: blur(20px);
      text-shadow: 0.1em 0.1em 0.1em #495867;

    }

    td {
      /* border: 1px solid #999; */
      width: 10%;
      height: 10%;
      vertical-align: top;
      text-align: center;
    }

    td:hover {
      font-size: 30px;
    }


    /* 假日 */
    .holidays {
      text-shadow: none;
      /* color: #a31621; */
      color: white;
      background-color: #284b63;
      border: 1px solid #495867;
    }

    /* 標示今天 */
    .today {
      border-radius: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #dda15e;
      /* opacity: 0.8; */
      text-shadow: none;
      margin: 0px 10px;
      padding: 15px;
    }

    .today:hover {
      background-color: #ccc5b9;
      color: #284b63;
    }

    .otherDay {
      padding: 15px;
    }

    .otherDay:hover {
      padding: 15px;
      border: 1px solid #ccc5b9;
      /* color: #d9ed92; */
    }


    /* 顯示節日 */

    .festival-today {
      border-radius: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #dda15e;
      margin: 0px 10px;
      padding: 10px;
      text-shadow: 0.1em 0.1em 0.1em #495867;
      /* border: 1px solid white; */

    }

    .festival-today:hover {
      background-color: #ccc5b9;
      color: #284b63;
    }

    .festival {
      color: white;
      font-size: 12px;
    }
  </style>
</head>

<body>
  <!-- <h1>萬年曆</h1>  

<?php
/*請在這裹撰寫你的萬年曆程式碼*/


?> -->
  <!-- /* title列表及設定圖片 */ -->
  <?php
  date_default_timezone_set('Asia/Taipei');

  if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
  } else {
    $month = date('n');
    $year = date("Y");
  }


  // 改變圖片
  $monthImages = array(
    '1' => '1.jpg',
    '2' => '2.jpg',
    '3' => '3.jpg',
    '4' => '4.jpg',
    '5' => '5.jpg',
    '6' => '6.jpg',
    '7' => '7.jpg',
    '8' => '8.jpg',
    '9' => '9.jpg',
    '10' => '10.jpg',
    '11' => '11.jpg',
    '12' => '12.jpg',

  );

  // 改變文字
  $monthText = array(
    '1' => '－貓的觸摸是種療癒，每一次的撫摸都是對心靈的柔軟慰藉',
    '2' => '－貓的好奇心是無窮的，似乎對任何事情都抱著『我來瞧瞧』的態度',
    '3' => '－Time spent with cats is never wasted. － Sigmund Freud-',
    '4' => '－貓的睡姿，展現出純淨的寧靜美',
    '5' => '－貓的目光是一張深邃的地圖，引導我們探索愛與奇蹟的領域',
    '6' => '－貓的呼嚕聲，溫暖著寂靜的夜晚',
    '7' => '－狗的忠誠，是生命中最溫暖的陪伴，無聲地述說著愛的故事',
    '8' => '－和貓一起每天都是場充滿驚喜的冒險',
    '9' => '－貓的傲嬌姿態，散發出一種獨特的魅力',
    '10' => '－貓的陪伴，是一種無需言語的寧靜，教會我們珍惜每一刻',
    '11' => '－貓如同夜空的星辰，閃爍著神秘的光芒，照亮你心靈的黑暗',
    '12' => '－貓悄然穿越你的生活，留下溫柔的足跡',

  );

  // print_r($monthImages);
  // echo $monthImages[$month];
  ?>

  <?php

  $thisFirstDay = date("{$year}-{$month}-1");
  $thisFirstDate = date('w', strtotime($thisFirstDay));
  $thisMonthDays = date("t");
  $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
  $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
  $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));

  $tenten = date("{$year}-10-10");
  $holloween = date("{$year}-10-31");
  $christmas = date("{$year}-12-25");
  $newyear = date("{$year}-01-01");
  $peace  = date("{$year}-02-28");
  $woman = date("{$year}-03-08");
  $younth = date("{$year}-03-29");
  $children = date("{$year}-04-04");
  $labor = date("{$year}-05-01");
  $armed = date("{$year}-09-03");
  $teacher = date("{$year}-09-28");
  $environment = date("{$year}-06-05");
  $sea =  date("{$year}-06-08");
  $interPeace = date("{$year}-09-21");
  $interHello = date("{$year}-11-21");
  $interYounth = date("{$year}-08-12");
  $interFood = date("{$year}-10-16");

  ?>
  <?php
  // 上一個月下一個月
  $nextYear = $year;
  $prevYear = $year;
  if (($month + 1) > 12) {
    $next = 1;
    $nextYear = $year + 1;
  } else {
    $next = $month + 1;
  }

  if (($month - 1) < 1) {
    $prev = 12;
    $prevYear = $year - 1;
  } else {
    $prev = $month - 1;
  }
  // 上一年下一年
  $forNextYear = $year + 1;
  $forPrevYear = $year - 1;
  ?>
  <div class="last-year"><a href="?year=<?= $forPrevYear; ?>&month=<?= $month; ?>">◀</a></div>
  <div class="container">

    <!-- 拉選年份月份及顯示當天節日列 -->
    <div class="nav">
      <div class="select-top">
        <!-- 下拉選年份月份 -->
        <!-- disabled selected -->
        <form action="">
          <select name="year" required>
            <option value="<?= $year; ?>" style="display: none;"><?= $year; ?></option>
            <?php
            for ($i = 1900; $i <= 2200; $i++) {
              echo "<option value= $i> $i </option>";
            }
            ?>

          </select>
          <label for="">年</label>
          <select name="month" required>
            <option value="<?= $month; ?>" style="display: none;"><?= $month; ?></option>

            <?php
            for ($i = 1; $i <= 12; $i++) {
              echo "<option value=$i> $i </option>";
            }
            ?>

          </select>
          <label for="">月</label>
          <input type="submit" value="查詢">
        </form>
      </div>
      <div class="text-top">
        <h2><?= $monthText[$month]; ?></h2>
      </div>

    </div>
    <!-- 上個月現在下個月 -->
    <div class="top">
      <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">⮌</a>
      <a href="?year=<?= date("Y"); ?>&month=<?= date("n"); ?>">⟳</a>
      <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">⮎</a>
    </div>
    <!-- 顯示月曆圖 -->
    <div class="container-1">

      <div class="left">
        <img src="./images/<?= $monthImages[$month] ?>" alt="Image" width="650" height="600">
      </div>
      <div class="right">
        <table>
          <tr>
            <td class="bg-title" colspan="7">
              <p><?= '－' . date("$year") . ' / ' . "&nbsp;" . date("$month") . '－' ?> </p>

            </td>

          </tr>
          <tr>

            <td class="bg-week">日</td>
            <td class="bg-week">一</td>
            <td class="bg-week">二</td>
            <td class="bg-week">三</td>
            <td class="bg-week">四</td>
            <td class="bg-week">五</td>
            <td class="bg-week">六</td>
          </tr>

          <?php

          $holidays = array(
            $tenten => "雙十節",
            $holloween => "萬聖節",
            $christmas => "行憲紀念日",
            $newyear => "元旦",
            $peace => "和平紀念日",
            $woman => "婦女節",
            $younth => "青年節",
            $children => "兒童節",
            $armed => "軍人節",
            $teacher => "教師節",
            $labor => "勞動節",
            $environment => "世界環境日",
            $sea => "世界海洋日",
            $interPeace => "國際和平日",
            $interHello => "世界問候日",
            $interYounth => "國際青年日",
            $interFood => "世界糧食日"
          );

          for ($i = 0; $i < $weeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
              $addDays = 7 * $i + $j;
              $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
              if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                echo "<td class='holidays'>";
              } else {
                echo "<td>";
              }
              if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                $thisDate = date("Y-m-d", $thisCellDate);
                // 判斷節日
                if (array_key_exists($thisDate, $holidays) && $thisDate == date('Y-m-d')) {
                  echo "<div class='festival-today'>" . date("j", $thisCellDate) . "<div class='festival'>" . $holidays[$thisDate] . "</div>";
                  echo  "</div>";
                } else if (array_key_exists($thisDate, $holidays)) {
                  echo "<div class='otherDay'>" . date("j", $thisCellDate) . "<div class='festival'>" . $holidays[$thisDate] . "</div>" . "</div>";
                } else if ($thisDate == date('Y-m-d')) {
                  echo "<div class='today'>" . date("j", $thisCellDate) . "</div>";
                } else {
                  echo "<div class='otherDay'>" . date("j", $thisCellDate) . "</div>";
                }
              }
              echo "</td>";
            }
            echo "</tr>";
          }
          echo "</table>";

          ?>
      </div>
    </div>
  </div>
  <div class="next-year"><a href="?year=<?= $forNextYear; ?>&month=<?= $month; ?>">▶</a></div>

</body>

</html>