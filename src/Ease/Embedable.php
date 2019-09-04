<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ease;

/**
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
interface Embedable
{

    /**
     * Include next element into current object.
     *
     * @param Embedable|string  $pageItem     value or EaseClass with draw() method
     *
     * @return mixed Pointer to included object
     */
    public function addItem($pageItem);
    
    /**
     * Notify component about its embed name
     * 
     * @param string  $embedName parent::$pageParts[$embedName] == self
     *
     * @return boolean success
     */
    public function setEmbedName($embedName);

    /**
     * Recursive draw object and its contents
     */
    public function draw();
}