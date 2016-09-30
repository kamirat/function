<?php

//   function get_tax_price($price) {
//   return floor( $price * 1.08 );
// }

// $payment = (int)get_tax_price(101);

// var_dump(is_int($payment));



// array_column参考

// //ここから2次元配列の作成。
// $arr0 = array("id" => "0", "name" => "田中", "prefecture" => "北海道");
// $arr1 = array("id" => "1", "name" => "鈴木", "prefecture" => "青森");
// $arr2 = array("id" => "2", "name" => "佐藤", "prefecture" => "秋田");
// $arrMember = array($arr0, $arr1, $arr2);
// //ここまで2次元配列の作成。
// //実際のプログラムではCSVやDBからこのような形式のデータを受け取っていることがよくありますが、ここでは便宜上、作成します。

// function mk_target_col($arrList, $target){    //指定した列を取り出す関数を定義
//   $arrTarget = array(); //指定した列を格納する配列を用意
//   foreach($arrList as $arrLine){    //ここから2次元配列のループ
//     foreach($arrLine as $key => $value){ //ここから単純配列から特定のキーを取り出すループ
//       if($key == $target){ //配列のキーが$target(関数の第２引数)と一致したら
//         $arrTarget[] = $value;  //$arrTargetに格納する
//       }
//     }
//   }
//   return $arrTarget;    //指定した列が格納された配列を返す
// }

// //関数の実行
// $arrName = mk_target_col($arrMember, "name");   //キーが"name"の列を配列にする
// $arrPrefecture = mk_target_col($arrMember, "prefecture");   //キーが"prefecture"の列を配列にする

// //出力
// print_r($arrMember);
// print_r($arrName);
// print_r($arrPrefecture);

function array_column(array $data, $column) {
  $arryResult = array();
  foreach($data as $target){
    foreach($target as $key => $value){
      if($key == $column){ // 指定のカラムと一致
        $arryResult[] = $value; // 新しく配列に
      }
    }
  }
  return $arryResult;
}


?>