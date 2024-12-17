<?php

namespace App\Config;

use Ppci\Config\RightsPpci;

/**
 * List of all rights required by modules
 */
class Rights extends RightsPpci
{
    protected array $rights = [
        "dbstructureHtml" => ["collection"],
        "dbstructureGacl" => ["admin"],
        "dbstructureLatex" => ["collection"],
        "dbstructureSchema" => ["collection"],
        "parametre" => ["consult"],
        "eventTypeList" => ["consult"],
        "eventTypeChange" => ["param"],
        "eventTypeWrite" => ["param"],
        "eventTypeDelete" => ["param"],
        "eventTypeGetAjax" => ["consult"],
        "containerFamilyList" => ["consult"],
        "containerFamilyChange" => ["param", "collection"],
        "containerFamilyWrite" => ["param", "collection"],
        "containerFamilyDelete" => ["param", "collection"],
        "objectStatusList" => ["consult"],
        "objectStatusChange" => ["param"],
        "objectStatusWrite" => ["param"],
        "storageConditionList" => ["consult"],
        "storageConditionChange" => ["param", "collection"],
        "storageConditionWrite" => ["param", "collection"],
        "storageConditionDelete" => ["param", "collection"],
        "containerTypeList" => ["consult"],
        "containerTypeChange" => ["param", "collection"],
        "containerTypeWrite" => ["param", "collection"],
        "containerTypeDelete" => ["param", "collection"],
        "containerTypeGetFromFamily" => ["consult"],
        "containerTypeGetListAjax" => ["consult"],
        "sampleTypeList" => ["consult"],
        "sampleTypeChange" => ["param", "collection"],
        "sampleTypeWrite" => ["param", "collection"],
        "sampleTypeDelete" => ["param", "collection"],
        "sampleTypeMetadata" => ["consult"],
        "sampleTypeMetadataSearchable" => ["consult"],
        "sampleTypeGenerator" => ["manage"],
        "sampleTypeGetListAjax" => ["consult"],
        "movementReasonList" => ["consult"],
        "movementReasonChange" => ["param", "collection"],
        "movementReasonWrite" => ["param", "collection"],
        "movementReasonDelete" => ["param", "collection"],
        "dbparamList" => ["admin"],
        "dbparamWriteGlobal" => ["admin"],
        "referentList" => ["consult"],
        "referentChange" => ["param", "collection"],
        "referentWrite" => ["param", "collection"],
        "referentDelete" => ["param", "collection"],
        "referentGetFromName" => ["consult"],
        "referentGetFromId" => ["consult"],
        "referentCopy" => ["collection", "param"],
        "manage" => ["consult"],
        "containerList" => ["consult"],
        "containerDisplay" => ["consult"],
        "containerChange" => ["manage"],
        "containerWrite" => ["manage"],
        "containerDelete" => ["manage"],
        "containerGetChildren" => ["consult"],
        "containerGetFromType" => ["consult"],
        "containerGetFromUid" => ["consult"],
        "containerGetOccupation" => ["consult"],
        "containerImportStage1" => ["import", "collection"],
        "containerImportStage2" => ["import", "collection"],
        "containerImportStage3" => ["import", "collection"],
        "containerIsSlotFull" => ["manage"],
        "containersLending" => ["collection"],
        "containersExit" => ["collection"],
        "containersDelete" => ["collection"],
        "containersEntry" => ["collection"],
        "containersSetTrashed" => ["collection"],
        "containersSetReferent" => ["collection"],
        "containersSetCollection" => ["collection"],
        "containerVerifyCyclic" => ["param"],
        "containerVerifyCyclicExec" => ["param"],
        "containereventChange" => ["manage"],
        "containereventDisplay" => ["manage"],
        "containereventWrite" => ["manage"],
        "containereventDelete" => ["manage"],
        "sampleeventChange" => ["manage"],
        "sampleeventDisplay" => ["manage"],
        "sampleeventWrite" => ["manage"],
        "sampleeventDelete" => ["manage"],
        "eventSearch" => ["manage"],
        "eventSearchDisplay" => ["manage"],
        "eventsDelete" => ["import"],
        "eventsChange" => ["import"],
        "eventSearcheventWrite" => ["manage"],
        "eventSearcheventDelete" => ["manage"],
        "movementcontainerInput" => ["manage"],
        "movementcontainerOutput" => ["manage"],
        "movementcontainerWrite" => ["manage"],
        "movementcontainerDelete" => ["manage"],
        "movementInput" => ["manage"],
        "movementsampleInput" => ["manage"],
        "movementsampleOutput" => ["manage"],
        "movementsampleWrite" => ["manage"],
        "movementsampleDelete" => ["manage"],
        "collectionList" => ["consult"],
        "collectionChange" => ["param"],
        "collectionWrite" => ["param"],
        "collectionDelete" => ["param"],
        "collectionGet" => ["consult"],
        "regulationList" => ["consult"],
        "regulationChange" => ["param"],
        "regulationWrite" => ["param"],
        "regulationDelete" => ["param"],
        "campaignList" => ["consult"],
        "campaignChange" => ["collection"],
        "campaignDisplay" => ["consult"],
        "campaignWrite" => ["collection"],
        "campaignDelete" => ["collection"],
        "campaignImport" => ["collection"],
        "campaignRegulationChange" => ["collection"],
        "campaignRegulationWrite" => ["collection"],
        "campaignRegulationDelete" => ["collection"],
        "labelList" => ["consult"],
        "labelChange" => ["collection"],
        "labelWrite" => ["collection"],
        "labelWriteStay" => ["collection"],
        "labelDelete" => ["collection"],
        "labelCopy" => ["collection"],
        "metadataFormGetDetail" => ["consult"],
        "sampleList" => ["consult"],
        "sampleSearchAjax" => ["manage"],
        "sampleGetFromIdAjax" => ["manage"],
        "sampleDisplay" => ["consult"],
        "sampleChange" => ["manage"],
        "sampleWrite" => ["manage"],
        "sampleDelete" => ["manage"],
        "sampleExport" => ["manage"],
        "sampleImportStage1" => ["import", "collection"],
        "sampleImportStage2" => ["import", "collection"],
        "sampleImportStage3" => ["import", "collection"],
        "samplesDelete" => ["collection"],
        "samplesDeleteWithChildren" => ["collection"],
        "samplesAssignReferent" => ["collection"],
        "samplesCreateEvent" => ["collection"],
        "samplesLending" => ["collection"],
        "samplesSetTrashed" => ["collection"],
        "samplesExit" => ["collection"],
        "samplesEntry" => ["collection"],
        "samplesSetCountry" => ["collection"],
        "samplesSetCollection" => ["collection"],
        "samplesSetCampaign" => ["collection"],
        "samplesSetStatus" => ["collection"],
        "samplesSetParent" => ["collection"],
        "sampleGetChildren" => ["consult"],
        "movementList" => ["collection"],
        "fastInputChange" => ["manage"],
        "fastInputWrite" => ["manage"],
        "fastOutputChange" => ["manage"],
        "fastOutputWrite" => ["manage"],
        "objectGetLastEntry" => ["manage"],
        "smallMovementChange" => ["manage"],
        "smallMovementWrite" => ["manage"],
        "smallMovementWriteAjax" => ["manage"],
        "objectGetDetail" => ["consult"],
        "containerPrintLabel" => ["manage"],
        "containerExportCSV" => ["manage"],
        "containerExportGlobal" => ["manage"],
        "containerPrintDirect" => ["manage"],
        "samplePrintLabel" => ["manage"],
        "sampleExportCSV" => ["manage"],
        "samplePrintDirect" => ["manage"],
        "importChange" => ["import", "collection"],
        "importControl" => ["import", "collection"],
        "importImport" => ["import", "collection"],
        "containerbookingChange" => ["manage"],
        "containerbookingWrite" => ["manage"],
        "containerbookingDelete" => ["manage"],
        "samplebookingChange" => ["manage"],
        "samplebookingWrite" => ["manage"],
        "samplebookingDelete" => ["manage"],
        "bookingVerifyInterval" => ["manage"],
        "protocolList" => ["consult"],
        "protocolChange" => ["collection"],
        "protocolWrite" => ["collection"],
        "protocolDelete" => ["collection"],
        "protocolFile" => ["consult"],
        "operationList" => ["consult"],
        "operationChange" => ["collection"],
        "operationCopy" => ["collection"],
        "operationWrite" => ["collection"],
        "operationDelete" => ["collection"],
        "multipleTypeList" => ["consult"],
        "multipleTypeChange" => ["param"],
        "multipleTypeWrite" => ["param"],
        "multipleTypeDelete" => ["param"],
        "samplingPlaceList" => ["consult"],
        "samplingPlaceChange" => ["collection"],
        "samplingPlaceWrite" => ["collection"],
        "samplingPlaceDelete" => ["collection"],
        "samplingPlaceImport" => ["collection"],
        "samplingPlaceGetFromCollection" => ["manage"],
        "samplingPlaceGetCoordinate" => ["manage"],
        "countryList" => ["consult"],
        "subsampleChange" => ["manage"],
        "subsampleWrite" => ["manage"],
        "subsampleDelete" => ["manage"],
        "samplesCreateComposite" => ["collection"],
        "containerdocumentWrite" => ["manage"],
        "containerdocumentDelete" => ["manage"],
        "sampledocumentWrite" => ["manage"],
        "sampledocumentDelete" => ["manage"],
        "samplesDocument" => ["collection"],
        "campaigndocumentWrite" => ["manage"],
        "campaigndocumentDelete" => ["manage"],
        "sampleeventdocumentWrite" => ["manage"],
        "sampleeventdocumentDelete" => ["manage"],
        "containereventdocumentWrite" => ["manage"],
        "containereventdocumentDelete" => ["manage"],
        "documentGet" => ["consult"],
        "documentExternalGetList" => ["manage"],
        "documentExternalAdd" => ["manage"],
        "documentGetExternal" => ["manage"],
        "identifierTypeList" => ["consult"],
        "identifierTypeChange" => ["param"],
        "identifierTypeWrite" => ["param"],
        "identifierTypeDelete" => ["param"],
        "containerobjectIdentifierChange" => ["manage"],
        "containerobjectIdentifierWrite" => ["manage"],
        "containerobjectIdentifierDelete" => ["manage"],
        "sampleobjectIdentifierChange" => ["manage"],
        "sampleobjectIdentifierWrite" => ["manage"],
        "sampleobjectIdentifierDelete" => ["manage"],
        "movementBatchOpen" => ["manage"],
        "movementBatchRead" => ["manage"],
        "movementBatchWrite" => ["manage"],
        "printerList" => ["consult"],
        "printerChange" => ["param"],
        "printerWrite" => ["param"],
        "printerDelete" => ["param"],
        "metadataList" => ["consult"],
        "metadataDisplay" => ["consult"],
        "metadataChange" => ["collection"],
        "metadataWrite" => ["collection"],
        "metadataDelete" => ["collection"],
        "metadataCopy" => ["collection"],
        "metadataGetschema" => ["collection"],
        "metadataExport" => ["consult"],
        "metadataImport" => ["collection"],
        "borrowerList" => ["consult"],
        "borrowerDisplay" => ["consult"],
        "borrowerChange" => ["param"],
        "borrowerWrite" => ["param"],
        "borrowerDelete" => ["param"],
        "sampleborrowingChange" => ["manage"],
        "sampleborrowingWrite" => ["manage"],
        "sampleborrowingDelete" => ["manage"],
        "containerborrowingChange" => ["manage"],
        "containerborrowingWrite" => ["manage"],
        "containerborrowingDelete" => ["manage"],
        "exportModelList" => ["consult"],
        "exportModelDisplay" => ["consult"],
        "exportModelChange" => ["param"],
        "exportModelWrite" => ["param"],
        "exportModelDelete" => ["param"],
        "exportModelDuplicate" => ["param"],
        "exportModelExec" => ["manage"],
        "exportModelImportExec" => ["manage"],
        "mimeTypeList" => ["consult"],
        "mimeTypeChange" => ["param"],
        "mimeTypeWrite" => ["param"],
        "mimeTypeDelete" => ["param"],
        "licenseList" => ["consult"],
        "licenseChange" => ["param"],
        "licenseWrite" => ["param"],
        "licenseDelete" => ["param"],
        "datasetTypeList" => ["collection"],
        "datasetTypeChange" => ["collection"],
        "datasetTypeWrite" => ["collection"],
        "datasetTypeDelete" => ["collection"],
        "datasetTemplateList" => ["collection"],
        "datasetTemplateDisplay" => ["collection"],
        "datasetTemplateChange" => ["collection"],
        "datasetTemplateWrite" => ["collection"],
        "datasetTemplateDelete" => ["collection"],
        "datasetTemplateDuplicate" => ["collection"],
        "datasetColumnChange" => ["collection"],
        "datasetColumnWrite" => ["collection"],
        "datasetColumnDelete" => ["collection"],
        "translatorList" => ["collection"],
        "translatorChange" => ["collection"],
        "translatorWrite" => ["collection"],
        "translatorDelete" => ["collection"],
        "exportTemplateList" => ["collection"],
        "exportTemplateChange" => ["collection"],
        "exportTemplateWrite" => ["collection"],
        "exportTemplateDelete" => ["collection"],
        "exportTemplateImport" => ["collection"],
        "lotList" => ["collection"],
        "lotCreate" => ["collection"],
        "lotDisplay" => ["collection"],
        "lotWrite" => ["collection"],
        "lotDelete" => ["collection"],
        "lotDeleteSamples" => ["collection"],
        "exportChange" => ["collection"],
        "exportWrite" => ["collection"],
        "exportDelete" => ["collection"],
        "exportExec" => ["collection"],
        "requestList" => ["manage"],
        "requestChange" => ["manage"],
        "requestWrite" => ["param"],
        "requestDelete" => ["param"],
        "requestExec" => ["manage"],
        "requestExecList" => ["manage"],
        "requestWriteExec" => ["param"],
        "requestCopy" => ["param"],
        "apiv1sampleWrite" => ["manage"],
        "apiv1sampleDelete" => ["manage"],
        "apiv1movementWrite" => ["manage"],
        "apiv1sampleDisplay" => ["consult"],
        "apiv1sampleUids" => ["consult"],
        "apiv1sampleList" => ["consult"],
        //"apiv1documentGet" => ["consult"],
        //"documentGetSW" => ["consult"],
        "movement" => ["manage"],
        "importExport" => ["import", "collection", "param"],
        "parametre" => ["consult"],
        "collections" => ["consult"],
        "protocoles" => ["consult"],
        "campaigns" => ["consult"],
        "containerType" => ["consult"],
        "dbstructure" => ["consult"],
        "administration" => ["admin"],
    ];
}
