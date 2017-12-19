<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?if($arResult["BANNERS"]):?>
<div class="jcarousel-wrapper">
	<div class="jcarousel1">
	<ul style="left: 0px; top: 0px;">
    <?foreach($arResult["BANNERS"] as $banner):?>
      <li style="width: 200px;"><a href="<?=$banner["DESCRIPTION"]?>"><img src="<?=$banner["PATH"]?>" alt="" /></a></li>
    <?endforeach;?>
	</ul>
  </div>
   <a href="#" class="jcarousel1-control-prev">&lsaquo;</a>
 <a href="#" class="jcarousel1-control-next">&rsaquo;</a>
 </div>
<?endif;?>