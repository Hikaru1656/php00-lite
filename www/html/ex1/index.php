<!DOCTYPE html>
<html lang="ja">
<style>
table{
padding: 100px;
}
</style>
<body>
<table>
<tr>
<th>今日の日付は？</th>
<th>今日は何曜日？</th>

</tr>
<tr>
<td>
<?php
echo date("Y年n月j日");
?>
</td>
<td>
<?php
$week = array('日', '月', '火', '水', '木', '金', '土');
echo $week[date('w')], "曜日";
?>
</td>
</tr>
</table>
</body>
</html>

