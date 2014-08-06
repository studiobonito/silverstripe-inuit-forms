<?php namespace StudioBonito\SilverStripe\Inuit\Forms\Extensions;

/**
 * An extension to add style classes to FormField objects.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class FormFieldStyleExtension extends \DataExtension
{
    /**
     * @var string
     */
    protected $fieldHolderClass;

    /**
     * @var string
     */
    protected $fieldClass;

    /**
     * @var string
     */
    protected $labelClass;

    /**
     * @var string
     */
    protected $messageClass;

    /**
     * @param string $fieldHolderClass
     */
    public function setFieldHolderClass($fieldHolderClass)
    {
        $this->fieldHolderClass = $fieldHolderClass;

        return $this->owner;
    }

    /**
     * @return string
     */
    public function getFieldHolderClass()
    {
        return $this->fieldHolderClass;
    }

    /**
     * @param string $fieldClass
     */
    public function setFieldClass($fieldClass)
    {
        $this->fieldClass = $fieldClass;

        return $this->owner;
    }

    /**
     * @return string
     */
    public function getFieldClass()
    {
        return $this->fieldClass;
    }

    /**
     * @param string $labelClass
     */
    public function setLabelClass($labelClass)
    {
        $this->labelClass = $labelClass;

        return $this->owner;
    }

    /**
     * @return string
     */
    public function getLabelClass()
    {
        return $this->labelClass;
    }

    /**
     * @param string $messageClass
     */
    public function setMessageClass($messageClass)
    {
        $this->messageClass = $messageClass;
    }

    /**
     * @return string
     */
    public function getMessageClass()
    {
        return $this->messageClass;
    }
}