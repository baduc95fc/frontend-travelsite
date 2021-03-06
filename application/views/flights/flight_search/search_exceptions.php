<div class="container">
	<div class="bpv-col-left">
		<?=$flight_search_form?>
	</div>
	
	<div class="bpv-col-right">
		<ol class="breadcrumb">
		  <li><a href="<?=site_url()?>"><?=lang('mnu_home')?></a></li>
		  <li><a href="<?=get_url(FLIGHT_HOME_PAGE)?>"><?=lang('mnu_flights')?></a></li>
		  <li class="active"><?=lang_arg('flight_search_bredcum', $search_criteria['From'], $search_criteria['To'])?></li>
		</ol>
		
		<div class="alert alert-warning alert-dismissable">
	      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
	      <span class="glyphicon glyphicon-warning-sign"></span>&nbsp;
	      <strong><?=$exception_message?></strong>
	    </div>
	    
	    <div class="bpv-contact-container">
			<div class="content">
				<form method="post" role="form" action="<?=get_url(CONTACT_US_PAGE)?>">
					<?=$contact_form?>
				</form>
			</div>
		</div>
		
	</div>
</div>