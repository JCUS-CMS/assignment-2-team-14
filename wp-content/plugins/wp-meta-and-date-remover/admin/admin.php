<div  class="w-full py-8 px-5 bg-white shadow-sm">
    <div class="flex justify-between">
        <div class=" flex">
        <img class="h-10 hidden w-10 mr-2" src="<?php 
echo  plugin_dir_url( __FILE__ ) . '/assets/img/ssl.png' ;
?>" />
        <h3 class=" m-auto text-2xl font-semibold text-gray-700" >WP Meta and Date Remover</h3>
        </div>
        <div class=" text-lg">
            <?php 

if ( wmadr_fs()->is_not_paying() ) {
    ?>
                <span class="bg-gray-700 text-gray-200 py-1 px-2 rounded-md">Free</span>
            <?php 
} else {
    ?>
                <span class="bg-yellow-700 text-gray-200 py-1 px-2 rounded-md">Premium</span>
            <?php 
}

?>
            <span class=" text-gray-700">Version:</span> <span class=" text-gray-800">1.8.4</span>
        </div>
    </div>
</div>
<div  class=" mt-5 flex w-full p-5 -pl-5 flex-row">
    <div class=" w-3/4 mr-2 shadow-sm p-4 rounded-sm bg-white">
    
        <div class="bg-white">
            <nav class="flex flex-col sm:flex-row">
                <button onclick="switchtab('#primarysettings')" id="primarysettingsbtn" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none text-blue-500 border-b-2 border-blue-500 font-medium ">
                    Primary Settings
                </button>

                <button onclick="switchtab('#advancedsettings')" id="advancedsettingsbtn" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    Advanced Settings
                </button>
                <button id="morestuffbtn" onclick="switchtab('#morestuff')" class="text-gray-600 text-lg py-4 px-6 block hover:text-blue-500 focus:outline-none">
                    More Stuff
                </button>
            </nav>
        </div>
        <!-- content -->
        <div class="p-5">
            
            <div  id="primarysettings">
                <form method="post" action="<?php 
echo  $action_url ;
?>">
					<input type="hidden" name="submitted" value="1" />
					<?php 
echo  wp_nonce_field( 'acc_nonce_wpmdr', 'acc_nonce_field_wpmdr' ) ;
?>
                    <label class="mt-4 block text-lg text-gray-900">Remove from homepage</label>
                    <p class="mt-2 mb-2 text-gray-700">Your dates and other meta data will be hidden from home page</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="wpmdr_from_home" <?php 
echo  ( get_option( 'wpmdr_from_' )['home'] == "1" ? 'checked="checked"' : '' ) ;
?> value="1">
                        <span class="ml-2">Yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="wpmdr_from_home"  <?php 
echo  ( get_option( 'wpmdr_from_' )['home'] == "0" ? 'checked="checked"' : '' ) ;
?> value="0">
                        <span class="ml-2">No</span>
                    </label>


                    <label class="mt-8 block text-lg text-gray-900">CSS based removal</label>
                    <p class="mt-2 mb-2 text-gray-700">Plugin will insert CSS code into the pages to hide any unwanted information</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" <?php 
echo  ( get_option( 'wpmdr_disable_css' ) == "0" ? 'checked="checked"' : '' ) ;
?>  name="wpmdr_disable_css" value="0">
                        <span class="ml-2">Enable</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" <?php 
echo  ( get_option( 'wpmdr_disable_css' ) == "1" ? 'checked="checked"' : '' ) ;
?>  name="wpmdr_disable_css" value="1">
                        <span class="ml-2">Disable</span>
                    </label>

                    <textarea name="wpmdr_css" placeholder="Insert your css code here" class=" w-full block p-2 mt-5 bg-gray-300 text-gray-800 h-24"><?php 
echo  get_option( 'wpmdr_css' ) ;
?></textarea>
                    <a href="https://bit.ly/WPFiverr" target="_blank" class="bg-gray-700 hover:text-white hover:shadow-lg mt-1 rounded-sm text-gray-200 p-1">Get help to setup this</a>

                    <label class="mt-8 block text-lg text-gray-900">PHP based removal</label>
                    <p class="mt-2 mb-2 text-gray-700">Plugin will apply php code in backend to prevent dates being added in HTML</p>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" <?php 
