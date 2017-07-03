<?php

namespace EntityBundle\Controller;

use EntityBundle\Entity\categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use EntityBundle\Service\Product;
use EntityBundle\Service\Attributes;
use EntityBundle\Service\Categories;
class CategorieController extends Controller
{
    public function allAction()
    {
        $em = $this->get('doctrine')->getManager();
        $categories = (new Categories())->getAll($em);

        return $this->render('EntityBundle:Categorie:all.html.twig', array(
            "categories" => $categories,
        ));
    }

    public function viewAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $categorie = (new Categories())->getById($em, $request->query->get('id', null));
        $categorie_products = $categorie->getProducts($em);
        return $this->render('EntityBundle:Categorie:view.html.twig', array(
            "categorie" => $categorie,
            "categorie_products" => $categorie_products,
        ));
    }

    public function createAction(Request $request)
    {
        $data = $request->request->all();
        if (!empty($data)) {
            $cat = new Categories();
            $cat->name = $data["title"];
            $cat = $cat->save($this->get('doctrine')->getManager());
            $url = $this->generateUrl("categorie_view", array("id" => $cat));
            return $this->redirect(
                sprintf('%s#%s', $url, 'comment1423')
            );
        }
        return $this->render('EntityBundle:Categorie:create.html.twig', array(
        ));
    }

    public function removeAction(Request $request)
    {
        return $this->render('EntityBundle:Categorie:remove.html.twig', array(
            // ...
        ));
    }

}