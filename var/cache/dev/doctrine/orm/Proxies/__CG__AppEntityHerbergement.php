<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Herbergement extends \App\Entity\Herbergement implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'categorie' => [parent::class, 'categorie', null],
        "\0".parent::class."\0".'commentaires' => [parent::class, 'commentaires', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'pays' => [parent::class, 'pays', null],
        "\0".parent::class."\0".'photos' => [parent::class, 'photos', null],
        "\0".parent::class."\0".'prix' => [parent::class, 'prix', null],
        "\0".parent::class."\0".'reservations' => [parent::class, 'reservations', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        "\0".parent::class."\0".'type' => [parent::class, 'type', null],
        'adresse' => [parent::class, 'adresse', null],
        'categorie' => [parent::class, 'categorie', null],
        'commentaires' => [parent::class, 'commentaires', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'pays' => [parent::class, 'pays', null],
        'photos' => [parent::class, 'photos', null],
        'prix' => [parent::class, 'prix', null],
        'reservations' => [parent::class, 'reservations', null],
        'titre' => [parent::class, 'titre', null],
        'type' => [parent::class, 'type', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
