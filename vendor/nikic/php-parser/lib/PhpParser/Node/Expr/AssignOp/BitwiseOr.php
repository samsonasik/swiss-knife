<?php

declare (strict_types=1);
namespace EasyCI20220520\PhpParser\Node\Expr\AssignOp;

use EasyCI20220520\PhpParser\Node\Expr\AssignOp;
class BitwiseOr extends \EasyCI20220520\PhpParser\Node\Expr\AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_BitwiseOr';
    }
}
