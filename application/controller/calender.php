<?php 
class Calender extends Controller
{
	public function index()
	{
		$birthdays = $this->model->getAllBirthdays();
		$currentMonth = null;
		$currendtMonth = null;

		require APP . 'view/_templates/header.php';
		require APP . 'view/calender/index.php';
		require APP . 'view/_templates/footer.php';
	}

	public function addBirthday()
	{

	}

	public function delete()
	{

	}

	public function change()
	{
		
	}

}