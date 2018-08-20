<?php

namespace AssoConnect\DoctrineValidatorBundle\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

Class IbanType extends StringType
{

    const TYPE = 'iban';
    const LENGTH = 31;

    /**
     * @inheritdoc
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'VARCHAR(' . self::LENGTH . ')';
    }

    public function getName()
    {
        return self::TYPE;
    }

}