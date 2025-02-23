<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\Persistence\Proxy
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
        "\0".parent::class."\0".'commentaires' => [parent::class, 'commentaires', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'photo' => [parent::class, 'photo', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        "\0".parent::class."\0".'pseudo' => [parent::class, 'pseudo', null],
        "\0".parent::class."\0".'reservations' => [parent::class, 'reservations', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        'commentaires' => [parent::class, 'commentaires', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'nom' => [parent::class, 'nom', null],
        'password' => [parent::class, 'password', null],
        'photo' => [parent::class, 'photo', null],
        'prenom' => [parent::class, 'prenom', null],
        'pseudo' => [parent::class, 'pseudo', null],
        'reservations' => [parent::class, 'reservations', null],
        'roles' => [parent::class, 'roles', null],
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
