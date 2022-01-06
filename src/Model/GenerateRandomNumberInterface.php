<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Model;

/**
 * Interface GenerateRandomNumberInterface
 *
 * @package Model\
 */
interface GenerateRandomNumberInterface
{
    /**
     * @param int $max
     *
     * @return int
     */
    public function generate(int $max) : int;
}