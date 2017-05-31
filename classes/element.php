<?php


class Element{


/*********************/
/*   CONSTRUCTEUR    */
/*********************/


/*********************/
/* GETTERS & SETTERS */
/*********************/

    /*********************/
    /*       BDD         */
    /*********************/
    
    /*********************/
    /*       AUTRE       */
    /*********************/
    public function getDateFormat($dateRaw, $format='Y-m-d'){
        return date($format, strtotime($dateRaw));
    }
}