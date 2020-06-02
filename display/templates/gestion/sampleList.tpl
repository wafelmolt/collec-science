<script>
$(document).ready(function() { 
	/* Management of tabs */
		var activeTabResult = "";
        try {
        activeTabResult = Cookies.get("sampleResultTab");
        } catch (Exception) {
        }
		try {
			if (activeTabResult.length > 0) {
				$("#"+activeTabResult).tab('show');
			}
		} catch (Exception) { }
		$('.nav-tabs > li > a').hover(function() {
			//$(this).tab('show');
 		});
		 $('.tabResult').on('shown.bs.tab', function () {
			Cookies.set("sampleResultTab", $(this).attr("id"), { secure: true});
		});
});
</script>>


<h3>{t}Échantillons{/t}</h3>

<div class="row">
	<div class="col-lg-12">
	{include file='gestion/sampleSearchTab.tpl'}
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		{if $droits.gestion == 1}
			<a href="index.php?module=sampleChange&uid=0"><img src="display/images/new.png" height="25">{t}Nouvel échantillon{/t}</a>
		{/if}
		{if $isSearch > 0}
			<ul class="nav nav-tabs  " id="tabResult" role="tablist" >
				<li class="nav-item active">
						<a class="nav-link tabResult" id="tablist" data-toggle="tab"  role="tab" aria-controls="navlist" aria-selected="true" href="#navlist">
								{t}Liste{/t}
						</a>
				</li>
				<li class="nav-item">
						<a class="nav-link tabResult" id="tabmap" href="#navmap"  data-toggle="tab" role="tab" aria-controls="navmap" aria-selected="false">
								{t}Carte{/t}
						</a>
				</li>
			</ul>
			<div class="tab-content tab-content-white col-lg-12 form-horizontal" id="tabresult-content">
				<div class="tab-pane active in" id="navlist" role="tabpanel" aria-labelledby="tablist">
					{include file='gestion/sampleListDetail.tpl'}
				</div>
				<div class="tab-pane fade" id="navmap" role="tabpanel" aria-labelledby="tabmap">
					{include file="gestion/sampleListMap.tpl"}
				</div>
			</div>
		{/if}
	</div>
</div>