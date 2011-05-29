/* WPtouch Pro Classic JS */
/* This file holds all the default jQuery & Ajax functions for the classic theme on mobile */
/* Description: JavaScript for the Classic theme */
/* Required jQuery version: 1.3.2+ */

var touchJS = jQuery.noConflict();
var WPtouchWebApp = window.navigator.standalone;
/* For debugging */
//var WPtouchWebApp = true;

/* see http://cubiq.org/add-to-home-screen for additional options */
var addToHomeConfig = {
	animationIn: 'bubble',
	animationOut: 'bubble',
	startDelay: 800,			// milliseconds
	lifespan: 1000*60, 		// milliseconds  (set to: 30 secs)
	expire: 60*24*30,				// minutes (set to: 30 days)
	bottomOffset: 12,
	touchIcon: true,
	arrow: true,
	message: WPtouch.add2home_message
};

/* Try to get out of frames! */
if ( top.location!= self.location ) { 
	top.location = self.location.href
}

function doClassicReady() {

/*  Header #tab-bar tabs */
	touchJS( function() {
	    var tabContainers = touchJS( '#menu-container > div' );
	
	    touchJS( '#tab-inner-wrap-left a' ).click( function() {
	        tabContainers.hide().filter( this.hash ).show();
	    	touchJS( '#tab-inner-wrap-left a' ).removeClass( 'selected' );
	   		touchJS( this ).addClass( 'selected' );
	        return false;
	    }).filter( ':first' ).click();
	});

	touchJS( 'a#header-menu-toggle' ).click( function() {
		touchJS( '#main-menu' ).opacityToggle( 380 );	
		touchJS( this ).toggleClass( 'menu-toggle-open' );
		return false;
	});	

	touchJS( '#main-menu ul li a:not(li.has_children > a)' ).click( function(){
		touchJS( this ).parent().addClass( 'active' );
	});

	touchJS( 'a#tab-search' ).click( function() {
		touchJS( '#search-bar' ).toggleClass( 'show-search' );
		touchJS( this ).toggleClass( 'search-toggle-open' );
		return false;
	});	

/* Filter parent link href's and make them toggles for thier children */
	touchJS( '#main-menu' ).find( 'li.has_children ul' ).hide();
	
	touchJS( '#main-menu ul li.has_children > a' ).click( function() {
		touchJS( this ).parent().children( 'ul' ).opacityToggle( 380 );
		touchJS( this ).toggleClass( 'arrow-toggle' );
		touchJS( this ).parent().toggleClass( 'open-tree' );
		return false;
		});

/* If Prowl Message Sent */
	if ( touchJS( '#prowl-message' ).length ) {
		setTimeout( function() { touchJS( '#prowl-message' ).fadeOut( 350 ); }, 2500 );
	}

/* Try to make imgs and captions nicer in posts */	
	if ( touchJS( '.single, .page' ).length ) {
		touchJS( '.content img, .content .wp-caption' ).each( function() {
			if ( touchJS( this ).width() <= 250 && touchJS( this ).width() > 100 ) {
				touchJS( this ).addClass( 'aligncenter' );
			}
		});
	}

/* Pesky plugin image protect stuff */	
	touchJS( '.single .p3-img-protect' ).each( function() {
		touchJS( '.p3-overlay' ).remove();
		var insideContent = touchJS( this ).html();
		touchJS( this ).replaceWith( insideContent );
	});

/* Single post page share menu */
	touchJS( 'a#share-post' ).click( function() {
		touchJS( '#share-absolute' ).opacityToggle( 380 ).viewportCenter();
		return false;
	});	

	touchJS( 'a#share-close' ).click( function() {
		touchJS( '#inner-ajax #share-absolute' ).opacityToggle( 380 );
		return false;
	});	
	
	touchJS( 'li#instapaper a' ).click( function() {
		var userName = prompt( WPtouch.instapaper_username, '' );
		if ( userName ) {
			var passWord = prompt( WPtouch.instapaper_password, '' );
			if ( !passWord ) {
				passWord = 'default';	
			}
			
			var ajaxParams = {
				url: document.location.href,
				username: userName,
				password: passWord,
				title: document.title
			};
			
			WPtouchAjax( 'instapaper', ajaxParams, function( result ) {
				if ( result == '1' ) {
					alert( WPtouch.instapaper_saved );
					touchJS( 'a#share-close' ).click();
				} else {
					alert( WPtouch.instapaper_try_again );
					touchJS( 'li#instapaper a' ).click();
				}
			});
		}
		return false;
	});

	var shareOverlay = touchJS( '#share-absolute' ).get( 0 );
	if ( shareOverlay ) {
		var windowHeight = touchJS( window ).height() + 100 + 'px';
		shareOverlay.addEventListener( 'touchmove', classicTouchMove, false );	

		touchJS( '#email a' ).click( function() {
			touchJS( 'a#share-close' ).click();
			return true;
		});

		touchJS( '#share-absolute' ).css( 'height', windowHeight );
	}

/* Add a rounded top left corner to the first gravatar in comments, removes double bordering */
	touchJS( '.commentlist li :first, .commentlist img.avatar:first' ).addClass( 'first' );

	touchJS( 'a.com-toggle' ).bind( 'click', function() {
		touchJS( 'ol.commentlist' ).toggleClass( 'hidden' );
		touchJS( 'img#com-arrow' ).toggleClass( 'com-arrow-down' );
		return false;
	});
		
/* Detect window width and add corresponding 'portrait' or 'landscape' classes onload */
	if ( touchJS( window ).width() >= 480 ) { 
		touchJS( 'body' ).addClass( 'landscape' );
	} else {
		touchJS( 'body' ).addClass( 'portrait' );
	}

/* Detect orientation change and add or remove corresponding 'portrait' or 'landscape' classes */
	window.onorientationchange = function() {
		var orientation = window.orientation;
			switch( orientation ) {
				//Portrait
				case 0:
				case 180:
				touchJS( 'body' ).addClass( 'portrait' ).removeClass( 'landscape' );
				break;
				//Landscape
				case 90:
				case -90:
				touchJS( 'body' ).addClass( 'landscape' ).removeClass( 'portrait' );
				break;
				default:
				touchJS( 'body' ).addClass( 'portrait' ).removeClass( 'landscape' );				
			}
	}
	
/* Ajaxify commentform */
	var postURL = document.location;
	var CommentFormOptions = {
		beforeSubmit: function() {
			touchJS( '#commentform textarea' ).addClass( 'loading' );			
		},
		success: function() {
			touchJS( '#commentform textarea' ).removeClass( 'loading' ).addClass( 'success' );			
			alert( WPtouch.comment_success );
			setTimeout( function () { 
				touchJS( '#commentform textarea' ).removeClass( 'success' );
			}, 1500 );
//			touchJS( 'ol.commentlist' ).load( postURL + ' ol.commentlist > li', function(){ 
//				comReplyArrows();
//			});
		},
		error: function() {
			touchJS( '#commentform textarea' ).removeClass( 'loading' ).addClass( 'error' );
			alert( WPtouch.comment_failure );
			setTimeout( function () { 
				touchJS( '#commentform textarea' ).removeClass( 'error' );
			}, 3000 );
		},
		resetForm: true,
		timeout:   10000
	} 	//end options
	
	if ( touchJS.isFunction( jQuery.fn.ajaxForm ) ) {
		touchJS( '#commentform' ).ajaxForm( CommentFormOptions );
	}

	loadMoreEntries();
	loadMoreComments();
	comReplyArrows();
	classicExcerptToggle();
	welcomeMessage();
	webAppLinks();
	webAppOnly();
	
	touchJS( 'a.login-req, a.comment-reply-login' ).bind( 'click', function() {
		touchJS( 'a#header-menu-toggle, a#tab-login' ).click();
		scrollTo( 0,0,1 );
		return false;
	});
			
/* Hide addressBar */
	if ( !touchJS( '.single' ).length ) {
		touchJS( window ).load( function() {
		    setTimeout( scrollTo, 0, 0, 1 );
		} );
	}
	
/*Single post Back to Top */
	touchJS( 'a.back-to-top' ).click( function(){
		scrollTo( 0,0, 100 );
		return false;
	});
	
/* Set tabindex automagically */
	jQuery( function(){
	var tabindex = 1;
		jQuery( 'input, select, textarea' ).each( function() {
			if ( this.type != "hidden" ) {
				var inputToTab = jQuery( this );
				inputToTab.attr( 'tabindex', tabindex );
				tabindex++;
			}
		});
	});

}
/* End Document Ready */


