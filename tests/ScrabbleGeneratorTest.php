<?php
    require_once "src/ScrabbleGenerator.php";

    class ScrabbleGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_breakUpWord()
        {
            //arrange
            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = "cat";

            //act
            $result = $test_scrabblegenerator->breakUpWord($input);

            //assert
            $this->assertEquals(["c","a","t"], $result);
        }
        function test_qz_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['z', 'o', 'o'];

            $result = $test_scrabblegenerator->qz_finder($input);

            $this->assertEquals([10, 'o', 'o'], $result);
        }
        function test_jx_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['j', 'a', 'm'];

            $result = $test_scrabblegenerator->jx_finder($input);

            $this->assertEquals([8, 'a', 'm'], $result);
        }

        function test_k_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['j', 'a', 'c', 'k'];

            $result = $test_scrabblegenerator->k_finder($input);

            $this->assertEquals(['j', 'a', 'c', 5], $result);
        }

        function test_f_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['w','h','y'];

            $result = $test_scrabblegenerator->f_finder($input);

            $this->assertEquals([4, 4, 4], $result);
        }

        function test_b_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['b','u','m','p'];

            $result = $test_scrabblegenerator->b_finder($input);

            $this->assertEquals([3, 'u', 3, 3], $result);
        }
        function test_dg_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['d','o','g'];

            $result = $test_scrabblegenerator->dg_finder($input);

            $this->assertEquals([2,'o',2], $result);
        }
        function test_a_finder()
        {

            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = ['c','a','t'];

            $result = $test_scrabblegenerator->a_finder($input);

            $this->assertEquals(['c', 1, 1], $result);
        }
        function test_scrabble_generator()
        {
            $test_scrabblegenerator = new ScrabbleGenerator;
            $input = "Query";

            $result = $test_scrabblegenerator->scrabble_generator($input);

            $this->assertEquals(17, $result);
        }

    }
 ?>
