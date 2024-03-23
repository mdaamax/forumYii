<?php

namespace app\controllers;

use app\entity\DirCountries;
use app\models\CountryImagesEditForm;
use app\models\CountryImagesForm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CountriesController implements the CRUD actions for DirCountries model.
 */
class CountriesController extends Controller
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
     * Lists all DirCountries models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DirCountries::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DirCountries model.
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
     * Creates a new DirCountries model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DirCountries();
        $model_file = new CountryImagesForm();
        if ($this->request->isPost) {
            $model_file->main_image = UploadedFile::getInstance($model_file, 'main_image');
            $model_file->slider_images = UploadedFile::getInstances($model_file, 'slider_images');
            if ($model_file->validate()) {
                if ($model->load($this->request->post()) && $model->save()) {
                    $alias = \Yii::getAlias("@app/upload/country/{$model->id}");
                    if (!is_dir($alias)) {
                        mkdir($alias, 777, true);
                    }
                    if (!is_dir("{$alias}/slider")){
                        mkdir("{$alias}/slider", 777, true);
                    }
                    array_map("unlink", glob("$alias/slider/*"));
                    rmdir("{$alias}/slider");
                    array_map("unlink", glob("$alias/*"));
                    mkdir("{$alias}/slider", 777, true);
                    $model_file->main_image->saveAs("{$alias}/main.{$model_file->main_image->extension}");
                    foreach ($model_file->slider_images as $index => $image) {
                        $num = $index + 1;
                        $image->saveAs("{$alias}/slider/{$num}.{$image->extension}");
                    }
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }
        return $this->render('create', [
            'model' => $model,
            'model_file' => $model_file
        ]);
    }

    /**
     * Updates an existing DirCountries model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_file = new CountryImagesEditForm();
        if ($model_file->load(\Yii::$app->request->post())) {
            $model_file->slider_images = UploadedFile::getInstances($model_file, 'slider_images');
            $model_file->main_image = UploadedFile::getInstance($model_file, 'main_image');
            if ($model_file->validate()) {
                if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
                    if ($model_file->updateImg) {
                        $alias = \Yii::getAlias("@app/upload/country/{$model->id}");
                        if (!is_dir($alias)) {
                            mkdir($alias, 777, true);
                        }
                        if (!is_dir("{$alias}/slider")){
                            mkdir("{$alias}/slider", 777, true);
                        }
                        array_map("unlink", glob("$alias/slider/*"));
                        rmdir("{$alias}/slider");
                        array_map("unlink", glob("$alias/*"));
                        mkdir("{$alias}/slider", 777, true);
                        $model_file->main_image->saveAs("{$alias}/main.{$model_file->main_image->extension}");
                        foreach ($model_file->slider_images as $index => $image) {
                            $num = $index + 1;
                            $image->saveAs("{$alias}/slider/{$num}.{$image->extension}");
                        }
                    }
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }
        return $this->render('update', [
            'model' => $model,
            'model_file' => $model_file
        ]);
    }

    /**
     * Deletes an existing DirCountries model.
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
     * Finds the DirCountries model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return DirCountries the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DirCountries::findOne(['id' => $id])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
