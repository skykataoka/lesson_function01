<?php
/**
 * 引数で渡された日付(YYYY-MM-DD)が未来の日付かどうかをチェックする
 * 関数呼び出しの当日は過去とみなす(false を返す)
 *
 * 補足説明
 * YYYY-MM-DD のような形式の日付を比較する場合に unix timestamp に変換してから比較する方法があります。
 * unix timestamp とはなにかを調べ、それを使用して実装してみてください。
 *
 * @param string $target_date YYYY-MM-DD 形式の文字列
 * @return bool 未来の日付の場合に true、そうでない場合 false
 */
// function is_future_date($target_date) {
// }



function is_future_date($target_date) {
  if(strtotime($target_date) > time() ){
    return true;
  }
  else{
    return false;
  }
}




// function is_future_date($target_date) {
//   if(strtotime($target_date) > time() ){
//     $target_date = true;
//   }
//   else{
//     $target_date = false;
//   }
// }



/**
 * HTML の特殊文字をエスケープする
 *
 * 補足説明
 * PHP に htmlspecialchars() 関数がありますが、この関数の基本動作と同じように動く関数として実装してください。
 * この関数の基本動作は以下のように文字を置換しているだけですので、そのように文字列を操作してやればよいということになります。
 *
 *   &  ->  &amp;
 *   "  ->  &quot;
 *   '  ->  &apos;
 *   <  ->  &lt;
 *   >  ->  &gt;
 *
 * @param string $html エスケープする HTML 文字列
 * @return string エスケープされた HTML 文字列
 */
function html_escape($html) {
}

/**
 * 指定された金額に消費税を加算して返す
 * 税率は、8% とする
 *
 * 1円以下の端数が発生した場合は少数を切り捨てた整数部分のみを返す
 *
 * 補足説明
 * 戻り値は「整数型」で返す事に注意してください。
 *
 * @param int $price 金額
 * @return int 消費税を含めた金額(少数以下切り捨て)
 */
function get_tax_price($price) {
}

/**
 * ログメッセージをファイルに書き込む
 * ログは１件につき１行で、以下のフォーマットで記録する
 *
 *   YYYY-mm-DD HH:MM:SS: $message
 *
 * YYYY-mm-DD HH:MM:SS は、ログを書き込んだ日時
 * $message は、引数で指定されたメッセージ
 *
 * 書き込み先のファイルは、"{$level}.log"
 *
 * ディレクトリには書き込み権限があるものとする
 *
 * 例:
 *   write_log('error message 1', 'error');
 *   // - error.log の内容
 *   // 2016-01-01 10:24:30: error message 1
 *
 *   write_log('error message 2', 'error');
 *   // - error.log の内容
 *   // 2016-01-01 10:24:30: error message 1
 *   // 2016-01-01 10:24:32: error message 2
 *
 *   write_log('debug message 1', 'debug');
 *   // - debug.log の内容
 *   // 2016-01-01 10:24:35: debug message 1
 *
 * @param string $message ログに書き込むメッセージ
 * @param string $level   ログの種類 'error' | 'info' | 'debug' のいずれか
 * @return bool ファイル書き込みに成功した時 true, 失敗した時 false
 */
function write_log($message, $level) {
}

/**
 * 入力配列から指定されたカラムの値のみを返す。
 *
 * 補足説明
 * php 5.5 以上のバージョンでは、array_column という関数が使用できます。
 * http://php.net/manual/ja/function.array-column.php
 *
 * この関数の基本機能は多次元配列の中から特定のキーを持つ値のみを返すというものです。
 * この関数の基本機能を PHP 5.4 以前でも使えるように自身で実装してみてください。
 *
 * 例:
 *   $users = array(
 *     array('name' => 'user A', 'age'  => 15, 'email' => 'aa@example.com'),
 *     array('name' => 'user B', 'age'  => 20, 'email' => 'bb@example.com'),
 *     array('name' => 'user C', 'age'  => 25, 'email' => 'cc@example.com'),
 *     array('name' => 'user D', 'age'  => 30, 'email' => 'dd@example.com'),
 *     array('name' => 'user E', 'age'  => 35, 'email' => 'ee@example.com'),
 *     array('name' => 'user F', 'age'  => 40, 'email' => 'ff@example.com'),
 *   );
 *
 *   // email の項目だけ取得する
 *   $result = array_column($users, 'email');
 *   // $result == array(
 *   //   'aa@example.com',
 *   //   'bb@example.com',
 *   //   'cc@example.com',
 *   //   'dd@example.com',
 *   //   'ee@example.com',
 *   //   'ff@example.com',
 *   // )
 *
 * @param array $data データを含んでいる配列
 * @param mixed $column  配列から取り出すカラム(キー)名
 * @return array 指定されたカラムの値の配列
 */
function array_column(array $data, $column) {
}


///////////////////////////////////////////////////////////////////////////////
// 応用要件の関数
// PHP には array_sum() という配列の値の合計値を返す関数があります。
// http://php.net/manual/ja/function.array-sum.php
//
// この関数は１次元の関数のみを扱いますが、入れ子になった多次元配列に対しても動作するような関数を
// array_sum_recursive() として実装してください。
//
// この関数を実装するために関数の「再帰呼び出し」について調べてみてください。
// 以下のURLにある簡単な例を実際に動かして、どのように動作しているのか１行ずつ追ってみてください。
// http://php.net/manual/ja/functions.user-defined.php
// 「例4 再帰的な関数」 の部分
///////////////////////////////////////////////////////////////////////////////

/**
 * 配列の中の値の合計を計算する
 * 配列が入れ子になっていても動作する
 *
 * 例:
 * $sum = array_sum_recursive(array(1, 2, 3));
 * // $sum == 6
 *
 * $sum = array_sum_recursive(array(1, arary(2, 3), 4));
 * // $sum == 10
 *
 * $sum = array_sum_recursive(array(1, arary(2, array(3, -5)), 4));
 * // $sum == 5
 *
 * @param array $numbers 数字の配列
 * @return int|float  配列の中の値の合計値
 */
function array_sum_recursive(array $numbers) {
}


