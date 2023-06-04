<?php

namespace App\Form;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Participant1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom',TextType::class,[
            "attr"=>[
                "class"=>"form-control w-50"
            ],
            "label"=>"Nom",
            "label_attr"=>[
                "class"=>"form-class mt-1"
            ]
        ])
        ->add('prenoms',TextType::class,[
            "attr"=>[
                "class"=>"form-control w-50"
            ],
            "label"=>"Prenoms",
            "label_attr"=>[
                "class"=>"form-class mt-1"
            ]
        ])
        ->add('contact',TextType::class,[
            "attr"=>[
                "class"=>"form-control w-50"
            ],
            "label"=>"Contact",
            "label_attr"=>[
                "class"=>"form-class mt-1"
            ]
        ])
        ->add('email',EmailType::class,[
            "attr"=>[
                "class"=>"form-control w-50"
            ],
            "label"=>"Email",
            "label_attr"=>[
                "class"=>"form-class mt-1"
            ]
        ])
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participant::class,
        ]);
    }
}
