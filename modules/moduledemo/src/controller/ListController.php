<?php

namespace ModuleDemo\Controller;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Response;

class ListController extends FrameworkBundleAdminController
{
    public function listAction()
    {
        return new Response('Hello');
    }
}