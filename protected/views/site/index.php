<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>



<div class="header_area">
	
	<div id="ai1_logo">
		<!--logo here-->
	</div>
	
	<div class="ad_space_1">
		<!--ad space here-->
	</div>
	
</div>

<div class="content_1">


<div style="background: #000">
	


<div style="float:left">
	
<?php echo TbHtml::carousel(array(
array('image' => Yii::app()->request->baseUrl.'/images/image1.jpg', 'label' => 'First Thumbnail label', 'caption' => 'image1'),
array('image' => Yii::app()->request->baseUrl.'/images/image2.jpg', 'label' => 'Second Thumbnail label', 'caption' => 'image2'),
array('image' => Yii::app()->request->baseUrl.'/images/image3.jpg', 'label' => 'Second Thumbnail label', 'caption' => 'image3'),
array('image' => Yii::app()->request->baseUrl.'/images/image4.jpg', 'label' => 'Second Thumbnail label', 'caption' => 'image4'),
array('image' => Yii::app()->request->baseUrl.'/images/image5.jpg', 'label' => 'Second Thumbnail label', 'caption' => 'image5')
)); ?>
	
</div>

<div style="float:right;border:#000 solid 3px;width:60%;">
	
<?php echo TbHtml::tabbableTabs(array(
    array('label' => "<div id='tech_home_menu_icon'> <br/><br/>Tech</div>", 'active' => true, 'content' => "111111111"),
    array('label' => "<div id='sports_home_menu_icon'> <br/><br/>Sports</div>", 'content' => '..222222.'),
    array('label' => "<div id='auto_home_menu_icon'> <br/><br/>Auto</div>", 'content' => '.3333333333..'),
    array('label' => "<div id='bank_home_menu_icon'> <br/><br/>Bank</div>", 'content' => '.44444444444..'),
    array('label' => "<div id='restaurant_home_menu_icon'> <br/><br/>Restaurant</div>", 'content' => '.5555555555..'),        
    array('label' => "More categories >>>", 'content' => '.5555555555..'),            
), array('placement' => TbHtml::TABS_PLACEMENT_RIGHT)
);
?>
	
</div>


</div>


</div>

<div>
	
<div class="ad_space_2">
	ad space here
</div>


<div class="ad_space_3">
	ad space here
</div>
	
</div>







