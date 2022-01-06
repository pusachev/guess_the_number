<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Model;

/**
 * Class GenerateRandomNumber
 *
 * @package Model
 */
class GenerateRandomNumber implements GenerateRandomNumberInterface
{
    /** {@inheritDoc} */
    public function generate(int $max): int
    {
        if ($max <= 1) {
            throw new \LogicException("max must be greate than 1");
        }

       return mt_rand(1, $max);
    }
}