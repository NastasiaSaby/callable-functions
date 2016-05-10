<?php

namespace PhpSchool\CallableFunctions\Exercise;

use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\FunctionRequirementsExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;

/**
 * Class PeaceWalk
 * @package PhpSchool\CallableFunctions\Exercise
 */
class PeaceWalk extends AbstractExercise implements ExerciseInterface, CliExercise, FunctionRequirementsExerciseCheck
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Peace walk';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Exercice with array_walk';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ['Sarra', 'Helen', 'Anas'];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }

    /**
     * @return string[]
     */
    public function getRequiredFunctions()
    {
        return ['array_walk'];
    }

    /**
     * @return string[]
     */
    public function getBannedFunctions()
    {
        return [];
    }

    /**
     * @param ExerciseDispatcher $dispatcher
     */
    public function configure(ExerciseDispatcher $dispatcher)
    {
        $dispatcher->requireCheck(FunctionRequirementsCheck::class, $dispatcher::CHECK_AFTER);
    }
}
