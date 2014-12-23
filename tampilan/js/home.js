var form_aktif = "";
$(document).ready(function(){
	$('#new_button').click(function(){
		$('#child_of_new').slideToggle();
	});

	$('#statistik_button').click(function(){
		changePage('statistik-ikhtisar', '#SahabatKantong | Statistik | Ikhtisar');
		$('#child_of_statistik').slideToggle();
	});
	$('#selambu').click(function(){
		bukaSelambu();
	});

});

function changePage(url, title){
	$.ajax({
		type: 'POST',
		url: 'index.php?page='+url,
		beforeSend: function(){
			$('#loading').css({
				position:'fixed',
				'z-index':'99',
				top:'100px',
				left:$(window).width()/2-$('#loading').width()/2
			});
			$('#loading').show();
		},
		success: function(data){
			$('#loading').hide();
			$('#konten').html(data);
		}
	})
	window.history.pushState("string","judul","?page="+url);
	$('title').text(title);
}

function getData(url){
	if(url==="statistik-pengeluaran"){
		$.post('sistem/ajax/tampilkan_pengeluaran.php',{},function(data,status){
			$('#konten_database').html(data);
		});
	}else if(url==="statistik-pemasukan"){
		$.post('sistem/ajax/tampilkan_pemasukan.php',{},function(data,status){
			$('#konten_database').html(data);
		});
	}
	else if(url=="statistik-totaluang"){
		$.post('sistem/ajax/tampilkan_totaluang.php',{},function(data,status){
			$('#konten_database').html(data);
		});
	}
}

function createNew(type){
	if (type=="pengeluaran") {
		pushData('sistem/ajax/tambahkan_pengeluaran.php','new_pengeluaran');
		changePage('statistik-pengeluaran', '#SahabatKantong | Statistik | Pengeluaran');
		
	}
	else if(type=="pemasukan"){
		pushData('sistem/ajax/tambahkan_pemasukan.php','new_pemasukan');
		changePage('statistik-pemasukan', '#SahabatKantong | Statistik | Pemasukan');
	}
	bukaSelambu();
	return false;
}

function pushData(url, form_id){
	$.ajax({
		type:'POST',
		url:url,
		data:$('#'+form_id+' form').serialize(),
		beforeSend:function(){
			$('#loading').html('proses...');
		},
		success: function(data){
			$('#loading').empty();
			$('#'+form_id+' form')[0].reset();
		}
	});
}

function tutupSelambu(){
	$('#selambu').css({
		background:'rgba(255,255,255,0.7)',
		display:'block',
		position:'fixed',
		opacity:'0',
		top:'0',
		left:'0',
		height:$(window).height(),
		width:$(window).width()	
	});
	$('#selambu').animate({
		opacity:'1'
	});
}

function bukaSelambu(){
	$('#selambu').animate({
		opacity:'0'
	},500,function(){
		$('#selambu').css({
			display:'none'
		});
	});
	$('#'+form_aktif).animate({
		opacity:'0'
	},500,function(){
		$('#'+form_aktif).css({
			display:'none'
		});
	});
}

function popup(id){
	form_aktif = id;
	tutupSelambu();
	$('#'+form_aktif).css({
		position:'fixed',
		'z-index':'99',
		top:$(window).height()/2-$('#'+form_aktif).height()/2,
		left:$(window).width()/2-$('#'+form_aktif).width()/2
	});
	$('#'+form_aktif).animate({
		opacity:'1'
	});
	$('#'+form_aktif).show(500);
	
}

function upload(){
	data = new FormData($('#upload_form')[0]);
	$.ajax({
		type: 'POST',
		url: 'sistem/ajax/upload_photo.php',
		data: data,
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function(){
		$('#loading').css({
			position:'fixed',
			'z-index':'99',
			top:'100px',
			left:$(window).width()/2-$('#loading').width()/2
			});
			$('#loading').show();
		},
		success: function(data){
			$('statusTxt').html(data);
			$('#loading').hide();
			$('#upload_form')[0].reset();
		}
	});
	return false;
}