<?php


namespace PhpSchool\CallableFunctionsTest\Exercise;

use PhpSchool\CallableFunctions\Exercise\ArrayWeMap;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PHPUnit_Framework_TestCase;

/**
 * Class ArrayWeMapTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class ArrayWeMapTest extends PHPUnit_Framework_TestCase
{
    public function testArrayWeMapExercise()
    {
        $e = new ArrayWeMap();
        $this->assertEquals('Array we map!', $e->getName());
        $this->assertEquals('Exercice with array map', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(['Sarra', 'Helen', 'Anas'], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new ArrayWeMap();
        $this->assertEquals(['array_map'], $e->getRequiredFunctions());
        $this->assertEquals([], $e->getBannedFunctions());
    }

    public function testConfigure()
    {
        $dispatcher = $this->getMockBuilder(ExerciseDispatcher::class)
            ->disableOriginalConstructor()
            ->getMock();
        $dispatcher
            ->expects($this->once())
            ->method('requireCheck')
            ->with(FunctionRequirementsCheck::class);
        $e = new ArrayWeMap();
        $e->configure($dispatcher);
    }
}
