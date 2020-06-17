<?php
namespace UNAL\VideoModal\Domain\Model;

/***
 *
 * This file is part of the "Video Modal" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Camilo Neiva <jcneivaa@unal.edu.co>, UNAL
 *
 ***/

/**
 * Video
 */
class Video extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * link
     *
     * @var string
     */
    protected $link = '';

    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
}
