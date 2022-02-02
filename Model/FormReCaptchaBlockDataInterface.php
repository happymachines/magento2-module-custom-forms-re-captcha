<?php

declare(strict_types=1);

namespace HappyMachines\CustomFormsReCaptcha\Model;

/**
 * Interface FormReCaptchaBlockDataInterface
 * @package HappyMachines\CustomFormsReCaptcha\Model
 */
interface FormReCaptchaBlockDataInterface
{
    /**
     * @return array
     */
    public function getBlockData();

    /**
     * @return string
     */
    public function getBlockClassName();
}