echo  ( get_option( 'wpmdr_disable_php' ) == "0" ? 'checked="checked"' : '' ) ;
?> name="wpmdr_disable_php" value="0">
                        <span class="ml-2">Enable</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" <?php 
echo  ( get_option( 'wpmdr_disable_php' ) == "1" ? 'checked="checked"' : '' ) ;
?> name="wpmdr_disable_php" value="1">
                        <span class="ml-2">Disable</span>
                    </label>

                    <button class="py-2 mt-5 right rounded-md shadow-sm block px-4 bg-gray-800 text-gray-100">Save Changes</button>
                </form>
            </div>

            <div style="display:none" id="advancedsettings">
                <?php 
?>
                <!--- marketing content -->
                <?php 

if ( wmadr_fs()->is_not_paying() ) {
    ?>
                <div  class="w-full flex flex-col">
                    <span class="text-2xl m-auto m-5 mt-10 mb-8  text-gray-600 font-medium">Upgrade to premium to unlock all</span>
                    <div class="flex flex-row">
                            <div class="  flex flex-col justify-center w-1/3 p-8">
                                <span class="mb-4 text-lg font-medium text-gray-700">Individual post setting</span>
                                <img class="mr-16" style="height:180px" src="<?php 
    echo  plugin_dir_url( __FILE__ ) . '/img/post_single.svg' ;
    ?>" />
                                <p class="mt-4 text-base text-gray-800">Control Meta and Date for individual post</p>
                            </div>
                            <div class="flex flex-col justify-center w-1/3 p-8">
                                <span class="mb-8 text-lg font-medium text-gray-700">Category wise control</span>
                                <img src="<?php 
    echo  plugin_dir_url( __FILE__ ) . '/img/category.svg' ;
    ?>" />
                                <p class="mt-4 text-base text-gray-800">Choose categories to exclude for removing the meta data and date</p>
                            </div>
                            <div class="flex flex-col justify-center w-1/3 p-8">
                                <span class="mb-4 text-lg font-medium text-gray-700">Custom Post Type</span>
                                <img src="<?php 
    echo  plugin_dir_url( __FILE__ ) . '/img/post_type.svg' ;
    ?>" />
                                <p class="mt-4 text-base text-gray-800">Choose post types which should be targeted by plugin</p>
                            </div>
                    </div>

                    <div class="flex w-full justify-center flex-row ">
                            <a class="py-3 flex flex-row text-lg align-middle hover:text-gray-100 shadow-md rounded-md px-10 bg-yellow-700 text-gray-100" href="<?php 
    echo  wmadr_fs()->get_upgrade_url() ;
    ?>">
                                <svg class="mr-2" style="fill:white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg> 
                                Upgrade now
                            </a>
                    </div>

                </div>
                <?php 
}

?>
                <!--marketing content end -->

            </div>

            <div style="display:none"  class=" flex justify-center  flex-col" id="morestuff">
                <span class="text-2xl m-auto m-5  mt-10  text-gray-600 font-medium">Free SSL certificate for your site</span>
                <div class=" flex flex-col justify-center p-8">
                    <img style="height:400px" src="<?php 
echo  plugin_dir_url( __FILE__ ) . '/img/security.svg' ;
?>">
                </div>
                <p class="m-4 w-full text-center text-base text-gray-600">We have created plugin to make your site secure.<br>Click on button below to install plugin automatically and then your are ready to get your free SSL certificate</p>
                
                <div class="flex w-full justify-center flex-row ">
                        <?php 

