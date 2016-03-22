<?php

namespace App\Http\Functions;


class Upload
{
	public function getFile($request)
	{
		if(getimagesize($_FILES['photo']['tmp_name']))
		{
			$uploaddir = 'images/preview/';
			$rand = rand(1111111111, 9999999999).'_'.date('Ymd');
			$name = basename($_FILES['photo']['name']);
			$extension = $this -> getExtension($name);
			$filename = $rand.'.'.$extension;
			$uploadfile = $uploaddir.$filename;
			move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);

			return $uploadfile;
		}
		
		return false;
	}
	
	public function getExtension($filename) 
	{
		$path_info = pathinfo($filename);
		
		return $path_info['extension'];
	}
}