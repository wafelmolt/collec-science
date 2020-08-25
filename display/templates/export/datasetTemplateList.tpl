<h2>{t}Modèles de datasets{/t}</h2>
<div class="row">
  <div class="col-md-6">
  <a href="index.php?module=datasetTemplateChange&dataset_template_id=0">
    <img src="display/images/new.png" height="25">
  {t}Nouveau...{/t}
  </a>
  <table id="datasetTemplateList" class="table table-bordered table-hover datatable " >
    <thead>
      <tr>
        <th class="center">
          <img src="display/images/display.png" height="25" title="{t}Afficher le détail...{/t}">
        </th>
        <th>{t}Nom{/t}</th>
        <th>{t}Type{/t}</th>
        <th>{t}Format d'export{/t}</th>
        <th>{t}Nom du fichier généré{/t}</th>
        <th>{t}Uniquement le document le plus récent ?{/t}</th>
        <th>{t}Séparateur (fichiers CSV){/t}</th>
        <th>{t}Entête XML{/t}</th>
        <th>{t}Nom des nœuds XML{/t}</th>
        <th>{t}Transformation xsl ?{/t}</th>
      </tr>
    </thead>
    <tbody>
      {foreach $data as $row}
      <tr>
        <td>
          <a href="index.php?module=datasetTemplateDisplay&dataset_template_id={$row.dataset_template_id}">
              <img src="display/images/display.png" height="25" title="Afficher le détail...">
          </a>
        </td>
        <td title="{t}Modifier...{/t}">
          <a href="index.php?module=datasetTemplateChange&dataset_template_id={$row.dataset_template_id}">
          {$row.dataset_template_name}
          <img src="display/images/edit.gif" height="15">
          </a>
        </td>
        <td>{$row.dataset_type_name}</td>
        <td>{$row.export_format_name}</td>
        <td>{$row.filename}</td>
        <td class="center">{if $row.only_last_document == 1}{t}oui{/t}{/if}</td>
        <td class="center">{$row.separator}</td>
        <td>{$row.xmlroot}</td>
        <td>{$row.xmlnodename}</td>
        <td class="center">{if strlen($row.xslcontent)>0}{t}oui{/t}{/if}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>
  </div>
</div>