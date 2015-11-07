<?php

namespace app\controllers;
use mPDF;

class MpdfController extends \yii\web\Controller
{
		
   // show in browser						
   public function actionIndex(){
		$mpdf=new mPDF();
		$mpdf->WriteHTML($this->renderPartial('mpdf_view'));
        $mpdf->Output();
        exit;
	}

	// download 	
	public function actionForceDownloadPdf(){
		$mpdf=new mPDF();
		$mpdf->WriteHTML($this->renderPartial('mpdf_view'));
        $mpdf->Output('MyPDF.pdf', 'D');
        exit;
	}
}
