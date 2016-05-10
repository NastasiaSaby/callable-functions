<?php


namespace PhpSchool\CallableFunctionsTest\Exercise;

use PhpSchool\CallableFunctions\Exercise\ArrayWeReduce;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class ArrayWeReduceTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class ArrayWeReduceTest extends PHPUnit_Framework_TestCase
{
    public function testArrayWeMapExercise()
    {
        $e = new ArrayWeReduce();
        $this->assertEquals('Array we reduce!', $e->getName());
        $this->assertEquals('Exercice with array reduce', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([1, 2, 3], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new ArrayWeReduce();
        $this->assertEquals(['array_reduce'], $e->getRequiredFunctions());
    }
}
