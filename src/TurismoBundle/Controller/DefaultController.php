<?php

namespace TurismoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TurismoBundle\Entity\Turismo;
use TurismoBundle\Form\TurismoType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TurismoBundle:Default:index.html.twig');
    }

    /**
     * @Route("/listado", name="listado")
     */
    public function mostrarAction()
    {
        $repository = $this->getDoctrine()->getRepository('TurismoBundle:Turismo');
        $turismo = $repository->findAll();
        return $this->render('TurismoBundle:Default:listado.html.twig',array('turismos' =>$turismo ));
    }

    /**
     * @Route("/borrar/{id}", name="borrar")
     */
    public function borrarAction($id)
    {
      $db=$this->getDoctrine()->getManager();
      $eliminar = $db ->getRepository(Turismo::class)->find($id);
      $db->remove($eliminar);
      $db->flush();
        return $this->redirectToRoute('listado');
    }

    /**
     * @Route("/editar/{id}", name="editar")
     */
    public function editarTapaAction(Request $request, $id)
    {
      $turismo=$this->getDoctrine()->getRepository(Turismo::class)->find($id);
      $form=$this->createForm(TurismoType::class, $turismo);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $em = $this->getDoctrine()->getManager();
         $em->persist($turismo);
         $em->flush();
         return $this->redirectToRoute('listado');
       }
      return $this-> render('TurismoBundle:Default:algonuevo.html.twig', array('form'=>$form->createView()));
    }

    /**
    * @Route("/nuevo", name="nuevo")
    */
    public function nuevatapaAction(Request $request)
    {
    $turismo=new Turismo();
    $form=$this->createForm(TurismoType::class, $turismo);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $turismo=$form->getData();
      $em=$this->getDoctrine()->getManager();
      $em->persist($turismo);
      $em->flush();
      return $this->redirectToRoute('listado');
    }
    return $this->render('TurismoBundle:Default:algonuevo.html.twig', array('form'=>$form->createView()));
    }

}
