<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?if($arResult["BANNERS"]):?>
<div class="jcarousel-wrapper">
	<div class="jcarousel">
	<ul style="left: 0px; top: 0px;">
    <?foreach($arResult["BANNERS"] as $banner):?>
      <li><a href="<?=$banner["DESCRIPTION"]?>"><img src="<?=$banner["PATH"]?>" alt="распродажа посуды" /></a></li>
    <?endforeach;?>
	</ul>
  </div>
   <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
 <a href="#" class="jcarousel-control-next">&rsaquo;</a>
 </div>
<?endif;?>