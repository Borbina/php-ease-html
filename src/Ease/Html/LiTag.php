<?php
declare (strict_types=1);

namespace Ease\Html;

/**
 * HTML list item tag class.
 *
 * @author Vitex <vitex@hippy.cz>
 */
class LiTag extends PairTag
{

    /**
     * Simple LI tag.
     *
     * @param mixed $liContents obsah položky seznamu
     * @param array $properties parametry LI tagu
     */
    public function __construct($liContents = null, $properties = [])
    {
        parent::__construct('li', $properties, $liContents);
    }
}
