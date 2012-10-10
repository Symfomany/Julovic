<?php

namespace Site\AdminBundle\AST\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Lexer;

class Commission extends FunctionNode {

 
    /**
     * @var \Doctrine\ORM\Query\AST\Gain Expression
     */
    private $reduction;

    /**
     * Parse DQL Function
     * 
     * @param Parser $parser 
     */
    public function parse(Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->reduction = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * Get SQL 
     * 
     * @param SqlWalker $sqlWalker
     * @return string
     */
    public function getSql(SqlWalker $sqlWalker) {
        return sprintf( '(30 - %s/5)',
                $this->reduction->dispatch($sqlWalker));
    }

}

?>
