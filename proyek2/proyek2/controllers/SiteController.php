<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\tb_pelanggan;
use app\models\Barang;
use app\models\tb_barang;
use app\models\tb_toko;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }




    public function actionAbout()
    {
        $tb_pelanggan = tb_pelanggan::find()->all();
        return $this->render('about',['tb_pelanggan' => $tb_pelanggan]);
    }



    //untuk tambah


    public function actionTambahpel()
    {
        $tb_pelanggan = new tb_pelanggan();
        $formData = Yii::$app->request->tb_pelanggan();
        if($tb_pelanggan->load($formData)){
            if($tb_pelanggan->save()){
                Yii::$app->getSessin()->setFlash('massage', 'berhasil');
                return $this->redirect(['about']);
            }
            else{
                Yii::$app->getSessin()->setFlash('massage', 'gagal menyimpan');
            }
        }

        return $this->render('tambahpel', ['tb_pelanggan'=>$tb_pelanggan]);

    }




    //untuk view

        public function actionView($id_pelanggan)
    {
        $tb_pelanggan = tb_pelanggan::findOne($id_pelanggan);
        return $this->render('view',['tb_pelanggan' => $tb_pelanggan]);
    }



      public function actionViewbarang($id_barang)
    {
        $tb_barang = tb_barang::findOne($id_barang);
        return $this->render('viewbarang',['tb_barang' => $tb_barang]);
    }



            public function actionViewtoko($id_toko)
    {
        $tb_toko = tb_toko::findOne($id_toko);
        return $this->render('viewtoko',['tb_toko' => $tb_toko]);
    }





    //untuk update

            public function actionUpdate($id_pelanggan)
    {
        $tb_pelanggan = tb_pelanggan::findOne($id_pelanggan);
        if( $tb_pelanggan->load(Yii::$app->request->tb_pelanggan()) && $tb_pelanggan->save() ){
               Yii::$app->getSessin()->setFlash('massage', 'berhasil');
                return $this->redirect(['about', 'id_pelanggan' => $tb_pelanggan->id_pelanggan]);
            }
            else{

        return $this->render('update', ['tb_pelanggan'=>$tb_pelanggan]);
        }
    }





    //untuk delete

       public function actionDelete($id_pelanggan)
    {
        $tb_pelanggan = tb_pelanggan::findOne($id_pelanggan)->delete();
        if($tb_pelanggan){
            Yii::$app->getSession()->setFlash('message', 'berhasil menghapus ');
            return $this->redirect(['pelanggan']);    
        }
        
    }



    public function actionDeletebarang($id_barang)
    {
        $tb_barang = tb_barang::findOne($id_barang)->delete();
        if($tb_barang){
            Yii::$app->getSession()->setFlash('message', 'berhasil menghapus ');
            return $this->redirect(['barang']);    
        }
        
    }



    public function actionDeletetoko($id_toko)
    {
        $tb_toko = tb_toko::findOne($id_toko)->delete();
        if($tb_toko){
            Yii::$app->getSession()->setFlash('message', 'berhasil menghapus ');
            return $this->redirect(['toko']);    
        }
        
    }









    //untuk table

        public function actionPelanggan()
    {
        $tb_pelanggan = tb_pelanggan::find()->all();
        return $this->render('Pelanggan',['tb_pelanggan' => $tb_pelanggan]);
    }




      public function actionBarang()
    {
       $tb_barang = tb_barang::find()->all();
        return $this->render('barang',['tb_barang' => $tb_barang]);
    }



        public function actionToko()
    {
        $tb_toko = tb_toko::find()->all();
        return $this->render('toko',['tb_toko' => $tb_toko]);
    }



        public function actionBarcode()
    {
        return $this->render('barcode');
    }



         public function actionMasterdata()
    {
        return $this->render('masterdata');
    }

       
    //     public function actionFormPelanggan()
    // {
    //     $model = new Pelanggan;
    //     if ($model->load(yii::$app->request->post())&&$model->validate())
    //      {
    //         $model->save();
    //         yii::$app->session->setFlash('success','data berhasil di simpan');

    //         return $this->redirect('site/FormPelanggan');
    //     }
    //     return $this->render('FormPelanggan',compact('model'));
    // }

}
