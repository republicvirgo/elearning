<?php
if(isset($vdo)) {
				$vid=mysql_fetch_assoc($vdo);
				echo "<h2>".$vid['course_name']."</h2>";
				$chk = $this->dashboard_model->check_quiz($vid['course_id']);
                 echo "<h2>".$vid['course_name'];
				 if($chk){
				 echo " (1/2)";
				 }
				 else echo " (1/1)";
				 echo "</h2>";
				?>  
				<script type='text/javascript' src='<?php echo base_url();?>jwplayer/jwplayer.js'></script>
                    <div id='mediaplayer'></div>
                    
                    <script type="text/javascript">
                    
                    jwplayer('mediaplayer').setup({
                    
                    'flashplayer': '<?php echo base_url();?>jwplayer/player.swf',
                    
                    'id': 'playerID',
                    
                    'width': '0',
                    
                    'height': '0',
                    
                    'file': '<?php echo base_url();?>course_content/<?php echo $this->uri->segment(3);?>'
                    
                    });
        
      </script>
    		<script type="text/javascript">
    var file = <?php echo base_url();?>course_content/<?php echo $this->uri->segment(3);?>;
    document.getElementById('mediaplayer').innerHTML = '<object type="application/x-shockwave-flash" data="<?php echo base_url();?>jwplayer/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer" name="mediaplayer" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=file%3A%2F%2F%2Fhome%2Faeby%2Fworkspace%2Fatws%2Ftest.html&amp;id=mediaplayer&amp;file=' + file + '&amp;image=preview.jpg&amp;controlbar.position=over"></object>';
</script>
      		
            	<embed
                      flashvars="file=<?php echo base_url();?>course_content/<?php echo $this->uri->segment(3);?>&autostart=true"
                      allowfullscreen="true"
                      allowscripaccess="always"
                      id="player1"
                      name="player1"
                      src="<?php echo base_url();?>jwplayer/player.swf"
                      width="853"
                      height="480"
                    />
                    </embed>
                    <br /><br /><br />
                    <button onclick="javascript:history.go(-1);" class="btn">Go back</button>
				<?php
				//$vid=mysql_fetch_assoc($vdo);
                 //$check = $this->dashboard_model->check_quiz($vid['course_id']);
                 if($chk)
                {
                    ?>
                    <a href="<?php echo base_url()."quiz/attempt/".$vid['course_id'];?>" class="btn btn-success">Next</a>
                    <?php
                }
				
				else
				{
					?>
                    <a href="<?php echo base_url()."next/success/".$vid['course_id'];?>" class="btn btn-success">Next</a>
                    <?php	
				}
			}
			
			?>