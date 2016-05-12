<?php


namespace PhpSchool\CallableFunctionsTest\Exercise;

use PhpSchool\CallableFunctions\Exercise\PeaceWalk;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class PeaceWalkTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class PeaceWalkTest extends PHPUnit_Framework_TestCase
{
    public function testPeaceWalkExercise()
    {
        $e = new PeaceWalk();
        $this->assertEquals('Peace walk', $e->getName());
        $this->assertEquals('Exercice with array_walk', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(['Sarra', 'Helen', 'Anas'], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new PeaceWalk();
        $this->assertEquals(['array_walk'], $e->getRequiredFunctions());
        $this->assertEquals([], $e->getBannedFunctions());
    }
}
