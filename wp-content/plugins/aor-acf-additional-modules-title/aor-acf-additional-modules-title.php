<?php
   /*
   Plugin Name: AOR - Add Title for Page Builder's Additional Modules
   Plugin URI: http://thinkaor.com
   Description: When activated, this plugin will add the name of the Additional Modules to the Title of that module.
   Version: 1
   Author: Daniel Wist
   Author URI: http://thinkaor.com
   */
add_action('admin_head', 'aor_add_acf_titles');
function aor_add_acf_titles() {
?>
    <script type="text/javascript">
	    jQuery(document).ready(function($){
		
		    $('.layout[data-layout=additional_modules] .acf-fc-layout-handle').each(function() {
                $(this).append('<span class="module"> - ' + $(this).parent().find('.acf-field[data-key="field_588281987bc05"] option:selected').text() + '</span>');
              });
              
              $(document).on('change','.layout[data-layout=additional_modules] .acf-field-588281987bc05 select',function(){
        
                $(this).parent().parent().parent().parent().find('.acf-fc-layout-handle span.module').text(" - " + $(this).find('option:selected').text());
            
              });
    	});
    </script>
<?php
}
?>