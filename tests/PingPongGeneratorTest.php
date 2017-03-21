<?php
    require_once __DIR__.'/../src/PingPongGenerator.php';

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_numberCount()
        {
            //Arrange
            $test_countUp = new PingPongGenerator;
            $input = 33;

            //Act
            $result = $test_countUp->countUp($input);

            //Assert
            $this->assertEquals(false, $result);
        }
        function test_numberDivThree()
        {
            //Arrange
            $test_countUp = new PingPongGenerator;
            $input = 33;

            //Act
            $result = $test_countUp->countUp($input);

            //Assert
            $this->assertEquals('ping', $result);
        }
        function test_numberDivFive()
        {
            //Arrange
            $test_countUp = new PingPongGenerator;
            $input = 33;

            //Act
            $result = $test_countUp->countUp($input);

            //Assert
            $this->assertEquals('pong', $result);
        }
    }
 ?>
