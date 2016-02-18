<?php
    class ScrabbleGenerator
    {
        function breakUpWord($input)
        {
            $split_word = str_split($input, 1);
            return $split_word;
        }
        function qz_finder($split_word)
        {
            $qz_array = ['q', 'z', 'Q', 'Z'];

            $split_word = str_replace($qz_array, 10, $split_word);
            return $split_word;
        }
        function jx_finder($split_word)
        {
            $jx_array = ['j', 'x', 'J', 'X'];

            $split_word = str_replace($jx_array, 8, $split_word);
            return $split_word;
        }

        function k_finder($split_word)
        {
            $k_array = ['k', 'K'];

            $split_word = str_replace($k_array, 5, $split_word);
            return $split_word;
        }

        function f_finder($split_word)
        {
            $f_array = ['f', 'h','v','w','y','F','H','V','W','Y'];

            $split_word = str_replace($f_array, 4, $split_word);
            return $split_word;
        }

        function b_finder($split_word)
        {
            $b_array = ['b','c','m','p','B','C','M','P'];

            $split_word = str_replace($b_array, 3, $split_word);
            return $split_word;
        }

        function dg_finder($split_word)
        {
            $dg_array = ['d','g','D','G'];

            $split_word = str_replace($dg_array, 2, $split_word);
            return $split_word;
        }

        function a_finder($split_word)
        {
            $a_array = ['a','e','i','o','u','l','n','r','s','t','A','E','I','O','U','L','N','R','S','T'];

            $split_word = str_replace($a_array, 1, $split_word);
            return $split_word;
        }
        function scrabble_generator($input)
        {
            $split_word = $this->breakUpWord($input);

            $split_word = $this->qz_finder($split_word);
            $split_word = $this->jx_finder($split_word);
            $split_word = $this->k_finder($split_word);
            $split_word = $this->f_finder($split_word);
            $split_word = $this->b_finder($split_word);
            $split_word = $this->dg_finder($split_word);
            $split_word = $this->a_finder($split_word);

            $results = array_sum($split_word);
            return $results;
        }
    }
 ?>
