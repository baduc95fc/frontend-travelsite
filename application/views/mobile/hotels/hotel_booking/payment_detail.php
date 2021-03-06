	<div class="bpv-total-payment margin-bottom-20">
		<h2><?=lang('payment_detail')?></h2>
		
		<div class="content">
			<?php foreach ($payment_detail['room_types'] as $value):?>
				<div class="p-row clearfix">
					<div class="col-1"><?=$value['nr_room']?> <?=$value['name']?></div>
					<div class="col-2 text-right room-rate-payment" rate="<?=$value['total_rate_origin']?>"><?=bpv_format_currency($value['total_rate_origin'])?></div>
				</div>
			<?php endforeach;?>
			
			<?php foreach ($payment_detail['surcharges'] as $value):?>
				<div class="p-row clearfix">
					<div class="col-1"><?=$value['name']?></div>
					<div class="col-2 text-right surcharge-payment" c-type="<?=$value['charge_type']?>" charge="<?=$value['amount']?>" rate="<?=$value['total_charge']?>"><?=bpv_format_currency($value['total_charge'])?></div>
				</div>
			<?php endforeach;?>
			
			<div class="p-row clearfix" id="p_extrabed_detail" style="display:none;">
				<div class="col-1"><span id="nr_extrabed"></span> <?=lang('hb_col_extra_bed')?>:</div>
				<div class="col-2 text-right" id="total_extrabed"></div>
			</div>
			
			<?php if($payment_detail['total_discount'] > 0):?>
			
				<div class="p-row clearfix">
					<div class="col-1"><b><?=lang('hb_discount')?>:</b></div>
					<div class="col-2 bpv-color-price text-right" id="total_discount" rate="<?=$payment_detail['total_discount']?>">- <?=bpv_format_currency($payment_detail['total_discount'])?></div>
				</div>
			
			<?php endif;?>
			
			<div class="p-row clearfix" id="p_applied_code" style="display:none">
				<div class="col-1"><b><?=lang('discount_code')?> <span id="applied_code"></span>:</b></div>
				<div class="col-2 text-right" id="applied_code_discount"></div>
			</div>
			
			<div class="p-row clearfix total-payment" style="border-bottom:0">
				<div class="col-1 text-right"><?=lang('hb_total_payment')?>:</div>
				<div class="col-2 bpv-color-price text-right" id="total_payment" rate="<?=$payment_detail['total_payment']?>"><?=bpv_format_currency($payment_detail['total_payment'])?></div>
			</div>
			
			<div class="text-right">
				*<?=lang('hb_price_include')?>
			</div>
			
		</div>
		<div class="pro-code">
			
			<p class="text-warning" style="display:none" id="code_invalid">
				<span class="glyphicon glyphicon-warning-sign"></span>
				<?=lang('bpv_pro_code_invalid')?>
			</p>
			
			<p class="text-warning pro_phone_invalid" style="display:none">
                <span class="glyphicon glyphicon-warning-sign"></span>
                <span class="pro_phone_invalid_msg"><?=lang('bpv_pro_phone_invalid')?></span>
    		</p>
			
			<p class="text-success" style="display:none" id="code_ok">
				<span class="glyphicon glyphicon-ok"></span>
				<?=lang('bpv_pro_code_ok')?>
			</p>
				
			<div class="row">
			    <div class="pro_phone_block" style="display: none; margin-bottom: 5px;">
        			<div class="col-xs-4" style="padding-top:10px"><b><?=lang('lbl_phone')?></b></div>
        			<div class="col-xs-8 text-right">
                        <input type="text" class="form-control" id="pro_phone" placeholder="" style="font-weight:normal">
        			</div>
    			</div>
				<div class="col-xs-6" style="padding-top:7px;padding-right:0"><b><?=lang('bpv_pro_code')?>:</b></div>
				<div class="col-xs-6 text-right">
					<input type="text" class="form-control" id="pro_code" placeholder="ABCXYZ..." style="font-weight:normal">
					<input type="hidden" value="<?=$hotel['id']?>" name="pro_hotel" id="pro_hotel">
					<button type="button" class="btn btn-bpv btn-book-now btn-sm margin-top-10" id="pro_use" style="display:none" onclick="use_pro_code(<?=HOTEL?>)" data-loading-text="<?=lang('bpv_pro_code_loading')?>">
						<?=lang('bpv_pro_use')?>
					</button>
				</div>
			</div>
		</div>
	</div>
	
	<?=load_bpv_call_us()?>

<script type="text/javascript">
$(function() {
	init_payment_detail();
});
</script>