<?php
declare (strict_types=1);

namespace Ease\Html;

/**
 * Vstupní prvek pro odeslání souboru.
 *
 * @author Vítězslav Dvořák <vitex@hippy.cz>
 */
class InputFileTag extends InputTag
{

    /**
     * Vstupní box pro volbu souboru.
     *
     * @param string $name  jméno tagu
     * @param string $value předvolená hodnota
     * @param array  $properties 
     */
    public function __construct($name, $value = null, array $properties = [])
    {
        parent::__construct($name, $value);
        $properties['type'] = 'file';
        $this->setTagProperties($properties);
    }
}
