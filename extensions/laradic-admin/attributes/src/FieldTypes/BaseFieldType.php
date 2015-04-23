<?php
/**
 * Part of the Laradic packages.
 * MIT License and copyright information bundled with this package in the LICENSE file.
 *
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
namespace LaradicAdmin\Attributes\FieldTypes;

use ArrayAccess;
use Debugger;
use Illuminate\Contracts\View\Factory as View;
use LaradicAdmin\Attributes\Contracts\FieldTypes;

/**
 * Class BaseFieldType
 *
 * @package     Laradic\admin\src\FieldTypes
 */
abstract class BaseFieldType implements ArrayAccess
{

    protected $slug;

    /** @var Factory */
    protected $fieldTypes;

    protected $attributes;

    protected $value;

    protected $name;

    /** @var \Illuminate\View\Factory */
    protected $view;

    protected $options;

    /**
     * Instantiates the class
     *
     * @param FieldTypes $fieldTypes
     * @param View       $view
     */
    public function __construct(FieldTypes $fieldTypes, View $view)
    {
        $this->fieldTypes = $fieldTypes;
        $this->view = $view;
    }

    abstract function options();

    public function getSlug()
    {
        return $this->slug;
    }

    protected function getView()
    {
        return 'field-types::' . $this->getSlug();
    }

    public function render()
    {
        #Debugger::dump(\Themes::addNamespace())
        return $this->view->make($this->getView())->with([
            'slug' => $this->slug,
            'value' => $this->value,
            'attributes' => $this->attributes,
            'name' => $this->name,
            'assetGroupName' => 'field-types',
            'type' => $this
        ])->render();
    }

    /**
     * get options value
     *
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the options value
     *
     * @param mixed $options
     * @return BaseFieldType
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }


    public function renderOptions(array $options)
    {
        return $this->view->make('field-types::options.' . $this->slug)->with($options)->render();
    }

    /**
     * Get the value of attributes
     *
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Sets the value of attributes
     *
     * @param mixed $attributes
     * @return mixed
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get the value of value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value of value
     *
     * @param mixed $value
     * @return mixed
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name
     *
     * @param mixed $name
     * @return mixed
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the fieldTypes value
     * ${PARAM_DOC}
     *
     * @return Factory
    ${THROWS_DOC}
     */
    public function getFieldTypes()
    {
        return $this->fieldTypes;
    }

    /**
     * Set the fieldTypes value
     * ${PARAM_DOC}
     *
     * @return Factory
    ${THROWS_DOC}
     */
    public function setFieldTypes($fieldTypes)
    {
        $this->fieldTypes = $fieldTypes;

        return $this;
    }




    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed $key
     * @return bool
     */
    public function offsetExists($key)
    {
        return array_has($this->attributes, $key);
    }

    /**
     * Get an item at a given offset.
     *
     * @param  mixed $key
     * @return mixed
     */
    public function offsetGet($key)
    {
        return array_get($this->attributes, $key);
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if ( is_array($key) )
        {
            foreach ($key as $innerKey => $innerValue)
            {
                array_set($this->attributes, $innerKey, $innerValue);
            }
        }
        else
        {
            array_set($this->attributes, $key, $value);
        }
    }

    /**
     * Unset the item at a given offset.
     *
     * @param  string $key
     * @return void
     */
    public function offsetUnset($key)
    {
        array_set($this->attributes, $key, null);
    }

}
