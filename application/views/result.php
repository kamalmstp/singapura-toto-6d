
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="robots" content="index,follow" />
        <meta name="author" content="toto" />          
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css.css');?>" />
        <title>Toto Singapura 6D</title>
        <style type="text/css">
            
    h1{
        font-size: 48px !important;
        font-weight: bold !important;
        color: #FFD700;
        text-shadow: 2px 2px 2px #333;
        user-select: all;
    }
        </style>
    </head>
    <body>
        <div class="container">
            <div id="header">
            <h1><span class="blinkrainbow">
                WWW.TOTOSINGAPURA6D.COM
                </span></h1>
            </div><style type="text/css">
	#cssmenu a{
		background: #000 !important;
	}
	.pulse{
		animation: pulse 1s infinite;
		z-index: 9999;
		transition: 0.2s;
		font-weight: bolder;
	}
	.pulse:hover{
		animation: none !important;
		color: #FFD700 !important;
	}
	@-webkit-keyframes pulse {
	  0% {
	    -webkit-box-shadow: 0 0 0 0 rgba(218,165,32, 0.8);
	    color: #FFF;
	    z-index: 9999;
	  }
	  50% {
	      -webkit-box-shadow: 0 0 0 20px rgba(255,215,0, 0);
	      color: #FFA500;
	      z-index: 9999;
	  }
	  100% {
	      -webkit-box-shadow: 0 0 0 0 rgba(218,165,32, 0);
	      color: #FFFFFF;
	      z-index: 9999;
	  }
	}
	@keyframes pulse {
	  0% {
	    -moz-box-shadow: 0 0 0 0 rgba(218,165,32, 0.8);
	    box-shadow: 0 0 0 0 rgba(218,165,32, 0.8);
	    color: #FFFFFF;
	    z-index: 9999;
	  }
	  50% {
	      -moz-box-shadow: 0 0 0 20px rgba(255,215,0, 0);
	      box-shadow: 0 0 0 10px rgba(255,215,0, 0);
	      color: #FFA500;
	      z-index: 9999;
	  }
	  100% {
	      -moz-box-shadow: 0 0 0 0 rgba(218,165,32, 0);
	      box-shadow: 0 0 0 0 rgba(218,165,32, 0);
	      color: #FFFFFF;
	      z-index: 9999;
	  }
	}
</style>
<style>
@keyframes blinkrainbow{
0%{color:#FF0000}
14%{color:#FF7F00}
28%{color:#FFFF00}
42%{color:#00FF00}
56%{color: #0000FF}
70%{color:#4B0082}
84%{color:#8B00FF}
100%{color:#FF0000}
}
@-webkit-keyframes blinkrainbow{
0%{color:#FF0000}
14%{color:#FF7F00}
28%{color:#FFFF00}
42%{color:#00FF00}
56%{color: #0000FF}
70%{color:#4B0082}
84%{color:#8B00FF}
100%{color:#FF0000}
}
.blinkrainbow{
-webkit-animation:blinkrainbow 2s linear infinite;
-moz-animation:blinkrainbow 2s linear infinite;
animation:blinkrainbow 2s linear infinite
}
</style>
<div id="cssmenu" style="min-width: 200px;">
    <ul>
    	<!-- <li><a href="http://www.singapore49toto.com/"><span>HOME</span></a></li> -->
        <li><a href="<?php echo site_url(); ?>"><span>HOME</span></a></li>
        <li><a href="<?php echo site_url('result'); ?>"><span>RESULT</span></a></li>
        <li><a href="<?php echo site_url('history'); ?>"><span>HISTORY</span></a></li>
    </ul>
<br />
</div>

<style type="text/css">
    h1{
        font-size: 48px !important;
        font-weight: bold !important;
    }
    .table-history{
        border-collapse: separate !important;
    }
    td{
        max-height: 30px;
        min-width: 30px;
        min-height: 30px;
        width: 30px;
        height: 30px;
        padding: 5px !important;
        font-size: 24px !important;
        font-weight: bold !important;
    }
    .tgl{
        width: max-content !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
        font-size: 18px !important;
        text-align: left !important;
    }
</style>
<div class="div-history">
    <h1>RESULT</h1>
    <div style="margin-top:10px;">
        <table class="table-history">
            <thead>
                <tr>
                    <th>Date</th>
                    <th colspan="4">Result</th>
                </tr>
            </thead>
            <?php foreach($result as $row): ?>
                <tr>
                    <td class="tgl"><?=$row['hari'].", ".$row['tgl']." ".$row['bulan']." ".$row['tahun'];?></td>
                    <!-- <td>1</td><td>5</td><td>8</td><td>5</td> -->
                    <td><?=$row['result'];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>