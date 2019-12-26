<!DOCTYPE html>
<html>
<head>
	<title>yes</title>
	<style>
		.solid {
		    border-style: solid;
		    position: absolute;
		    top: 400px;
		}

		.dotted {
		    border-style: dotted;
		}

		.none {
		    border-style: none;
		}

	</style>
</head>
<body>
	<?php
	$html='<style>

			*{
			    box-sizing : border-box;
			    font-family: "Open Sans";
			}

			.row::after {
			    content: "";
			    display: block;
			    clear: both;
			}

			.row{
			    width: 100%;
			    height: auto;
			    margin-right: 0px; 
			    margin-left: 0px;
			    display: block; 
			    border-top-left-radius: 5px;
			    border-top-right-radius: 5px;
			    border: solid 1px black;
			}
			.col{
				height:auto;
			    float: left;
			    border: solid 1px green;
			    display:block;
			}

			.dp-col{
				width:20%;
			}
			.col1{
				width:80%;
			}
			.title{
				width:40%;
			}
			.activity{
				width:55%;
			}
			.phd{
				border:3 px solid red;
			}
			

		   </style>
			<div class="row">
                    <div class="col col1">
                        <h2>'.$name.'</h2>
                        <span class="grey">'.$email.'<br></span>
                        <span class="grey">'.$phone.'<br></span>
                        <span class="grey">'.$place.'</span>
                    </div>
                    <div class="col dp-col">
                        <img class="dp" src='.$image.'style="height:50px;width:50px;">
                    </div>
            </div>
            <div class="row education">
            	<div class="col title">
            		<h3>Education</h3>
            	</div>
            	<div class="col activity">
	            	<div class="col phd">
            			<h5 class="fetched-head"> 
                       PhD,'.$str_phd.'
                        ('.$str_yr_phd.'-'.$end_yr_phd.')
                        </h5>
                    	<div>
	                        '.$clg_phd.'   
	                    </div>
						<div>
	                         SGPA: '.$prf_scl_phd.'/'.
	                        $prf_mrk_phd.'         
	                    </div>
                	</div>

                	<div class="row post-grad">
            			<h5 class="fetched-head"> 
                       '.$deg_pg.','.$str_pg.'
                        ('.$str_yr_pg.'-'.$end_yr_pg.')
                        </h5>
                    	<div>
	                        '.$clg_pg.'   
	                    </div>
						<div>
	                         SGPA: '.$prf_scl_pg.'/'.
	                        $prf_mrk_pg.'         
	                    </div>
                	</div>

                	<div class="row grad">
            			<h5 class="fetched-head"> 
                       '.$deg.','.$str.'
                        ('.$str_yr.'-'.$end_yr.')
                        </h5>
                    	<div>
	                        '.$clg.'   
	                    </div>
						<div>
	                         SGPA: '.$prf_scl.'/'.
	                        $prf_mrk.'         
	                    </div>
                	</div>

                	<div class=" row ss">
            			<h5 class="fetched-head"> 
                        XII (Senior Secondary),'.$str_ss.'<br></h5>
                            Year of Completion:'.$end_yr_ss'
                    	<div>
	                        '.$board_ss.'Board('.$scl_ss.')   
	                    </div>
						<div>
	                         SGPA:'.$prf_scl_ss.'/'.$prf_mrk_ss.'        
	                    </div>
                	</div>

            	</div>
            </div>
            ';
    echo $html;
    ?>

</div>
</body>
</html>