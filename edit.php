<?php
  function optionLoop($start, $end , $value = null){
    for ($i = $start; $i <= $end; $i++) { 
      if (isset($value) && $value == $i) {
        echo"<option value=\"{$i}\" selected=\"selected\">{$i}</option>";}
      else{
        echo"<option value=\"{$i}\">{$i}</option>";}
    }
}
?>

    <label>生年月日</label><br>
    <select name="year">
      <?php optionLoop("1950" , "2020" , "2017");?>
    </select>
    <select name="month">
      <?php optionLoop("1" , "12" , "1");?>
    </select>
    <select name="day">
      <?php optionLoop("1" , "31" , "1");?>
    </select>