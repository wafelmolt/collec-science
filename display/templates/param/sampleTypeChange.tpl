<h2>Modification d'un type d'échantillon</h2>
<div class="row">
<div class="col-md-6">
<a href="index.php?module=sampleTypeList">{$LANG.appli.1}</a>

<form class="form-horizontal protoform" id="sampleTypeForm" method="post" action="index.php">
<input type="hidden" name="moduleBase" value="sampleType">
<input type="hidden" name="action" value="Write">
<input type="hidden" name="sample_type_id" value="{$data.sample_type_id}">
<div class="form-group">
<label for="sampleTypeName"  class="control-label col-md-4">Nom<span class="red">*</span> :</label>
<div class="col-md-8">
<input id="sampleTypeName" type="text" class="form-control" name="sample_type_name" value="{$data.sample_type_name}" autofocus required></div>
</div>
<div class="form-group">
<label for="metadata_set_id"  class="control-label col-md-4">Jeu de métadonnées : </label>
<div id="is_container"class="col-md-8" >
<select name="metadata_set_id" id="metadata_set_id" >
<option value="" {if $data.metadata_set_id == ""} selected{/if}>
{$LANG.appli.2}
</option>
{section name=lst loop=$metadataSet}
<option value="{$metadataSet[lst].metadata_set_id}" {if $metadataSet[lst].metadata_set_id == $data.metadata_set_id}selected{/if}>
{$metadataSet[lst].metadata_set_name}
</option>
{/section}
</select>
</div>
</div>
<div class="form-group center">
      <button type="submit" class="btn btn-primary button-valid">{$LANG["message"].19}</button>
      {if $data.sample_type_id > 0 }
      <button class="btn btn-danger button-delete">{$LANG["message"].20}</button>
      {/if}
 </div>
</form>
</div>
</div>
<span class="red">*</span><span class="messagebas">{$LANG["message"].36}</span>