<?php

namespace app\controllers;

use app\models\Pku;
use app\models\PkuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PkuController implements the CRUD actions for Pku model.
 */
class PkuController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pku models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PkuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBaru()
    {
        $db = Pku::find()->orderBy(['id' => SORT_DESC])->one();

        return $this->render('contoh', [
            'data' => $db,
        ]);
    }

    /**
     * Displays a single Pku model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pku();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $quran = $model->quran;
                $arab = $model->arab;
                $j_utusan = $model->j_utusan;
                $wawasan = $model->wawasan;
                $inggris = $model->inggris;
                $s2 = $model->s2;
                $nilai = $model->nilai;

                $val2 = 2;
                $val3 = 3;
                $val5 = 5;

                $quran2 = $quran*$val2;
                $arab2 = $arab*$val2;
                $j_utusan2 = $j_utusan*$val3;
                $wawasan2 = $wawasan*$val3;
                $inggris2 = $inggris*$val2;
                $s22 = $s2*$val3;
                $nilai2 = $nilai*$val5;
                

                $hasil = $quran2 + $arab2 + $j_utusan2 + $wawasan2 + $inggris2 + $s22 + $nilai2;

                $model->hasil = $hasil;

                // echo '<pre>';print_r($model);exit;

                $model->save();
                //  var_dump($model->getErrors());
                //  exit;
                return $this->redirect(['index', 'id' => $model->id]);

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pku model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pku model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Pku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pku::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
