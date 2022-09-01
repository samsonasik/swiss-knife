<?php

declare (strict_types=1);
namespace EasyCI202209\PhpParser\Node\Expr\AssignOp;

use EasyCI202209\PhpParser\Node\Expr\AssignOp;
class ShiftLeft extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_ShiftLeft';
    }
}
