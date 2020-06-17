<?php
namespace UNAL\VideoModal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Camilo Neiva <jcneivaa@unal.edu.co>
 */
class VideoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\VideoModal\Controller\VideoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\VideoModal\Controller\VideoController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllVideosFromRepositoryAndAssignsThemToView()
    {

        $allVideos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $videoRepository = $this->getMockBuilder(\UNAL\VideoModal\Domain\Repository\VideoRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $videoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allVideos));
        $this->inject($this->subject, 'videoRepository', $videoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('videos', $allVideos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
