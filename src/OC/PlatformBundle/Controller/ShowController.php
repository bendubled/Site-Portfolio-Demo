<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ShowController extends Controller
{
    public function accueilAction()
    {
        
       
       /* 
        $repository = $this

  ->getDoctrine()

  ->getManager()

  ->getRepository('OCPlatformBundle:Advert');

$advert = $repository->findAll();
 $content = $this->get('templating')->render('OCPlatformBundle:Show:accueil.html.twig', array("listAdverts"=>$advert));


  
        
        return new Response($content);
       

*/
$repository = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:page_details');
$page_details = $repository->find(1);

 


//foreach ($listAdverts as $advert) {
$content = $this->get('templating')->render('OCPlatformBundle:Show:accueil.html.twig', array("page_details"=>$page_details));
  // $advert est une instance de Advert
return new Response($content);
 echo $page_details->getContent();

//}
        

    }

    public function cvAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Show:cv.html.twig');
    
        return new Response($content);
    }

    public function creationsAction()
    {
    
        $content = $this->get('templating')->render('OCPlatformBundle:Show:creations.html.twig');
    
        return new Response($content);
    }
//    public function get_page_details(){
//        return $this->
//    }
    
 
    public function photosAction()
    {
       
        error_log("coucou");
       //$page_details = $repository->findOneBy(array('titre'));
        $em=$this->getDoctrine()->getManager();
        $RAWS_QUERY = 'SELECT * FROM page_details';
        $statement = $em->getConnection()->prepare($RAWS_QUERY);
        $statement->execute();
        
        $results = $statement->fetchALL();
        //error_log($statement);
        error_log(print_r($results, true));
        error_log('finish');
        
        $content = $this->get('templating')->render('OCPlatformBundle:Show:photos.html.twig', array("photos"=>$results));
    
        return new Response($content);
    }
    
    
    public function creation_projetsAction(){
           $em=$this->getDoctrine()->getManager();
         $RAWS_QUERY = 'SELECT * FROM projets';
          $statement = $em->getConnection()->prepare($RAWS_QUERY);
        $statement->execute();
         $results = $statement->fetchALL();
           $content = $this->get('templating')->render('OCPlatformBundle:Show:creations.html.twig', array("creation_projets"=>$results)); 
            return new Response($content);
       
       
    }
     public function actualitesAction(){
           $em=$this->getDoctrine()->getManager();
         $RAWS_QUERY = 'SELECT * FROM actualites';
          $statement = $em->getConnection()->prepare($RAWS_QUERY);
        $statement->execute();
         $results = $statement->fetchALL();
           $content = $this->get('templating')->render('OCPlatformBundle:Show:accueil.html.twig', array("actualites"=>$results)); 
            return new Response($content);
}
}