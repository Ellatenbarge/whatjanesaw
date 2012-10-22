var WJS = {};

$(document).ready(function() {
	WJS.initPage();
	WJS.menu();
	WJS.lightbox();
	WJS.navMap();
});

WJS.initPage = function() {
	$('#images').find('li a').click(function() {
		WJS.getImage($(this).attr('href'));
		return false;
	});
};

WJS.getImage = function(cat_num) {
	$.getJSON('search.php?att=cat_number&val='+cat_num, function(data) {
		$.each(data, function(key,item) {
			var thumb_url = item['app_root']+item['media']['viewitem'];
			$.colorbox({
				href:thumb_url,
				width: '200px',
				speed: 200,
				opacity: 0.4,
				onComplete: function() {$('#closeColorbox').click(function() {$.colorbox.close();});}
			}); 
		});
	});
};



WJS.initMinimizeProgress = function() {
	$('a#minimize_progress').click(function() {
		$(this).parents('div').find('div.step').toggle();
		$(this).parents('div').find('div.arrow').toggle();
		return false;
	});

};

WJS.initQuickCheck = function() {
	$('#lines').find('form.quick_check input[type="checkbox"]').change(function() {
		var url = $(this).parents('form').attr('action');
		var value = $(this).attr('checked');
		var _o = {
			'url': url,
			'type':'PUT',
			processData: false,
			data: value,
			'success': function(resp) {
				//alert(resp);
				//location.reload();
			},
			'error': function() {
				alert('sorry, there was a problem');
			}
		};
		$.ajax(_o);
	});
};

WJS.initEnableLinesSort = function() {
	$('#lines').find('a.enable_sort').click(function() {
		var id = $(this).attr('href');
		$(this).text('drag to reorder citations [disable sorting]');
		var thelink = $(this);
		$(this).click(function() {
			$('#'+id).sortable("destroy");
			thelink.text('enable citation sorting');
			WJS.initEnableLinesSort();
		});
		WJS.initLinesSortable(id);
		return false;
	});
};

WJS.initDeleteSectionHeader = function() {
	$('#sections').find('input[type="button"][class="delete"]').click(function() {
		if (confirm('are you sure?')) {
			var url = $(this).parents('form').attr('action');
			var del_o = {
				'url': url,
				'type':'DELETE',
				'success': function(resp) {
					if (resp.location) {
						location.href = resp.location;
					} else {
						location.reload();
					}
				},
				'error': function() {
					alert('sorry, cannot delete');
				}
			};
			$.ajax(del_o);
		}
		return false;
	});
};

