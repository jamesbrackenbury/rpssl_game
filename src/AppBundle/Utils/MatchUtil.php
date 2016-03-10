<?php

namespace AppBundle\Utils;

use Doctrine\ORM\EntityManager;

class MatchUtil
{
	/**
    * @var EntityManager
    */
	protected $em;
	public function __construct(\Doctrine\ORM\EntityManager $em)
  	{
    	$this->em = $em;
  	}

	/**
    * Populate Match
    * Method to build the match and fill properties
    */
    public function populateMatch( $form, $sessionid, $match ) {

        $match->setUserSid( $sessionid );
        $match->setCreated( new \DateTime() );
        $match->setModified( new \DateTime() );

        //setting initial computer values
        $match->setCompRock( 0 );
        $match->setCompPaper( 0 );
        $match->setCompScissors( 0 );
        $match->setCompSpock( 0 );
        $match->setCompLizard( 0 );
        $match->setCompWon( false );

        $comp_choice = rand( 1, 5 );
        if( $comp_choice == 1 ){
            $match->setCompRock( 1 );
        }
        if( $comp_choice == 2){                
            $match->setCompPaper( 1 );                
        }
        if( $comp_choice == 3){
            $match->setCompScissors( 1 );
        }
        if( $comp_choice == 5){
            $match->setCompSpock( 1 );
        }
        if( $comp_choice == 4){
            $match->setCompLizard( 1 );
        }

        //setting initial user values
        $match->setUserRock( 0 );
        $match->setUserPaper( 0 );
        $match->setUserScissors( 0 );
        $match->setUserSpock( 0 );
        $match->setUserLizard( 0 );
        $match->setUserWon( false );
        $match->setUserCompTie( false );

        // game logic - who wins this "match" if user clicks ROCK?
        if ( $form->get('user_rock')->isClicked() ) {   
            $user_choice = 1;         
            $match->setUserRock( 1 );
            if( $user_choice == $comp_choice ){                    
                $match->setCompRock( 1 );
                $match->setUserCompTie( true );  
            }
            else {                
                if( $comp_choice == 2 || $comp_choice == 5 ) {                        
                    $match->setCompWon( true );
                }                    
                else {                        
                    $match->setUserWon( true );
                }
            }
            
        }

        // game logic - who wins this "match" if user clicks PAPER?
        if ( $form->get('user_paper')->isClicked() ) {  
            $user_choice = 2;                          
            $match->setUserPaper( 1 );
            if( $user_choice == $comp_choice ){                    
                $match->setCompPaper( 1 );
                $match->setUserCompTie( true );
            }
            else {                    
                if( $comp_choice == 3 || $comp_choice == 4 ) {                        
                    $match->setCompWon( true );
                }                    
                else {                        
                    $match->setUserWon( true );
                }
            }
        }

        // game logic - who wins this "match" if user clicks SCISSORS?
        if ( $form->get('user_scissors')->isClicked() ) {  
            $user_choice = 3;          
            $match->setUserScissors( 1 );                
            if( $user_choice == $comp_choice ){                    
                $match->setCompScissors( 1 );
                $match->setUserCompTie( true );
            }
            else {
                if( $comp_choice == 5 || $comp_choice == 1 ) {                        
                    $match->setCompWon( true );
                }                    
                else {                        
                    $match->setUserWon( true );
                }
            }
        }


        // game logic - who wins this "match" if user clicks SPOCK?
        if ( $form->get('user_spock')->isClicked() ) {
            $user_choice = 5;
            $match->setUserSpock( 1 );
            if( $user_choice == $comp_choice ){                    
                $match->setCompSpock( 1 );
                $match->setUserCompTie( true );
            }
            else {
                if( $comp_choice == 4 || $comp_choice == 2 ) {                        
                    $match->setCompWon( true );
                }                    
                else {                        
                    $match->setUserWon( true );
                }
            }
        }

        // game logic - who wins this "match" if user clicks LIZARD?
        if ( $form->get('user_lizard')->isClicked() ) {  
            $user_choice = 4;          
            $match->setUserLizard( 1 );
            if( $user_choice == $comp_choice ){                    
                $match->setCompLizard( 1 );
                $match->setUserCompTie( true );
            }
            else {
                if( $comp_choice == 3 || $comp_choice == 1 ) {                        
                    $match->setCompWon( true );
                }                    
                else {                        
                    $match->setUserWon( true );
                }
            }
        }

        //saving this "match" to database
        $this->em->persist( $match );
        $this->em->flush();

        return $match;

    }

    /**
    * Get History
    * Method to retrieve match history for a "user" specified by a sessionId
    */
    public function getHistory( $sessionid ) {
    	$repository = $this->em
                ->getRepository('AppBundle:RpsslChoice');
        $matches = $repository->findBy(
            array('user_sid' => $sessionid ),
            array('created' => 'DESC')
        );
        return $matches;
    }

    /**
    * Get Stats
    * Method to retrieve statistics for a "user" specified by a sessionId
    */
    public function getStats( $sessionid ) {

    	$comp_rock = 0; 
        $player_rock = 0; 
        $comp_paper = 0;
        $player_paper = 0;  
        $comp_scissors = 0;  
        $player_scissors = 0; 
        $comp_spock = 0;
        $player_spock = 0;
        $comp_lizard = 0; 
        $player_lizard = 0;
        $wins = 0;
        $ties = 0;
        $losses = 0;

    	$repository = $this->em
                ->getRepository('AppBundle:RpsslChoice');
        $matches = $repository->findBy(
            array('user_sid' => $sessionid ),
            array('created' => 'DESC')
        );

        foreach (  $matches as $rep_match ) {
            if( $rep_match->getUserRock() == 1 ) {
                $player_rock = $player_rock + 1;
            }
            if( $rep_match->getCompRock() == 1 ) {
                $comp_rock = $comp_rock + 1;
            }

            if( $rep_match->getUserPaper() == 1 ) {
                $player_paper = $player_paper + 1;
            }
            if( $rep_match->getCompPaper() == 1 ) {
                $comp_paper = $comp_paper + 1;
            }

            if( $rep_match->getUserScissors() == 1 ) {
                $player_scissors = $player_scissors + 1;
            }
            if( $rep_match->getCompScissors() == 1 ) {
                $comp_scissors = $comp_scissors + 1;
            }

            if( $rep_match->getUserSpock() == 1 ) {
                $player_spock = $player_spock + 1;
            }
            if( $rep_match->getCompSpock() == 1 ) {
                $comp_spock = $comp_spock + 1;
            }

            if( $rep_match->getUserLizard() == 1 ) {
                $player_lizard = $player_lizard + 1;
            }
            if( $rep_match->getCompLizard() == 1 ) {
                $comp_lizard = $comp_lizard + 1;
            }

            if( $rep_match->getUserWon() ) {
                $wins = $wins + 1;
            }
            if( $rep_match->getCompWon() ) {
                $losses = $losses + 1;
            }
            if( $rep_match->getUserCompTie() ) {
                $ties = $ties + 1;
            }
        }

        $stats = array( 
        	'comp_rock' => $comp_rock, 'player_rock' => $player_rock, 
        	'comp_paper' => $comp_paper, 'player_paper' => $player_paper, 
        	'comp_scissors' => $comp_scissors, 'player_scissors' => $player_scissors,
            'comp_spock' => $comp_spock, 'player_spock' => $player_spock,
        	'comp_lizard' => $comp_lizard, 'player_lizard' => $player_lizard,
        	'wins' => $wins, 'ties' => $ties, 'losses' => $losses,
        );

        return $stats;

    }

}