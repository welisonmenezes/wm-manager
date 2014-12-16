/**
 *	# Desenvolvido por Welison Menezes
 *  # email : welisonmenezes@gmail.com
 *
 */
(function(){
	$(document).ready(function(){
		/**
		 *	global object
		 */
		var globals = {
			toggleMenu : true
		};

		/**
		 *	object to auto call functions	
		 * 	 - prefix '_l_' to private classes
		 * 	 - prefix '_r_' to public classes to call on events onload and onresize
		 * 	 - prefix '_p_' to public classes to call on event onload
		 */
		var funcs = {
			/**
			 *	init plugins jquery
			 */
			_p_initPlugins : function(){
				// init plugin jquery.placeholder
				$('input, textarea').placeholder();

				// init plugin jquery.customSelect
				$('.wm-select').customSelect();

				// init plugin jquery.icheck
				$('.wm-checkbox, .wm-radio').iCheck({
				    checkboxClass: 'wm-checkbox',
				    radioClass: 'wm-radio'
				});

				// init plugin jquery.nicefileinput
				$('.wm-fileinput').nicefileinput();

				// init plugin jquery.wm-validate-1.0
				$('form').wmValidate({
					callbacks : {
	                    CB_Required         : function(){
	                    	util.callback_valid_form(this.element, this.message, this.erro, this.boxError);
	                    },
	                    CB_AfterValidate    : function(){
	                    	funcs._r_setNavAutoHeight();
	                    },
	                    CB_ClearErrors      : function(){
                        	$(this.element).find('label, input, select, textarea, div, span').removeClass(this.erro);
                        	$(this.element).find('.'+this.boxError).hide().html('');
	                    }
	                }
				});

				$('.wm-grid').WMGridfolio({
					callbacks : {
						CB_OpenDetail : function(){
							funcs._r_setNavAutoHeight();
						},
						CB_CloseDetail : function(){
							funcs._r_setNavAutoHeight();
						},
						CB_LoadGrid     : function(){
							funcs._r_setNavAutoHeight();
						},
	                    CB_ResizeGrid   : function(){
							funcs._r_setNavAutoHeight();
						},
	                    CB_CloseAll     : function(){
							funcs._r_setNavAutoHeight();
						}
					}
				});
			},
			/**
			 *	set auto height in main navigation
			 */
			_r_setNavAutoHeight : function(){
				var h = ($(window).height() > $(document).height()) ? $(window).height() : $(document).height();
					h = h  - $('.stc-header').outerHeight();

				// set auto height
				$('.stc-nav').css({
					'min-height' : h + 'px'
				});

				//console.log('teste');
			},
			/**
			 *	set auto width in main box content
			 */
			_r_setMainAutoWidth :function(){
				var w = (globals.toggleMenu) ? $(window).width() - $('.stc-nav').outerWidth() : $(window).width();

				$('.stc-main-wrap').css({
					'width' : w + 'px'
				});
			}, 
			/**
			 *	show/hide main menu
			 */
			_p_toggleMenu : function(){
				$('.toggle-menu').on('click', function(){
					// get elements
					var t = $(this);
					var m = $('.stc-main-wrap');
					var n = $('.stc-nav');
					
					// hide menu
					if(globals.toggleMenu)
					{
						t.addClass('active');

						n.stop().animate({
							'width' : '0px'
						}, 100, function(){
							m.stop().animate({
								'margin-left' : '0px'
							}, 100, function(){
								funcs._r_setMainAutoWidth();

								$(window).resize();
							});
							n.hide();
						});

						globals.toggleMenu = false;
					}
					// show menu
					else
					{
						t.removeClass('active');

						n.show();

						n.stop().animate({
							'width' : '220px'
						}, 100, function(){
							m.stop().animate({
								'margin-left' : '220px'
							}, 100, function(){
								funcs._r_setMainAutoWidth();

								$(window).resize();
							});
						});

						globals.toggleMenu = true;
					}

					funcs._r_setMainAutoWidth();
					return false;
				});
			},
			/**
			 *	open/close dropdown
			 */
			_p_toggleDropdown : function(){
				$('.open-dropdown').on('click', function(){
					var t = $(this);
					var p = t.parent();
					var b = p.find('> .box-dropdown');

					if(p.hasClass('open'))
					{
						b.slideUp(100);
						p.removeClass('open');
					}
					else
					{
						b.slideDown(100);
						p.addClass('open');
					}

					return false;
				});
			},
			_p_closeParent : function(){
				$('.close-parent').on('click', function(){
					$(this).parent().fadeOut('fast', function(){
						$(this).remove();
					}); return false;
				});
			}
		};

		/**
		 *	utility functions
		 */
		var util = {
			checkPattern : function(pattern, name) {
				var pRegExp = new RegExp(pattern);
				return pRegExp.test(name);
			},
			callback_valid_form: function(el, message, err, msgErr){
                var t 		= $(el), 
                	n 		= t.next(), 
                	type 	= t.attr('type'), 
                	msg 	= message,
                	erro    = err,
                	mErr    = msgErr; 

                t.addClass(erro);

                if(t.hasClass('wm-checkbox'))
                {
                	t.parent().addClass(erro);
                	t.parent().parent().parent().find('label').addClass(erro);
                    t.parent().parent().parent().find('.'+mErr).show().html(msg);
                }

                if(t.hasClass('wm-radio'))
                {
                	t.parent().addClass(erro);
                	t.parent().parent().parent().find('label').addClass(erro);
                    t.parent().parent().parent().find('.'+mErr).show().html(msg);
                }

                if(t.hasClass('wm-fileinput'))
                {
                	t.parent().parent().addClass(erro);
                	t.parent().parent().parent().find('label').addClass(erro);
                    t.parent().parent().parent().find('.'+mErr).show().html(msg);
                }

                if(t.hasClass('wm-select'))
                {
                	t.parent().find('span.wm-select').addClass(erro);
                	t.parent().find('label').addClass(erro);
                    t.parent().find('.'+mErr).show().html(msg);
                }

                if(type==='checkbox' || type==='radio')
                {
                    t.parent().parent().find('label').addClass(erro);
                    t.parent().parent().find('.'+mErr).show().html(msg);
                }
                else
                {
                    t.parent().find('label').addClass(erro);
                    t.parent().find('.'+mErr).show().html(msg);
                }
            }
		};

		/**
		 *	auto call functions
		 */
		for(var f in funcs){
			if( util.checkPattern('_p_', f) || util.checkPattern('_r_', f) ){
				funcs[f]();
			}
		}
		$(window).resize(function(){
			for(var f in funcs){
				if( util.checkPattern('_r_', f) ){
					funcs[f]();
				}
			}
		});

	});
})(); 