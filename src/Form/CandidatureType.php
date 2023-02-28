<?php

namespace App\Form;

use App\Entity\Candidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_envoi', DateType::class, [
                'required' => true,
                'widget' => 'single_text',
                'label' => 'Date d\'envoi',
            ])

            ->add('entreprise')

            ->add('intitule')

            ->add('date_reponse', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Date de réponse',
            ])

            ->add('date_contact', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Date de contact',
            ])

            ->add('date_entretien', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'label' => 'Date d\'entretien',
            ])
            
            ->add('resultat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
