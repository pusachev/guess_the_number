<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Model;

interface GenerateRandomNumberInterface
{
    public function generate(int $max) : int;
}