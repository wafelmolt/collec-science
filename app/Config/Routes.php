<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->add("/", 'DefaultController::index');
$routes->add('default', 'DefaultController::index');
$routes->add('dbstructureHtml', '\Ppci\Controllers\Miscellaneous::structureHtml');
$routes->add('dbstructureLatex', '\Ppci\Controllers\Miscellaneous::structureLatex');
$routes->add('dbstructureSchema', '\Ppci\Controllers\Miscellaneous::structureSchema');
$routes->add('lexique', 'Lexical::index');
$routes->add('lexical', 'Lexical::index');
$routes->add('lexicalGet', 'Lexical::getAjax');
$routes->add('eventTypeList', 'EventType::list');
$routes->add('eventTypeChange', 'EventType::change');
$routes->post('eventTypeWrite', 'EventType::write');
$routes->post('eventTypeDelete', 'EventType::delete');
$routes->add('eventTypeGetAjax', 'EventType::getAjax');
$routes->add('containerFamilyList', 'ContainerFamily::list');
$routes->add('containerFamilyChange', 'ContainerFamily::change');
$routes->post('containerFamilyWrite', 'ContainerFamily::write');
$routes->post('containerFamilyDelete', 'ContainerFamily::delete');
$routes->add('objectStatusList', 'ObjectStatus::list');
$routes->add('objectStatusChange', 'ObjectStatus::change');
$routes->post('objectStatusWrite', 'ObjectStatus::write');
$routes->add('storageConditionList', 'StorageCondition::list');
$routes->add('storageConditionChange', 'StorageCondition::change');
$routes->post('storageConditionWrite', 'StorageCondition::write');
$routes->post('storageConditionDelete', 'StorageCondition::delete');
$routes->add('containerTypeList', 'ContainerType::list');
$routes->add('containerTypeChange', 'ContainerType::change');
$routes->post('containerTypeWrite', 'ContainerType::write');
$routes->post('containerTypeDelete', 'ContainerType::delete');
$routes->add('containerTypeGetFromFamily', 'ContainerType::getFromFamily');
$routes->add('containerTypeGetListAjax', 'ContainerType::listAjax');
$routes->add('sampleTypeList', 'SampleType::list');
$routes->add('sampleTypeChange', 'SampleType::change');
$routes->post('sampleTypeWrite', 'SampleType::write');
$routes->post('sampleTypeDelete', 'SampleType::delete');
$routes->add('sampleTypeMetadata', 'SampleType::metadata');
$routes->add('sampleTypeMetadataSearchable', 'SampleType::metadataSearchable');
$routes->add('sampleTypeGenerator', 'SampleType::generator');
$routes->add('sampleTypeGetListAjax', 'SampleType::getListAjax');
$routes->add('movementReasonList', 'MovementReason::list');
$routes->add('movementReasonChange', 'MovementReason::change');
$routes->post('movementReasonWrite', 'MovementReason::write');
$routes->post('movementReasonDelete', 'MovementReason::delete');
$routes->add('referentList', 'Referent::list');
$routes->add('referentChange', 'Referent::change');
$routes->post('referentWrite', 'Referent::write');
$routes->post('referentDelete', 'Referent::delete');
$routes->add('referentGetFromName', 'Referent::getFromName');
$routes->add('referentGetFromId', 'Referent::getFromId');
$routes->add('referentCopy', 'Referent::copy');
$routes->add('containerList', 'Container::list');
$routes->add('containerDisplay', 'Container::display');
$routes->add('containerChange', 'Container::change');
$routes->post('containerWrite', 'Container::write');
$routes->post('containerDelete', 'Container::delete');
$routes->add('containerGetChildren', 'Container::getChildren');
$routes->add('containerGetFromType', 'Container::getFromType');
$routes->add('containerGetFromUid', 'Container::getFromUid');
$routes->add('containerGetOccupation', 'Container::getOccupationAjax');
$routes->add('containerImportStage1', 'Container::importStage1');
$routes->add('containerImportStage2', 'Container::importStage2');
$routes->add('containerImportStage3', 'Container::importStage3');
$routes->add('containerIsSlotFull', 'Container::isSlotFull');
$routes->add('containersLending', 'Container::lendingMulti');
$routes->add('containersExit', 'Container::exitMulti');
$routes->add('containersDelete', 'Container::deleteMulti');
$routes->add('containersSetStatus', 'Container::setStatus');
$routes->add('containersEntry', 'Container::entryMulti');
$routes->add('containersSetTrashed', 'ObjectController::setTrashed/container');
$routes->add('containersSetReferent', 'Container::referentMulti');
$routes->add('containersSetCollection', 'Container::setCollection');
$routes->add('containerVerifyCyclic', 'Container::verifyCyclic');
$routes->add('containerVerifyCyclicExec', 'Container::verifyCyclicExec');
$routes->add('containereventChange', 'Event::change');
$routes->add('containereventDisplay', 'Event::display');
$routes->post('containereventWrite', 'Event::write/container');
$routes->post('containereventDelete', 'Event::delete/container');
$routes->add('sampleeventChange', 'Event::change');
$routes->add('sampleeventDisplay', 'Event::display');
$routes->post('sampleeventWrite', 'Event::write/sample');
$routes->post('sampleeventDelete', 'Event::delete/sample');
$routes->add('eventSearch', 'Event::search');
$routes->add('eventsDelete', 'Event::deleteList');
$routes->add('eventsChange', 'Event::changeList');
$routes->post('eventSearcheventWrite', 'Event::write/eventSearch');
$routes->post('eventSearcheventDelete', 'Event::delete/eventSearch');
$routes->add('eventSearchDisplay', 'Event::search');
$routes->add('containereventDuplicate', 'Event::duplicate/containerDisplay');
$routes->add('sampleeventDuplicate', 'Event::duplicate/sampleDisplay');
$routes->post('eventsDuplicate', 'Event::duplicate/eventSearch');
$routes->add('movementcontainerInput', 'Movement::input');
$routes->add('movementcontainerOutput', 'Movement::output');
$routes->post('movementcontainerWrite', 'Movement::write/container');
$routes->add('movementInput', 'Movement::input');
$routes->add('movementsampleInput', 'Movement::input');
$routes->add('movementsampleOutput', 'Movement::output');
$routes->post('movementsampleWrite', 'Movement::write/sample');
$routes->add('collectionList', 'Collection::list');
$routes->add('collectionChange', 'Collection::change');
$routes->post('collectionWrite', 'Collection::write');
$routes->post('collectionDelete', 'Collection::delete');
$routes->add('collectionGet', 'Collection::getAjax');
$routes->cli('collectionsGenerateMail', 'CollectionsGenerateMail::index');
$routes->add('regulationList', 'Regulation::list');
$routes->add('regulationChange', 'Regulation::change');
$routes->post('regulationWrite', 'Regulation::write');
$routes->post('regulationDelete', 'Regulation::delete');
$routes->add('campaignList', 'Campaign::list');
$routes->add('campaignChange', 'Campaign::change');
$routes->add('campaignDisplay', 'Campaign::display');
$routes->post('campaignWrite', 'Campaign::write');
$routes->post('campaignDelete', 'Campaign::delete');
$routes->add('campaignImport', 'Campaign::import');
$routes->add('campaignRegulationChange', 'CampaignRegulation::change');
$routes->post('campaignRegulationWrite', 'CampaignRegulation::write');
$routes->post('campaignRegulationDelete', 'CampaignRegulation::delete');
$routes->add('labelList', 'Label::list');
$routes->add('labelChange', 'Label::change');
$routes->post('labelWrite', 'Label::write');
$routes->post('labelWriteStay', 'Label::writeStay');
$routes->post('labelDelete', 'Label::delete');
$routes->add('labelCopy', 'Label::copy');
$routes->add('metadataFormGetDetail', 'SampleType::getDetailFormAjax');
$routes->add('sampleList', 'Sample::list');
$routes->add('sampleSearchAjax', 'Sample::searchAjax');
$routes->add('sampleGetFromIdAjax', 'Sample::getFromId');
$routes->add('sampleDisplay', 'Sample::display');
$routes->add('sampleChange', 'Sample::change');
$routes->post('sampleWrite', 'Sample::write');
$routes->post('sampleDelete', 'Sample::delete');
$routes->add('sampleExport', 'Sample::export');
$routes->add('sampleImportStage1', 'Sample::importStage1');
$routes->add('sampleImportStage2', 'Sample::importStage2');
$routes->add('sampleImportStage3', 'Import::importExterneExec');
$routes->add('switch', 'Switch::index');
$routes->add('samplesDelete', 'Sample::deleteMulti');
$routes->add('samplesDeleteWithChildren', 'Sample::deleteMultiWithChildren');
$routes->add('samplesAssignReferent', 'Sample::referentAssignMulti');
$routes->add('samplesCreateEvent', 'Sample::eventAssignMulti');
$routes->add('samplesLending', 'Sample::lendingMulti');
$routes->add('sampleDetail', 'SampleWs::detail');
$routes->add('samplesSetTrashed', 'ObjectController::setTrashed/sample');
$routes->add('samplesExit', 'Sample::exitMulti');
$routes->add('samplesEntry', 'Sample::entryMulti');
$routes->add('samplesSetCountry', 'Sample::setCountry');
$routes->add('samplesSetCollection', 'Sample::setCollection');
$routes->add('samplesSetCampaign', 'Sample::setCampaign');
$routes->add('samplesSetStatus', 'Sample::setStatus');
$routes->add('samplesSetParent', 'Sample::setParent');
$routes->add('samplesCreateComposite', 'Sample::createComposite');
$routes->add('sampleGetChildren', 'Sample::getChildren');
$routes->add('movementList', 'Movement::list');
$routes->add('fastInputChange', 'Movement::fastInputChange');
$routes->add('fastInputWrite', 'Movement::fastInputWrite');
$routes->add('fastOutputChange', 'Movement::fastOutputChange');
$routes->add('fastOutputWrite', 'Movement::fastOutputWrite');
$routes->add('objectGetLastEntry', 'Movement::getLastEntry');
$routes->add('smallMovementChange', 'Movement::smallMovementChange');
$routes->add('smallMovementWrite', 'Movement::smallMovementWrite');
$routes->add('smallMovementWriteAjax', 'Movement::smallMovementWriteAjax');
$routes->add('objectGetDetail', 'ObjectController::getDetailAjax');
$routes->add('containerPrintLabel', 'ObjectController::printLabel/container');
$routes->add('containerExportCSV', 'ObjectController::exportCSV/container');
$routes->add('containerExportGlobal', 'Container::exportGlobal');
$routes->add('containerPrintDirect', 'ObjectController::printLabelDirect/container');
$routes->add('samplePrintLabel', 'ObjectController::printLabel/sample');
$routes->add('sampleExportCSV', 'ObjectController::exportCSV/sample');
$routes->add('samplePrintDirect', 'ObjectController::printLabelDirect/sample');
$routes->add('importChange', 'Import::change');
$routes->add('importControl', 'Import::control');
$routes->add('importImport', 'Import::import');
$routes->add('containerbookingChange', 'Booking::change');
$routes->post('containerbookingWrite', 'Booking::write/container');
$routes->post('containerbookingDelete', 'Booking::delete/container');
$routes->add('samplebookingChange', 'Booking::change');
$routes->post('samplebookingWrite', 'Booking::write/sample');
$routes->post('samplebookingDelete', 'Booking::delete/sample');
$routes->add('bookingVerifyInterval', 'Booking::verifyInterval');
$routes->add('protocolList', 'Protocol::list');
$routes->add('protocolChange', 'Protocol::change');
$routes->post('protocolWrite', 'Protocol::write');
$routes->post('protocolDelete', 'Protocol::delete');
$routes->add('protocolFile', 'Protocol::file');
$routes->add('operationList', 'Operation::list');
$routes->add('operationChange', 'Operation::change');
$routes->add('operationCopy', 'Operation::copy');
$routes->post('operationWrite', 'Operation::write');
$routes->post('operationDelete', 'Operation::delete');
$routes->add('multipleTypeList', 'MultipleType::list');
$routes->add('multipleTypeChange', 'MultipleType::change');
$routes->post('multipleTypeWrite', 'MultipleType::write');
$routes->post('multipleTypeDelete', 'MultipleType::delete');
$routes->add('samplingPlaceList', 'SamplingPlace::list');
$routes->add('samplingPlaceChange', 'SamplingPlace::change');
$routes->post('samplingPlaceWrite', 'SamplingPlace::write');
$routes->post('samplingPlaceDelete', 'SamplingPlace::delete');
$routes->add('samplingPlaceImport', 'SamplingPlace::import');
$routes->add('samplingPlaceGetFromCollection', 'SamplingPlace::getFromCollection');
$routes->add('samplingPlaceGetCoordinate', 'SamplingPlace::getCoordinate');
$routes->add('countryList', 'Country::list');
$routes->add('subsampleChange', 'Subsample::change');
$routes->post('subsampleWrite', 'Subsample::write');
$routes->post('subsampleDelete', 'Subsample::delete');
$routes->post('containerdocumentWrite', 'Document::write/container');
$routes->add('containerdocumentDelete', 'Document::delete/container');
$routes->post('sampledocumentWrite', 'Document::write/sample');
$routes->add('sampledocumentDelete', 'Document::delete/sample');
$routes->post('samplesDocument', 'Document::write/samples');
$routes->post('campaigndocumentWrite', 'Document::write/campaign');
$routes->add('campaigndocumentDelete', 'Document::delete/campaign');
$routes->post('sampleeventdocumentWrite', 'Document::write/sampleevent');
$routes->add('sampleeventdocumentDelete', 'Document::delete/sampleevent');
$routes->post('containereventdocumentWrite', 'Document::write/containerevent');
$routes->add('containereventdocumentDelete', 'Document::delete/containerevent');
$routes->add('documentGet', 'Document::get');
$routes->add('apiv1documentGet','DocumentWs::getDocument');
$routes->add('documentGetSW', 'DocumentWs::getDocument');
//$routes->add('documentGetSWerror', 'DocumentWs::getSWerror');
$routes->add('documentExternalGetList', 'Document::externalGetList');
$routes->post('documentExternalAdd', 'Document::externalAdd');
$routes->add('documentGetExternal', 'Document::getExternal');
$routes->add('identifierTypeList', 'IdentifierType::list');
$routes->add('identifierTypeChange', 'IdentifierType::change');
$routes->post('identifierTypeWrite', 'IdentifierType::write');
$routes->post('identifierTypeDelete', 'IdentifierType::delete');
$routes->add('containerobjectIdentifierChange', 'ObjectIdentifier::change/container');
$routes->post('containerobjectIdentifierWrite', 'ObjectIdentifier::write/container');
$routes->post('containerobjectIdentifierDelete', 'ObjectIdentifier::delete/container');
$routes->add('sampleobjectIdentifierChange', 'ObjectIdentifier::change/sample');
$routes->post('sampleobjectIdentifierWrite', 'ObjectIdentifier::write/sample');
$routes->post('sampleobjectIdentifierDelete', 'ObjectIdentifier::delete/sample');
$routes->add('movementBatchOpen', 'Movement::batchOpen');
$routes->add('movementBatchRead', 'Movement::batchRead');
$routes->add('movementBatchWrite', 'Movement::batchWrite');
$routes->add('printerList', 'Printer::list');
$routes->add('printerChange', 'Printer::change');
$routes->post('printerWrite', 'Printer::write');
$routes->post('printerDelete', 'Printer::delete');
$routes->add('metadataList', 'Metadata::list');
$routes->add('metadataDisplay', 'Metadata::display');
$routes->add('metadataChange', 'Metadata::change');
$routes->post('metadataWrite', 'Metadata::write');
$routes->post('metadataDelete', 'Metadata::delete');
$routes->add('metadataCopy', 'Metadata::copy');
$routes->add('metadataGetschema', 'Metadata::getSchema');
$routes->add('metadataExport', 'Metadata::export');
$routes->add('metadataImport', 'Metadata::import');
$routes->add('metadataFieldChange','Metadata::fieldChange');
$routes->post('metadataFieldWrite', 'Metadata::fieldWrite');
$routes->post('metadataNameWrite', 'Metadata::write');
$routes->add("metadataFieldDelete", "Metadata::fieldDelete");
$routes->add("metadataFieldMove", "Metadata::fieldMove");
$routes->add('borrowerList', 'Borrower::list');
$routes->add('borrowerDisplay', 'Borrower::display');
$routes->add('borrowerChange', 'Borrower::change');
$routes->post('borrowerWrite', 'Borrower::write');
$routes->post('borrowerDelete', 'Borrower::delete');
$routes->add('sampleborrowingChange', 'Borrowing::change');
$routes->post('sampleborrowingWrite', 'Borrowing::write/sample');
$routes->post('sampleborrowingDelete', 'Borrowing::delete/sample');
$routes->add('containerborrowingChange', 'Borrowing::change');
$routes->post('containerborrowingWrite', 'Borrowing::write/container');
$routes->post('containerborrowingDelete', 'Borrowing::delete/container');
$routes->add('exportModelList', 'ExportModel::list');
$routes->add('exportModelDisplay', 'ExportModel::display');
$routes->add('exportModelChange', 'ExportModel::change');
$routes->post('exportModelWrite', 'ExportModel::write');
$routes->post('exportModelDelete', 'ExportModel::delete');
$routes->add('exportModelDuplicate', 'ExportModel::duplicate');
$routes->add('exportModelExec', 'ExportModel::exportExec');
$routes->add('exportModelImportExec', 'ExportModel::importExec');
$routes->add('mimeTypeList', 'MimeType::list');
$routes->add('mimeTypeChange', 'MimeType::change');
$routes->post('mimeTypeWrite', 'MimeType::write');
$routes->post('mimeTypeDelete', 'MimeType::delete');
$routes->add('licenseList', 'License::list');
$routes->add('licenseChange', 'License::change');
$routes->post('licenseWrite', 'License::write');
$routes->post('licenseDelete', 'License::delete');
$routes->add('datasetTypeList', 'DatasetType::list');
$routes->add('datasetTypeChange', 'DatasetType::change');
$routes->post('datasetTypeWrite', 'DatasetType::write');
$routes->post('datasetTypeDelete', 'DatasetType::delete');
$routes->add('datasetTemplateList', 'DatasetTemplate::list');
$routes->add('datasetTemplateDisplay', 'DatasetTemplate::display');
$routes->add('datasetTemplateChange', 'DatasetTemplate::change');
$routes->post('datasetTemplateWrite', 'DatasetTemplate::write');
$routes->post('datasetTemplateDelete', 'DatasetTemplate::delete');
$routes->add('datasetTemplateDuplicate', 'DatasetTemplate::duplicate');
$routes->add('datasetColumnChange', 'DatasetColumn::change');
$routes->post('datasetColumnWrite', 'DatasetColumn::write');
$routes->post('datasetColumnDelete', 'DatasetColumn::delete');
$routes->add('translatorList', 'Translator::list');
$routes->add('translatorChange', 'Translator::change');
$routes->post('translatorWrite', 'Translator::write');
$routes->post('translatorDelete', 'Translator::delete');
$routes->add('exportTemplateList', 'ExportTemplate::list');
$routes->add('exportTemplateChange', 'ExportTemplate::change');
$routes->post('exportTemplateWrite', 'ExportTemplate::write');
$routes->post('exportTemplateDelete', 'ExportTemplate::delete');
$routes->add('exportTemplateImport', 'ExportTemplate::import');
$routes->add('lotList', 'Lot::list');
$routes->add('lotCreate', 'Lot::create');
$routes->add('lotDisplay', 'Lot::display');
$routes->post('lotWrite', 'Lot::write');
$routes->post('lotDelete', 'Lot::delete');
$routes->add('lotDeleteSamples', 'Lot::deleteSamples');
$routes->add('exportChange', 'Export::change');
$routes->post('exportWrite', 'Export::write');
$routes->post('exportDelete', 'Export::delete');
$routes->add('exportExec', 'Export::exec');
$routes->add('requestList', 'Request::list');
$routes->add('requestChange', 'Request::change');
$routes->post('requestWrite', 'Request::write');
$routes->post('requestDelete', 'Request::delete');
$routes->add('requestExec', 'Request::exec');
$routes->add('requestExecList', 'Request::execList');
$routes->post('requestWriteExec', 'Request::writeExec');
$routes->add('requestCopy', 'Request::copy');
$routes->post('apiv1sampleWrite', 'SampleWs::write');
$routes->post('apiv1sampleDelete', 'SampleWs::supprimer');
$routes->post('apiv1movementWrite', 'MovementWs::write');
$routes->add('apiv1sampleDisplay', 'SampleWs::detail');
$routes->add('apiv1sampleUids', 'SampleWs::getListUIDS');
$routes->add('apiv1sampleList', 'SampleWs::getList');
$routes->add('metadatafield_fr', '\Ppci\Controllers\Utils::markdown/documentation/metadata_field/metadatafield_fr.md');
$routes->add('metadatafield_en', '\Ppci\Controllers\Utils::markdown/documentation/metadata_field/metadatafield_en.md');
$routes->add('lendingsample_fr', '\Ppci\Controllers\Utils::markdown/documentation/lending_sample/lendingsample_fr.md');
$routes->add('lendingsample_en', '\Ppci\Controllers\Utils::markdown/documentation/lending_sample/lendingsample_en.md');
$routes->add('sampledisplay_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleDisplayFr.md');
$routes->add('sampledisplay_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleDisplayEn.md');
$routes->add('documentget_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/documentGetFr.md');
$routes->add('documentget_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/documentGetEn.md');
$routes->add('swidentification_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/identificationFr.md');
$routes->add('swidentification_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/identificationEn.md');
$routes->add('swapi_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/apiCallFr.md');
$routes->add('swapi_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/apiCallEn.md');
$routes->add('sampleWrite_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleWriteFr.md');
$routes->add('sampleDelete_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleDeleteFr.md');
$routes->add('sampleDelete_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleDeleteEn.md');
$routes->add('sampleWrite_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleWriteEn.md');
$routes->add('swmovementWrite_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/movementAddFr.md');
$routes->add('swmovementWrite_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/movementAddEn.md');
$routes->add('swsampleList_fr', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleListFr.md');
$routes->add('swsampleList_en', '\Ppci\Controllers\Utils::markdown/documentation/webservices/sampleListEn.md');
$routes->add('exportbatch_fr', '\Ppci\Controllers\Utils::markdown/documentation/import_export/batch_export_fr.md');
$routes->add('exportbatch_en', '\Ppci\Controllers\Utils::markdown/documentation/import_export/batch_export_en.md');
$routes->add('document_external_fr', '\Ppci\Controllers\Utils::markdown/documentation/document_external/document_external_fr.md');
$routes->add('document_external_en', '\Ppci\Controllers\Utils::markdown/documentation/document_external/document_external_en.md');
$routes->add('rights_general_fr', '\Ppci\Controllers\Utils::markdown/documentation/rights/rights_general_fr.md');
$routes->add('rights_general_en', '\Ppci\Controllers\Utils::markdown/documentation/rights/rights_general_en.md');
$routes->add('consult_sees_all_fr', '\Ppci\Controllers\Utils::markdown/documentation/consult_sees_all/consult_sees_all_fr.md');
$routes->add('consult_sees_all_en', '\Ppci\Controllers\Utils::markdown/documentation/consult_sees_all/consult_sees_all_en.md');
$routes->add('automaticsendmail_fr', '\Ppci\Controllers\Utils::markdown/documentation/collection/automaticsendmail_fr.md');
$routes->add('automaticsendmail_en', '\Ppci\Controllers\Utils::markdown/documentation/collection/automaticsendmail_en.md');
$routes->add('composite_fr', '\Ppci\Controllers\Utils::markdown/documentation/sample/composite_fr.md');
$routes->add('composite_en', '\Ppci\Controllers\Utils::markdown/documentation/sample/composite_en.md');
$routes->add('mailSmarty', 'MailSmarty::index');
$routes->add('objets', '\Ppci\Controllers\Utils::submenu/objets');
$routes->add('movement', '\Ppci\Controllers\Utils::submenu/movement');
$routes->add('importExport', '\Ppci\Controllers\Utils::submenu/importExport');
$routes->add('parametre', '\Ppci\Controllers\Utils::submenu/parametre');
$routes->add('collections', '\Ppci\Controllers\Utils::submenu/collections');
$routes->add('protocoles', '\Ppci\Controllers\Utils::submenu/protocoles');
$routes->add('campaigns', '\Ppci\Controllers\Utils::submenu/campaigns');
$routes->add('containerType', '\Ppci\Controllers\Utils::submenu/containerType');
$routes->add('dbstructure', '\Ppci\Controllers\Utils::submenu/dbstructure');
$routes->add('administration', '\Ppci\Controllers\Utils::submenu/administration');
$routes->add('documentation_fr', '\Ppci\Controllers\Utils::submenu/documentation_fr');
$routes->add('echantillon_fr', '\Ppci\Controllers\Utils::submenu/echantillon_fr');
$routes->add('importExport_fr', '\Ppci\Controllers\Utils::submenu/importExport_fr');
$routes->add('api_fr', '\Ppci\Controllers\Utils::submenu/api_fr');
$routes->add('administration_fr', '\Ppci\Controllers\Utils::submenu/administration_fr');
$routes->add('documentation_en', '\Ppci\Controllers\Utils::submenu/documentation_en');
$routes->add('echantillon_en', '\Ppci\Controllers\Utils::submenu/echantillon_en');
$routes->add('importExport_en', '\Ppci\Controllers\Utils::submenu/importExport_en');
$routes->add('api_en', '\Ppci\Controllers\Utils::submenu/api_en');
$routes->add('administration_en', '\Ppci\Controllers\Utils::submenu/administration_en');