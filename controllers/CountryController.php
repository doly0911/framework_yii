<?php

namespace app\controllers;

use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller {

    public function actionIndex() {

        $query = Country::find();

        // Limita la cantidad de registros traídos en cada petición
        $pagination = new Pagination([  
            'defaultPageSize' => 5, // número de elementos por página
            'totalCount' => $query->count()
        ]);

        $countries = $query->orderBy('name')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        //renderiza la vista country y le pasa los datos de países así y la info de paginación relacionada        
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);

    }
}