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
<div class="container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row foot-centered">

      <div class="col-md-12">
        <div class="row foot-headers">
          <div class="col-md-12 col-lg-2 offset-lg-1">
            <h3>CATEGORÍAS</h3>
          </div>
          <div class="col-md-12 col-lg-2">
            <h3>MI CUENTA</h3>
          </div>
          <div class="col-md-12 col-lg-2">
            <h3>INFORMACIÓN</h3>
          </div>
          <div class="col-md-12 col-lg-2">
            <h3>DIRECCIÓN</h3>
          </div>
            <div class="col-md-12 col-lg-2 align-right">
              <span class="foot-facebook">
                <a href="https://www.facebook.com/Vanite-Spa-Sun-Beauty-328713200654770/">
                  <i class="fa fa-facebook fa-2x"></i>
                </a>
              </span>
              <span class="foot-twitter">
                <a href="https://twitter.com/vanitealbacete">
                  <i class="fa fa-twitter fa-2x"></i>
                </a>
              </span>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-2 offset-lg-1">
            <ul>
              <li><a href="javascript:void(0)">Belleza</a></li>
              <li><a href="javascript:void(0)">Estética Oncológica</a></li>
            </ul>
          </div>
          <div class="col-md-12 col-lg-2">
            <ul>
              <li><a href="javascript:void(0)">Mis Pedidos</a></li>
              <li><a href="javascript:void(0)">Mis cambios y devoluciones</a></li>
              <li><a href="javascript:void(0)">Mis vales de descuento</a></li>
              <li><a href="javascript:void(0)">Mis direcciones</a></li>
            </ul>
          </div>
          <div class="col-md-12 col-lg-2">
            <ul>
              <li><a href="javascript:void(0)">Nuestra clínica</a></li>
              <li><a href="https://vaniteonline.es/#contact-anchor">Contacto</a></li>
              <li><a href="javascript:void(0)">Mapa del Sitio</a></li>
              <li><a href="https://vaniteonline.es/aviso-legal/">Aviso Legal</a></li>
              <li><a href="javascript:void(0)">Términos y condiciones</a></li>
              <li><a href="https://vaniteonline.es/politica-de-privacidad/">Política de cookies</a></li>
              <li><a href="javascript:void(0)">Cambios y devoluciones</a></li>
              <li><a href="javascript:void(0)">Condiciones de envío</a></li>
            </ul>
          </div>

          <div class="col-md-12 col-lg-2">
            <ul>
              <li>Plaza de la Constitución 5</li>
              <li>02005 Albacete</li>
              <li>ALBACETE - ESPAÑA</li>
              <li>
                <a href="tel:+34967521633">Tfno. 967 52 16 33</a>
              </li>
            </ul>
          </div>
            <div class="col-md-12 col-lg-2 align-center">
              <img src="https://vaniteonline.es/wp-content/uploads/2017/12/vanite-logo.png" alt="logo de Vanité"/>
            </div>
        </div>
        <div class="row"></div>
      </div>
      <!--
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
      -->
    </div>
    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row bot-footer">
      <div class="col-md-12">
        <p class="text-sm-center">
          {block name='copyright_link'}
            <span>
              <a class="_blank" href="https://www.identidadvisual.com" target="_blank">
              {l s='%copyright% %year% - Desarrollado por %identidad%' sprintf=['%identidad%' => 'Identidad Visual™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
            </a>
              Recomendamos:
              <a href="https://www.camisetasbaratasonline.com" target="_blank">Camisetas Baratas Online</a>
              //
              <a href="https://www.elchollon.com">El Chollón</a>
            </span>
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>