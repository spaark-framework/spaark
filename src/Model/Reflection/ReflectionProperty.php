<?php namespace Spaark\Core\Model\Reflection;
/**
 *
 *
 */

use Spaark\Core\Model\Reflection\Type;

/**
 * Reflects upon properies within a model, and parses their doc comments
 */
class ReflectionProperty extends Reflector
{
    /**
     * The name of this property
     *
     * @var string
     */
    protected $name;

    /**
     * The Composite that this property belongs to
     *
     * @var ReflectionComposite
     */
    protected $owner;

    /**
     * Is this property readable?
     *
     * @var bool
     * @readable
     */
    protected $readable;

    /**
     * Is this property writable?
     *
     * @var bool
     * @readable
     */
    protected $writable;

    /**
     * This property's type
     *
     * @var AbstractType
     * @readable
     */
    protected $type;

    /**
     * This property's default value
     *
     * @readable
     * @var mixed
     */
    protected $defaultValue;

    /**
     * @getter
     */
    public function isProperty()
    {
        return (boolean)$this->type;
    }
}