/* New jQuery function opacityToggle() */
touchJS.fn.opacityToggle = function( speed, easing, callback ) { 
	return this.animate( { opacity: 'toggle' }, speed, easing, callback ); 
}

/* New jQuery function viewportCenter() */
touchJS.fn.viewportCenter = function() {
    this.hide().css( 'position', 'absolute' );
    this.css( 'top', ( touchJS( window ).height() - this.height() ) / 3 + touchJS( window ).scrollTop() + 'px' );
    this.css( 'left', ( touchJS( window ).width() - this.width() ) / 2 + touchJS( window ).scrollLeft() + 'px' );
    this.show();
    return this;
}
	
function classicTouchMove( e ) {
	e.preventDefault();	
}

function welcomeMessage() {
	if ( !WPtouchWebApp ) {	
		touchJS( '#welcome-message' ).show();
		touchJS( 'a#close-msg' ).bind( 'click', function() {
			WPtouchCreateCookie( 'wptouch_welcome', '1', 365 );
			touchJS( '#welcome-message' ).fadeOut( 350 );
			return false;
		});
	}
}

function webAppLinks() {
	if ( WPtouchWebApp ) {
		// The New Sauce ( Nobody makes tasty gravy like mom )		
		// bind to all links, except UI controls and such
		var webAppLinks = touchJS( 'a' ).not( 
			'.no-ajax, .email a, .feed a, a#header-menu-toggle, .has_children > a, a.load-more-link, .load-more-comments-link a, a#share-post, a#share-close' 
		);

 		webAppLinks.each( function(){
			var targetUrl = touchJS( this ).attr( 'href' ); 		
			var targetLink = touchJS( this );
			var localDomain = location.hostname;	
	
			// link is local, but set to be non-mobile
			if ( typeof wptouch_ignored_urls != 'undefined' ) {
				touchJS.each( wptouch_ignored_urls, function( i, val ) {
					if ( targetUrl.match( val ) ) {
						targetLink.addClass( 'ignored' );
					}
				});
			}
			
		   // filetypes, images class name additions
	       if ( targetUrl.match( ( /[^\s]+(\.(pdf|numbers|pages|xls|xlsx|doc|docx|zip|tar|gz|csv|txt))$/i ) ) ) {
				targetLink.addClass( 'external' );
	       } else if ( targetUrl.match( ( /[^\s]+(\.(jpg|jpeg|gif|png|bmp|tiff))$/i ) ) ) {
				targetLink.addClass( 'img-link' );
	       }

			touchJS( targetLink ).unbind( 'click' ).bind( 'click', function( e ) {

				// is this an external link? Confirm to leave WAM
				if ( touchJS( targetLink ).hasClass( 'external' ) || touchJS( targetLink ).parent( 'li' ).hasClass( 'external' ) ) {
			       	confirmForExternal = confirm( WPtouch.external_link_text + ' \n' + WPtouch.open_browser_text );
					if ( confirmForExternal ) {
						return true;
					} else {			
						return false;
					}
				// prevent images with links to larger ones from opening in web-app mode
				} else if ( touchJS( targetLink ).hasClass( 'img-link' ) ) {
					return false;

				// local http link or no http present: 
				} else if ( targetUrl.match( localDomain ) || !targetUrl.match( 'http://' ) ) {
					// make sure it's not in the ignored list first
					if ( touchJS( targetLink ).hasClass( 'ignored' ) || touchJS( targetLink ).parent( 'li' ).hasClass( 'ignored' ) ) {
				       	confirmForExternal = confirm( WPtouch.wptouch_ignored_text + ' \n' + WPtouch.open_browser_text );
							if ( confirmForExternal ) {
								return true;	
							} else {
								return false;
							}
					// okay, it's passed the tests, this is a local link, fire WAM
					} else {
						/* Check to see if menu is showing */
						if ( touchJS( '#main-menu' ).hasClass( 'show-menu' ) ) {
							/* Menu is showing, so lets close it */
							touchJS( this ).opacityToggle( 380 );
							touchJS( 'a#header-menu-toggle' ).toggleClass( 'menu-toggle-open' );
						}
						loadPage( targetUrl ); 
						return false;
					}
				// not local, not ignored, doesn't have no-ajax but it's got an external http domain url
				} else {
			       	confirmForExternal = confirm( WPtouch.external_link_text + ' \n' + WPtouch.open_browser_text );
					if ( confirmForExternal ) {
						return true;
					} else {			
						return false;
					}					
				}
			}); /* end click bindings */
		}); /* end .each loop */
	}
}

