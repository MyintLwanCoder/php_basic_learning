<?php 
  $sentities = get_html_translation_table(HTML_ENTITIES);
  $translate = array_flip($sentities);
  $string ="La pasta &eacute; il piatto pi&uacute; amato in Italia";
  echo strtr($string, $translate);
 ?>