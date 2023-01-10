<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Database\Exceptions;

use CodeIgniter\Exceptions\DebugTraceableTrait;
use RuntimeException;

class DataException extends RuntimeException implements ExceptionInterface
{
    use DebugTraceableTrait;

    /**
     * Used by the Model's trigger() method when the callback cannot be found.
     *
     * @return DataException
     */
    public static function forInvalidMethodTriggered(string $method)
    {
        return new static(lang('DatabaseController.invalidEvent', [$method]));
    }

    /**
     * Used by Model's insert/update methods when there isn't
     * any data to actually work with.
     *
     * @return DataException
     */
    public static function forEmptyDataset(string $mode)
    {
        return new static(lang('DatabaseController.emptyDataset', [$mode]));
    }

    /**
     * Used by Model's insert/update methods when there is no
     * primary key defined and Model has option `useAutoIncrement`
     * set to false.
     *
     * @return DataException
     */
    public static function forEmptyPrimaryKey(string $mode)
    {
        return new static(lang('DatabaseController.emptyPrimaryKey', [$mode]));
    }

    /**
     * Thrown when an argument for one of the Model's methods
     * were empty or otherwise invalid, and they could not be
     * to work correctly for that method.
     *
     * @return DataException
     */
    public static function forInvalidArgument(string $argument)
    {
        return new static(lang('DatabaseController.invalidArgument', [$argument]));
    }

    public static function forInvalidAllowedFields(string $model)
    {
        return new static(lang('DatabaseController.invalidAllowedFields', [$model]));
    }

    public static function forTableNotFound(string $table)
    {
        return new static(lang('DatabaseController.tableNotFound', [$table]));
    }

    public static function forEmptyInputGiven(string $argument)
    {
        return new static(lang('DatabaseController.forEmptyInputGiven', [$argument]));
    }

    public static function forFindColumnHaveMultipleColumns()
    {
        return new static(lang('DatabaseController.forFindColumnHaveMultipleColumns'));
    }
}
