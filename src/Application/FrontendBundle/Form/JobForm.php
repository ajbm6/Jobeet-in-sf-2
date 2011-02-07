<?php

namespace Application\FrontendBundle\Form;

use Symfony\Component\Form\Form,
    Symfony\Component\Form\ChoiceField,
    Symfony\Component\Form\TextField,
    Symfony\Component\Form\CheckboxField,
    Symfony\Component\Form\TextareaField,
    Symfony\Component\Form\FileField,
    Symfony\Component\Validator\ValidatorInterface,
    Application\JobeetBundle\Entity\JobeetJob,
    Application\JobeetBundle\Entity\Repository\JobRepository;

class JobForm 
{
    /**
     * Set up the job form, and pre-pop it with values (if any).
     */
    public static function create(array $categories, JobeetJob $job = null, ValidatorInterface $validator = null, array $options = array())
    {
        $form = new Form('job',$job,$validator,$options);
        $form->add(new TextField('company'));
        $form->add(new FileField('logo', array('secret' => 'job')));
        $form->add(new TextField('url'));
        $form->add(new TextField('location'));
        $form->add(new TextField('position'));
        $form->add(new TextareaField('description'));
        $form->add(new TextareaField('how_to_apply'));
        $form->add(new TextField('email'));
        $form->add(new CheckboxField('is_public'));        
        $form->add(new ChoiceField('type',array('choices' => JobRepository::getJobType())));        
        $form->add(new ChoiceField('category',array('choices' => $categories)));  
        
        return $form;
    }
}
