<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

class GitController extends FOSRestController
{
    /**
     * @Rest\Get("/search")
     */
    public function getAction(Request $request)
    {
        $qryStr = $request->query->get('q');
        $limit = $this->container->getParameter('limit');
        if(null !== $request->query->get('limit')){
            $limit = $request->query->get('limit');
        }
        
        $page = $this->container->getParameter('page');
        if(null !== $request->query->get('page')){
            $page = $request->query->get('page');
        }
        
        $sort = $this->container->getParameter('sort');
        if(null !== $request->query->get('sort')){
            $sort = $request->query->get('sort');
        }
        
        $order = $this->container->getParameter('order');
        if(null !== $request->query->get('order')){
            $order = $request->query->get('order');
        }
        
        //Prepare service provider url with query string.
        $serviceUrl = $this->container->getParameter('serviceUrl')."?q=".$qryStr."&sort=".$sort."&order=".$order."&page=".$page."&per_page=".$limit;
        
        //Curl request to get result for git service providers.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $serviceUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        $response = curl_exec($ch);
        
        // If using JSON...
        $data = json_decode($response);
        $result = array();     
        foreach($data->items as $key=>$value){
            $result[$key]['owner'] = $value->owner->login;
            $result[$key]['repository'] = $value->name;
            $result[$key]['file'] = $value->full_name;
        }
        return json_encode($result);
    }
}