/* Load domain urls with Ajax (works with webAppLinks(); ) */
function loadPage( targetUrl ) {
	var persistenceOn = touchJS( 'body.loadsaved' ).length;
	if ( touchJS( 'body.ajax-on' ).length ) {
		touchJS( 'body' ).append( '<div id="progress"></div>' );
		touchJS( '#progress' ).viewportCenter();
		touchJS( document ).unbind();
		touchJS( '#outer-ajax' ).load( targetUrl + ' #inner-ajax', function( allDone ) {
			touchJS( '#progress' ).addClass( 'done' );
			if ( persistenceOn ) {
		  		WPtouchCreateCookie( 'wptouch-load-last-url', targetUrl, 365 );
			} else {
			  	WPtouchEraseCookie( 'wptouch-load-last-url' );	
			}
			doClassicReady();
			scrollTo( 0, 0 );
		});
	} else {
		touchJS( 'body' ).append( '<div id="progress"></div>' );
		touchJS( '#progress' ).viewportCenter();
		if ( persistenceOn ) {
	  		WPtouchCreateCookie( 'wptouch-load-last-url', targetUrl, 365 );
		}
		setTimeout( function () { window.location = targetUrl; }, 550 );
	}
}

/* Things to do only when in web-App Modde */
function webAppOnly() {
	if ( WPtouchWebApp ) {
		var persistenceOn = touchJS( 'body.loadsaved' ).length;
		if ( !persistenceOn ) {
			WPtouchEraseCookie( 'wptouch-load-last-url' );
		}
		touchJS( 'body' ).addClass( 'web-app' );
		touchJS( 'body.black-translucent' ).css( 'margin-top', '20px' );
		touchJS( '#switch, a.comment-reply-link, a.comment-edit-link, #welcome-message' ).remove();
		setTimeout( function () { touchJS( '#progress' ).remove(); }, 150 );
	}
}

