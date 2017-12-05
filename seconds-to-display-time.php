<?php

/**
 * Takes an amount of seconds and return it with HH:MM:SS format
 *
 * @param int $seconds
 */
function secondsToDisplayTime($seconds){
  $p = function($n) {
    return ($n <= 9) ? '0' . $n : $n;
  };
  return $p(floor(($seconds%86400)/3600)) . ':' . $p(floor(($seconds%3600)/60)) . ':' . $p($seconds%60);
};
