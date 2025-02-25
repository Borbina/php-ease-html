<?php
declare (strict_types=1);

namespace Ease\Html;

/**
 * Obecný input TAG.
 *
 * @author Vítězslav Dvořák <vitex@hippy.cz>
 */
class InputTag extends Tag
{
    /**
     * Nastavovat automaticky jméno tagu ?
     *
     * @author Vítězslav Dvořák <vitex@hippy.cz>
     */
    public $setName = true;

    /**
     * Obecný input TAG.
     *
     * @param string            $name       jméno tagu
     * @param string            $value      vracená hodnota
     * @param array             $properties vlastnosti tagu
     */
    public function __construct($name, $value = null, $properties = [])
    {
        parent::__construct('input');
        $this->setTagName($name);
        if (isset($properties)) {
            $this->setTagProperties($properties);
        }
        if (!is_null($value)) {
            $this->setValue($value);
        }
    }

    /**
     * Nastaví hodnotu vstupního políčka.
     *
     * @param string $value vracená hodnota
     */
    public function setValue($value)
    {
        $this->setTagProperties(['value' => $value]);
    }

    /**
     * Vrací hodnotu vstupního políčka.
     *
     * @return string $value
     */
    public function getValue()
    {
        return $this->getTagProperty('value');
    }
}
