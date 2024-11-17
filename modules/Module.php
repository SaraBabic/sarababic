<?php
namespace modules;

use Craft;
// use craft\elements\Entry;
// use craft\base\Model;
// use craft\base\Field;
// use craft\events\DefineRulesEvent;
// use yii\base\Event;
// use craft\web\Application;

/**
 * Custom module class.
 *
 * This class will be available throughout the system via:
 * `Craft::$app->getModule('my-module')`.
 *
 * You can change its module ID ("my-module") to something else from
 * config/app.php.
 *
 * If you want the module to get loaded on every request, uncomment this line
 * in config/app.php:
 *
 *     'bootstrap' => ['my-module']
 *
 * Learn more about Yii module development in Yii's documentation:
 * http://www.yiiframework.com/doc-2.0/guide-structure-modules.html
 */
class Module extends \yii\base\Module
{
    /**
     * Initializes the module.
     */
    public function init()
    {
        // Set a @modules alias pointed to the modules/ directory
        Craft::setAlias('@modules', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->getRequest()->getIsConsoleRequest()) {
            $this->controllerNamespace = 'modules\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\controllers';
        }

        parent::init();

        // Event::on(
        //     Application::class,
        //     Application::EVENT_INIT,
        //     function (Event $event) {
        //         $fieldsService = Craft::$app->getFields();
        //         // Place migration code here...
        //         $field = $fieldsService->createField([
        //             'type' => 'craft\fields\Matrix',
        //             'groupId' => 1,
        //             'name' => 'TEST',
        //             'handle' => 'linkItem',
        //             'instructions' => '',
        //             'translationMethod' => 'none',
        //             'translationKeyFormat' => NULL,
        //             'settings' => [

        //                 'maxBlocks' => '',
        //                 'minBlocks' => '',
        //                 'propagationMethod' => 'none'
        //             ],
        //         ]);

        //         $saveField = $fieldsService->saveField($field);
                
        //         if ($saveField) {
        //             echo "Saved";
        //         } else {
        //             echo "Something went wrong...";
        //         }
        //     }
        // );

        

        // Custom initialization code goes here...
    }
}
