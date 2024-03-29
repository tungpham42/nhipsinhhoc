<footer>
  <div class="container">
    <div class="row p-5">
      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-3">
        <p>Contact email</p>
        <a class="w-100" href="mailto:tung.42@gmail.com">tung.42@gmail.com</a>
      </div>
      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <ul class="list-unstyled">
          <li>
            <a class="home" href="/">Home</a>
          </li>
          <li>
            <a class="about" href="/about-us/">About Us</a>
          </li>
          <li>
            <a class="bmi" href="/body-mass-index/">Body Mass Index</a>
          </li>
          <li>
            <a class="contact" href="/contact-us/">Contact Us</a>
          </li>
          <li>
            <a href="/blog/">Blog</a>
          </li>
          <li>
<?php
include 'lang.php';
?>
          </li>
        </ul>
      </div>
      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <p>Find us on social media</p>
        <a class="w-50 mr-2" target="_blank" href="https://www.facebook.com/NhipSinhHocBiorhythm/"><img style="border-radius: 24%;" width="48" height="48" src="<?php echo $cdn_url; ?>/static/img/ic-facebook.svg" /></a>
        <a class="w-50" target="_blank" href="https://twitter.com/BiorhythmChart/"><img style="border-radius: 24%;" width="48" height="48" src="<?php echo $cdn_url; ?>/static/img/ic-twitter.svg" /></a>
      </div>
    </div>
  </div>
</footer>
<div class="modal fade" id="AdBlockModal" tabindex="-1" role="dialog" aria-labelledby="AdBlock" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title">AdBlock detected</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sure, ad-blocking software does a great job at blocking ads, but it also blocks some useful and important features of our website. For the best possible site experience please take a moment to disable your AdBlocker.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('.menu-toggle').on('click', function(){
  if ($(this).hasClass('open')) {
    $(this).removeClass('open').removeClass('close').addClass('close');
  } else if ($(this).hasClass('close')) {
    $(this).removeClass('close').removeClass('open').addClass('open');
  }
});
// Function called if AdBlock is not detected
function adBlockNotDetected() {
//	alert('AdBlock is not enabled');
}
// Function called if AdBlock is detected
function adBlockDetected() {
	$('#AdBlockModal').modal();
}

// Recommended audit because AdBlock lock the file 'blockadblock.js' 
// If the file is not called, the variable does not exist 'blockAdBlock'
// This means that AdBlock is present
if(typeof blockAdBlock === 'undefined') {
	adBlockDetected();
} else {
	blockAdBlock.onDetected(adBlockDetected);
	blockAdBlock.onNotDetected(adBlockNotDetected);
	// and|or
	blockAdBlock.on(true, adBlockDetected);
	blockAdBlock.on(false, adBlockNotDetected);
	// and|or
	blockAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
}

// Change the options
//blockAdBlock.setOption('checkOnLoad', false);
// and|or
//blockAdBlock.setOption({
//	debug: true,
//	checkOnLoad: false,
//	resetOnEnd: false
//});
</script>
<?php
include template('to-top');
?>