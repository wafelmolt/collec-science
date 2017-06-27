<?php
/**
 * Created : 8 sept. 2016
 * Creator : quinton
 * Encoding : UTF-8
 * Copyright 2016 - All rights reserved
 */
require_once 'modules/classes/label.class.php';
$dataClass = new Label ( $bdd, $ObjetBDDParam );
$keyName = "label_id";
$id = $_REQUEST [$keyName];

switch ($t_module ["param"]) {
	case "list":
		/*
		 * Display the list of all records of the table
		 */
		try {
			$vue->set ( $dataClass->getListe ( 2 ), "data" );
			$vue->set ( "param/labelList.tpl", "corps" );
		} catch ( Exception $e ) {
			$message->set ( $e->getMessage () );
		}
		break;
	case "change":
		/*
		 * open the form to modify the record
		 * If is a new record, generate a new record with default value :
		 * $_REQUEST["idParent"] contains the identifiant of the parent record
		 */
		dataRead ( $dataClass, $id, "param/labelChange.tpl" );

		if ($_REQUEST["operation_id"] > 0 && is_numeric($_REQUEST["operation_id"])) {
		            require_once 'modules/classes/operation.class.php';
		            $operation = new Operation ( $bdd, $ObjetBDDParam );
		            $operation_schema = $operation->getMetadataForm($_REQUEST["operation_id"]);
		            $vue->set($operation_schema,"operation_schema");
		            $vue->set($_REQUEST["operation_id"] ,"operation_id");
		}
		break;
	case "write":
		/*
		 * write record in database
		 */
		$id = dataWrite ( $dataClass, $_REQUEST );
		if ($id > 0) {
			$_REQUEST [$keyName] = $id;
		}
		break;
	case "delete":
		/*
		 * delete record
		 */
		dataDelete ( $dataClass, $id );
		break;
}
?>