		<footer>
            <section id="foot-lists">
                <ul>
                    <li class="list-title"><h3>Easy Get</h3></li>
                    <li><a href="#">Buy Product</a></li>
                    <li><a href="#">How to Sell</a></li>
                    <li><a href="#">Start Selling</a></li>
                </ul>
                <ul>
                    <li class="list-title"><h3>About Us</h3></li>
                    <li><a href="#">Our Company</a></li>
                    <li><a href="#">Our partners</a></li>
                    <li><a href="#">Our stories</a></li>
                </ul>
                <ul>
                    <li class="list-title"><h3>Help</h3></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Help Me Guides</a></li>
                    <li><a href="#">Contact Us</a></li>
				</ul>
				<ul>
                    <li class="list-title"><h3>Share</h3></li>
                    <li><div class="fb-share-button" data-href="https://infs3202-0e36cf93.uqcloud.net/CI/home/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfs3202-0e36cf93.uqcloud.net%2FCI%2Fhome%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
                    <li><div class="fb-share-button" data-href="https://infs3202-0e36cf93.uqcloud.net/CI/home/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfs3202-0e36cf93.uqcloud.net%2FCI%2Fhome%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
                    <li><div class="fb-share-button" data-href="https://infs3202-0e36cf93.uqcloud.net/CI/home/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfs3202-0e36cf93.uqcloud.net%2FCI%2Fhome%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
                </ul>
			</section>
            
			<p id="copyright">© Copyright 2020 EasyGet. All rights reserved. <a href="#">Terms of Use</a>, <a href="#">Privacy Notice</a> & <a href="#">Cookies Policy</a>.</p>
            
            
            
        </footer>
		
		<script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
    	<script src="<?php echo base_url('js/script.js');?>"></script>

        <!-- Search ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- jQuery UI -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                $( "#search" ).autocomplete({
                    source: function( request, response ) {
                      // Fetch data
                      $.ajax({
                        url: '<?php echo base_url() . "search/"?>',
                        type: 'get',
                        dataType: "json",
                        data: {
                          search: $("#search").val()
                        },
                        success: function( data ) {
                          response( data );
                        }
                      });
                    },
                    select: function (event, ui) {
                      $('#search').val(ui.item.label); 
                      return false;
                    }
                  });
            });
        </script>
        
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0"></script>

        
        
	</body>
</html>