if ( !is_plugin_active( 'wp-free-ssl/wp-free-ssl.php' ) ) {
    ?> 
                            
                            <form method="post" action="<?php 
    echo  $action_url ;
    ?>" >
                                <input type="hidden" name="install_ssl" value="1" />
                                <?php 
    echo  wp_nonce_field( 'acc_nonce_install_ssl', 'acc_nonce_field_wpmdr' ) ;
    ?>
                        
                            
                                <button class="py-4 flex flex-row text-lg align-middle hover:text-gray-100 shadow-md rounded-md px-5 bg-green-700 text-gray-100" type="submit">
                                    <svg style="fill:white" class="mr-2" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M8 11h-6v10h20v-10h-6v-2h8v14h-24v-14h8v2zm5 2h4l-5 6-5-6h4v-12h2v12z"/></svg>
                                    Install plugin now (Official source)
                                </button>
                            </form>
                        <?php 
} else {
    ?>
                            <a class="py-4 flex flex-row text-lg align-middle hover:text-gray-100 shadow-md rounded-md px-5 bg-green-700 text-gray-100" href="<?php 
    menu_page_url( 'certificate', true );
    ?>">
                                Goto WP Free SSL
                            </a>
                        <?php 
}

?>
                </div>  
            </div>

        </div>


    
    </div>
    <div class=" w-1/4 p-4 shadow-sm flex flex-col justify-center rounded-sm bg-white">
        <?php 

if ( wmadr_fs()->is_not_paying() ) {
    ?>
        <div class="mb-8" >
            <img src="<?php 
    echo  plugin_dir_url( __FILE__ ) . '/img/upgrade.svg' ;
    ?>" />
            <a href="<?php 
    echo  wmadr_fs()->get_upgrade_url() ;
    ?>" class="py-3 mt-2 flex flex-row justify-center text-lg align-middle  rounded-md shadow-sm block px-5 w-full text-gray-200 bg-yellow-600">
                <svg class="mr-2" style="fill:white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg>                 
                <span class="text-bold text-white">Upgrade Plugin</span>
            </a>
        </div>
        <?php 
}

?>
        <span class="  text-2xl text-gray-800">Extra</span>
        <div class="flex mt-4 ">
            <a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/wp-meta-and-date-remover?rate=5#postform" class="py-2  text-center hover:text-white rounded-md shadow-sm block px-4 w-1/2 mr-1 bg-green-700 text-gray-100">Vote Up</a>
            <a target="_blank" href="http://bit.ly/PKDonate" class="py-2  text-center hover:text-white rounded-md shadow-sm block px-4 w-1/2 bg-purple-700 text-gray-100">Donate</a>
        
        </div>
        <div class="flex mt-2">
            <a target="_blank" href="https://track.fiverr.com/visit/?bta=102069&brand=fiverrcpa&landingPage=https%3A%2F%2Fwww.fiverr.com%2Fprasadkirpekar%2Fdevelop-custom-feature-plugin-for-your-wordpress-site" class="py-2 text-center hover:text-white  rounded-md shadow-sm block px-4 w-full mr-1 bg-blue-700 text-gray-100">Make Plugin</a>
            <a target="_blank" href="https://bit.ly/WPFiverr" class="py-2 text-center hover:text-white rounded-md shadow-sm block px-4 w-full bg-gray-800 text-gray-100">Support</a>

        </div>
        <p class="mt-2 text-gray-600">(My own affiliate links. No third party service)</p>

        
        
    </div>
</div>
<script>
    var tab_list = ['#primarysettings','#advancedsettings','#morestuff']
    
    function switchtab(tab){
        for (let i = 0; i < tab_list.length; i++) {
            const element = tab_list[i];
            if(tab==element){
                jQuery(tab).show()
                jQuery(tab+'btn').addClass('border-b-2')
                jQuery(tab+'btn').addClass('border-blue-500')  
                jQuery(tab+'btn').addClass('text-blue-500')  
                jQuery(tab+'btn').addClass('font-medium')  
                
            }
            else{
                jQuery(element).hide()
                jQuery(element+'btn').removeClass('border-b-2')
                jQuery(element+'btn').removeClass('border-blue-500') 
                jQuery(element+'btn').removeClass('text-blue-500')  
                jQuery(element+'btn').removeClass('font-medium')   
            }
        }
    }
</script>
