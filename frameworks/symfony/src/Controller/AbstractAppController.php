<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;

abstract class AbstractAppController extends AbstractController
{
    /**
     * @var array
     */
    private $renderParams = [];

    /**
     * @var TranslatorInterface
     */
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    protected function addRenderParams(array $data): void
    {
        $this->setRenderParams(
            array_merge($this->getRenderParams(), $data)
        );
    }

    protected function setTitle(string $message)
    {
        $this->addRenderParams([
            'page_title' => $this->translator->trans($message, [], 'title')
        ]);
    }

    protected function getRenderParams(): array
    {
        return $this->renderParams;
    }

    private function setRenderParams(array $renderParams): void
    {
        $this->renderParams = $renderParams;
    }
}