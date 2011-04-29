<?php
	//application details
		$apps[$x]['name'] = "XML CDR";
		$apps[$x]['guid'] = '4A085C51-7635-FF03-F67B-86E834422848';
		$apps[$x]['category'] = 'PBX';
		$apps[$x]['subcategory'] = '';
		$apps[$x]['version'] = '';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en'] = 'Call Detail Records with all information about the call.';

	//menu details
		$apps[$x]['menu'][0]['title']['en'] = 'Apps';
		$apps[$x]['menu'][0]['guid'] = 'FD29E39C-C936-F5FC-8E2B-611681B266B5';
		$apps[$x]['menu'][0]['parent_guid'] = '';
		$apps[$x]['menu'][0]['category'] = 'internal';
		$apps[$x]['menu'][0]['path'] = '/mod/xml_cdr/v_xml_cdr.php';
		$apps[$x]['menu'][2]['order'] = '3';
		$apps[$x]['menu'][0]['groups'][] = 'user';
		$apps[$x]['menu'][0]['groups'][] = 'admin';
		$apps[$x]['menu'][0]['groups'][] = 'superadmin';
	
		$apps[$x]['menu'][1]['title']['en'] = 'Call Detail Records';
		$apps[$x]['menu'][1]['guid'] = '8F80E71A-31A5-6432-47A0-7F5A7B271F05';
		$apps[$x]['menu'][1]['parent_guid'] = 'FD29E39C-C936-F5FC-8E2B-611681B266B5';
		$apps[$x]['menu'][1]['category'] = 'internal';
		$apps[$x]['menu'][1]['path'] = '/mod/xml_cdr/v_xml_cdr.php';
		$apps[$x]['menu'][1]['groups'][] = 'user';
		$apps[$x]['menu'][1]['groups'][] = 'admin';
		$apps[$x]['menu'][1]['groups'][] = 'superadmin';

	//permission details
		$apps[$x]['permissions'][0]['name'] = 'xml_cdr_view';
		$apps[$x]['permissions'][0]['groups'][] = 'user';
		$apps[$x]['permissions'][0]['groups'][] = 'admin';
		$apps[$x]['permissions'][0]['groups'][] = 'superadmin';

	// CREATE TABLE v_xml_cdr 
		$apps[$x]['db'][0]['table'] = 'v_xml_cdr';
		$apps[$x]['db'][0]['fields'][0]['name'] = 'xml_cdr_id';
		$apps[$x]['db'][0]['fields'][0]['type']['pgsql'] = 'serial';
		$apps[$x]['db'][0]['fields'][0]['type']['sqlite'] = 'integer PRIMARY KEY';
		$apps[$x]['db'][0]['fields'][0]['type']['mysql'] = 'INT NOT NULL AUTO_INCREMENT PRIMARY KEY';
		$apps[$x]['db'][0]['fields'][0]['description'] = '';
		$apps[$x]['db'][0]['fields'][1]['name'] = 'v_id';
		$apps[$x]['db'][0]['fields'][1]['type'] = 'numeric';
		$apps[$x]['db'][0]['fields'][1]['description'] = '';
		$apps[$x]['db'][0]['fields'][2]['name'] = 'domain_name';
		$apps[$x]['db'][0]['fields'][2]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][2]['description'] = '';
		$apps[$x]['db'][0]['fields'][3]['name'] = 'accountcode';
		$apps[$x]['db'][0]['fields'][3]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][3]['description'] = '';
		$apps[$x]['db'][0]['fields'][4]['name'] = 'uuid';
		$apps[$x]['db'][0]['fields'][4]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][4]['description'] = '';
		$apps[$x]['db'][0]['fields'][5]['name'] = 'direction';
		$apps[$x]['db'][0]['fields'][5]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][5]['description'] = '';
		$apps[$x]['db'][0]['fields'][6]['name'] = 'default_language';
		$apps[$x]['db'][0]['fields'][6]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][6]['description'] = '';
		$apps[$x]['db'][0]['fields'][7]['name'] = 'context';
		$apps[$x]['db'][0]['fields'][7]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][7]['description'] = '';
		$apps[$x]['db'][0]['fields'][8]['name'] = 'xml_cdr';
		$apps[$x]['db'][0]['fields'][8]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][8]['description'] = '';
		$apps[$x]['db'][0]['fields'][9]['name'] = 'caller_id_name';
		$apps[$x]['db'][0]['fields'][9]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][9]['description'] = '';
		$apps[$x]['db'][0]['fields'][10]['name'] = 'caller_id_number';
		$apps[$x]['db'][0]['fields'][10]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][10]['description'] = '';
		$apps[$x]['db'][0]['fields'][11]['name'] = 'destination_number';
		$apps[$x]['db'][0]['fields'][11]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][11]['description'] = '';
		$apps[$x]['db'][0]['fields'][12]['name'] = 'start_epoch';
		$apps[$x]['db'][0]['fields'][12]['type']['pgsql'] = 'numeric';
		$apps[$x]['db'][0]['fields'][12]['type']['sqlite'] = 'numeric';
		$apps[$x]['db'][0]['fields'][12]['type']['mysql'] = 'bigint';
		$apps[$x]['db'][0]['fields'][12]['description'] = '';
		$apps[$x]['db'][0]['fields'][13]['name'] = 'start_stamp';
		$apps[$x]['db'][0]['fields'][13]['type']['pgsql'] = 'timestamp';
		$apps[$x]['db'][0]['fields'][13]['type']['sqlite'] = 'date';
		$apps[$x]['db'][0]['fields'][13]['type']['mysql'] = 'timestamp';
		$apps[$x]['db'][0]['fields'][13]['description'] = '';
		$apps[$x]['db'][0]['fields'][14]['name'] = 'start_uepoch';
		$apps[$x]['db'][0]['fields'][14]['type']['pgsql'] = 'numeric';
		$apps[$x]['db'][0]['fields'][14]['type']['sqlite'] = 'numeric';
		$apps[$x]['db'][0]['fields'][14]['type']['mysql'] = 'bigint';
		$apps[$x]['db'][0]['fields'][14]['description'] = '';
		$apps[$x]['db'][0]['fields'][15]['name'] = 'answer_stamp';
		$apps[$x]['db'][0]['fields'][15]['type']['pgsql'] = 'timestamp';
		$apps[$x]['db'][0]['fields'][15]['type']['sqlite'] = 'date';
		$apps[$x]['db'][0]['fields'][15]['type']['mysql'] = 'timestamp';
		$apps[$x]['db'][0]['fields'][15]['description'] = '';
		$apps[$x]['db'][0]['fields'][16]['name'] = 'answer_epoch';
		$apps[$x]['db'][0]['fields'][16]['type']['pgsql'] = 'numeric';
		$apps[$x]['db'][0]['fields'][16]['type']['sqlite'] = 'numeric';
		$apps[$x]['db'][0]['fields'][16]['type']['mysql'] = 'bigint';
		$apps[$x]['db'][0]['fields'][16]['description'] = '';
		$apps[$x]['db'][0]['fields'][17]['name'] = 'answer_uepoch';
		$apps[$x]['db'][0]['fields'][17]['type']['pgsql'] = 'numeric';
		$apps[$x]['db'][0]['fields'][17]['type']['sqlite'] = 'numeric';
		$apps[$x]['db'][0]['fields'][17]['type']['mysql'] = 'bigint';
		$apps[$x]['db'][0]['fields'][17]['description'] = '';
		$apps[$x]['db'][0]['fields'][18]['name'] = 'end_epoch';
		$apps[$x]['db'][0]['fields'][18]['type']['pgsql'] = 'numeric';
		$apps[$x]['db'][0]['fields'][18]['type']['sqlite'] = 'numeric';
		$apps[$x]['db'][0]['fields'][18]['type']['mysql'] = 'bigint';
		$apps[$x]['db'][0]['fields'][18]['description'] = '';
		$apps[$x]['db'][0]['fields'][19]['name'] = 'end_uepoch';
		$apps[$x]['db'][0]['fields'][19]['type']['pgsql'] = 'numeric';
		$apps[$x]['db'][0]['fields'][19]['type']['sqlite'] = 'numeric';
		$apps[$x]['db'][0]['fields'][19]['type']['mysql'] = 'bigint';
		$apps[$x]['db'][0]['fields'][19]['description'] = '';
		$apps[$x]['db'][0]['fields'][20]['name'] = 'end_stamp';
		$apps[$x]['db'][0]['fields'][20]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][20]['description'] = '';
		$apps[$x]['db'][0]['fields'][21]['name'] = 'duration';
		$apps[$x]['db'][0]['fields'][21]['type'] = 'numeric';
		$apps[$x]['db'][0]['fields'][21]['description'] = '';
		$apps[$x]['db'][0]['fields'][22]['name'] = 'mduration';
		$apps[$x]['db'][0]['fields'][22]['type'] = 'numeric';
		$apps[$x]['db'][0]['fields'][22]['description'] = '';
		$apps[$x]['db'][0]['fields'][23]['name'] = 'billsec';
		$apps[$x]['db'][0]['fields'][23]['type'] = 'numeric';
		$apps[$x]['db'][0]['fields'][23]['description'] = '';
		$apps[$x]['db'][0]['fields'][24]['name'] = 'billmsec';
		$apps[$x]['db'][0]['fields'][24]['type'] = 'numeric';
		$apps[$x]['db'][0]['fields'][24]['description'] = '';
		$apps[$x]['db'][0]['fields'][25]['name'] = 'bridge_uuid';
		$apps[$x]['db'][0]['fields'][25]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][25]['description'] = '';
		$apps[$x]['db'][0]['fields'][26]['name'] = 'read_codec';
		$apps[$x]['db'][0]['fields'][26]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][26]['description'] = '';
		$apps[$x]['db'][0]['fields'][27]['name'] = 'write_codec';
		$apps[$x]['db'][0]['fields'][27]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][27]['description'] = '';
		$apps[$x]['db'][0]['fields'][28]['name'] = 'remote_media_ip';
		$apps[$x]['db'][0]['fields'][28]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][28]['description'] = '';
		$apps[$x]['db'][0]['fields'][29]['name'] = 'network_addr';
		$apps[$x]['db'][0]['fields'][29]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][29]['description'] = '';
		$apps[$x]['db'][0]['fields'][30]['name'] = 'hangup_cause';
		$apps[$x]['db'][0]['fields'][30]['type'] = 'text';
		$apps[$x]['db'][0]['fields'][30]['description'] = '';
		$apps[$x]['db'][0]['fields'][31]['name'] = 'hangup_cause_q850';
		$apps[$x]['db'][0]['fields'][31]['type'] = 'numeric';
		$apps[$x]['db'][0]['fields'][31]['description'] = '';

?>
