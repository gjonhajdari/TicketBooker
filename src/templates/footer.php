<footer class="<?php echo $isDark ? '' : 'footer-light'; ?>">
	<p id="copyright">Copyright &copy; 2023 TicketBooker. All rights reserved</p>
	<div class="icons">
		<a href="https://www.instagram.com" target="_blank">
			<?php echo file_get_contents('assets/icons/instagram.svg') ?>
		</a>
		<a href="https://www.twitter.com" target="_blank">
			<?php echo file_get_contents('assets/icons/twitter.svg') ?>
		</a>
		<a href="https://www.linkedin.com" target="_blank">
			<?php echo file_get_contents('assets/icons/linkedin.svg') ?>
		</a>
	</div>
	<div class="links">
		<a href="assets/extra/PRIVACY_POLICY.pdf" target="_blank" class="footer-link">Privacy Policy</a>
		<a href="assets/extra/TERMS_AND_CONDITIONS.pdf" target="_blank" class="footer-link">Terms of Use</a>
	</div>
</footer>