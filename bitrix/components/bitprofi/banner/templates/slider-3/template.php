<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?if($arResult["BANNERS"]):?>
<div class="jcarousel-wrapper">
	<div class="jcarousel2">
	<ul style="left: 0px; top: 0px;">
    <?foreach($arResult["BANNERS"] as $banner):?>
      <li style="width: 200px;"><a href="<?=$banner["DESCRIPTION"]?>"><img src="<?=$banner["PATH"]?>" alt="" /></a></li>
    <?endforeach;?>
	</ul>
  </div>
   <a href="#" class="jcarousel2-control-prev"><img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-left.png"></a>
 <a href="#" class="jcarousel2-control-next"><img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right.png"></a>
 </div>
<?endif;?>