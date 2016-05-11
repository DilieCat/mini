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
		$birthdays = $this->model->getAllBirthdays();
		$months = $this->model->getAllMonths();

		require APP . 'view/_templates/header.php';
		require APP . 'view/calender/add.php';
		require APP . 'view/_templates/footer.php';
	}

	public function addBirthdayAction()
	{
		  // if we have POST data to create a new song entry
        if (isset($_POST["Save"])) {
            // do addSong() in model/model.php
            $this->model->addBirthdayAction($_POST["person"], $_POST["year"],  $_POST["day"], $_POST["month_id"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'calender/index');
	}

	public function deleteBirthday($id)
	{
		
		$birthday = $this->model->getBirthday($id);

		require APP . 'view/_templates/header.php';
		require APP . 'view/calender/delete.php';
		require APP . 'view/_templates/footer.php';
	}

	public function deleteBirthdayAction($id)
	{
			  // if we have POST data to create a new song entry
        if (isset($_POST["confirmed"])) {
            // do addSong() in model/model.php
            $this->model->deleteBirthdayAction($id);
        }

        // where to go after song has been added
        header('location: ' . URL . 'calender/index');	
	}

	public function editBirthday($id)
	{
		$months = $this->model->getAllMonths();
		$birthday = $this->model->getBirthday($id);

		require APP . 'view/_templates/header.php';
		require APP . 'view/calender/edit.php';
		require APP . 'view/_templates/footer.php';
	}

}