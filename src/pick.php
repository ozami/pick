<?php

/**
 * Pick up values of specified keys from array
 *
 * @param array $a
 * @param mixed $keys,...
 * @return array
 */
function pick(array $a) {
  $keys = array_slice(func_get_args(), 1);
  return array_intersect_key($a, array_fill_keys($keys, null));
}
