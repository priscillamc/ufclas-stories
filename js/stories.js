// JavaScript Document
jQuery(document).ready(function($){
	// Replace image and use as parent element's background-image
	$('.lcp_catlist li').each(function(index){
		var image = $(this).find('img').attr('src');
		var imageContainer = $(this).find(':has(img)').css("background-image", 'url("' + image + '")');
	});
});