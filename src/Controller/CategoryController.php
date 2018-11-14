<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index()
    {
        $categories = [1 => ['id' => random_int(1, 999999), 'name' => 'first category', 'description' => 'category description'], 2 => ['id' => random_int(1, 999999), 'name' => 'second category', 'description' => 'category description'], 3 => ['id' => random_int(1, 999999), 'name' => 'third category', 'description' => 'category description'], 4 => ['id' => random_int(1, 999999), 'name' => 'fourth category', 'description' => 'category description']];
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'categories'=>$categories,
        ]);
    }

    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function show($id)
    {
        $categories = [1 => ['id' => random_int(1, 999999), 'name' => 'first category', 'description' => 'category description'], 2 => ['id' => random_int(1, 999999), 'name' => 'second category', 'description' => 'category description'], 3 => ['id' => random_int(1, 999999), 'name' => 'third category', 'description' => 'category description'], 4 => ['id' => random_int(1, 999999), 'name' => 'fourth category', 'description' => 'category description']];
        $category = $categories[$id];
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }
}
