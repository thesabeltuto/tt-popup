<?php /************ TT OPTIONS *****************/

// create custom plugin settings menu
add_action('admin_menu', 'TT_POPUP_PLUGIN_theme_create_menu');

function TT_POPUP_PLUGIN_theme_create_menu() {

	//create new top-level menu
	add_menu_page('TT-Popup', 'TT-Popup', 'administrator', __FILE__, 'TT_POPUP_PLUGIN_theme_options_page','' );

}

function TT_POPUP_PLUGIN_theme_options_page() {

	?>
	<div class="tt-popup-admin-wrap">
	<h1>TT Popup</h1>

    <div id="tt-popup-admin-nav">
        <ul>
            <li id="tt-popup-admin-li1"><a href="#">Support</a></li>
            <li id="tt-popup-admin-li2"><a href="#">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
       </ul>
    </div>

		<div class="tt-popup-admin-content" id="tt-popup-admin-li-1">
			<h2>Support</h2>
			<h3>Basic Settings</h3>
            <div class="tt-popup-admin-section tt-popup-admin-support">
            	<p>Insert class `<strong>popup</strong>` to any hyperlink elements you wish to popup.</p>
            	<p><strong>Example:</strong> <code>&lt;a href="<?=TT_POPUP_PLUGIN_URL;?>images/sample1.png" <strong>class="popup"</strong>&gt;Try this Example now!&lt;/a&gt;</code></p>
             	<p><blockquote><a href="<?=TT_POPUP_PLUGIN_URL;?>images/sample1.png" class="popup">Try this Example now!</a></blockquote></p>
           </div>

			<h3>Advance Settings</h3>
            <div class="tt-popup-admin-section tt-popup-admin-support">
            	<p>Insert class `<strong>popup</strong>` to any hyperlink elements you wish to popup. Make sure your hyperlink reference is a <strong>hashtag of an element id</strong> that you are going to popup.</p>
                
             	<p><strong>Example:</strong>
                <code>&lt; href="<strong>#tt-popup-sample-id</strong>" <strong>class="popup"</strong>&gt;Try this Example now!&lt;/a&gt;<br /><br />&lt;div <strong>id="tt-popup-sample-id"</strong> style="display: none;"&gt;<br />Any HTML content you like to display.<br />&lt;/div&gt;</code></p>
                
             	<p><blockquote><a href="#tt-popup-sample-id" class="popup">Try this Example now!</a>
                <div id="tt-popup-sample-id" style="display: none;">
                    <h3>Advance Settings</h3>
            	<p>Insert class `<strong>popup</strong>` to any hyperlink elements you wish to popup. Make sure your hyperlink reference is a <strong>hashtag of an element id</strong> that you are going to popup.</p>
                    <p><strong>Example:</strong>
                    <code>&lt; href="<strong>#tt-popup-sample-id</strong>" class="<strong>popup</strong>"&gt;Popup this up!&lt;/a&gt;<br /><br />&lt;div <strong>id="tt-popup-sample-id"</strong> style="display: none;"&gt;<br />Any HTML content you like to display.<br />&lt;/div&gt;</code></p>

                 </div>
                 <blockquote></p>
                 
           </div>
           
            <h3>Customization</h3>
            <div class="tt-popup-admin-section tt-popup-admin-support">
                <p><strong>Custom Style</strong> is currently NOT available for this plugin. If you wish to add this feature please donate and/or contact the author.</p>
                <p><strong>Custom Script</strong> is currently NOT available for this plugin. If you wish to add this feature please donate and/or contact the author.</p>
            </div>

		</div>
        
		<div class="tt-popup-admin-content" id="tt-popup-admin-li-2">
			<h2>About</h2>
			<h3>Description</h3>
            <div class="tt-popup-admin-section tt-popup-admin-about">
            	<p>This plugin is a simplified popup plugin for all. Just add class "popup" in the &lt;a&gt; tag and anything inside it will be popped up! You can popup from images to forms to html pages! Dashboard is available for more info and advance set up of popups. Based on <a href="http://fancybox.net/" target="_blank">FancyBox plugin.</a></p>
            </div>
            
            <h3>Author</h3>
            <div class="tt-popup-admin-section tt-popup-admin-about">
            	<p>Created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a>. For questions, suggestions and bug reports please go to the wordpress forums and/or contact the author.</p>
            </div>
            
            <h3>Plugin Site</h3>
            <div class="tt-popup-admin-section tt-popup-admin-about">
            	<p>Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a>. Check out other plugins created by the author.</p>
            </div>
            
            <h3>Donate</h3>
            <div class="tt-popup-admin-section tt-popup-admin-about">
            	<p>Donations are accepted via Paypal Donate to <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">TT Plugins</a>. Please donate to support the author in improving this plugin and in creating more useful and helpful plugins. Thank you for supporting!</p>
            </div>
            
		</div>
        
	</form>
    
        <div class="tt-popup-admin-footer">Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=PH&item_name=TT%2dPlugins&item_number=tt%2dplugins¤cy_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a></div>

	</div>
<?php } ?>