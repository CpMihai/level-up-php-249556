<style>
  .num {
    background-color: white;
    color: black;
  }
</style>
<?php
function checkNumber($number)
{
  if ($number % 3 == 0 && $number % 5 != 0) {
    return "Fizz";
  } elseif ($number % 5 == 0 && $number % 3 != 0) {
    return "Buzz";
  } elseif ($number % 5 == 0 && $number % 3 == 0) {
    return "FizzBuzz";
  }
  return $number;
}
?>
<div class="num">
  <?php
  $maxNumbers = 100;
  for ($i = 1; $i <= $maxNumbers; $i++) {
    echo checknumber($i) . "<br>";
  }
  ?>
</div>