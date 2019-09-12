<?php
		
		$config = [
						'SAC_rules'		=>[		

												[
														'field'		=>'company_code',
														'label'		=>'Company Code',
														'rules'		=>'required|trim|is_natural',

												],
												[
														'field'		=>'company_name',
														'label'		=>'Company Name',
														'rules'		=>'required|trim',

												],

												[
														'field'		=>'company_city',
														'label'		=>'Company City',
														'rules'		=>'required|trim',

												],
												[
														'field'		=>'company_mobile',
														'label'		=>'Company Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',

												],
												[
														'field'		=>'company_email',
														'label'		=>'Company Email',
														'rules'		=>'required|trim|valid_email',

												],


											],
						'SAU_rules'		=>[

												[
														'field'		=>'fname',
														'label'		=>'First Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'lname',
														'label'		=>'Last Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'email',
														'label'		=>'Email',
														'rules'		=>'required|trim|valid_email',		
												],
												[
														'field'		=>'password',
														'label'		=>'Password',
														'rules'		=>'required',		
												],
												[
														'field'		=>'reenter',
														'label'		=>'Re-enter Password',
														'rules'		=>'required|matches[password]',		
												],
												[
														'field'		=>'mobile',
														'label'		=>'Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',		
												]
										],
											
						'SAUedit_rules'		=>[

												[
														'field'		=>'fname',
														'label'		=>'First Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'lname',
														'label'		=>'Last Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'email',
														'label'		=>'Email',
														'rules'		=>'required|trim|valid_email',		
												],
												
												[
														'field'		=>'mobile',
														'label'		=>'Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',		
												]
										],

						'CAUedit_rules'		=>[

												[
														'field'		=>'fname',
														'label'		=>'First Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'lname',
														'label'		=>'Last Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'email',
														'label'		=>'Email',
														'rules'		=>'required|trim|valid_email',		
												],
												
												[
														'field'		=>'mobile',
														'label'		=>'Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',		
												]
										],


						'CACM_rules'		=>[		

												[
														'field'		=>'client_code',
														'label'		=>'Code',
														'rules'		=>'required|trim|is_natural',

												],
												[
														'field'		=>'client_name',
														'label'		=>'Name',
														'rules'		=>'required|trim',

												],

												[
														'field'		=>'client_city',
														'label'		=>'City',
														'rules'		=>'required|trim',

												],
												[
														'field'		=>'client_mobile',
														'label'		=>'Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',

												],
												[
														'field'		=>'client_email',
														'label'		=>'Email',
														'rules'		=>'required|trim|valid_email',

												]


											],
						'CAU_rules'		=>[

												[
														'field'		=>'fname',
														'label'		=>'First Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'lname',
														'label'		=>'Last Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												[
														'field'		=>'email',
														'label'		=>'Email',
														'rules'		=>'required|trim|valid_email',		
												],
												[
														'field'		=>'password',
														'label'		=>'Password',
														'rules'		=>'required',		
												],
												[
														'field'		=>'reenter',
														'label'		=>'Re-enter Password',
														'rules'		=>'required|matches[password]',		
												],
												[
														'field'		=>'mobile',
														'label'		=>'Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',		
												]
										],

						'CAPM_rules'		=>[		

												[
														'field'		=>'capm_code',
														'label'		=>'Product Code',
														'rules'		=>'required|trim|is_natural',

												],
												[
														'field'		=>'capm_name',
														'label'		=>'Product Name',
														'rules'		=>'required|trim',

												],

												[
														'field'		=>'capm_desc',
														'label'		=>'Description',
														'rules'		=>'required|trim',

												],
												
											],	
						'ContactUs_rules'		=>[

												[
														'field'		=>'name',
														'label'		=>'Name',
														'rules'		=>'required|trim|alpha_numeric',		
												],
												
												[
														'field'		=>'email',
														'label'		=>'Email',
														'rules'		=>'required|trim|valid_email',		
												],
												
												[
														'field'		=>'description',
														'label'		=>'Description',
														'rules'		=>'required',		
												]
											],

						'Main_rules'		=>[		

												[
														'field'		=>'main_subject',
														'label'		=>'Subject',
														'rules'		=>'required|trim',

												],
												[
														'field'		=>'main_mobile',
														'label'		=>'Contact Number',
														'rules'		=>'required|trim|min_length[10]|max_length[15]|is_natural',

												],

												[
														'field'		=>'main_desc',
														'label'		=>'Description',
														'rules'		=>'required|trim',

												],
												
											]	




		];