WJS.initLinesSortable = function(id) {
	$('#'+id).sortable({
		cursor: 'crosshair',
		opacity: 0.6,
		revert: false,
		start: function(event,ui) {
			ui.item.addClass('highlight');
		},
		stop: function(event,ui) {
			var order_data = [];
			$('#'+id).find("li").each(function(index){
				order_data[order_data.length] = $(this).attr('id');
			});	
			var url = $('link[rel="lines_order"]').attr('href');
			var _o = {
				'url': url,
				'type':'POST',
				processData: false,
				data: order_data.join('|'),
				'success': function(resp) {
					//alert(resp);
					//location.reload();
				},
				'error': function() {
					alert('sorry, there was a problem');
				}
			};
			$.ajax(_o);
			ui.item.removeClass('highlight');
			ui.item.addClass('sub-highlight');
		}
		}).disableSelection();
	};

	WJS.initReview = function() {
		$('#lines a.review').click(function() {
			var href = $(this).attr('href');
			$.colorbox({
				href:href,
				width: '600px',
				speed: 200,
				opacity: 0.4,
				onComplete: function() {$('#closeColorbox').click(function() {$.colorbox.close();});}
			}); 
			return false;
		});

	};

	WJS.initSectionHead = function() {
		$('#sections a').click(function() {
			$(this).parents('li').find('form').toggle();
			$(this).parents('li').find('span.sec-title').toggle();
			return false;
		});
	};

	WJS.initCancelForm = function() {
		$('div.revision_form').find('input[value="cancel"]').click(function() {
			$(this).parents('div.revision_form').hide();
			return false;
		});
	};

	/*
	 WJS.initRadios = function() {
		 $('input[type="radio"]').parents('td.y').css('background-color','#eeffeb');
		 $('input[type="radio"]').parents('td.n').css('background-color','#ffedeb');
		 $('input:checked').parents('td.y').css('background-color','#6c3');
		 $('input:checked').parents('td.n').css('background-color','#c66');
		 $('input[type="radio"]').click(function() {
			 WJS.initRadios();
		 });
	 };
	 */

	WJS.initCheckAll = function() {
		$('input.control_check').click(function() {
			var dd = $(this).attr('id');
			if ($(this).attr('checked')) {
				$('input.'+dd+'_checkbox').attr('checked','checked');
			} else {
				$('input.'+dd+'_checkbox').removeAttr('checked');
			}
		});

	};

	WJS.initFoldSectionLines = function() {
		$('#lines div.sec_head a').click(function() {
			var target_id = 'sec_body'+$(this).attr('href');
			$(this).parents('div.sec_head').find('img').toggle();
			$('#'+target_id).toggle();
			return false;
		});
	};


	WJS.initFormToggle = function() {
		$('#lines').find('a[class="form_toggle"]').click(function() {
			var parent_li = $(this).parents('li');
			parent_li.find('div.check input').toggle();
			parent_li.find('div.year').toggle();
			var id = $(this).attr('id');
			var url = $(this).attr('href');
			var tar = id.replace('toggle','target');
			$('#'+tar).toggle();
			var _o = {
				'url': url,
				'type': 'GET',
				'success': function(resp) {
					$('#'+tar).html(resp).find('input[type="button"][value="cancel"]').click(function() {
						parent_li.find('div.check input').toggle();
						parent_li.find('div.year').toggle();
						var target_id = $(this).attr('class');
						$('#'+target_id).hide();
						return false;
					});
					WJS.initFormDelete(tar);
				},
				'error': function() {
					alert('sorry, there was a problem');
				}
			};
			$.ajax(_o);
			return false;
		});	
	};



	WJS.initToggle = function(id) {
		$('#'+id).find('a[class="toggle"]').click(function() {
			var id = $(this).attr('id');
			var tar = id.replace('toggle','target');
			$('#'+tar).toggle();
			$('#'+tar).find('input[type="button"][value="cancel"]').click(function() {
				var target_id = $(this).attr('class');
				$('#'+target_id).hide();
				return false;
			});
			return false;
		});	
	};

	WJS.initFormDelete = function(id) {
		$("#"+id+" form[method='delete']").submit(function() {
			if (confirm('are you sure?')) {
				var del_o = {
					'url': $(this).attr('action'),
					'type':'DELETE',
					'success': function() {
						//location.reload();
						location.href = location.href.replace(/\?section=.*$/,'');
					},
					'error': function() {
						alert('sorry, cannot delete');
					}
				};
				$.ajax(del_o);
			}
			return false;
		});
	};

	WJS.initDelete = function(id) {
		$('#'+id).find("a[class='delete']").click(function() {
			if (confirm('are you sure?')) {
				var del_o = {
					'url': $(this).attr('href'),
					'type':'DELETE',
					'success': function(resp) {
						if (resp.location) {
							location.href = resp.location;
						} else {
							location.reload();
						}
					},
					'error': function() {
						alert('sorry, cannot delete');
					}
				};
				$.ajax(del_o);
			}
			return false;
		});
	};

	WJS.initSectionSortable = function(id) {
		$('#'+id).sortable({ 
			cursor: 'crosshair',
			opacity: 0.6,
			revert: true, 
			start: function(event,ui) {
				ui.item.addClass('highlight');
			},	
			stop: function(event,ui) {
				var order_data = [];
				$('#proceed-button').addClass('hide');
				$('#unsaved-changes').removeClass('hide');
				$('#'+id).find("li").each(function(index){
					order_data[order_data.length] = $(this).attr('id');
					//$(this).find('span.key').text(index+1);
				});	
				var url = $('link[rel="section_order"]').attr('href');
				//alert(order_data);
				var _o = {
					'url': url,
					'type':'POST',
					processData: false,
					data: order_data.join('|'),
					'success': function(resp) {
						//alert(resp);
						//location.reload();
					},
					'error': function() {
						alert('sorry, there was a problem');
					}
				};
				$.ajax(_o);
				ui.item.removeClass('highlight');
			}	
		});
	};

	WJS.initUserPrivs = function() {
		$('#user_privs').find('a').click( function() {
			var method = $(this).attr('class');
			var url = $(this).attr('href');
			var _o = {
				'url': url,
				'type':method,
				'success': function(resp) {
					alert(resp);
					location.reload();
				},
				'error': function() {
					alert('sorry, there was a problem');
				}
			};
			$.ajax(_o);
			return false;
		});
	};

	//from cvproc
	//


	WJS.ajaxMessage = function(text) {
		$('#ajaxMessage').html(text).fadeIn('fast').delay(500).fadeOut('fast');
	};


	WJS.submitCvText = function() {
		var ta = $('form#text_form textarea.cv');
		ta.effect("highlight", {}, 1500);
		var str = ta.val();
		var url = $('form#text_form').attr('action');
		var _o = {
			'url': url,
			'type':'PUT',
			'data':str,
			'success': function(resp) {
				WJS.ajaxMessage(resp);
			},
			'error': function() {
				alert('sorry, there was a problem');
			}
		};
		$.ajax(_o);
		WJS.resizeIt();
	};

	WJS.initRevertCVText = function() {
		$('#revert').click(function() {
			if (confirm('are you sure?')) {
				var get_o = {
					'url': $(this).attr('href'),
					'type':'GET',
					'success': function(resp) {
						$('form#text_form textarea.cv').val(resp);
					},
					'error': function() {
						alert('sorry, there was an error');
					}
				};
				$.ajax(get_o);
			}
			return false;
		});
	};

	WJS.initShowLines = function() {
		$('a#lines').click(function() {
			var lines_url = $(this).attr('href');
			var str = $('form#text_form textarea.cv').val();
			var url = $('form#text_form').attr('action');
			//first update
			var _o = {
				'url': url,
				'type':'PUT',
				'data':str,
				'success': function() {
					var get_o = {
						'url': lines_url,
						'type':'GET',
						'success': function(subresp) {
							$.colorbox({html:subresp}); 
						},
						'error': function() {
							alert('sorry, there was an error');
						}
					};
					$.ajax(get_o);
				},
				'error': function() {
					alert('sorry, there was a problem');
				}
			};
			$.ajax(_o);
			return false;
		});
	};

	WJS.initCv = function() {
		var form = $('form#text_form');
		WJS.initRevertCVText();
		WJS.initShowLines();
		$('form#text_form textarea.cv').data('timeout',null).keyup(function(){
			clearTimeout($(this).data('timeout'));
			$(this).data('timeout', setTimeout(WJS.submitCvText, 3000));
		});
		$('.inline').colorbox({ 
			open:true,
			inline:true,
			opacity:0.4,
		onLoad: function() { $('#instructions').toggle(); },	
	onCleanup: function() { $('#instructions').toggle(); },	
});
};


