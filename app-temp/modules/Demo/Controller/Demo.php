<?php
namespace App\Modules\Demo\Controller;

use \DMS\Tornado\Controller;

class Demo extends Controller
{
    /**
     * Ejemplo de enrutamientos mediante anotaciones
     *
     * @param mixed $param
     * @T_ROUTE /demo/demo/index
     * @T_ROUTE /demo/demo/index/:string
     * @T_ROUTE GET|POST /demo/otra/anotacion
     */
    public function index($param = null)
    {
        $this->app->render('App\\Modules\\Demo\\View\\demo.tpl.php' , ['param' => $param]);
    }

}
