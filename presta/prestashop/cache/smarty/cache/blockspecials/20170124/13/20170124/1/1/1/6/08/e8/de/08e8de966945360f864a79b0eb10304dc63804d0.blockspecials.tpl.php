<?php /*%%SmartyHeaderCode:286665887ae292e11a3-21810756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e8de966945360f864a79b0eb10304dc63804d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\prestashop\\themes\\default-bootstrap\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1485206728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286665887ae292e11a3-21810756',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5887ae293c3ad1_66782717',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5887ae293c3ad1_66782717')) {function content_5887ae293c3ad1_66782717($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost/prestashop/prestashop/es/bajamos-precios" title="Promociones especiales">
            Promociones especiales
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost/prestashop/prestashop/es/vestidos-verano/5-vestido-verano-estampado.html">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost/prestashop/prestashop/12-small_default/vestido-verano-estampado.jpg" 
                    alt="" 
                    title="Vestido de verano estampado" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost/prestashop/prestashop/es/vestidos-verano/5-vestido-verano-estampado.html" title="Vestido de verano estampado">
                            Vestido de verano estampado
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Vestido largo estampado con tirantes...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    35,07 €                            </span>
                                                                                                                                 <span class="price-percent-reduction">-5%</span>
                                                                                         <span class="old-price">
                                                                    36,91 €                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost/prestashop/prestashop/es/bajamos-precios" 
            title="Todas los promociones especiales">
                <span>Todas los promociones especiales<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
