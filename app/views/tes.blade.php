@extends('default')
@section('title')
	{{"Bengkel Koding"}}
@stop
@section('content')
	{{{"
	$(document).ready(function(){
		var menu = $('#navbar').position();
		$('#sidebar').css({
			'top':menu.top-$(window).scrollTop()
		});
		$('#widgets').click(function(){
			showWidgetToggle();
		});
		$('#close').click(function(){
			showWidgetToggle();
		});
		$('#header').css({
			'height':$(window).height()+'px'
		});
		$(window).scroll(function(){
			var header = $('#header').position().top+$('#header').height()-$(window).scrollTop();
			if (header<=0) {
				$('#navbar').css({
					'position':'fixed',
					'top':'0',
					'width':'100%'
				});
				$('#sidebar').css({
					'top':'0'
				});
			}
			else{
				$('#navbar').css({
					'position':'',
					'width':''
				});
				var menu = $('#navbar').position();
				$('#sidebar').css({
					'top':menu.top-$(window).scrollTop()
				});
			}
		});
	});
	function showWidgetToggle(){
		var sidebar = $('#sidebar').position();
		if (sidebar.left==-320) {
			$('#sidebar').animate({
				'left':'0px'
			}, 500);
		}
		else{
			$('#sidebar').animate({
				'left':'-320px'
			}, 500)
		}
	}
	"}}}
@stop