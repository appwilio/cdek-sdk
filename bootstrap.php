<?php

require './vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation',
    './vendor/jms/serializer/src');

