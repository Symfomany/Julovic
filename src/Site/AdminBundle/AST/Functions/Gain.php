<?php

namespace Site\AdminBundle\AST\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Lexer;

class Gain extends FunctionNode {

    /**
     * @var \Doctrine\ORM\Query\AST\Gain Expression
     */
    private $reduction;

    /**
     * @var \Doctrine\ORM\Query\AST\Gain Expression
     */
    private $price;

    /**
     * @var \Doctrine\ORM\Query\AST\Gain Expression
     */
    private $special;

    /**
     * Parse DQL Function
     * 
     * @param Parser $parser 
     */
    public function parse(Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->reduction = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->price = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->special = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * Get SQL 
     * 
     * @param SqlWalker $sqlWalker
     * @return string
     */
    public function getSql(SqlWalker $sqlWalker) {
        return sprintf( '(6 * %s)* ((1- %s/100) - (%s/100)) ',
                $this->price->dispatch($sqlWalker), 
                $this->reduction->dispatch($sqlWalker),
                $this->special->dispatch($sqlWalker));
    }

}

?>
