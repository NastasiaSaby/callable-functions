<?php


namespace PhpSchool\CallableFunctionsTest\Exercise;

use PhpSchool\CallableFunctions\Exercise\HelloSomeone;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class HelloSomeoneTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class HelloSomeoneTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorldExercise()
    {
        $e = new HelloSomeone();
        $this->assertEquals('Hello someone!', $e->getName());
        $this->assertEquals('Hello world exercise with name', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(['Sarra'], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
