function george_reorder_my_account_menu() {
    $newtaborder = array(
        'dashboard'          => __( 'Dashboard', 'woocommerce' ),
        'orders'             => __( 'Orders', 'woocommerce' ),
		'edit-account'       => __( 'Account', 'woocommerce' ),
        'edit-address'       => __( 'Addresses', 'woocommerce' ),
		'wc-smart-coupons'   => __( 'Coupons', 'woocommerce' ),
         'downloads'         => __( 'Downloads', 'woocommerce' ),
        'payment-methods'       => __( 'Payment Methods', 'woocommerce' ),
        'customer-logout'    => __( 'Logout', 'woocommerce' ),
    );
    return $newtaborder;
}
add_filter ( 'woocommerce_account_menu_items', 'george_reorder_my_account_menu' );