WJS.resizeIt = function() {
	var txtarea = $('form#text_form textarea.cv');
	var str = txtarea.val();
	var cols = txtarea.attr('cols');
	var rows = txtarea.val().split("\n").length
	txtarea.attr('rows',rows);
};

WJS.menuUp = function(item) {
	$(item).slideUp();
	$("#shadow").fadeOut();
};

WJS.menuDown = function(item) {
	$("#shadow").fadeIn();
	$(item).slideDown();
	/*
	$("#shadow").show(function(){
		$('#menu-content').slideDown();
	});
	*/
};

WJS.menu = function() {
	$("#shadow").css("height", $(document).height()).hide();
	document.onkeydown = function(evt) {
	    evt = evt || window.event;
	    if (evt.keyCode == 27) {
			if ($("#shadow").is(":visible") && $('#menu-content').is(":visible")) {
				$('#menu-content').slideUp();
				$("#shadow").fadeOut();
			}
			else if ($("#shadow").is(":visible") && $("#lb-container").is(":visible")) {
	        	$("#lb-container").fadeOut();
				$("#shadow").css("z-index","2").fadeOut();
			}
	    }
	};
	
	$("#shadow").click(function(){
	    WJS.menuUp('#menu-content');
	});
	
	$('a.tab-link').click(function(e){
		if ($("#shadow").is(":hidden")) {
        	WJS.menuDown('#menu-content');
		}
		else {
			WJS.menuUp('#menu-content');
		}		
		e.preventDefault();
	});
};

WJS.lightbox = function() {
	$("#shadow").css("height", $(document).height()).hide();

	$("#shadow").click(function(){
	    $("#lb-container").fadeOut();
		$("#shadow").css("z-index","2").fadeOut();
	});
	
	$('a.painting-link').click(function(e){
		if ($("#shadow").is(":hidden")) {
			$("#shadow").css("z-index","4").fadeIn();
			$("#lb-container").fadeIn();
		}
		else {
			WJS.menuUp('#menu-content');
		}		
		e.preventDefault();
	});
};

WJS.navMap = function() {
	$('a.nav-map-link').hover(function(e){
		var name = $(this).attr("name").split(".");
		var css = name[0] + "px " + name[1] + "px";
		$("#nav-map").css("background-position",css)
		e.preventDefault();
	},	function(e){
		$("#nav-map").css("background-position","0 0")
		e.preventDefault();
		});
};