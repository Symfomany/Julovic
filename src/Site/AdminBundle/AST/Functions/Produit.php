<?php

namespace Site\AdminBundle\AST\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Lexer;

class Produit extends FunctionNode {

 
    /**
     * @var \Doctrine\ORM\Query\AST\Price Expression
     */
    private $price;

 
    /**
     * @var \Doctrine\ORM\Query\AST\Count Expression
     */
    private $count;
 
    
    /**
     * @var \Doctrine\ORM\Query\AST\Redcution Expression
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
        $this->price = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->count = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
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
        return sprintf( '(%s * %s * %s)',
                $this->price->dispatch($sqlWalker),
                $this->count->dispatch($sqlWalker),
                $this->reduction->dispatch($sqlWalker));
    }

}

?>
