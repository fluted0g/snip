{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 {block name='product_miniature_item'}
 <article class="product-miniature js-product-miniature grid-item" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">

    

    {block name='product_thumbnail'}
    <a href="{$product.url}" class="thumbnail product-thumbnail">
      <img
      src = "{$product.cover.bySize.home_default.url}"
      alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
      data-full-size-image-url = "{$product.cover.large.url}"
      >
    </a>
    {/block}

    <!--<div class="product-description">-->
      <div class="custom-product-description">
      {block name='product_name'}
      <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
      {/block}

      {block name='product_price_and_shipping'}
      {if $product.show_price}
      <div class="product-price-and-shipping">
        {if $product.has_discount}
        {hook h='displayProductPriceBlock' product=$product type="old_price"}

        <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
        <span class="regular-price">{$product.regular_price}</span>
        {if $product.discount_type === 'percentage'}
        <span class="discount-percentage">{$product.discount_percentage}</span>
        {/if}
        {/if}

        {hook h='displayProductPriceBlock' product=$product type="before_price"}

        <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
        <span itemprop="price" class="price">{$product.price}</span>

        {hook h='displayProductPriceBlock' product=$product type='unit_price'}

        {hook h='displayProductPriceBlock' product=$product type='weight'}
      </div>
      {/if}
      {/block}

      {block name='product_reviews'}
      {hook h='displayProductListReviews' product=$product}
      {/block}
    </div>

    {block name='product_flags'}
    <ul class="product-flags">
      {foreach from=$product.flags item=flag}
      <li class="product-flag {$flag.type}">{$flag.label}</li>
      {/foreach}
    </ul>
    {/block}

    <div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
      <!--
      {block name='quick_view'}
      <a class="quick-view" href="#" data-link-action="quickview">
        <i class="material-icons search">&#xE8B6;</i> {l s='Quick view' d='Shop.Theme.Actions'}
      </a>
      {/block}
    -->

    <!-- ADDED  -->
    <ul class="overlay-buttons">
      <li class="btn btn-miniature">
        {block name='quick_view'}
          <a class="quick-view" href="#" data-link-action="quickview">
            <i class="fa fa-eye fa-lg" aria-hidden="true"></i> {l d='Shop.Theme.Actions'}
          </a>
        {/block}
      </li>
      <!--
      <li class="btn btn-miniature">
        <a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1); return false;" class="button" id="wishlist_button" href="#">
          <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
        </a>
      </li>
      <li class="btn btn-miniature">
        
          <i class="fa fa-compress fa-lg" aria-hidden="true"></i>
        </a>
      </li>
      -->
      <li class="btn btn-miniature">
        {block name='quick_cart'}
        <form action="{$urls.pages.cart}" method="post">
          <input type="hidden" value="{$product.id_product}" name="id_product">
          <input type="hidden" min="1" value="1" name="qty">
          <input type="hidden" name="token" value="{$static_token}">
          <button data-button-action="add-to-cart" class="btn btn-nostyle">
            <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
          </button>
        </form>
        {/block}
      </li>
    </ul>
    <!-- !ADDED -->
<!--   VARIANTES DE PRODUCTOS (colores y tal)
    {block name='product_variants'}
    {if $product.main_variants}
    {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
    {/if}
    {/block}
-->
  </div>
    <a class="gray-product-overlay" href="{$product.url}"></a>

</div>
</article>
{/block}
