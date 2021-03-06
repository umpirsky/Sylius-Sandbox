<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SandboxBundle\Form\Type;

use Sylius\Bundle\TaxationBundle\Form\Type\TaxRateType as BaseTaxRateType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Custom tax rate form.
 * We need to add the zone select field.
 *
 * @author Paweł Jędrzejewkski <pjedrzejewski@diweb.pl>
 */
class TaxRateType extends BaseTaxRateType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('zone', 'sylius_addressing_zone_choice')
        ;
    }
}
