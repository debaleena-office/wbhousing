<?php
	function cs_allotment_list_form($form, &$form_state) {
		
		$cs_allotment_process_date =  isset($form_state['values']['cs_allotment_process_date']) && !empty($form_state['values']['cs_allotment_process_date']) ? $form_state['values']['cs_allotment_process_date'] : '';
		
		$cs_allotment_process_no =  isset($form_state['values']['cs_allotment_process_no']) && !empty($form_state['values']['cs_allotment_process_no']) ? $form_state['values']['cs_allotment_process_no'] : '';
		
		$form['cs_allotment_process_date'] = array(
			'#title' => t('CS Allotment Process Date'),
			'#type' => 'select',
			'#options' => cs_allotment_process_date(),
			'#required' => TRUE,
			'#attributes' => array('class' => array('dropdown3')),
			'#ajax' => array(
					   'event' => 'change',
					   'callback' => '_reload_cs_allotment_process_no',
					   'effect' => 'fade',
					   'progress' => array(
						  'type' => '',
						  'message' => '',
						),
			),
			'#prefix' => '<div class="two">',
			'#suffix' => '</div>',
			'#default_value' => $cs_allotment_process_date,
	  	);
		
		/*$form['cs_allotment_process_no'] = array(
			'#title' => t('CS Allotment Process No.'),
			'#type' => 'select',
			'#options' => cs_allotment_process_no($cs_allotment_process_date),
			'#required' => TRUE,
			'#prefix' => '<div class="three" id="cs_allotment_process_no_replace">',
			'#suffix' => '</div>',
			'#weight' =>3
	  	);*/
		
		$form['cs_allotment_process_no'] = array(
			'#title' => t('CS Allotment Process No.'),
			'#type' => 'select',
			'#options' => array('' => '-- Select --'),
			'#required' => TRUE,
			'#attributes' => array('class' => array('dropdown3')),
			'#ajax' => array(
					   'event' => 'change',
					   'callback' => '_reload_cs_allotment_list',
					   'method' => 'replace',
			),
			'#prefix' => '<div class="two" id="cs_allotment_process_no_replace">',
			'#suffix' => '</div>',
			'#default_value' => $cs_allotment_process_no,
		);
		
		if($cs_allotment_process_date != '') {
			$form['cs_allotment_process_no'] = array(
				'#title' => t('CS Allotment Process No.'),
				'#type' => 'select',
				'#options' => cs_allotment_process_no($cs_allotment_process_date),
				'#required' => TRUE,
				'#attributes' => array('class' => array('dropdown3')),
				'#ajax' => array(
						   'event' => 'change',
						   'callback' => '_reload_cs_allotment_list',
						   'method' => 'replace',
				),
				'#prefix' => '<div class="two" id="cs_allotment_process_no_replace">',
				'#suffix' => '</div>',
				'#default_value' => $cs_allotment_process_no,
			);
		}	
		
		/*$form['submit'] = array(
			'#value' => t('Submit'),
			'#type' => 'submit',
			'#prefix' => '<div class="three" style="margin-top:43px;height: 30px;">',
			'#suffix' => '</div>',
			'#weight' =>4
	  	);
		
		if($cs_allotment_process_date != '' && $cs_allotment_process_no != '') {
		 
		 	$output = cs_allotment_list_page($cs_allotment_process_date, $cs_allotment_process_no);
		 	$form['breadcrumb'] = array(
		   		'#type' => 'markup',
		   		'#markup' => $output,
				'#weight' => 5
			);
	  	}*/
		
		$form['cs_allotment_list_details'] = array(
			'#prefix' => '<div  id="cs_allotment_list_replace">',
			'#suffix' => '</div>',
		);
		
		
		if($cs_allotment_process_date != '' && $cs_allotment_process_no != '') {
		 
			$form['cs_allotment_list_details'] = array(
				'#type' => 'markup',
				'#markup' => cs_allotment_list_page($cs_allotment_process_date, $cs_allotment_process_no),
				'#prefix' => '<div id="cs_allotment_list_replace">',
				'#suffix' => '</div>',
			);
	  	}
		
		return $form;
	}
	
	function cs_allotment_list_form_validate($form, &$form_state) {
		#krumo($form_state['values']['table']);
	}
	
	function cs_allotment_list_form_submit($form, &$form_state) {
		$form_state['rebuild'] = TRUE;
	}
	
	function cs_allotment_list_page($cs_allotment_process_date = '', $cs_allotment_process_no = '') {
		$output = '';
		$result = fetch_all_cs_allottee_details($cs_allotment_process_date, $cs_allotment_process_no);
		
		$header = array();
		$rows = array();
		
		$header[] = array('data' => 'Sl. No.');
		$header[] = array('data' => 'Flat Type');
		//$header[] = array('data' => 'Name');
		$header[] = array('data' => 'Date of Application');
		$header[] = array('data' => 'Application No');
		$header[] = array('data' => 'Date of Allotment');
		$header[] = array('data' => 'Allotment No.');
		$header[] = array('data' => 'View Allotment Details');
		//$header[] = array('data' => 'View Details');
		
		$i = 1;
		while($data = $result->fetchObject()) {
			$fields = array();
			
			$fields[] = $i;
			$fields[] = $data->flat_type;
			//$fields[] = $data->applicant_name;
			$fields[] = implode('/', array_reverse(explode('-', $data->date_of_application)));
			$fields[] = $data->application_no;
			$fields[] = implode('/', array_reverse(explode('-', $data->allotment_date)));
			$fields[] = $data->allotment_no;
			
			global $base_path;
		 	$src=$base_path.drupal_get_path('module', 'shifting_allotment_list').'/images/view1.png';
			$fields[] =  l(
		 				'<img src="'.$src.'" alt="View Icon">',
		 				'cs_allotment_details/'.encrypt_url($data->online_application_id), 
						array(
								'html'=>TRUE,
		  						'attributes'=> array('target' => '_blank'),
		 				)
					);
			
		 	/*$src1=$base_path.drupal_get_path('module', 'view_application_list').'/images/view1.png';
			$fields[] = l(
		 				'<img src="'.$src1.'" alt="View Icon">',
		 				'application_detail/'.encrypt_url($data->online_application_id), 
						array(
								'html'=>TRUE,
		  						'attributes'=> array('target' => '_blank'),
		 				)
					);*/
			
			$i++;
			$rows[] = $fields;
		}
		
		/*$output = theme_table(
			array(
			'header' => $header,
			'rows' => $rows,
			'attributes' => array(),
			'sticky' => true,
			'caption' => '',
			'colgroups' => array(),
			'empty' => t("No data found!") // The message to be displayed if table is empty
			)
		).theme('pager');*/
	
	if(count($rows) > 0) {			
		// Render using Drupal's render API.
		$build['datatable'] = array(
		  '#theme' => 'datatable',
		  '#header' => $header,
		  '#rows' => $rows,
		  '#attributes' => array(),
		);
 
		// Or, render using a theme function.
		$variables = array(
		  'attributes' => array(),
		  'header' => $header,
		  'rows' => $rows,
		);
		
		$output = theme('datatable', $variables);
	}
	else {
	  	
		$output = '<div>
						<table class="datatable_no_data_found">
							<tr class="tr_no_data_found">
								<th class="th_no_data_found"></th>
							</tr>
							<tr class="tr_no_data_found">
								<td class="td_no_data_found">No data found!</td>
							</tr>
						</table>
					</div>';
  	}
		if($result->rowCount() > 0) {
			return l('<img height="18" width="18" src="'.$base_path.drupal_get_path('module', 'shifting_allotment_list').'/images/pdf_icon.png" title="Download CS Allottee List" alt="PDF Icon">Download CS Allottee List', 'cs_allottee_list_pdf/'.encrypt_url($cs_allotment_process_date).'/'.encrypt_url($cs_allotment_process_no).'/cs_allottee_list_'.time(), array('html'=>TRUE, 'attributes' => array('target' => '_blank', 'style' => 'color: #0090C7;font-weight: 400;text-decoration: none; font-size:14px'))).$output;
		}
		else {
			return $output;
		}
	}