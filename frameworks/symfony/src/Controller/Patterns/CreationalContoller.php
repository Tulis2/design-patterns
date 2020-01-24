<?php


namespace App\Controller\Patterns;


use App\Controller\AbstractAppController;
use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Creational\Builder\BlogPostBuilder;
use App\DesignPatterns\Creational\Builder\BlogPostManager;
use App\DesignPatterns\Creational\FactoryMethod\Classes\Forms\SemanticUiDialogForm;
use App\DesignPatterns\Creational\Multiton\SimpleMultiton;
use App\DesignPatterns\Creational\Multiton\SimpleMultitonNext;
use App\DesignPatterns\Creational\Prototype\PrototypeDemo;
use App\DesignPatterns\Creational\SimpleFactory\MessengerSimpleFactory;
use App\DesignPatterns\Creational\Singleton\AdvancedSingleton;
use App\DesignPatterns\Creational\Singleton\SimpleSingleton;
use App\DesignPatterns\Creational\StaticFactory\StaticFactory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreationalContoller extends AbstractAppController
{
    /**
     * @Route("/design-patterns/abstract-factory", name="dp_creational_abstract_factory")
     * @param GuiKitFactory $factory
     * @return Response
     * @throws \Exception
     */
    public function actionAbstractFactory(GuiKitFactory $factory)
    {
        $this->setTitle('Abstract Factory');

        $quiKit = $factory->getFactory(GuiKitFactory::GUI_BOOTSTRAP);

        $result[] = $quiKit->buildButton()->draw();
        $result[] = $quiKit->buildCheckBox()->draw();

        $this->addRenderParams(['result' => $result]);

        return $this->render(
            '@tmpl/design_patterns/creational/abstract_factory.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/factory-method", name="dp_creational_factory_method")
     * @return Response
     */
    public function factoryMethod()
    {
        $this->setTitle('Factory Method');

        $dialogForm = new SemanticUiDialogForm();
        $result = $dialogForm->render();

        $this->addRenderParams(['result' => $result]);

        return $this->render(
            '@tmpl/design_patterns/creational/factory_method.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/static-factory", name="dp_creational_static_factory")
     * @return Response
     */
    public function staticFactory()
    {
        $this->setTitle('Static Factory');

        $appMailMessenger = StaticFactory::build(StaticFactory::TYPE_EMAIL);
        $appPhoneMessenger = StaticFactory::build(StaticFactory::TYPE_SMS);

        $this->addRenderParams([
            'result' => [
                $appMailMessenger,
                $appPhoneMessenger
            ]
        ]);

        return $this->render(
            '@tmpl/design_patterns/creational/static_factory.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/simple-factory", name="dp_creational_simple_factory")
     * @param MessengerSimpleFactory $factory
     * @return Response
     */
    public function simpleFactory(MessengerSimpleFactory $factory)
    {
        $this->setTitle('Simple Factory');

        $appMailMessenger = $factory->build(MessengerSimpleFactory::TYPE_EMAIL);
        $appPhoneMessenger = $factory->build(MessengerSimpleFactory::TYPE_SMS);

        $this->addRenderParams([
            'result' => [
                $appMailMessenger,
                $appPhoneMessenger
            ]
        ]);

        return $this->render(
            '@tmpl/design_patterns/creational/simple_factory.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/singleton", name="dp_creational_singleton")
     * @return Response
     */
    public function singleton()
    {
        $this->setTitle('Singleton');

        $result['simpleSingleton1'] = SimpleSingleton::getInstance();
        $result['simpleSingleton1']->setTest('simpleSingleton1');
        $result['simpleSingleton2'] = SimpleSingleton::getInstance();

        $result[] = $result['simpleSingleton1'] === $result['simpleSingleton2'];

        $result['advancedSingleton1'] = AdvancedSingleton::getInstance();
        $result['advancedSingleton1']->setTest('advancedSingleton1');
        $result['advancedSingleton2'] = AdvancedSingleton::getInstance();

        $result[] = $result['advancedSingleton1'] === $result['advancedSingleton2'];

        $this->addRenderParams(['result' => $result]);

        return $this->render(
            '@tmpl/design_patterns/creational/singleton.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/multiton", name="dp_creational_multiton")
     * @return Response
     */
    public function multiton()
    {
        $this->setTitle('Multiton');

        $multiton[] = SimpleMultiton::getInstance('mysql')->setTest('mysql-test');
        $multiton[] = SimpleMultiton::getInstance('mongo');

        $multiton[] = SimpleMultiton::getInstance('mysql');
        $multiton[] = SimpleMultiton::getInstance('mongo')->setTest('mongo-test');

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init';
        $multiton[] = $simpleMultitonNext;

        $simpleMultitonNext = SimpleMultitonNext::getInstance('mysql');
        $simpleMultitonNext->test2 = 'init2';
        $multiton[] = $simpleMultitonNext;

        $this->addRenderParams(['result' => $multiton]);

        return $this->render(
            '@tmpl/design_patterns/creational/multiton.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/builder", name="dp_creational_builder")
     * @param BlogPostBuilder $builder
     * @return Response
     */
    public function builder(BlogPostBuilder $builder)
    {
        $this->setTitle('Builder');

        $posts[] = $builder->setTitle('from Builder')->getBlogPost();

        $manager = new BlogPostManager();
        $manager->setBuilder($builder);

        $posts[] = $manager->createCleanPost();
        $posts[] = $manager->createNewPostIt();
        $posts[] = $manager->createNewPostCats();

        $this->addRenderParams(['result' => $posts]);

        return $this->render(
            '@tmpl/design_patterns/creational/builder.html.twig',
            $this->getRenderParams()
        );
    }

    /**
     * @Route("/design-patterns/prototype", name="dp_creational_prototype")
     * @param PrototypeDemo $demo
     * @return Response
     */
    public function prototype(PrototypeDemo $demo)
    {
        $this->setTitle('Prototype');

        $this->addRenderParams(['result' => $demo->run()]);

        return $this->render(
            '@tmpl/design_patterns/creational/prototype.html.twig',
            $this->getRenderParams()
        );
    }
}