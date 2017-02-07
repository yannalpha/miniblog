<?php

namespace CoreBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('contenu')
                ->add('auteur')
                ->add('dateParution')
                ->add('categorie', EntityType::class, array('class' => 'CoreBundle:Categorie', 'choice_label' => 'nom'))
                ->add('tags', EntityType::class, array('class' => 'CoreBundle:Tag', 'choice_label' => 'nom', 'multiple' => true, 'expanded' => true));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'corebundle_article';
    }


}
