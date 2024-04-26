<!DOCTYPE HTML>
<!-------------------------------------------/*
 *  Fancy Input
 *
 *  Copyright 2013, Yair Even Or
 *  https://dropthebit.com
 *
 *  Licensed under the MIT license:
 *  http://www.opensource.org/licenses/MIT
 */------------------------------------------>
<html lang="en">
<head>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta charset="utf-8">
	<title>Web serveri | WebServeri.INFO</title>
	<meta name="description" content="WebServeri je projekat otvorenog koda. Akcenat je na serverima, programiranju i otvorenim sistemima.">
	<meta name="keywords" content="webserveri.info, razvoj, antistereotip, hosting, web dizajn, programiranje, serveri, libre, Časopis o slobodnom softveru, oklop, popivoda, blog, ...">
	<meta name="robots" content="index,follow"> 
	<meta name="robots" content="all"/>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="fjs/styles.css">
	<link rel="stylesheet" href="fjs/fancyInput.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
	<script src="fjs/jquery-1.9.1.min.js"></script>
</head>
<body>
	<div id='wrap'>
		<header>
			<a href="index.html"><img src="../../media/logo.png" id="logo" class="logo"></a><br>
			<menu>
				<button><a href="index.php" style="text-decoration:none;color:#313131;">ENTER</a></button>
				<button><a href="../../forum" style="text-decoration:none;color:#313131;">FORUM</a></button>
			</menu>
			<menu>
				<button class='active'>fx1</button>
				<button>fx2</button>
				<button>fx3</button>
				<button>fx4</button>
			</menu>
			<menu class='radio'>
				<label><input type='radio' value='input' name='type' /><span>input</span></label>
				<label><input type='radio' value='textarea' name='type' /><span>textarea</span></label>
				<div></div>
			</menu>
			

		</header>
		
		<div id='content'>
			<section class='input'>
				<div>
					<input type='text'>
				</div>
				
			</section>
			<section class='textarea'>
				<div>
					<textarea cols='1'></textarea>
				</div>
			</section>
		</div>
		<a class='by' href='index.html'> ⋆ ws1 ⋆ ng1np experiment ⋆ 2013 ⋆ FI ⋆ dropthebit.com ⋆ </a>
		
	</div>
	<script src='fjs/fancyInput.js'></script>
	<script>
		$('section :input').val('').fancyInput()[0].focus();

		// Everything below is only for the DEMO
		function init(str){
			var input = $('section input').val('')[0],
				s = 'input ... ✌'.split('').reverse(),
				len = s.length-1,
				e = $.Event('keypress');
			
			var	initInterval = setInterval(function(){
					if( s.length ){
						var c = s.pop();
						fancyInput.writer(c, input, len-s.length).setCaret(input);
						input.value += c;
						//e.charCode = c.charCodeAt(0);
						//input.trigger(e);
						
					}
					else clearInterval(initInterval);
			},150);
		}
		
		init();
		
		$('menu').on('click', 'button', toggleEffect);
		$('menu.radio').on('change', 'input', changeForm).find('input:first').prop('checked',true).trigger('change');
		
		// change effects
		function toggleEffect(num){
			var className = '';
				idx = $(this).index() + 1,
				$fancyInput = $('.fancyInput');

			if( idx > 1 )
				className = 'effect' + idx;

			$('#content').prop('class', className);
			$fancyInput.find(':input')[0].focus();
			
			$(this).addClass('active').siblings().removeClass('active');
		}
		
		function changeForm(e){
			// radio buttons stuff
			var page = this.value,
				highlight = $(e.delegateTarget).find('> div'),
				label = $(this.parentNode),
				marginLeft = parseInt( label.css('margin-left') , 10 ),
				xPos;
				
			highlight.css({'left':label.position().left + marginLeft, 'width':label.width() });
			
			// page change stuff
			xPos = '-' + label.index() * 50;
			$('#content').css( 'transform', 'translateX(' + xPos + '%)' );
			
			setTimeout(function(){
				$('#content').find('.' + page  + ' :input')[0].focus();
			}, 100);
		}
		
		
	</script>
</body> 
</html>
