<?php
global $entities;
	//print_r($entities);
	  $entities[] = array('entity'=> array('table'=>'housing_vs_application','tableAlias'=>'hva'),
						  'type'=>'Vertical Shifting',
						  'join'=> array(
						  				'he' =>array(
													'joinEntity'=>'housing_estate' ,
												  	'onClause'=> array(
																		'leftEntity'=>'occupation_estate',
																		'rightEntity'=>'estate_id'
																		),
													'joinType'=> 'inner'
												  	),
										'hb' =>array(
													'joinEntity'=>'housing_block' ,
												 	 'onClause'=> array(
																		 'leftEntity'=>'occupation_block',
																		 'rightEntity'=>'block_id'
																		 ),
													'joinType'=> 'inner'
												 	 ),
										'hf' =>array(
													'joinEntity'=>'housing_flat',
												  	'onClause'=> array(
																		'leftEntity'=>'occupation_flat',
																		'rightEntity'=>'flat_id'
																		),
													'joinType'=> 'inner'
												 	 ),
										),
						  'fields'=>array(
						  					'he'=>array('Housing Estate'=>array('estate_name','estate_name')),
										  'hb'=>array('Housing Estate Block'=>array('block_name','block_name')),
										  'hf'=>array('Flat No'=>array('flat_no','flat_no')),
										  /*'hva'=>array(
													  'Possession Date' => array('possession_date','possession_date'),
													  
										 			 ),	*/
									),
						 'expressions'=>array('hva'=>array(
														'Possession Date'=>array("to_char(hva.possession_date, 'DD/MM/YYYY')",'possession_date'))),
						 'condition' => array()
		); 