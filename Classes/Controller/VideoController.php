<?php
namespace UNAL\VideoModal\Controller;

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
 * VideoController
 */
class VideoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * videoRepository
     *
     * @var \UNAL\VideoModal\Domain\Repository\VideoRepository
     * @inject
     */
    protected $videoRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {

        $video = $this->settings['url_video'];
        $video .= "?autoplay=1";

        $this->view->assignMultiple([
            'video' => $video,
        ]);
    }
}
