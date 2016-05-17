<?php


namespace PhpSchool\CallableFunctionsTest\Exercise;

use PhpSchool\CallableFunctions\Exercise\SortYourArray;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PHPUnit_Framework_TestCase;

/**
 * Class ArrayWeFilterTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 */
class SortYourArrayTest extends PHPUnit_Framework_TestCase
{
    public function testArrayWeMapExercise()
    {
        $e = new SortYourArray();
        $this->assertEquals('Sort your array!', $e->getName());
        $this->assertEquals('Exercice with usort', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals([6, 1, 2, 7, 3], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }

    public function testFunctionRequirements()
    {
        $e = new SortYourArray();
        $this->assertEquals(['usort'], $e->getRequiredFunctions());
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
        $e = new SortYourArray();
        $e->configure($dispatcher);
    }
}
