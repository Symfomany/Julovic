<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Parametres;
use Site\AdminBundle\Form\ParametresType;

/**
 * Parametres controller.
 *
 */
class ParametresController extends Controller
{
    /**
     * Lists all Parametres entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteAdminBundle:Parametres')->findAll();

        return $this->render('SiteAdminBundle:Parametres:index.html.twig', array(
            'entities' => $entities,
        ));
    }



    /**
     * Displays a form to edit an existing Parametres entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Parametres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parametres entity.');
        }

        $editForm = $this->createForm(new ParametresType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Parametres:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Parametres entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Parametres')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parametres entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ParametresType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parametres_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Parametres:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
