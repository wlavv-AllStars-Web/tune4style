{* AngarThemes *}

{if isset($product.reference_to_display) && $product.reference_to_display neq ''}
	<div class="product-reference_top product-reference">
	  <label class="label">{l s='Reference' d='Shop.Theme.Catalog'} </label>
	  <span>{$product.reference_to_display}</span>
	</div>
{/if}