<?php

declare (strict_types=1);
namespace EasyCI20220520\PhpParser\Node\Expr\BinaryOp;

use EasyCI20220520\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \EasyCI20220520\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '||';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
