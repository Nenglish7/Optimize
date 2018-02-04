<?php
/**
 * This file is a part of Nenglish7/Optimize.
 *
 * @author Nicholas English (Owner/Developer) <nenglish0820@outlook.com>
 *
 * @link    <https://github.com/Nenglish7/Optimize> Github Repository.
 * @license <https://github.com/Nenglish7/Optimize/blob/master/LICENSE> Apache-2.0
 */

define('PHP_OPTIMIZED', true);

/**
 * Convert data for exception output.
 *
 * @param mixed $data The data to convert.
 *
 * @return string The converted data.
 */
function convertfeo($data)
{
    return convertfso(var_export(serialize($data)));
}


