<?php

class IssueController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	/*public function actionSaveData()
	{ 
		$test_issue = new Issue;
		$test_issue->project_id ="1";
		$test_issue->name ="sandeep";
		//$test_issue->detail = $detail;
		if($test_issue->save())
			$id = $test_issue->id;
		else

            $id = -1;

			 $this->render('show_issue', array(

            'result' => $id

        ));
	}
	*/
	public function actionCreateIssue($project_id,$name,$detail)
	{
		$test_issue = new Issue;

		$test_issue->project_id  = $project_id;
		$test_issue->name = $name;
		$test_issue->detail = $detail;
		if($test_issue->save())
			$id = $test_issue->id;
			else

            $id = -1;

			$this->render('show_issue', array(

            'result' => $id

        ));

      

	} 
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}