<?php

namespace PhpSchool\CallableFunctions\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;

/**
 * Class HelloSomeone
 * @package PhpSchool\CallableFunctions\Exercise
 */
class HelloSomeone extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Hello someone!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Hello world exercise with name';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ['Sarra'];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
