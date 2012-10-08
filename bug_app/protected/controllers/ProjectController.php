<?php

class ProjectController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionSaveProject($name,$description)
	{
		$test_project = new Project;
		// put some test info

        $test_project->name =$name;
        $test_project->description = $description;
        //$test_project->create_time = "";
        //test_project->update_time = "";
        //st_project->create_user_id = "";
		if($test_project->save())

            $id = $test_project->id;

        else

            $id = -1;



        $this->render('show_result', array(

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