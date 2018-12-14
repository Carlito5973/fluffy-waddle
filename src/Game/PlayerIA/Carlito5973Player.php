<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class LovePlayer
 * @package Hackathon\PlayerIA
 * @author Charles Bayart
 */
class Carlito5973Player extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------


        $appChoice = $this->result->getLastChoiceFor($this->mySide);
        if ($appChoice == '')
        {
            return parent::friendChoice();
        }
        else{
            $total = $this->result->getStatsFor($this->opponentSide)['friend'] + $this->result->getStatsFor($this->opponentSide)['foe'];
            $foe = $this->result->getStatsFor($this->opponentSide)['foe'];
            if ($total > 0 && ($foe / $total) > 0.8)
            {
                return parent::foeChoice();
            }
            else
            {
                if ($this->result->getLastChoiceFor($this->opponentSide) == parent::friendChoice())
                    return parent::friendChoice();
                if ($this->result->getLastChoiceFor($this->opponentSide) == parent::foeChoice())
                    return parent::foeChoice();
            }
        }
           /* if ($this->result->getLastChoiceFor($this->opponentSide) == parent::friendChoice())
            {
                $appChoice = parent::foeChoice();
            }
            if ($this->result->getLastChoiceFor($this->opponentSide) == parent::foeChoice())
            {
                if (sizeof($this->result->getChoicesFor($this->opponentSide),0) > 1)
                    if ($this->result->getChoicesFor($this->opponentSide)[1] == parent::foeChoice() )
                    {
                        $appChoice = parent::friendChoice();
                    }
            }
        }
        return $appChoice;*/
    }
 
};
