<?php

return array(
    'module' => array(
        'class' => 'application.modules.stripe.StripeModule',
    ),
    'component' => array(
        'paymentManager' => array(
            'paymentSystems' => array(
                'stripe' => array(
                    'class' => 'application.modules.stripe.components.payments.StripePaymentSystem',
                )
            ),
        ),
    ),
    'rules'     => array(
        '/processStripe'                        => '/stripe/stripe/index',
    ),
);
