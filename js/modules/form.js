
$( function () {





	/* -----
		SUBMISSION
	 ----- */
	$( document ).on( "submit", ".js_contact_form", function ( event ) {

		event.preventDefault();

		var $form = $( event.target );
		var $submitButton = $form.find( ".js_form_submit" );

		// Disable the form
		$submitButton.prop( "disabled", true );
		$form.find( ".form-error" ).removeClass( "form-error" );

		// Pull in the form field DOM elements
		var $name = $form.find( "[ name = 'name' ]" );
		var $email = $form.find( "[ name = 'email' ]" );
		var $phoneNumber = $form.find( "[ name = 'phone-number' ]" );

		// Validate the data
		if ( ! $name.val().trim() ) {
			$name.addClass( "form-error" );
			alert( "Please enter your name." );
		}
		if ( ! $email.val().trim() ) {
			$email.addClass( "form-error" );
			alert( "Please enter your email." );
		}
		$phoneNumber.val( $phoneNumber.val().replace( /[^-–+\d\s]/g, "" ) );
		if ( $phoneNumber.val().replace( /\D/g, "" ).length < 10 ) {
			$phoneNumber.addClass( "form-error" );
			alert( "Please enter a valid phone number." );
		}

		// If any of the required fields had no value or an incorrect one, then
		// do not proceed.
		if ( $form.find( ".form-error" ).length ) {
			$submitButton.prop( "disabled", false );
			return;
		}

		/* Pull data from the form input fields */
		var data = {
			name: $name.val(),
			email: $email.val(),
			phoneNumber: $phoneNumber.val()
		};

		$submitButton.text( "Sending..." );

		// Submit the data
		var formSubmissionFlow = $.ajax( {
			url: "/server/handle_form_data.php",
			method: "POST",
			data: data
		} );
		// If the form was successfully submitted
		formSubmissionFlow.done( function ( responseRaw, status, xhr ) {
			$submitButton.text( "Thank you." );
			$form.find( "input" ).prop( "disabled", true );
		} );
		formSubmissionFlow.fail( function ( responseRaw, status, xhr ) {
			$submitButton.text( "Try again." );
			$submitButton.prop( "disabled", false );
		} );
		formSubmissionFlow.always( function () {
		} );

	} );



	/* -----
		VALIDATION
	 ----- */
	// $( document ).on( "input", ".js_form .js_phone", function ( event ) {

	// 	var domField = event.target;
	// 	preserveCursorPosition(
	// 		domField,
	// 		domField.value.replace( /[^-–+\d\s]/g, "" )
	// 	);

	// } );





} );
