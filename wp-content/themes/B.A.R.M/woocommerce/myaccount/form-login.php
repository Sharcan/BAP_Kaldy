<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


do_action( 'woocommerce_before_customer_login_form' ); ?>

<h1 class="text-center"> Connexion et Inscription </h1>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="row my-5" id="customer_login">

	<div class="col-lg-6 col-sm-12">

<?php endif; ?>


	<form class="loginForm" method="post">
	<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

		<?php do_action( 'woocommerce_login_form_start' ); ?>
		<div class="form-group mt-5 mb-3">
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
				<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="form-control" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			<!-- </p> -->
			<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
				<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input class="form-control" type="password" name="password" id="password" autocomplete="current-password" />
			<!-- </p> -->
		</div>

		<?php do_action( 'woocommerce_login_form' ); ?>

		<div class="form-group">
			<!-- <p class="form-row"> -->
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
				</label><br>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<button type="submit" class="loginBtn" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
			<!-- </p> -->
			<!-- <p class="woocommerce-LostPassword lost_password"> -->
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="lostBtn"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
			<!-- </p> -->
		</div>

		<?php do_action( 'woocommerce_login_form_end' ); ?>

	</form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="col-lg-6 col-sm-12">

		
		<form method="post" class="loginForm" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
			
			<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>
			
			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<div class="form-group">
					<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
						<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
						<input type="text" class="form-control" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
					<!-- </p> -->
				</div>

			<?php endif; ?>

			<div class="form-group">	
				<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
					<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="email" class="form-control" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				<!-- </p> -->
			</div>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<div class="form-group">
					<!-- <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> -->
						<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
						<input type="password" class="form-control" name="password" id="reg_password" autocomplete="new-password" />
					<!-- </p> -->
				</div>


			<?php else : ?>

				<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<div class="form-group text-center">	
				<!-- <p class="woocommerce-form-row form-row"> -->
					<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
					<button type="submit" class="registerBtn" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
				<!-- </p> -->
			</div>


			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
