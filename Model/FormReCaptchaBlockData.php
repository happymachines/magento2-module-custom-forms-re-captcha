<?php

declare(strict_types=1);

namespace HappyMachines\CustomFormsReCaptcha\Model;

use Magento\ReCaptchaUi\Block\ReCaptcha;

/**
 * Class FormReCaptchaBlockData
 * @package HappyMachines\CustomFormsReCaptcha\Model
 */
class FormReCaptchaBlockData implements FormReCaptchaBlockDataInterface
{
    /**
     * @inheritDoc
     */
    public function getBlockData()
    {
        return [
            'template' => 'Magento_ReCaptchaFrontendUi::recaptcha.phtml',
            'recaptcha_for' => 'happymachines_custom_forms',
            'jsLayout' => [
                'components' => [
                    'recaptcha' => [
                        'component' => 'Magento_ReCaptchaFrontendUi/js/reCaptcha',
                    ]
                ]
            ]
        ];
    }

    /**
     * @inheritDoc
     */
    public function getBlockClassName()
    {
        return ReCaptcha::class;
    }
}