function classicExcerptToggle() {
	touchJS( 'a.excerpt-button' ).live( 'click', function() {
		touchJS( this ).toggleClass( 'open' ).parent( '.post' ).find( '.content' ).opacityToggle( 380 );	
		return false;	
	});
}

function loadMoreEntries() {
	var loadMoreLink = touchJS( 'a.load-more-link' );
	var ajaxDiv = '.ajax-page-target';
	loadMoreLink.live( 'click', function() {
		touchJS( this ).addClass( 'ajax-spinner' ).text( WPtouch.loading_text );
		var loadMoreURL = touchJS( this ).attr( 'rel' );
		touchJS( '#content' ).append( "<div class='ajax-page-target'></div>" );
		touchJS( ajaxDiv ).hide().load( loadMoreURL + ' #content .post, #content .load-more-link', function() {
			touchJS( this ).replaceWith( touchJS( this ).html() );	
			touchJS( 'a.load-more-link.ajax-spinner' ).fadeOut( 350 );
			webAppLinks();
		});
		return false;
	});	
}

function loadMoreComments() {
	var loadMoreLink = touchJS( 'li.load-more-comments-link a' );
	var ajaxDiv = '.ajax-page-target';
	loadMoreLink.live( 'click', function() {
		touchJS( this ).addClass( 'ajax-spinner' );
		var loadMoreURL = touchJS( this ).attr( 'href' );
		touchJS( 'ol.commentlist' ).append( "<div class='ajax-page-target'></div>" );
		touchJS( ajaxDiv ).hide().load( loadMoreURL + ' ol.commentlist > li', function() {
			touchJS( this ).replaceWith( touchJS( this ).html() );	
			touchJS( '.load-more-comments-link a.ajax-spinner' ).parent().fadeOut( 350 );
			if ( WPtouchWebApp ) { 
				touchJS( 'a.comment-reply-link, a.comment-edit-link' ).remove();
				webAppLinks(); 
			}
		});
		return false;
	});	
}

function comReplyArrows() {
	var comReply = touchJS( 'ol.commentlist li li > .comment-top' );
	touchJS.each( comReply, function() {
		touchJS( comReply ).prepend( "<div class='com-down-arrow'></div>" );
	});
}

function WPtouchCreateCookie( name, value, days ) {
	if ( days ) {
		var date = new Date();
		date.setTime( date.getTime() + ( days*24*60*60*1000 ) );
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path="+WPtouch.siteurl;
}

function WPtouchEraseCookie( name ) {
	WPtouchCreateCookie( name,"",-1 );
}

touchJS( document ).ready( function() { doClassicReady(); } );