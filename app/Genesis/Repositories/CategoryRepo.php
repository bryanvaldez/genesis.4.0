<?php

namespace Genesis\Repositories;

use Genesis\Entities\Category;

class CategoryRepo extends BaseRepo{

	public function getModel(){
		return new Category;
	}
}