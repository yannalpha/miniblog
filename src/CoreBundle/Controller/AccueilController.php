<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccueilController extends Controller
{
    /**
     * @Route("/accueil")
     */
    public function accueilAction()
    {



        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('CoreBundle:Article')->findLastFiveElements();

        return $this->render('CoreBundle:Accueil:accueil.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * @Route("/articles")
     */
    public function articlesAction()
    {
        return $this->render('CoreBundle:Accueil:articles.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/article")
     */
    public function articleAction()
    {
        return $this->render('CoreBundle:Accueil:article.html.twig', array(
            // ...
        ));
        
    }

    /**
     * @Route("/categorie")
     */
    public function categorieAction()
    {
        return $this->render('CoreBundle:Accueil:categorie.html.twig', array(
            // ...
        ));
    }

}
