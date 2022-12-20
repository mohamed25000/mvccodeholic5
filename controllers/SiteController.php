<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        return "handle submitted data";
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'thanks for contacting us');
                return $response->redirect('contact');
            }
        }

        return $this->render("contact", [
            'model' => $contact,
        ]);
    }

    public function home()
    {
        $params = [
            "name" => "Mohamed",
        ];
        return $this->render("home", $params);
    }
}