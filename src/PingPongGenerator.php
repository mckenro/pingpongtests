<?php
    class PingPongGenerator
    {
        function countUp($input_number)
        {
            $result_array = array();
            $i = 1;
            while ($i < $input_number) {
              $i++;
              $push_me = $i;
              if ($i % 3 == 0) {
                $push_me = "ping";
              } else if ($i % 5 ==0) {
                $push_me "pong";
              } else if ($i % 15 == 0) {
                $push_me "ping-pong";
              }
              array_push($result_array, $i);
            }
            return $result_array;
        }
    }
 ?>
