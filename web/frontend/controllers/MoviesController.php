<?php
/**
 * Created by IntelliJ IDEA.
 * User: femiibiwoye
 * Date: 06/12/2018
 * Time: 1:23 PM
 */

namespace frontend\controllers;


use yii\web\Controller;

class MoviesController extends Controller
{
    public function actionIndex()
    {
     $movies = file_get_contents('https://hydramovies.com/api-v2/?source=http://hydramovies.com/api-v2/current-Movie-Data.csv&movie_year=2002');

     return $this->render('index',['movies'=>json_decode($movies)]);

    }
}