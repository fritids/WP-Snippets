<?php
// ---------------------------------------------------------------------------------------------
// Add Custom meta field to category page
// http://pippinsplugins.com/adding-custom-meta-fields-to-taxonomies/
// ---------------------------------------------------------------------------------------------

// Add term page
function sp_taxonomy_add_new_meta_field() {
	// this will add the custom meta field to the add new term page
	?>
	<div class="form-field">
		<label for="term_meta[category_content]"><?php _e( 'Category Content', 'sptax' ); ?></label>
		<textarea name="term_meta[category_content]" id="term_meta[category_content]" rows="5" cols="50" class="large-text"></textarea>
		<p class="description"><?php _e( 'Enter a value for this field','sptax' ); ?></p>
	</div>
<?php
}
add_action( 'category_add_form_fields', 'sp_taxonomy_add_new_meta_field', 10, 2 );
 


// Edit term page
function sp_taxonomy_edit_meta_field($term) {
 
	// put the term ID into a variable
	$t_id = $term->term_id;
 
	// retrieve the existing value(s) for this meta field. This returns an array
	$term_meta = get_option( "taxonomy_$t_id" ); ?>
	<tr class="form-field">
	<th scope="row" valign="top"><label for="term_meta[category_content]"><?php _e( 'Category Content', 'sptax' ); ?></label></th>
		<td>
			<?php 
			$tax_html_content = esc_attr( $term_meta['category_content'] ) ? esc_attr( $term_meta['category_content'] ) : '';
			wp_editor($tax_html_content,"term_meta[category_content]");?>
			<p class="description"><?php _e( 'Enter a value for this field','sptax' ); ?></p>
		</td>
	</tr>
   
<?php
}
add_action( 'category_edit_form_fields', 'sp_taxonomy_edit_meta_field', 10, 2 );




// Save extra taxonomy fields callback function.
function save_taxonomy_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		// Save the option array.
		update_option( "taxonomy_$t_id", $term_meta );
	}
}  
add_action( 'edited_category', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_category', 'save_taxonomy_custom_meta', 10, 2 );


?>