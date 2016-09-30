<?php

  function get_tax_price($price) {
  return floor( $price * 1.08 );
}

echo get_tax_price(101). '<br>';
echo get_tax_price(102). '<br>';
echo get_tax_price(103). '<br>';
echo get_tax_price(104). '<br>';
echo get_tax_price(105). '<br>';

?>