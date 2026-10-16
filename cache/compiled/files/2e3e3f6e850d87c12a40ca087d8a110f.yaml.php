<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/apmia/user/config/plugins/email.yaml',
    'modified' => 1792151212,
    'size' => 199,
    'data' => [
        'enabled' => true,
        'from' => 'info@apmia.org.pk',
        'from_name' => 'APMIA Website',
        'to' => 'info@apmia.org.pk',
        'to_name' => 'APMIA',
        'mailer' => [
            'engine' => 'sendmail',
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
