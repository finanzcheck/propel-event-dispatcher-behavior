<?php

/**
 * @author William Durand <william.durand1@gmail.com>
 */
class EventDispatcherBehavior extends \Propel\Generator\Model\Behavior
{
    /**
     * @var EventDispatcherObjectBuilderModifier
     */
    private $objectBuilderModifier;

    public function __construct()
    {
        $this->dirname = __DIR__.'/';
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectBuilderModifier()
    {
        if (null === $this->objectBuilderModifier) {
            $this->objectBuilderModifier = new EventDispatcherObjectBuilderModifier($this);
        }

        return $this->objectBuilderModifier;
    }
}
