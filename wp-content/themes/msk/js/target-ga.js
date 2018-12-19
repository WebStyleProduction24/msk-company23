document.addEventListener( 'wpcf7mailsent', function( event ) {
	if ( '271' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 271', 'submit');
	}
	if ( '115' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 115', 'submit');
	}
	if ( '47' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 47', 'submit');
	}
	if ( '158' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 158', 'submit');
	}
	if ( '103' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 103', 'submit');
	}
	if ( '108' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 108', 'submit');
	}
	if ( '195' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 195', 'submit');
	}
	if ( '244' == event.detail.contactFormId ) {
		ga('send', 'event', 'Contact Form 244', 'submit');
	}
}, false );