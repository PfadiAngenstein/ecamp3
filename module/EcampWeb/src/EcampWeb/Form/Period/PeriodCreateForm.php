<?php

namespace EcampWeb\Form\Period;

use EcampWeb\Form\AjaxBaseForm;

class PeriodCreateForm extends AjaxBaseForm
{
    public function __construct()
    {
        parent::__construct('period-create');
    }

    public function init()
    {

        $this->add(array(
            'name' => 'start',
            'type' => 'EcampCore\Entity\Period.start',
            'options' => array(
                'label' => 'Start',
                'column-size' => 'sm-9',
                'label_attributes' => array(
                    'class' => 'col-sm-3'
                )
            )
        ));
        $this->add(array(
            'name' => 'end',
            'type' => 'Date',
            'options' => array(
                'label' => 'End',
                'column-size' => 'sm-9',
                'label_attributes' => array(
                    'class' => 'col-sm-3'
                ),
            ),
        ));
        $this->add(array(
            'name' => 'description',
            'type'  => 'EcampCore\Entity\Period.description',
            'options' => array(
                'label' => 'Description',
                'column-size' => 'sm-9',
                'label_attributes' => array(
                    'class' => 'col-sm-3'
                ),
            ),
        ));

    }

    public function getInputFilterSpecification()
    {
        return array(
            array(
                'name' => 'start',
                'filters' => array(
                    array('name' => 'EcampCore\Entity\Period.start')
                ),
                'validators' => array(
                    array('name' => 'EcampCore\Entity\Period.start')
                )
            ),

            array(
                'name' => 'end',
                'filters' => array(
                ),
                'validators' => array(
                    array('name' => 'Date')
                )
            ),

            array(
                'name' => 'description',
                'filters' => array(
                    array('name' => 'EcampCore\Entity\Period.description')
                ),
                'validators' => array(
                    array('name' => 'EcampCore\Entity\Period.description')
                )
            ),

        );
    }
}
