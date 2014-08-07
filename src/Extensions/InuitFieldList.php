<?php namespace StudioBonito\SilverStripe\Inuit\Forms\Extensions;

use ClassInfo;
use FieldGroup;
use SSViewer;
use Tab;
use TabSet;

/**
 * An extension to transform the {@link \FormField} objects
 * of a {@FieldList} so they use inuit form templates.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class InuitFieldList extends \Extension
{
    /**
     * Transform all the {@link \FormField} objects in
     * the {@link \FieldList} to use inuit form templates.
     *
     * @return \FieldList
     */
    public function performInuitTransformation()
    {
        foreach ($this->owner as $field) {

            // If we have a Tabset, performInuitTransformation all Tabs
            if ($field instanceof TabSet) {
                $field->Tabs()->performInuitTransformation();
            }

            // If we have a Tab, performInuitTransformation all its Fields
            if ($field instanceof Tab) {
                $field->Fields()->performInuitTransformation();
            }

            if ($field instanceof FieldGroup) {
                $field->FieldList()->performInuitTransformation();
            }

            $template = "Inuit{$field->class}_holder";
            if (SSViewer::hasTemplate($template)) {
                $field->setFieldHolderTemplate($template);
            } else {
                $field->setFieldHolderTemplate("InuitFormField_holder");
            }

            foreach (array_reverse(ClassInfo::ancestry($field)) as $className) {
                $inuitCandidate = "Inuit{$className}";
                $nativeCandidate = $className;
                if (SSViewer::hasTemplate($inuitCandidate)) {
                    $field->setTemplate($inuitCandidate);
                    break;
                } elseif (SSViewer::hasTemplate($nativeCandidate)) {
                    $field->setTemplate($nativeCandidate);
                    break;
                }
            }
        }

        return $this->owner;
    }
}