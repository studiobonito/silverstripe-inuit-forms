<?php namespace StudioBonito\SilverStripe\Inuit\Forms;

use FieldList;

/**
 * A base form class that transforms all fields to use inuit style extensions.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class InuitForm extends \Form
{
    /**
     * Set the forms template.
     *
     * @var string
     */
    protected $template = 'InuitForm';

    /**
     * Transform all the {@link \FormField} objects in
     * the {@link \FieldList} to use inuit form templates.
     *
     * @param \FieldList $fields
     */
    public static function perform_inuit_fieldlist_transformation(FieldList $fields)
    {
        $fields->performInuitTransformation();
    }

    /**
     * Transform all the {@link \FormField} objects in
     * the {@link \Form} field and action {@link \FieldList}
     * objects to use inuit form templates.
     */
    public function performInuitTransformation()
    {
        $this->performInuitFieldListTransformation($this->Fields());
        $this->performInuitFieldListTransformation($this->Actions());
    }

    /**
     * Transform all the {@link \FormField} objects in
     * the {@link \FieldList} to use inuit form templates.
     *
     * @param \FieldList $fields
     *
     * @return $this
     */
    protected function performInuitFieldListTransformation(FieldList $fields)
    {
        self::perform_inuit_fieldlist_transformation($fields);

        return $this;
    }

    /**
     * Apply the transformation before rendering the form HTML output.
     *
     * @return mixed
     */
    public function forTemplate()
    {
        $this->performInuitTransformation();

        return parent::forTemplate();
    }
}