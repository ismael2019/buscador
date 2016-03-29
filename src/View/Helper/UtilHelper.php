<?php
namespace App\View\Helper;

use Cake\View\Helper;

class UtilHelper extends Helper
{
	
	public function search($form, $action='index'){
		
		return  $form->create(null, ['url' => ['action' => $action], 'type' => 'get']).
				$form->input('q', ['placeholder' => 'Buscar...', 'label' => false]).
				$form->submit('search.png', ['type' => 'button']).
				$form->end();		
	}
	
}
