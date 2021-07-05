<?php

class WelcomeController
{
	public function index()
	{
		$hello = 'Viel Spass beim Programmieren!';
		
		require 'app/Views/welcome.view.php';
	}
	
	public function new()
	{
		$pdo = db();

		// Dein SQL-Code...
		$statement->execute();
		
		// Umleiten auf die Startseite
		header('Location: ' . ROOT_URL . '/hallo/welt');
	}
	
}

