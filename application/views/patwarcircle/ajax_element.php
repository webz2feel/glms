         <?php 
						  switch($type)
						  {
					        case 'division':
						  {
					?>
                          <option value=""> Select District Circle</option>
                           <?php
						   foreach($district_list as $qg_list) 
						    {
						    ?>
                            <option value="<?php echo $qg_list->district_id; ?>"><?php echo $qg_list->district_name; ?></option>
                           <?php 
						 
						     }
							   break;
						  }
                                                  ?>
                            <?php
					        case 'subdiv':
						  {
					?>
                          <option value=""> Select Tehsil Circle</option>
                           <?php
						   foreach($subdiv_list as $qg_list) 
						    {
						    ?>
                            <option value="<?php echo $qg_list->tehsil_id; ?>"><?php echo $qg_list->tehsil_name; ?></option>
                           <?php 
						 
						     }
							   break;
						  }
                                                  
                                                  
                                                  ?>
                            <?php
					        case 'qgcircle':
						  {
					?>
                          <option value=""> Select Qanungoi Circle</option>
                           <?php   
                           
                           
						   foreach($main1 as $qg_list) 
						    {
						    ?>
                            <option value="<?php echo $qg_list->q_id; ?>"><?php echo $qg_list->q_circle; ?></option>
                           <?php 
						 
						     }
							   break;
						  }
                                                 
                                                  }
                                                    ?>
                                                 
						   

