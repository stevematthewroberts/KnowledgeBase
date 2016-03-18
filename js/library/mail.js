
// Mail.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//



 $(document).on('ready', function() {



	// MAILBOX-COMPOSE.HTML
	// =================================================================

	if ($('#mail-compose').length) {


		// SUMMERNOTE
		// =================================================================
		// Require Summernote
		// http://hackerwins.github.io/summernote/
		// =================================================================
		$('#mail-compose').summernote({
			height:500
		});


		// Show The DATE Input Field
		// =================================================================
		$('#toggle-date').on('click', function(){
			$('#date-input').toggleClass('hide');
		});



		// Show The CAT Input Field
		// =================================================================
		$('#toggle-cat').on('click', function(){
			$('#cat-input').toggleClass('hide');
		});



		// Show The TAG Input Field
		// =================================================================
		$('#toggle-tag').on('click', function(){
			$('#tag-input').toggleClass('hide');
		});




		// Attachment button.
		// =================================================================
		$('.btn-file :file').on('fileselect', function(event, numFiles, label, fileSize) {
			$('#dattach-file').html('<strong class="box-block text-capitalize"><i class="fa fa-paperclip fa-fw"></i> '+label+'</strong><small class="text-muted">'+fileSize+'</small>');
		});


		return;
	}





	// MAILBOX-MESSAGE.HTML
	// =================================================================

	// SUMMERNOTE
	// =================================================================
	// Require Summernote
	// http://hackerwins.github.io/summernote/
	// =================================================================
	if( $('#mail-textarea').length ){
		$('#mail-textarea').on('click', function(){
			$(this).empty().summernote({
			height:300,
			focus: true
			});
			$('#mail-send-btn').removeClass('hide');
		});
		return;
	}





	// MAILBOX.HTML
	// =================================================================
	var mSelAllCb 	= $('#checked-all-mail').find('.form-checkbox');
	var mListCb 	= $('.cb-mail');
	var mReadCb 	= $('#mail-list').find('li:not(.mail-list-unread)');
	var mUnreadCb 	= $('#mail-list').find('.mail-list-unread');
	var mStarBtn 	= $('#mail-list').find('.mail-star a');


	// Select / deselect all checkboxes.
	// =================================================================
	$('#checked-all-mail').on('click', function(e){
		if(!mSelAllCb.niftyCheck('isChecked')){
			mListCb.niftyCheck('toggleOn');
			mSelAllCb.niftyCheck('toggleOn');
		}else{
			mListCb.niftyCheck('toggleOff');
			mSelAllCb.niftyCheck('toggleOff');
		}
	});


	// Sellect all checkboxes.
	// =================================================================
	$('#select-all-list').on('click', function(e){
		mListCb.niftyCheck('toggleOn');
		mSelAllCb.niftyCheck('toggleOn');
	});


	// Toggle checkboxes.
	// =================================================================
	$('#select-toggle-list').on('click', function(e){
		mListCb.niftyCheck('toggle');
	});


	// Uncheck all checkboxes.
	// =================================================================
	$('#select-none-list').on('click', function(e){
		mListCb.niftyCheck('toggleOff');
		mSelAllCb.niftyCheck('toggleOff');
	});


	// Check on all the messages that have been read.
	// =================================================================
	$('#select-read-list').on('click', function(e){
		mListCb.niftyCheck('toggleOff');
		mReadCb.niftyCheck('toggleOn');
	});


	// Checks on all unread messages.
	// =================================================================
	$('#select-unread-list').on('click', function(e){
		mListCb.niftyCheck('toggleOff');
		mUnreadCb.niftyCheck('toggleOn');
	});


	// Check on all the messages that have been starred.
	// =================================================================
	$('#select-starred-list').on('click', function(e){
		mListCb.niftyCheck('toggleOff');
		$('# mail-list').find('.mail-starred . cb-mail').niftyCheck('toggleOn');
	});


	//  Toggle the star on/off.
	// =================================================================
	mStarBtn.on('click', function(e){
		e.preventDefault();

		$(this).closest('li').toggleClass('mail-starred');
	});


	// highlight the message.
	// =================================================================
	mListCb.on('dataplan.ch.checked', function(){
		$(this).parents('li').addClass('highlight');
	}).on('dataplan.ch.unchecked', function(){
		$(this).closest('li').removeClass('highlight');
	});


	// Loading overlay.
	// =================================================================
	$('#mail-ref-btn').niftyOverlay().on('click', function(){
		var $el = $(this), relTime;

		$el.niftyOverlay('show');
		relTime = setInterval(function(){
			$el.niftyOverlay('hide');
			clearInterval(relTime);
		},2500);
	});


 });

