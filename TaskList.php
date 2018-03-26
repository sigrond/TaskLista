<?php
//komunikacja z bazą danych - mniej więcej
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

namespace Generator;

class TaskList
{
	public function addTask()
	{
		String $kod=Generator::generuj();
		DB::insert('insert into task (kod) values (?)', $kod);
	}
}
?>