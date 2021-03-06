<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'components/jquery' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/jquery',
            'aliases' => array(),
            'reference' => '69e381248f3bb12d8e5814abe16ac172758c714d',
            'dev_requirement' => false,
        ),
        'kartik-v/yii2-bootstrap4-dropdown' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'yii2-extension',
            'install_path' => __DIR__ . '/../kartik-v/yii2-bootstrap4-dropdown',
            'aliases' => array(
                0 => '1.0.x-dev',
            ),
            'reference' => 'd5a62fbb57a37c17500321f58cb567080ff2f047',
            'dev_requirement' => false,
        ),
        'kartik-v/yii2-dialog' => array(
            'pretty_version' => 'v1.0.6',
            'version' => '1.0.6.0',
            'type' => 'yii2-extension',
            'install_path' => __DIR__ . '/../kartik-v/yii2-dialog',
            'aliases' => array(),
            'reference' => '510c3a35ffe79987cde9a9366cedbff545fd92d4',
            'dev_requirement' => false,
        ),
        'kartik-v/yii2-grid' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'yii2-extension',
            'install_path' => __DIR__ . '/../kartik-v/yii2-grid',
            'aliases' => array(
                0 => '3.3.x-dev',
            ),
            'reference' => 'e2cc8c89a35709624488559628ae1cafffa1219b',
            'dev_requirement' => false,
        ),
        'kartik-v/yii2-krajee-base' => array(
            'pretty_version' => 'v3.0.1',
            'version' => '3.0.1.0',
            'type' => 'yii2-extension',
            'install_path' => __DIR__ . '/../kartik-v/yii2-krajee-base',
            'aliases' => array(),
            'reference' => 'bbf7b58b0000f44834c18c0f2eed13a0a7d04c09',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v4.4.1',
            'version' => '4.4.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => 'dca1ab7d877bc4b664b43604657a2b5fbe2b4ecb',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v4.4.1',
            ),
        ),
    ),
);
